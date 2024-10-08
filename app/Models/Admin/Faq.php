<?php

namespace App\Models\Admin;

use Wildside\Userstamps\Userstamps;
use App\Models\Admin\DynamicCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faq extends Model
{
    use HasFactory, Userstamps;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function dynamicCategoryName()
    {
        return DynamicCategory::where('id', $this->dynamic_category_id)->value('name');
    }
}
