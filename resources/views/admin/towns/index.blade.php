@extends('layouts.admin')
@section('title', 'Towns')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Towns</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
             <a href="javascript:void(0);" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#ajaxModal">
                 <i class="fa fa-plus"></i> Add New
             </a>
        </div>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Admin</a></li>
          <li class="breadcrumb-item active" aria-current="page">Towns</li>
        </ol>
    </nav>
    <div class="table-responsive">
        <table class="table table-striped table-sm data-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Town/City/Village Name</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse($towns as $index => $town)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $town->town_name }}</td>
                    <td>
                        <a href="{{ route('towns.edit', $town->id) }}" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Edit">
                            <i class="fa fa-edit"></i>
                        </a>
                        <form action="{{ route('towns.destroy', $town->id) }}" method="post" style="display: inline-block">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" title="Delete"
                                    onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">No Towns found...</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</main>
<div class="modal fade" id="ajaxModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="townForm" name="townForm" method="post" action="{{ route('towns.store') }}" class="form-floating">
                @csrf
                <input type="hidden" id="town_id" name="town_id">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-heading">Add New City/Town/Village</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" ></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="town_name" name="town_name" placeholder="City/Town/Village Name">
                        <label for="town_name">City/Town/Village Name</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-outline-primary" id="saveBtn" value="Create">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
