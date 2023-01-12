<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Faculty;
use App\Models\Semester;
use App\Models\Session;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('d_pages.all-courses', compact('courses'));
    }

    public function create()
    {
        $semesters = Semester::latest()->get();
        $faculties = Faculty::latest()->get();
        $sessions = Session::latest()->get();

        return view('d_pages.add-courses', compact(['semesters', 'sessions', 'faculties']));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'faculty_id' => 'required',
            'semester_id' => 'required',
            'course_code' => 'required',
            'session_id' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
        ]);

        $course = Course::create([
            'name' => $request->name,
            'faculty_id' => $request->faculty_id,
            'semester_id' => $request->semester_id,
            'course_code' => $request->course_code,
            'session_id' => $request->session_id,
            'image' => $request->image
        ]);

            $file = $request->file('image'); // gets the file from the input field named image and stores it in the variable $file
            $ext = $file->getClientOriginalExtension(); // gets the image extension (.png, .jpg, .jpeg)
            $filename = \Str::slug($request->name) . '_' . time() . '.' . $ext; // sets the file name as a url friendly name
            $file->storePubliclyAs('public/images', $filename); // uploads the image to a folder called public/images

            $course->image = $filename;

        // to save the edited details
        $course->save();

        return redirect(route('all.courses'))->with(['message' => 'Course Added Successfully']);
    }
}
