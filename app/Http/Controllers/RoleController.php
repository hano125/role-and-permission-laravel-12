php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('Role.index', get_defined_vars());
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('Role.create', get_defined_vars());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $role = Role::create($request->only('name'));

        if ($request->has('permissions')) {
            // Get the Permission objects using the submitted IDs
            $permissions = Permission::whereIn('id', $request->input('permissions'))->get();
            $role->syncPermissions($permissions);
        }

        return redirect()->route('role.index')->with('success', 'Role created successfully.');
    }
}
