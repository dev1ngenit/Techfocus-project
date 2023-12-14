<?php

namespace App\Models\Admin;

use App\Models\City;
use App\Models\State;
use App\Models\Country;
use Wildside\Userstamps\Userstamps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use HasFactory, Userstamps;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function addressCountry()
    {
        return Country::where('id', $this->country_id)->value('name');
    }

    public function addressState()
    {
        return State::where('id', $this->state_id)->value('name');
    }

    public function addressCity()
    {
        return City::where('id', $this->city_id)->value('name');
    }
}
