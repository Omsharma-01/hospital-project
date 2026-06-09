@extends('admin.layout.adminlayout')
 @section('content')
     <div class="main-panel">
         <div class="content-wrapper">
             <div class="row">
                 <div class="col-12 grid-margin stretch-card">
                     <div class="card">
                         <div class="card-body">
                             <h4 class="card-title">Service Details</h4>
                             <p class="card-description"> Fill in the service details below </p>
                             <form action="{{ route('service.store') }}" method="POST" class="forms-sample" enctype="multipart/form-data">

                                 @csrf
                                 {{-- /secure key --}}

                                 <div class="form-group">
                                     <label for="exampleInputName1"> Service Name</label>
                                     <input type="text" name='service_name' class="form-control" id="exampleInputName1"
                                         placeholder="Name">
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleTextarea1">Description</label>
                                     <textarea name='description' class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputEmail3">Price</label>
                                     <input type="text" name='price' class="form-control" id="exampleInputEmail3"
                                         placeholder="price ">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputCity1">Duration</label>
                                     <input type="text" name='duration' class="form-control" id="exampleInputCity1"
                                         placeholder="duration">
                                 </div>
                                  <div class="form-group">
                                     <label for="exampleInputCity1">Category</label>
                                     <input type="text" name='category' class="form-control" id="exampleInputCity1"
                                         placeholder="category">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputCity1">File Upload</label>
                                     <input type="file" name='file_upload' class="form-control" id="exampleInputCity1"
                                         placeholder="file_upload">
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