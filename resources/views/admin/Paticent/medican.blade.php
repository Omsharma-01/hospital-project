
 @extends('admin.layout.adminpatientlayout')
 @section('content')
     <div class="main-panel">

       
         <div class="content-wrapper">
             <div class="row">
                 @if (session('success'))
                     <div class="alert alert-success">
                         {{ session('success') }}
                     </div>
                 @endif
                 <div class="col-lg-12 grid-margin stretch-card">
                     <div class="card">
                         <div class="card-body">
                             <h4 class="card-title">Medical Records</h4>
                             <p class="card-description"> Add class <code>.table</code>
                             </p>
                             <div class="table-responsive">
                                 <table class="table">
                                     <thead>
                                         <tr>
                                            <th>id</th>
                                             <th>patient profile</th>
                                             <th>Appointments</th>
                                             <th>doctor</th>
                                             <th>Prescriptions</th>
                                             <th>Lab Tests</th>
                                             <th>Health records</th>
                                             <th>Notifications</th>
                                             <th>Logout</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                      <?php $i=1; ?>
                                         @foreach ($data as $row)
                                             <tr>
                                                 <td>{{$i++}}</td>
                                                 <td>{{$row->patient_name}}</td>
                                                 <td>{{$row->Appointment}}</td>
                                                 <td>{{$row->Doctor}}</td>
                                                 <td>{{$row->Prescription}}</td>
                                                 <td>{{$row->Lab_Test}}</td>
                                                 <td>{{$row->Heath_records}}</td>
                                                     <td>{{$row->Notification}}</td>
                                                 <td>{{$row->pin_code}}</td>
                                                 <td>{{$row->status=== 1 ? 'Active ' : 'Inactive '}}</td>
                                                 <td>

                                                     <a class="btn btn-info" href='/hospital/view/{{ $row->id }}'>View</a>
                                                     <a class="btn btn-warning">Edit</a>
                                                     <a class="btn btn-danger">Delete</a>
                                                 </td>

                                             </tr>
                                         @endforeach

                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>
         </div>