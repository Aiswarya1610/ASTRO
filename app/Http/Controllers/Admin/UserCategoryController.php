<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class UserCategoryController extends Controller
{
    public function edit(User $user)
    {
        $categories = Category::with('children')->whereNull('parent_id')->get(); // top-level
        return view('dashboard.users.assign', compact('user', 'categories'));
    }

    public function update(Request $request, User $user)
    {
        $user->categories()->sync($request->input('categories', []));
        return back()->with('success', 'Categories and subcategories assigned.');
    }
}
