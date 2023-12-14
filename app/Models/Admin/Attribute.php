<?php

namespace App\Models\Admin;

use Wildside\Userstamps\Userstamps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attribute extends Model
{
    use HasFactory, Userstamps;

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
        $query->orderBy('name', 'ASC');
    }
}
