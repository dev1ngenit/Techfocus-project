<?php

namespace App\Models\HR;

use App\Traits\HasSlug;
use Wildside\Userstamps\Userstamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    use HasFactory, HasSlug, Userstamps;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * , HasSlug
     * protected $slugSourceColumn = 'name';
     */
    

}
