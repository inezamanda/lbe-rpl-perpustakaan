<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
      return view('home');
    }

    public function dashboardAdmin()
    {
        return view('admin.index');
    }

    public function dashboardUser()
    {
        return view('user.index');
    }

    public function catalogAdmin()
    {
        return view('admin.catalog');
    }

    public function catalogUser()
    {
        return view('user.catalog');
    }

    public function memberAdmin()
    {
        return view('admin.member');
    }

    public function NotFoundPage()
    {
        return view('notfound.index');
    }
}
