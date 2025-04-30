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
                        <form>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Role Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="basic-default-name"
                                        placeholder="John Doe" />
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label class="col-sm-2 col-form-label">Permissions</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-md-3 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="user-create"
                                                    name="permissions[]" value="user-create">
                                                <label class="form-check-label" for="user-create">Create User</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="user-edit"
                                                    name="permissions[]" value="user-edit">
                                                <label class="form-check-label" for="user-edit">Edit User</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="user-view"
                                                    name="permissions[]" value="user-view">
                                                <label class="form-check-label" for="user-view">View User</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="user-delete"
                                                    name="permissions[]" value="user-delete">
                                                <label class="form-check-label" for="user-delete">Delete User</label>
                                            </div>
                                        </div>
                                        <!-- You can add more permission checkboxes as needed -->
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
