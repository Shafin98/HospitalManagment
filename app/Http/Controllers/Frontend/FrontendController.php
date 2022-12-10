<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Doctor;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $featured_doctor = Doctor::where('trending','1')->take(15)->get();
        $trending_field = Category::where('popular','1')->take(15)->get();
        return view('frontend.index', compact('featured_doctor', 'trending_field'));
    }

    public function category()
    {
        $category = Category::where('status','0')->get();
        return view('frontend.category', compact('category'));
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
