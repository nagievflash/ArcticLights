<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }



    public function frontpage() {
        $posts = Post::all();
        return view('frontpage', compact("posts"));

    }

    public function getEmployees()
    {
        $employees = Employee::query()
            ->orderBy('sort')
            ->orderBy('name')
            ->get();
        return view('about', compact('employees'));
    }

}
