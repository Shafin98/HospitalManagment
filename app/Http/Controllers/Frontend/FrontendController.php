<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $featured_doctor = Doctor::where('trending','1')->take(15)->get();
        return view('frontend.index', compact('featured_doctor'));
    }
}
