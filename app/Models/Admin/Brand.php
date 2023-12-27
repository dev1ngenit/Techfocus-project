<?php

namespace App\Models\Admin;

use App\Traits\HasSlug;
use Wildside\Userstamps\Userstamps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory, HasSlug, Userstamps;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $slugSourceColumn = 'title';


    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }
    // Usage
    // $topProducts = Brand::byCategory('Top')->get();
    // $featuredProducts = Brand::byCategory('Featured')->get();
    public function brandProducts($productType = null)
    {
        $query = $this->hasMany(Product::class, 'brand_id')
            ->where('product_status', 'product');

        if ($productType) {
            $query->where('product_type', $productType);
        }

        return $query;
    }
    // Usage
    // $softwareProducts = $brand->brandProducts('software')->get();
    // $hardwareProducts = $brand->brandProducts('hardware')->get();
    public function products()
    {
        return $this->hasMany(Product::class, 'brand_id');
    }

    public static function getProductByBrand($slug)
    {
        return Brand::with('brandProducts')->where('slug', $slug)->firstOrFail();
    }

    public function brandPage()
    {
        return $this->hasOne(BrandPage::class);
    }
}
