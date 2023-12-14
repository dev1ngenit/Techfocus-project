<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    
    public function values()
    {
        return $this->hasMany(AttributeValue::class);
    }

    public function scopeOrderByName($query)
    {
        $query->orderBy('name','ASC');
    }

}
