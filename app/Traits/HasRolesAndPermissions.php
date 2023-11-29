<?php

namespace App\Traits;

use App\Models\Admin\Role;
use App\Models\Admin\Permission;

trait HasRolesAndPermissions
{
    /**
     * Check if the model has a specific role.
     *
     * @param  mixed  $role
     * @return bool
     */
    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('name', $role);
        }

        if (is_array($role)) {
            foreach ($role as $r) {
                if ($this->hasRole($r)) {
                    return true;
                }
            }
            return false;
        }

        return !!$role->intersect($this->roles)->count();
    }

    /**
     * Check if the model has a specific permission.
     *
     * @param  mixed  $permission
     * @return bool
     */
    public function hasPermission($permission)
    {
        if (is_string($permission)) {
            $permission = Permission::where('name', $permission)->first();
            if (!$permission) {
                return false;
            }
        }

        return $this->hasRole($permission->roles);
    }

    /**
     * Assign a role to the model.
     *
     * @param  mixed  $role
     * @return void
     */
    public function assignRole($role)
    {
        if (is_string($role)) {
            $role = Role::where('name', $role)->firstOrFail();
        }

        $this->roles()->save($role);
    }

    /**
     * Revoke a role from the model.
     *
     * @param  mixed  $role
     * @return void
     */
    public function revokeRole($role)
    {
        if (is_string($role)) {
            $role = Role::where('name', $role)->first();
            if (!$role) {
                return;
            }
        }

        $this->roles()->detach($role);
    }

    /**
     * Attach a permission to the model.
     *
     * @param  mixed  $permission
     * @return void
     */
    public function givePermissionTo($permission)
    {
        if (is_string($permission)) {
            $permission = Permission::where('name', $permission)->firstOrFail();
        }

        $this->permissions()->save($permission);
    }

    /**
     * Revoke a permission from the model.
     *
     * @param  mixed  $permission
     * @return void
     */
    public function revokePermission($permission)
    {
        if (is_string($permission)) {
            $permission = Permission::where('name', $permission)->first();
            if (!$permission) {
                return;
            }
        }

        $this->permissions()->detach($permission);
    }
}
