@extends('theme.master')
@section('title', 'Create User')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-4 d-flex justify-content-between align-items-center">
            <h4 class="py-3 mb-0 fw-bold"><span class="text-muted fw-light">Users /</span> Create User</h4>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="mb-4 card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Edit User</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('users.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row g-3">
                                <div class="mb-3 col-12">
                                    <label class="form-label" for="user-name">Full Name</label>
                                    <input type="text" class="form-control" id="user-name" name="name"
                                        placeholder="John Doe" value="{{ $user->name }}" required />
                                </div>
                                <div class="mb-3 col-12">
                                    <label class="form-label" for="user-email">Email</label>
                                    <input type="email" class="form-control" id="user-email" name="email"
                                        placeholder="example@domain.com" value="{{ $user->email }}" required />
                                </div>
                                <div class="mb-3 col-12">
                                    <label class="form-label" for="user-password">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="user-password" class="form-control" name="password"
                                            placeholder="Leave blank to keep current password" />
                                        <span class="cursor-pointer input-group-text"><i class="bx bx-hide"></i></span>
                                    </div>
                                    <small class="text-muted">Leave blank if you don't want to change the password</small>
                                </div>
                                <div class="mb-4 col-12">
                                    <label class="form-label" for="user-role">User Role</label>
                                    <select id="user-role" class="form-select" name="role">
                                        <option value="" disabled>Select a role</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                                                {{ $role->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <a href="{{ route('users.index') }}" class="btn btn-secondary me-1">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Update User</button>
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
