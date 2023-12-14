<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Admin\Permission;
use App\Http\Controllers\Controller;

class UserPermissionController extends Controller
{
    /**
     * Display a form for assigning permissions to a user.
     *
     * @param  int  $userId
     * @return \Illuminate\Http\Response
     */
    public function create($userId)
    {
        $user = Admin::findOrFail($userId);
        $permissions = Permission::all();

        return view('admin.pages.user-permission.create', compact('user', 'permissions'));
    }

    /**
     * Store a newly assigned permission for a user.
     *
     * @param  Request  $request
     * @param  int  $userId
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $adminId)
    {
        $request->validate([
            'permissions' => 'array',
            'permissions.*' => 'in:0,1',
        ]);

        $admin = Admin::findOrFail($adminId);

        $checkedPermissions = array_filter($request->input('permissions', []), function ($value) {
            return $value == 1;
        });

        $admin->permissions()->sync(array_keys($checkedPermissions));

        return redirect()->back()->with('success', 'Permissions updated successfully.');
    }


    /**
     * Display a form for removing permissions from a user.
     *
     * @param  int  $userId
     * @return \Illuminate\Http\Response
     */
    public function edit($userId)
    {
        $user = Admin::findOrFail($userId);
        $permissions = $user->permissions;

        return view('admin.pages.user-permission.edit', compact('user', 'permissions'));
    }

    /**
     * Remove a specific permission from a user.
     *
     * @param  int  $userId
     * @param  int  $permissionId
     * @return \Illuminate\Http\Response
     */
    public function destroy($userId, $permissionId)
    {
        $user = Admin::findOrFail($userId);
        $user->permissions()->detach($permissionId);

        return redirect()->back()->with('success', 'Permission removed successfully.');
    }
}
