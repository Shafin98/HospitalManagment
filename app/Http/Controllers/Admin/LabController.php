<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lab;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LabController extends Controller
{
    public function index()
    {
        $lab = Lab::all();
        return view('admin.lab.index', compact('lab'));
    }
    public function add()
    {
        $category = Category::all();
        return view('admin.lab.add', compact('category'));
    }
    public function insert(Request $request)
    {
        $lab = new Lab();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/img/uploads/',$filename);
            $lab->image = $filename;
        }

        $lab->lab_name = $request->input('lab_name');
        $lab->lab_schedule = $request->input('lab_schedule');
        $lab->lab_Room = $request->input('lab_Room');
        $lab->status = $request->input('status') == TRUE ? '1':'0';
        $lab->trending = $request->input('trending') == TRUE ? '1':'0';
        $lab->save();

        return redirect('lab')->with('status', "Lab Added Successfully");
    }
    public function edit($id)
    {
        $lab = Lab::find($id);
        return view('admin.lab.edit', compact('lab'));
    }

    public function update(Request $request, $id)
    {
        $lab = Lab::find($id);
        if($request->hasFile('image'))
        {
            $path = 'assets/img/uploads/'.$lab->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/img/uploads/',$filename);
            $lab->image = $filename;
        }

        $lab->lab_name = $request->input('lab_name');
        $lab->lab_schedule = $request->input('lab_schedule');
        $lab->lab_Room = $request->input('lab_Room');
        $lab->status = $request->input('status') == TRUE ? '1':'0';
        $lab->trending = $request->input('trending') == TRUE ? '1':'0';
        $lab->update();

        return redirect('/dashboard')->with('status', "Lab Updated Successfully");
    }

    public function drop($id)
    {
        $lab = Lab::find($id);
        $lab->delete();
        return redirect('/dashboard')->with('status', "Lab Deleted Successfully");
    }
}
