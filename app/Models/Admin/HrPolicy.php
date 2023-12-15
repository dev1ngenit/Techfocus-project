<?php

namespace App\Models\Admin;

use App\Models\Country;
use Wildside\Userstamps\Userstamps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HrPolicy extends Model
{
    use HasFactory, Userstamps;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function countryName()
    {
        return Country::where('id', $this->country_id)->value('name');
    }
}
