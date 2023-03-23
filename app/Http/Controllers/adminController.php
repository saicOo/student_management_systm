<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminController extends Controller
{

    public function index()
    {
        $admins = User::all();
        return view('adminList', compact('admins'));
    }

    public function destroy($id)
    {
        $admin = User::find($id);
        $admin->delete();
        session()->flash('delete',"delete in successfully");
        return redirect('admins');
    }
}
