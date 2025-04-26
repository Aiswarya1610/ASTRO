<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Blog;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'totalServices' => Service::count(),
            'totalBlogs' => Blog::count(),
            'totalUsers' => User::count(),
        ]);
    }
}
