@extends('layouts.admin')
@section('title', 'Routes')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Routes</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('routes.create') }}" class="btn btn-sm btn-outline-primary"><i class="fa fa-plus"></i> Add New</a>
        </div>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Routes</li>
        </ol>
    </nav>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>From</th>
                    <th>Destination</th>
                    <th>Fare</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($routes as $i => $route)
                  <tr>
                      <td>{{ $i + 1 }}</td>
                      <td>{{ getTownName($route->from) }}</td>
                      <td>{{ getTownName($route->dest) }}</td>
                      <td>&#8377; {{ $route->rate }}</td>
                      <td>
                          <a href="{{ route('routes.edit', $route->id) }}" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                          <form action="{{ route('routes.destroy', $route->id) }}" method="post" style="display: inline-block">
                              @method('delete')
                              @csrf
                              <button type="submit" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" title="Delete"
                                      onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                          </form>
                      </td>
                  </tr>
                @empty
                  <tr>
                      <td colspan="7">
                        No Routes found...
                      </td>
                  </tr>
                @endforelse

            </tbody>
        </table>
      </div>
  </main>
@endsection
