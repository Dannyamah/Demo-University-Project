<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Faculty;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class NewuserController extends Controller
{
    public function add()
    {
        $courses = Course::all();

        return view('d_pages.add-lecturer', compact('courses'));
    }

    public function add_lecturer(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role_id' => 'required',
            'course_id' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => 2,
            'course_id' => $request->course_id,
            'image' => $request->image,
            'password' => Hash::make($request->password),
        ]);

            $file = $request->file('image'); // gets the file from the input field named image and stores it in the variable $file
            $ext = $file->getClientOriginalExtension(); // gets the image extension (.png, .jpg, .jpeg)
            $filename = \Str::slug($request->name) . '_' . time() . '.' . $ext; // sets the file name as a url friendly name
            $file->storePubliclyAs('public/images', $filename); // uploads the image to a folder called public/images

            $user->image = $filename;
            $user->save();


        return redirect(route('all.lecturers'))->with(['message' => 'Lecturer Added Successfully']);
    }

    public function new()
    {
        $faculties = Faculty::all();
        $departments = Department::all();

        return view('d_pages.add-student', compact('faculties', 'departments'));
    }

    public function add_student(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role_id' => 'required',
            'faculty_id' => 'required',
            'department_id' => 'required',
            'bio' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => 1,
            'faculty_id' => $request->faculty_id,
            'department_id' => $request->department_id,
            'bio' => $request->bio,
            'image' => $request->image,
            'password' => Hash::make($request->password),
        ]);

            $file = $request->file('image'); // gets the file from the input field named image and stores it in the variable $file
            $ext = $file->getClientOriginalExtension(); // gets the image extension (.png, .jpg, .jpeg)
            $filename = \Str::slug($request->name) . '_' . time() . '.' . $ext; // sets the file name as a url friendly name
            $file->storePubliclyAs('public/images', $filename); // uploads the image to a folder called public/images

            $user->image = $filename;
            $user->save();


        return redirect(route('science.students'))->with(['message' => 'Student Added Successfully']);
    }

}
