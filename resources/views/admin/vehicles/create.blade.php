@extends('layouts.admin')
@section('title', 'Add Vehicle')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add New Vehicle</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('drivers.index') }}" class="btn btn-sm btn-outline-primary"><i class="fa fa-chevron-left"></i> Back</a>
        </div>
    </div>
    {{-- <h6> --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Admin</a></li>
          <li class="breadcrumb-item"><a href="{{ route('vehicles.index') }}">Vehicles</a></li>
          <li class="breadcrumb-item active" aria-current="page">New</li>
        </ol>
    </nav>
    {{-- </h6> --}}
    <div class="container">
        <form class="form-floating" method="post" action="{{ route('vehicles.store') }}">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('vehicle_no') is-invalid @enderror" id="vehicle_no" name="vehicle_no" placeholder="Vehicle Registration No" required autofocus>
                <label for="vehicle_no">Registration No</label>
                @error('vehicle_no')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('vehicle_name') is-invalid @enderror" id="vehicle_name" name="vehicle_name" placeholder="Name of Vehicle" required>
                <label for="vehicle_name">Vehicle Name</label>
                @error('vehicle_name')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>
            <div class="form-group">

            </div>

            <div class="form-group">
                <label for="travel_days">Travel Days</label>
                <br />
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="mon" name="travel_days[]" value="mon">
                    <label class="form-check-label" for="mon">Monday</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="tue" name="travel_days[]" value="tue">
                    <label class="form-check-label" for="tue">Tuesday</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="wed" name="travel_days[]" value="wed">
                    <label class="form-check-label" for="wed">Wednesday</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="thu" name="travel_days[]" value="thu">
                    <label class="form-check-label" for="thu">Thursday</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="fri" name="travel_days[]" value="fri">
                    <label class="form-check-label" for="fri">Friday</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="sat" name="travel_days[]" value="sat">
                    <label class="form-check-label" for="sat">Saturday</label>
                </div>
                @error('travel_days')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <select id="driver_id" name="driver_id" class="form-control">
                    <option value=""> -- SELECT DRIVER -- </option>
                    @foreach ($drivers as $driver)
                        <option value="{{ $driver->id }}">
                            {{ $driver->name }}
                        </option>
                    @endforeach
                </select>
                <label for="driver_id">Driver</label>
                @error('contact')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <select id="route_id" name="route_id" class="form-control">
                    <option value=""> -- SELECT ROUTE -- </option>
                    @foreach ($routes as $route)
                        <option value="{{ $route->id }}">
                            {{ $route->from . ' - ' . $route->dest }}
                        </option>
                    @endforeach
                </select>
                <label for="route_id">Route</label>
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
            <hr />
            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('owner_name') is-invalid @enderror" id="owner_name" name="owner_name" placeholder="Vehicle Owner's Name" required>
                <label for="owner_name">Owner's Name</label>
                @error('owner_name')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('owner_address') is-invalid @enderror" id="owner_address" name="owner_address" placeholder="Vehicle Owner's Address" required>
                <label for="owner_address">Owner's Address</label>
                @error('owner_address')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control @error('owner_contact') is-invalid @enderror" id="owner_contact" name="owner_contact" placeholder="Vehicle Owner's Phone No" required>
                <label for="owner_contact">Owner's Phone No</label>
                @error('owner_contact')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

  </main>
@endsection
