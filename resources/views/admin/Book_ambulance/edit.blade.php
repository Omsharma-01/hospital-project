@extends('admin.layout.adminlayout')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">

        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Edit Book Ambulance</h4>
            </div>

            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('bookambulance.update', $data->id) }}" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="full_name" class="form-label">Full Name</label>
                        <input type="text" class="form-control @error('full_name') is-invalid @enderror" 
                            id="full_name" name="full_name" value="{{ $data->full_name }}" required>
                        @error('full_name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="mobile_no" class="form-label">Mobile No</label>
                        <input type="text" class="form-control @error('mobile_no') is-invalid @enderror" 
                            id="mobile_no" name="mobile_no" value="{{ $data->mobile_no }}" required>
                        @error('mobile_no')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="pickup_location" class="form-label">Pickup Location</label>
                        <input type="text" class="form-control @error('pickup_location') is-invalid @enderror" 
                            id="pickup_location" name="pickup_location" value="{{ $data->pickup_location }}" required>
                        @error('pickup_location')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="drop_location" class="form-label">Drop Location</label>
                        <input type="text" class="form-control @error('drop_location') is-invalid @enderror" 
                            id="drop_location" name="drop_location" value="{{ $data->drop_location }}" required>
                        @error('drop_location')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="booking_date" class="form-label">Booking Date</label>
                        <input type="datetime-local" class="form-control @error('booking_date') is-invalid @enderror" 
                            id="booking_date" name="booking_date" value="{{ $data->booking_date }}" required>
                        @error('booking_date')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control @error('status') is-invalid @enderror" 
                            id="status" name="status" required>
                            <option value="">Select Status</option>
                            <option value="pending" {{ $data->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="confirmed" {{ $data->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                            <option value="in-transit" {{ $data->status == 'in-transit' ? 'selected' : '' }}>In Transit</option>
                            <option value="completed" {{ $data->status == 'completed' ? 'selected' : '' }}>Completed</option>
                            <option value="cancelled" {{ $data->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                        @error('status')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">
                            Update
                        </button>
                        <a href="{{ route('bookambulance.index') }}" class="btn btn-secondary">
                            Back
                        </a>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>
@endsection
