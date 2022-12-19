<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Lab;
use App\Models\Doctor;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        $featured_doctor = Doctor::where('trending','1')->take(15)->get();
        $featured_lab = Lab::where('trending','1')->take(15)->get();
        $trending_field = Category::where('popular','1')->take(15)->get();
        return view('frontend.index', compact('featured_doctor', 'trending_field', 'featured_lab'));
    }

    public function category()
    {
        $category = Category::where('status','0')->get();
        return view('frontend.category', compact('category'));
    }

    public function labs()
    {
        $lab = Lab::where('status','0')->get();
        return view('frontend.lab', compact('lab'));
    }

    public function viewcategory($name)
    {
        if(Category::where('name', $name)->exists())
        {
            $category = Category::where('name', $name)->first();
            $doctor = Doctor::where('doc_id', $category->id)->where('status', '0')->get();
            return view('frontend.doctors.index', compact('category','doctor'));

        }
        else{
            return redirect('/')->with('status', "Category does not exists");
        }
    }

    public function viewlab($lab_name)
    {
        if(Lab::where('lab_name', $lab_name)->exists())
        {
            $lab = Lab::where('lab_name', $lab_name)->first();
            return view('frontend.lab.view', compact('lab'));
        }
        else
        {
        return redirect('/')->with('status', "The link is broken");
        }

    }

    public function viewdoctor($cate_name, $doc_name)
    {
        if(Category::where('name', $cate_name)->exists())
        {
            if(Doctor::where('name', $doc_name)->exists())
            {
                $doctor = Doctor::where('name', $doc_name)->first();
                return view('frontend.doctors.view', compact('doctor'));
            }
            else
            {
            return redirect('/')->with('status', "The lick is broken");
            }
        }
        else {
            return redirect('/')->with('status', "No such Specialist found");
        }
    }
}
