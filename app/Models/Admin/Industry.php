<?php

namespace App\Models\Admin;

use App\Traits\HasSlug;
use Wildside\Userstamps\Userstamps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Industry extends Model
{
    use HasFactory, HasSlug, Userstamps;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $slugSourceColumn = 'name';

    public function products()
    {
        return $this->belongsToMany(Product::class, 'industry_products');
    }
    
    public function children()
    {
        return $this->hasMany(Industry::class, 'parent_id');
    }

    public function rowOne()
    {
        return $this->belongsTo(Row::class, 'row_four_id');
    }
    public function rowThree()
    {
        return $this->belongsTo(Row::class, 'row_three_id');
    }
    public function rowFive()
    {
        return $this->belongsTo(Row::class, 'row_five_id');
    }
}
