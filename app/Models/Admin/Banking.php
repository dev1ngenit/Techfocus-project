<?php

namespace App\Models\Admin;

use App\Models\Admin\Company;
use Wildside\Userstamps\Userstamps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Banking extends Model
{
    use HasFactory, Userstamps;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function companyName()
    {
        return Company::where('id', $this->company_id)->value('name');
    }
}
