<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class adminController extends Controller
{

    public function index()
    {
        $admin = User::all();
        return view('adminList', compact('admin'));
    }

    public function destroy($id)
    {
        $admin = User::find($id);
        $admin->delete();
        session()->flash('delete',"delete in successfully");
        return redirect('admins');
    }
}
