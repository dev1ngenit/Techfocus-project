<?php

namespace App\Models\Admin;

use App\Models\Admin;
use Wildside\Userstamps\Userstamps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory, Userstamps;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $slugSourceColumn = 'name';

    // public function admins()
    // {
    //     return $this->belongsToMany(Admin::class);
    // }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'role_permissions');
    }

    public function admins()
    {
        return $this->belongsToMany(Admin::class, 'user_roles', 'role_id', 'user_id');
    }
}
