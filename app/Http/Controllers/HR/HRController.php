<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HRController extends Controller
{
    public function dashboard()  {
        return view('admin.pages.hrAdmin.hr_dashboard');
    }
}
