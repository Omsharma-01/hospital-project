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
                             <h4 class="card-title">Basic Table</h4>
                             <p class="card-description"> Add class <code>.table</code>
                             </p>
                             <div class="table-responsive">
                                 <table class="table">
                                     <thead>
                                         <tr>
                                             <th>id</th>
                                             <th>Name.</th>
                                             <th>Email</th>
                                             <th>Address</th>
                                             <th>City</th>
                                             <th>Pin code </th>
                                             <th>Status</th>
                                             <th>Action</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                      <?php $i=1; ?>
                                         @foreach ($data as $row)
                                             <tr>
                                                 <td>{{$i++}}</td>
                                                 <td>{{$row->name}}</td>
                                                 <td>{{$row->email}}</td>
                                                 <td>{{$row->address}}</td>
                                                 <td>{{$row->city}}</td>
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
         <!-- content-wrapper ends -->

         <!-- partial -->
     </div>
 @endsection
