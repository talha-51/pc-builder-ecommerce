@extends('layouts.backend.master')

@section('title')
    Sliders
@endsection

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Slider</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Slider</li>
        </ol>

        <div class="d-grid gap-2 mb-4">
            <a href="{{ route('slider.create') }}" class="btn btn-lg btn-primary" data-bs-toggle="modal"
                data-bs-target="#createModal">Add New Slider</a>
        </div>

        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Added By ID</th>
                    <th>Updated By ID</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Added By ID</th>
                    <th>Updated By ID</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($sliders as $slider)
                    <tr>
                        <td>{{ $slider->id }}</td>
                        <td>{{ $slider->title }}</td>
                        <td>{{ $slider->image }}</td>
                        <td>{{ $slider->added_by_id }}</td>
                        <td>{{ $slider->updated_by_id }}</td>
                        <td>
                            <a href="" class="btn btn-lg btn-outline-warning">Edit</a>
                            <a href="" class="btn btn-lg btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
        </table>
    </div>

    <!-- Create Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Slider</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('slider.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" id="title" placeholder="Enter Title">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Image</label>
                            <input type="file" class="form-control" id="image" placeholder="Upload Image">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </div>
@endsection
