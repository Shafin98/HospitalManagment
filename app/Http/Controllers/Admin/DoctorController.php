<?php

namespace App\Http\Controllers\Admin;

use App\Models\Doctor;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    public function index()
    {
        $doctor = Doctor::all();
        return view('admin.doctor.index', compact('doctor'));
    }
    public function add()
    {
        $category = Category::all();
        return view('admin.doctor.add', compact('category'));
    }
    
    public function insert(Request $request)
    {
        $doctor = new Doctor();

        $doctor->doc_id = $request->input('doc_id');
        $doctor->name = $request->input('name');
        $doctor->speciality = $request->input('speciality');
        $doctor->phone = $request->input('phone');
        $doctor->schedule = $request->input('schedule');
        $doctor->hour = $request->input('hour');
        $doctor->Room = $request->input('Room');
        $doctor->degree = $request->input('degree');
        $doctor->institution = $request->input('institution');
        $doctor->status = $request->input('status') == TRUE ? '1':'0';
        $doctor->trending = $request->input('trending') == TRUE ? '1':'0';
        $doctor->save();

        return redirect('doctor')->with('status', "Doctor Added  Successfully");
    }
}
