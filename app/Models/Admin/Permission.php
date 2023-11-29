<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $slugSourceColumn = 'name';

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    // public function admins()
    // {
    //     return $this->belongsToMany(Admin::class);
    // }

    public function admins()
    {
        return $this->belongsToMany(Admin::class, 'user_permissions', 'permission_id', 'user_id');
    }
}
