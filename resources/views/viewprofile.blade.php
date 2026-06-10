 @extends('layouts.app')
 @section('content')
     <section class="container">
         <div class="row">
             <div class="col md-6">
                 <img src="{{ asset('uploads/doctors/' . $doctor->file_upload) }}" alt="" class="img-fluid mx-5"
                     height="500" width="400">
             </div>
             <div class="col md-6">
                 <h1 class="text-dark">{{ $doctor->doctor_name }}</h1>
                 <p class="text-secondary">{{ $doctor->specialization }}</p>
                 <p class="text-secondary">{{ $doctor->about_us }}</p>
             </div>
         </div>


     </section>
 @endsection
