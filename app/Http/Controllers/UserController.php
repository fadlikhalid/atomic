<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function view(){

        $users = User::where('is_admin',0)->get();

        return view('admin.viewUser', ['users' => $users]);
    }
}
