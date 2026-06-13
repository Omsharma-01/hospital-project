 @extends('admin.layout.adminlayout')
 @section('content')
     <div class="main-panel">
         <div class="content-wrapper">
             <div class="row">
                 <div class="col-12 grid-margin stretch-card">
                     <div class="card">
                         <div class="card-body">
                             <h4 class="card-title">Appointment Booking</h4>
                             <p class="card-description"> Fill in the details to schedule your appointment. </p>
                             <form action="{{ route('appointment.store') }}" method="POST" class="forms-sample">

                                 @csrf
                                 {{-- /secure key --}}

                                 <div class="form-group">
                                     <label for="exampleInputName1"> Patient Name</label>
                                     <input type="text" name='patient_name' class="form-control" id="exampleInputName1"
                                         placeholder="Patient Name">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleTextarea1">Doctor_id</label>
                                    <select class="form-control" name="doctor_id">
                                        @foreach ($doctor as $row )
                                        <option value={{ $row->id }}>{{$row->doctor_name}}</option>
                                            
                                        @endforeach
                                    </select>
                                 </div>
                                 {{-- <div class="form-group">
                                     <label for="exampleTextarea1">patient </label>
                                    <select class="form-control" name="patient_id">
                                        @foreach ($patient as $row )
                                        <option value={{ $row->id }}>{{$row->patient_name}}</option>
                                            
                                        @endforeach
                                    </select>
                                 </div> --}}
                                 <div class="form-group">
                                     <label for="exampleInputEmail3">Appointment Date</label>
                                     <input type="date" name='appointment_date' class="form-control" id="exampleInputEmail3"
                                         placeholder="appointment date">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputCity1">Appointment Time</label>
                                     <input type="time" name='appointment_time' class="form-control" id="exampleInputCity1"
                                         placeholder="Appointment Time">
                                 </div>
                                  <div class="form-group">
                                     <label for="exampleInputName1"> Reason</label>
                                     <input type="text" name='reason' class="form-control" id="exampleInputName1"
                                         placeholder="Reason">
                                 </div>
                                 <div class="form-group">
                                     <label>status</label>

                                     <select name="status" class="form-control">
                                         <option value="1">Active</option>
                                         <option value="0">Inactive</option>
                                     </select>
                                 </div>


                                 <button type="submit" class="btn btn-primary me-2">Submit</button>
                                 <button class="btn btn-light">Cancel</button>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- content-wrapper ends -->
         <!-- partial:../../partials/_footer.html -->

         <!-- partial -->
     </div>
 @endsection