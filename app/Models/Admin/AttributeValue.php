<?php

namespace App\Models\Admin;

use Wildside\Userstamps\Userstamps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AttributeValue extends Model
{
    use HasFactory, Userstamps;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
