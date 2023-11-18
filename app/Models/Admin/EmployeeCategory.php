<?php

namespace App\Models\Admin;

use App\Models\Country;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmployeeCategory extends Model
{
    use HasFactory;

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

    public function companyName()
    {
        return Company::where('id', $this->company_id)->value('name');
    }
}
