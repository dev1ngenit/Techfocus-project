<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    // // Relationship to parent category
    // public function parent()
    // {
    //     return $this->belongsTo(Category::class, 'parent_id');
    // }

    public function parentName()
    {
        return Category::where('id', $this->parent_id)->value('name');
    }
}
