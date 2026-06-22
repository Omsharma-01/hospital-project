<?php
// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Appointment;
use App\Models\Ambulance;
use App\Models\BookAmbulance;
use App\Models\Doctor;
use App\Models\Hospital;

use App\Models\Patient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    /**
     * Middleware to ensure user is authenticated
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Patient Dashboard
     */
    public function dashboard()
    {
        $user = Auth::user();
        
        // Get patient record
        $patient = Patient::where('user_id', $user->id)->first();
        $patientId = $patient ? $patient->id : null;
        
        // Get statistics from appointment table
        $totalAppointments = Appointment::where('patient_id', $patientId)->count();
        $upcomingAppointments = Appointment::where('patient_id', $patientId)
            ->where('status', 1) // 1 = confirmed
            ->whereDate('appointment_date', '>=', now())
            ->count();
        
        // Get statistics from Book_ambulance table
        $totalAmbulances = BookAmbulance::where('user_id', $user->id)->count();
        $pendingAmbulances = BookAmbulance::where('user_id', $user->id)
            ->where('status', 'pending')
            ->count();
        
        // Get recent appointments with doctor details
        $recentAppointments = Appointment::where('patient_id', $patientId)
            ->with('doctor') // Make sure Doctor model has relationship
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();
        
        // Get recent ambulance requests
        $recentAmbulances = BookAmbulance::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        
        // Get recent activity
        $recentActivity = collect();
        
        $appointments = Appointment::where('patient_id', $patientId)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get()
            ->map(function($item) {
                return [
                    'type' => 'appointment',
                    'title' => 'Appointment with ' . ($item->doctor->doctor_name ?? 'Doctor'),
                    'time' => $item->created_at->diffForHumans(),
                    'icon' => 'bi-calendar-check',
                    'bg' => 'pink-bg'
                ];
            });
        
        $ambulances = BookAmbulance::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get()
            ->map(function($item) {
                return [
                    'type' => 'ambulance',
                    'title' => 'Ambulance to ' . $item->drop_location,
                    'time' => $item->created_at->diffForHumans(),
                    'icon' => 'bi-ambulance',
                    'bg' => 'green-bg'
                ];
            });
        
        $recentActivity = $appointments->concat($ambulances)->sortByDesc('time')->take(3);
        
        return view('patient.dashboard', compact(
            'user',
            'patient',
            'totalAppointments',
            'upcomingAppointments',
            'totalAmbulances',
            'pendingAmbulances',
            'recentAppointments',
            'recentAmbulances',
            'recentActivity'
        ));
    }

    /**
     * Patient Profile - Show
     */
    public function profile()
    {
        $user = Auth::user();
        $patient = Patient::where('user_id', $user->id)->first();
        return view('patient.profile', compact('user', 'patient'));
    }

    /**
     * Patient Profile - Update
     */
    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $patient = Patient::where('user_id', $user->id)->first();
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone_number' => 'nullable|string|max:20',
            'age' => 'nullable|integer',
            'gender' => 'nullable|string|in:male,female,other',
            'blood_group' => 'nullable|string|max:5',
            'address' => 'nullable|string|max:500',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        // Update User
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        
        // Update Patient record
        if ($patient) {
            $patient->update([
                'patient_name' => $request->name,
                'age' => $request->age,
                'gender' => $request->gender,
                'blood_group' => $request->blood_group,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
            ]);
        } else {
            // Create patient record if doesn't exist
            Patient::create([
                'user_id' => $user->id,
                'patient_name' => $request->name,
                'age' => $request->age,
                'gender' => $request->gender,
                'blood_group' => $request->blood_group,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'status' => 1,
            ]);
        }
        
        return redirect()->back()->with('success', 'Profile updated successfully!');
    }

    /**
     * Patient Profile - Change Password
     */
    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $user = Auth::user();
        
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }
        
        $user->password = Hash::make($request->new_password);
        $user->save();
        
        return redirect()->back()->with('success', 'Password changed successfully!');
    }

    /**
     * Appointments - List
     */
    public function appointments(Request $request)
    {
        $user = Auth::user();
        $patient = Patient::where('user_id', $user->id)->first();
        $patientId = $patient ? $patient->id : null;
        
        $query = Appointment::where('patient_id', $patientId)->with('doctor', 'hospital');
        
        // Filter by status
        if ($request->has('status') && $request->status != '') {
            $query->where('status', $request->status);
        }
        
        // Search by doctor name
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->whereHas('doctor', function($q) use ($search) {
                $q->where('doctor_name', 'LIKE', "%{$search}%")
                  ->orWhere('specialization', 'LIKE', "%{$search}%");
            });
        }
        
        $appointments = $query->orderBy('appointment_date', 'desc')->paginate(8);
        
        // Get doctors for appointment booking modal
        $doctors = Doctor::where('status', 1)->get();
        $hospitals = Hospital::where('status', 1)->get();

        
        return view('patient.appointments', compact('appointments', 'doctors', 'patient', 'hospitals'));
    }

    /**
     * Appointments - Store (Book New)
     */
    public function storeAppointment(Request $request)
    {
        $user = Auth::user();
        
        $validator = Validator::make($request->all(), [
            'doctor_id' => 'required|exists:doctors,id',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required|string',
            'reason' => 'nullable|string|max:500',
            'patient_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'age' => 'required|integer',
            'gender' => 'required|string',
            'blood_group' => 'nullable|string',
            'address' => 'nullable|string',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        // Create or update patient record
        $patient = Patient::where('user_id', $user->id)->first();
        
        if ($patient) {
            $patient->update([
                'patient_name' => $request->patient_name,
                'age' => $request->age,
                'gender' => $request->gender,
                'blood_group' => $request->blood_group,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'assigned_doctor' => $request->doctor_id,
                'status' => 1,
            ]);
            $patientId = $patient->id;
        } else {
            $patient = Patient::create([
                'user_id' => $user->id,
                'patient_name' => $request->patient_name,
                'age' => $request->age,
                'gender' => $request->gender,
                'blood_group' => $request->blood_group,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'assigned_doctor' => $request->doctor_id,
                'status' => 1,
            ]);
            $patientId = $patient->id;
        }
        
        // Create appointment
        Appointment::create([
            'patient_name' => $request->patient_name,
            'patient_id' => $patientId,
            'doctor_id' => $request->doctor_id,
            'appointment_date' => $request->appointment_date,
            'appointment_time' => $request->appointment_time,
            'hospital_id' => $request->hospital_id,
            'reason' => $request->reason,
            'status' => 0, // 0 = pending
        ]);
        
        return redirect()->route('patient.appointments')
            ->with('success', 'Appointment booked successfully! Waiting for confirmation.');
    }

    /**
     * Appointments - Cancel
     */
    public function cancelAppointment($id)
    {
        // dump($id);
        // dump(Auth::id());
             $patientId = Patient::where('user_id', Auth::id())
            ->first();
            
            // dump($user_id->id);
        $appointment = Appointment::where('id', $id)
            ->where('patient_id', $patientId->id)
            ->first();

        // dump($appointment);

        
        if (!$appointment) {
            return redirect()->back()->with('error', 'Appointment not found.');
        }
        
        $appointment->status = 3; // 3 = cancelled
        $appointment->save();
        
        return redirect()->back()->with('success', 'Appointment cancelled successfully.');
    }

    /**
     * Ambulance - List
     */
    public function ambulances(Request $request)
    {
        $user = Auth::user();
        
        $query = BookAmbulance::where('user_id', $user->id);
        
        // Filter by status
        if ($request->has('status') && $request->status != '') {
            $query->where('status', $request->status);
        }
        
        // Search by location
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('pickup_location', 'LIKE', "%{$search}%")
                  ->orWhere('drop_location', 'LIKE', "%{$search}%")
                  ->orWhere('full_name', 'LIKE', "%{$search}%");
            });
        }
        
        $ambulances = $query->orderBy('created_at', 'desc')->paginate(6);
        
        return view('patient.ambulance', compact('ambulances'));
    }

    /**
     * Ambulance - Store (Book New)
     */
    public function storeAmbulance(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'mobile_no' => 'required|string|max:20',
            'pickup_location' => 'required|string|max:500',
            'drop_location' => 'required|string|max:500',
            'booking_date' => 'required|date',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $ambulance = BookAmbulance::create([
            'user_id' => Auth::id(),
            'full_name' => $request->full_name,
            'mobile_no' => $request->mobile_no,
            'pickup_location' => $request->pickup_location,
            'drop_location' => $request->drop_location,
            'booking_date' => $request->booking_date,
            'last_update' => now(),
            'status' => 'pending',
        ]);
        
        return redirect()->route('patient.ambulance')
            ->with('success', 'Ambulance booked successfully! We will contact you shortly.');
    }

    /**
     * Ambulance - Cancel
     */
    public function cancelAmbulance($id)
    {
        $ambulance = BookAmbulance::where('id', $id)
            ->where('user_id', Auth::id())
            ->first();
        
        if (!$ambulance) {
            return redirect()->back()->with('error', 'Ambulance request not found.');
        }
        
        if ($ambulance->status == 'completed' || $ambulance->status == 'in-transit') {
            return redirect()->back()->with('error', 'Cannot cancel this ambulance request.');
        }
        
        $ambulance->status = 'cancelled';
        $ambulance->save();
        
        return redirect()->back()->with('success', 'Ambulance request cancelled successfully.');
    }

    /**
     * Get Doctors by Department (AJAX)
     */
    public function getDoctorsByDepartment(Request $request)
    {
        $doctors = Doctor::where('specialization', 'LIKE', "%{$request->department}%")
            ->where('status', 1)
            ->get();
        return response()->json($doctors);
    }

    /**
     * Get Available Time Slots (AJAX)
     */
    public function getAvailableSlots(Request $request)
    {
        $doctorId = $request->doctor_id;
        $date = $request->date;
        
        // Get booked slots for this doctor on this date
        $bookedSlots = Appointment::where('doctor_id', $doctorId)
            ->where('appointment_date', $date)
            ->where('status', '!=', 3) // Not cancelled
            ->pluck('appointment_time')
            ->toArray();
        
        // All available time slots
        $allSlots = [
            '09:00', '09:30', '10:00', '10:30', '11:00', '11:30',
            '12:00', '14:00', '14:30', '15:00', '15:30', '16:00', '16:30'
        ];
        
        $availableSlots = array_diff($allSlots, $bookedSlots);
        
        return response()->json($availableSlots);
    }
}