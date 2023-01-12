<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Userdetail;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard()
    {
        $details = Userdetail::orderby('id', 'asc')->take(1)->get();

        return view('dashboard', compact('details'));
    }

    public function index()
    {
        return view('welcome');
    }

    public function courses()
    {
        return view('pages.courses');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function events()
    {
       return view('pages.events');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function blog()
    {
       return view('pages.blog');
    }

    public function shop()
    {
        return view('pages.shop');
    }

    public function science()
    {
        $students = User::where('role_id', '=', 1)->get();
        $students = User::where('faculty_id', '=', 1)->get();

        return view('d_pages.science-students', compact('students'));
    }

    public function art()
    {
        $students = User::where('role_id', '=', 1)->get();
        $students = User::where('faculty_id', '=', 2)->get();

        return view('d_pages.art-students', compact('students'));
    }
}
