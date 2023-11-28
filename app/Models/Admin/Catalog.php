<?php

namespace App\Models\Admin;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory, HasSlug;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $slugSourceColumn = 'name';

    protected $casts = [
        'brand_id' => 'array',
        'product_id' => 'array',
        'industry_id' => 'array',
        'solution_id' => 'array',
        'company_id' => 'array'
    ];

    // public function attachments()
    // {
    //     return $this->hasMany(CatalogAttachment::class);
    // }
}
