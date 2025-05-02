@extends('theme.master')
@section('title', 'Role List')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-4 d-flex justify-content-between align-items-center">
            <h4 class="py-3 mb-0 fw-bold"><span class="text-muted fw-light">All /</span> Roles</h4>
            @if (Auth::user()->hasAnyPermission('create user'))
                <a href="{{ route('users.create') }}" type="button" class="btn btn-primary">
                    <i class="bx bx-plus me-1"></i> Add New User
                </a>
            @endif
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
                                <td>
                                    @if ($user->roles->count() > 0)
                                        @foreach ($user->roles as $role)
                                            <span class="badge bg-label-primary me-1">{{ $role->name }}</span>
                                        @endforeach
                                    @else
                                        <span class="badge bg-label-secondary me-1">No roles</span>
                                    @endif
                                </td>
                                <td>
                                    @if (Auth::user()->hasAnyPermission('edit user'))
                                        <div class="d-flex">
                                            <a href="{{ route('users.edit', $user->id) }}"
                                                class="btn btn-icon btn-outline-primary me-2" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit">
                                                <i class="bx bx-edit-alt"></i>
                                            </a>
                                    @endif
                                    @if (Auth::user()->hasAnyPermission('delete user'))
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-icon btn-outline-danger"
                                                onclick="return confirm('Are you sure you want to delete this user?')"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                <i class="bx bx-trash"></i>
                                            </button>
                                        </form>
                                    @endif

            </div>
            </td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
