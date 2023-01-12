<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\User;
use App\Models\Userdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserdetailController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function index()
    {
        return view('d_pages.profile-page');
    }

    public function create(User $user)
    {
        $departments = Department::all();
        $courses = Course::all();
        $faculties = Faculty::all();
        return view('d_pages.update-bio', compact(['courses', 'departments', 'faculties', 'user']));
    }

    public function update_student(Request $request, User $user)
    {
        // $request->validate([
        //     'department_id' => 'required',
        //     'faculty_id' => 'required',
        //     'image' => 'required',
        //     'bio' => 'required',
        // ]);

        Auth::user()->department_id = $request->department_id;
        Auth::user()->faculty_id = $request->faculty_id;
        Auth::user()->bio = $request->bio;
        Auth::user()->image = $request->image;


        $file = $request->file('image'); // gets the file from the input field named image and stores it in the variable $file
        $ext = $file->getClientOriginalExtension(); // gets the image extension (.png, .jpg, .jpeg)
        $filename = \Str::slug(Auth::user()->name) . '_' . time() . '.' . $ext; // sets the file name as a url friendly name
        $file->storePubliclyAs('public/images', $filename); // uploads the image to a folder called public/images

        Auth::user()->image = $filename;
        Auth::user()->save();

        return redirect()->route('view.profile')->with(['message' => 'Profile updated']);
    }

   
    public function update_lecturer(Request $request, User $user)
    {
        // $request->validate([
        //     'course_id' => 'nullable',
        //     'image' => 'nullale',
        //     'bio' => 'nullable',
        // ]);

        Auth::user()->course_id = $request->course_id;
        Auth::user()->bio = $request->bio;
        Auth::user()->image = $request->image;

        $file = $request->file('image'); // gets the file from the input field named image and stores it in the variable $file
        $ext = $file->getClientOriginalExtension(); // gets the image extension (.png, .jpg, .jpeg)
        $filename = \Str::slug($request->name) . '_' . time() . '.' . $ext; // sets the file name as a url friendly name
        $file->storePubliclyAs('public/images', $filename); // uploads the image to a folder called public/images

        Auth::user()->image = $filename;
        Auth::user()->save();

        return redirect()->route('view.profile')->with(['message' => 'Profile updated']);
    }
}
