@extends('admin.layout.adminlayout')
 @section('content')
 <div class="main-panel">
     <div class="content-wrapper">
         <div class="row">
                 {{-- {{ dump($data) }} --}}
                 <div class="col-12 grid-margin stretch-card">
                     <div class="card">
                         <div class="card-body">
                             <h4 class="card-title">Edit doctor</h4>
                             <p class="card-description"> edit</p>
                             <form action="{{ route('doctor.update', $data->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">

                                 @csrf
                                   {{-- @method('PUT') --}}
                                 {{-- /secure key --}}

                                 <div class="form-group">
                                     <label for="exampleInputName1"> Doctor Name</label>
                                     <input type="text" name='doctor_name' class="form-control" id="exampleInputName1"
                                         placeholder="Name" value="{{ $data->doctor_name }}">
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleTextarea1">Specialization</label>
                                     <textarea name='specialization' class="form-control" id="exampleTextarea1" rows="4">{{$data->specialization}}</textarea>
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputEmail3">Phone Number</label>
                                     <input type="text" name='phone' value="{{ $data->phone }}" class="form-control" id="exampleInputEmail3"
                                         placeholder="phone ">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputCity1">Email Address</label>
                                     <input type="email" name='email' value="{{ $data->email }}" class="form-control" id="exampleInputCity1"
                                         placeholder="email">
                                 </div>
                                  <div class="form-group">
                                     <label for="exampleInputCity1">Experience</label>
                                     <input type="text" name='experience' value="{{ $data->experience }}" class="form-control" id="exampleInputCity1"
                                         placeholder="experience">
                                 </div>
                                  <div class="form-group">
                                     <label for="exampleInputCity1">Fees</label>
                                     <input type="text" name='fees' value="{{ $data->fees }}" class="form-control" id="exampleInputCity1"
                                         placeholder="fees">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputCity1">File Upload</label>
                                     <input type="file" name='file_upload' class="form-control" id="exampleInputCity1"
                                         placeholder="file_upload">
                                         <img src="{{ asset('uploads/doctors/'.$data->file_upload) }}" width="100">

                                 </div>

                                
                                
                                 <div class="form-group">
                                     <label>status</label>

                                     <select name="status" class="form-control">
                                         <option value="1" >Active</option>
                                         <option value="0" >Inactive</option>
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
