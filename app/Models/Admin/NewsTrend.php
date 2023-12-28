<?php

namespace App\Models\Admin;

use App\Models\Admin;
use App\Traits\HasSlug;
use Wildside\Userstamps\Userstamps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NewsTrend extends Model
{
    use HasFactory, HasSlug, Userstamps;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    protected $slugSourceColumn = 'title';
    
    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }
    public function addedBy()
    {
        return $this->belongsTo(Admin::class, 'added_by');
    }
}
