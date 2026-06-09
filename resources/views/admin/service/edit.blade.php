@extends('admin.layout.adminlayout')
 @section('content')
 <div class="main-panel">
     <div class="content-wrapper">
         <div class="row">
                 {{-- {{ dump($data) }} --}}
                 <div class="col-12 grid-margin stretch-card">
                     <div class="card">
                         <div class="card-body">
                             <h4 class="card-title">Edit service</h4>
                             <p class="card-description"> edit</p>
                             <form action="{{ route('service.update', $data->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">

                                 @csrf
                                   {{-- @method('PUT') --}}
                                 {{-- /secure key --}}

                                 <div class="form-group">
                                     <label for="exampleInputName1"> Service Name</label>
                                     <input type="text" name='service_name' class="form-control" id="exampleInputName1"
                                         placeholder="Name" value="{{ $data->service_name }}">
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleTextarea1">Description</label>
                                     <textarea name='description' class="form-control" id="exampleTextarea1" rows="4">{{$data->description}}</textarea>
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputEmail3">Price</label>
                                     <input type="text" name='price' value="{{ $data->price }}" class="form-control" id="exampleInputEmail3"
                                         placeholder="price ">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputCity1">Duration</label>
                                     <input type="text" name='duration' value="{{ $data->duration }}" class="form-control" id="exampleInputCity1"
                                         placeholder="duration">
                                 </div>
                                  <div class="form-group">
                                     <label for="exampleInputCity1">Category</label>
                                     <input type="text" name='category' value="{{ $data->category }}" class="form-control" id="exampleInputCity1"
                                         placeholder="category">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputCity1">File Upload</label>
                                     <input type="file" name='file_upload' class="form-control" id="exampleInputCity1"
                                         placeholder="file_upload">
                                         <img src="{{ asset('uploads/service/'.$data->file_upload) }}" width="100">

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