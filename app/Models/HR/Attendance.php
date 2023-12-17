<?php

namespace App\Models\HR;

use App\Models\Admin;
use Wildside\Userstamps\Userstamps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attendance extends Model
{
    use HasFactory, Userstamps;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function employee()
    {
        return $this->belongsTo(Admin::class, 'emp_id');
    }
}
