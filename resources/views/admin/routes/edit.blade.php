@extends('layouts.admin')
@section('title', 'Edit Route')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Route</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('routes.index') }}" class="btn btn-sm btn-outline-primary"><i class="fa fa-chevron-left"></i> Back</a>
        </div>
    </div>
    {{-- <h6> --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item"><a href="{{ route('routes.index') }}">Routes</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
    {{-- </h6> --}}
    <div class="container">
        <form method="post" action="{{ route('routes.update', $route->id) }}" class="form-floating">
            @csrf
            @method('put')
            <div class="form-floating mb-3">
{{--                <input type="text" class="form-control @error('from') is-invalid @enderror" id="from" name="from" placeholder="Travelling from" value="{{ $route->from }}" required autofocus>--}}
                <select id="from" name="from" class="form-control @error('from') is-invalid @enderror">
                    <option value=""> -- SELECT --</option>
                    @foreach($towns as $t)
                        <option value="{{ $t->id }}" {{ $t->id == $route->from ? 'selected' : '' }}>{{ $t->town_name }}</option>
                    @endforeach
                </select>
                <label for="from">Travelling From</label>
                @error('from')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <select id="dest" name="dest" class="form-control @error('dest') is-invalid @enderror">
                    <option value=""> -- SELECT --</option>
                    @foreach($towns as $t)
                        <option value="{{ $t->id }}" {{ $t->id == $route->dest ? 'selected' : '' }}>{{ $t->town_name }}</option>
                    @endforeach
                </select>
                <label for="dest">Travelling To</label>
                @error('dest')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control @error('fare') is-invalid @enderror" id="fare" name="fare" value={{ $route->rate }} placeholder="Fare amount" required>
                <label for="fare">Fare</label>
                @error('fare')
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
