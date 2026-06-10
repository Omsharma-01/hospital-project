 @extends('admin.layout.adminlayout')
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
                             <h4 class="card-title">Patient List</h4>
                             </p>
                             <div class="table-responsive">
                                 <table class="table">
                                     <thead>
                                         <tr>
                                             <th>id</th>
                                             <th>Patient Name.</th>
                                             <th>Age</th>
                                             <th>Gender</th>
                                             <th>Phone Number</th>
                                             <th>Boold Group</th>
                                             <th>Address</th>
                                             <th>Assigned Doctor</th>
                                             <th>Status</th>
                                             <th>Action</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                      <?php $i=1; ?>
                                         @foreach ($data as $row)
                                             <tr>
                                                 <td>{{$i++}}</td>
                                                 <td>{{$row->patient_name}}</td>
                                                 <td>{{$row->age}}</td>
                                                 <td>{{$row->gender}}</td>
                                                 <td>{{$row->phone_number}}</td>
                                                 <td>{{$row->boold_group}}</td>
                                                 <td>{{$row->address}}</td>
                                                 <td>{{$row->assigned_doctor}}</td>
                                                 <td>{{$row->status=== 1 ? 'Active ' : 'Inactive '}}</td>
                                                 <td class="d-flex">

                                                     <a class="btn btn-info m-1" href='/admin/patient/view/{{ $row->id }}'>View</a>
                                                     <a class="btn btn-warning m-1" href="/admin/patient/edit/{{ $row->id }}">Edit</a>
                                                     <form action="{{ route('patient.delete', $row->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-danger m-1"
                                                            onclick="return confirm('Are you sure you want to delete?')">
                                                            Delete
                                                        </button>
                                                    </form>
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
         <!-- content-wrapper ends -->

         <!-- partial -->
     </div>
 @endsection