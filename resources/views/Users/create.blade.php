@extends('theme.master')
@section('title', 'Create User')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold py-3 mb-0"><span class="text-muted fw-light">Users /</span> Create User</h4>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Add New User</h5>
                    </div>
                    <div class="card-body">
                        <form id="addUserForm" action="#" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 mb-3">
                                    <label class="form-label" for="user-name">Full Name</label>
                                    <input type="text" class="form-control" id="user-name" name="name"
                                        placeholder="John Doe" required />
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label" for="user-email">Email</label>
                                    <input type="email" class="form-control" id="user-email" name="email"
                                        placeholder="example@domain.com" required />
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label" for="user-password">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="user-password" class="form-control" name="password"
                                            placeholder="············" required />
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <label class="form-label" for="user-role">User Role</label>
                                    <select id="user-role" class="form-select" name="role">
                                        <option value="" selected disabled>Select a role</option>
                                        <option value="admin">Admin</option>
                                        <option value="manager">Manager</option>
                                        <option value="editor">Editor</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('users.index') }}" class="btn btn-secondary me-1">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Create User</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript to toggle password visibility -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordToggleIcons = document.querySelectorAll('.input-group-text');
            passwordToggleIcons.forEach(icon => {
                icon.addEventListener('click', function() {
                    const input = this.parentNode.querySelector('input');
                    if (input.type === 'password') {
                        input.type = 'text';
                        this.querySelector('i').classList.replace('bx-hide', 'bx-show');
                    } else {
                        input.type = 'password';
                        this.querySelector('i').classList.replace('bx-show', 'bx-hide');
                    }
                });
            });
        });
    </script>
@endsection
