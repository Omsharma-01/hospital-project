 @extends('admin.layout.adminlayout')
 @section('content')
     <div class="main-panel">
         <div class="content-wrapper">
             <div class="row">
                 <div class="col-12 grid-margin stretch-card">
                     <div class="card">
                         <div class="card-body">
                             <h4 class="card-title">Add Ambulance</h4>
                             <p class="card-description"> Ambulance Details Registration </p>
                             <form action="{{ route('ambulance.store') }}" method="POST" class="forms-sample">

                                 @csrf
                                 {{-- /secure key --}}

                                 <div class="form-group">
                                     <label for="exampleInputName1"> Ambulance Name</label>
                                     <input type="text" name='ambulance_name' class="form-control" id="exampleInputName1"
                                         placeholder="Name">
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleTextarea1">ambulance_no</label>
                                     <textarea name='ambulance_no' class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputEmail3">driver name</label>
                                     <input type="text" name='driver_name' class="form-control" id="exampleInputEmail3"
                                         placeholder="driver name">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputCity1">address</label>
                                     <input type="text" name='address' class="form-control" id="exampleInputCity1"
                                         placeholder="Location">
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
