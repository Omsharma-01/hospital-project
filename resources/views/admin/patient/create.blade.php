@extends('admin.layout.adminlayout')
 @section('content')
     <div class="main-panel">
         <div class="content-wrapper">
             <div class="row">
                 <div class="col-12 grid-margin stretch-card">
                     <div class="card">
                         <div class="card-body">
                             <h4 class="card-title">Patient Registration</h4>
                             <p class="card-description"> Enter the patient's personal and medical details </p>
                             <form action="{{ route('patient.store') }}" method="POST" class="forms-sample">

                                 @csrf
                                 {{-- /secure key --}}

                                 <div class="form-group">
                                     <label for="exampleInputName1"> Patient Name</label>
                                     <textarea name='patient_name' class="form-control" id="exampleInputName1"
                                         placeholder="patient_name"></textarea>
                                 </div>

                                 <div class="form-group">
                                     <label for="exampleTextarea1">Age</label>
                                     <textarea name='age' class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputEmail3">Gender</label>
                                     <input type="text" name='gender' class="form-control" id="exampleInputEmail3"
                                         placeholder="text">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputCity1">Phone Number</label>
                                     <input type="number" name='phone_number' class="form-control" id="exampleInputCity1"
                                         placeholder="text">
                                 </div>
                                 <div class="form-group">
                                     <label for="exampleInputpincode">Boold Group</label>
                                     <input type="text" name='boold_group' class="form-control" 
                                         id="exampleInputpincode" placeholder="text">
                                 </div>
                                   <div class="form-group">
                                     <label for="exampleInputpincode">Address</label>
                                     <input type="text" name='address' class="form-control" 
                                         id="exampleInputpincode" placeholder="text">
                                 </div>
                                   <div class="form-group">
                                     <label for="exampleInputpincode">Assigned Doctor</label>
                                     <input type="text" name='assigned_doctor' class="form-control" 
                                         id="exampleInputpincode" placeholder="text">
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
