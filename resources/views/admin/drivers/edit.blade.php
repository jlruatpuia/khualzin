@extends('layouts.admin')
@section('title', 'Edit Driver')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Driver</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('drivers.index') }}" class="btn btn-sm btn-outline-primary"><i class="fa fa-chevron-left"></i> Back</a>
        </div>
    </div>
    {{-- <h6> --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item"><a href="{{ route('drivers.index') }}">Drivers</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
    {{-- </h6> --}}
    <div class="container">
        <form method="post" action="{{ route('drivers.update', $driver->id ) }}" class="form-floating">
            @csrf
            @method('put')
            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value={{ $driver->name }} placeholder="Name of Driver" required autofocus>
                <label for="name">Name</label>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ $driver->address }}" placeholder="Address" required>
                <label for="address">Address</label>
                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact" value={{ $driver->contact }} placeholder="Phone No" required>
                <label for="contact">Contact No</label>
                @error('contact')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="photo">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

  </main>
@endsection
