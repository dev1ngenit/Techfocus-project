<?php

namespace App\Models\Admin;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolutionCard extends Model
{
    use HasFactory, HasSlug;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $slugSourceColumn = 'name';
}
