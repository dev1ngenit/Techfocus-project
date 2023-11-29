<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Role;
use Illuminate\Http\Request;
use App\Models\Admin\Permission;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class RolePermissionController extends Controller
{
    function show($roleId)
    {
        $data = [
            'role' =>  Role::with('permissions')->findOrFail($roleId),
            'permissions' => Permission::get(),

        ];
        return view('admin.pages.rolePermission.show', $data);
    }

    /**
     * Assign permission to a role.
     *
     * @param  Request  $request
     * @param  int  $roleId
     * @return \Illuminate\Http\Response
     */
    public function assignPermission(Request $request, $roleId)
    {
        $request->validate([
            'permission_id' => 'required|exists:permissions,id',
        ]);

        $role = Role::findOrFail($roleId);
        $permissionId = $request->input('permission_id');

        if (!$role->permissions()->find($permissionId)) {
            $role->permissions()->attach($permissionId);
        }

        return redirect()->back()->with('success', 'Permission assigned successfully.');
    }

    /**
     * Remove permission from a role.
     *
     * @param  int  $roleId
     * @param  int  $permissionId
     * @return \Illuminate\Http\Response
     */
    public function removePermission($roleId, $permissionId)
    {
        $role = Role::findOrFail($roleId);
        $role->permissions()->detach($permissionId);

        return redirect()->back()->with('success', 'Permission removed successfully.');
    }
}
