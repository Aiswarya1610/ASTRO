<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'totalServices' => Category::count(),
           
        ]);
    }
    public function users(){
        $users = User::where('role','user')->with('categories')->get();
        return view('dashboard.users.index', compact('users'));
    }
}
