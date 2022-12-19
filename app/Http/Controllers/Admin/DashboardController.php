<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class DashboardController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function viewuser($id)
    {
        $users = User::find($id);
        return view('admin.users.view', compact('users'));
    }

    public function index()
    {
        $users = User::select('id', 'email', 'name', 'status')->pageinate(5);

        return view('user.list')->with([
            'users' => $users
        ]);
    }

    public function updateStatus($user_id, $status_code)
    {
        try {
            $update_user = User::whereId($user_id)->update([
                'status' => $status_code
            ]);

            if($update_user){
                return redirect('/users')->with('status', 'User Status Updated Successfully.');
            }

            return redirect('/users')->with('status', 'Fail to update user status.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
