<?php

namespace App\Models\Admin;

use App\Models\Admin\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TermsAndPolicy extends Model
{
    use HasFactory;

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
