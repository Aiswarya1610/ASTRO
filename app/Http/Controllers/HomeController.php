<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'user')->get();
        return view('home', compact('users'));
    }
   
}
