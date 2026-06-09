 @extends('admin.layout.adminlayout')
 @section('content')
     <div class="main-panel">
         <div class="content-wrapper">
             <div class="row">
                 <div class="col-12 grid-margin stretch-card">
                     <div class="card">
                         <div class="card-body">
                             <h4 class="card-title">Edit Hospital</h4>
                             <p class="card-description"> edit </p>
                             <form action="{{ route('hospital.update', $data->id) }}" method="POST" class="forms-sample">

                                 @csrf
                                 {{-- /secure key --}}

                                 <div class="form-group">
                                     <label for="exampleInputName1">Name</label>
                                     <textarea name='name' class="form-control" id="exampleInputName1"
                                         placeholder="Name" >{{ $data->name }}</textarea>
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleTextarea1">Address</label>
                                     <textarea name='address' class="form-control" id="exampleTextarea1" rows="4"  >{{ $data->address }}</textarea>
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputEmail3">Email address</label>
                                     <input type="email" name='email' class="form-control" id="exampleInputEmail3"
                                         placeholder="Email" value="{{ $data->email }}">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputCity1">City</label>
                                     <input type="text" name='city' class="form-control" id="exampleInputCity1"
                                         placeholder="Location" value="{{ $data->city }}">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputpincode">pin code</label>
                                     <input type="number" name='pin_code' class="form-control" maxlength="6"
                                         id="exampleInputpincode" placeholder="Location"  value="{{ $data->pin_code }}">
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