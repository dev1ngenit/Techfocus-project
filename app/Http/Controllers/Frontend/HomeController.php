<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage() {
        // return view('frontend.pages.home.index');
        return view('frontend.master');
    }
}
