@extends('layouts.backend.master')

@section('title')
    Settings
@endsection

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Settings</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Settings</li>
        </ol>

        <div class="d-grid gap-2 mb-4">
            <button class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">Add New
                Setting</button>
        </div>

        {{-- alert --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Logo</th>
                    <th>Favicon</th>
                    <th>Company Name</th>
                    <th>Email</th>
                    <th>Contact NO</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Logo</th>
                    <th>Favicon</th>
                    <th>Company Name</th>
                    <th>Email</th>
                    <th>Contact NO</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($settings as $setting)
                    <tr>
                        <td>{{ $setting->id }}</td>
                        <td>
                            <img src="{{ asset($setting->logo) }}" alt="logo" class="img-thumbnail" width="75">
                        </td>
                        <td>{{ $setting->favicon }}</td>
                        <td>{{ $setting->company_name }}</td>
                        <td>{{ $setting->email }}</td>
                        <td>{{ $setting->contact_no }}</td>
                        <td>
                            <a href="{{ route('settings.edit', $setting->id) }}"><button
                                    class="btn btn-outline-warning">Edit</button></a>
                            <form action="{{ route('settings.destroy', $setting->id) }}" method="POST" class="d-inline">
                                @csrf @method('delete')
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Create Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Setting</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="logo" class="form-label">Upload Logo</label>
                            <input type="file" class="form-control" id="Logo" name="logo"
                                placeholder="Upload Logo">
                            @error('logo')
                                <div class="alert alert-danger mt-2 text-center">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="favicon" class="form-label">Favicon</label>
                            <input type="text" name="favicon" class="form-control" value="{{ old('favicon') }}">
                            @error('favicon')
                                <div class="alert alert-danger mt-2 text-center">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="company_name" class="form-label">Company Name</label>
                            <input type="text" name="company_name" class="form-control"
                                value="{{ old('company_name') }}">
                            @error('company_name')
                                <div class="alert alert-danger mt-2 text-center">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                            @error('email')
                                <div class="alert alert-danger mt-2 text-center">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="contact_no" class="form-label">Contact NO</label>
                            <input type="text" name="contact_no" class="form-control" value="{{ old('contact_no') }}">
                            @error('contact_no')
                                <div class="alert alert-danger mt-2 text-center">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Script to reopen create-modal if validation fails -->
    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var createModal = new bootstrap.Modal(document.getElementById('createModal'));
                createModal.show();
            });
        </script>
    @endif
@endsection
