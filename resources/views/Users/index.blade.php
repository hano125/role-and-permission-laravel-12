@extends('theme.master')
@section('title', 'Role List')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold py-3 mb-0"><span class="text-muted fw-light">All /</span> Roles</h4>
            <a href="{{ route('users.create') }}" type="button" class="btn btn-primary">
                <i class="bx bx-plus me-1"></i> Add New User
            </a>
        </div>

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <h5 class="card-header">All Roles</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                        @foreach ($users as $user)
                            <tr>
                                <td>
                                    {{ $user->id }}
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    <i class="fab fa-react fa-lg text-info me-3"></i>
                                    {{ $user->email }}
                                </td>
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-icon">
                                        <i class="bx bx-edit-alt"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-icon">
                                        <i class="bx bx-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
