@extends('layouts.admin')
@section('title', 'Edit Town')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit City/Town/Village</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{ route('towns.index') }}" class="btn btn-sm btn-outline-primary"><i class="fa fa-chevron-left"></i> Back</a>
            </div>
        </div>
        {{-- <h6> --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item"><a href="{{ route('towns.index') }}">Town</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
        {{-- </h6> --}}
        <div class="container">
            <form method="post" action="{{ route('towns.update', $town->id) }}" class="form-floating">
                @csrf
                @method('put')
                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('town_name') is-invalid @enderror" id="town_name" name="town_name" value="{{ $town->town_name }}" required autofocus>
                    <label for="town_name">City/Town/Village Name</label>
                    @error('town_name')
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
