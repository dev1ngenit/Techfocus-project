<?php

namespace App\Models\Admin;

use App\Traits\HasSlug;
use Wildside\Userstamps\Userstamps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, HasSlug, Userstamps;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    protected $slugSourceColumn = 'name';
    public function industries()
    {
        return $this->belongsToMany(Industry::class, 'industry_products', 'product_id', 'industry_id');
    }

    // Define the many-to-many relationship with solutions
    public function solutions()
    {
        return $this->belongsToMany(SolutionDetail::class, 'solution_products', 'product_id', 'solution_id');
    }
    public function multiImages()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function product()
    {
        return $this->hasOne(BrandPage::class);
    }

}
