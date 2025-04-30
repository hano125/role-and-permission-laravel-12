@extends('theme.master')
@section('title', 'Create Role')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Roles/</span> Create New Role</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Create Role</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('roles.update', $roles->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <!-- Use the PUT method for updates -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Role Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="basic-default-name"
                                        placeholder="John Doe" name="name" value="{{ $roles->name }}" />
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label class="col-sm-2 col-form-label">Permissions</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        @foreach ($permissions as $permission)
                                            <div class="col-md-3 mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="permission-{{ $permission->id }}" name="permissions[]"
                                                        value="{{ $permission->name }}"
                                                        {{ in_array($permission->name, $rolePermissions) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="permission-{{ $permission->id }}">
                                                        {{ ucfirst($permission->name) }}
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
