<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Faculty;
use App\Models\User;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index()
    {
        $faculties = Faculty::all();

       return view('d_pages.faculty', compact('faculties'));
    }

    public function create()
    {
       return view('d_pages.add-faculty');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required'
        ]);

        $faculty = Faculty::create([
            'name' => $request->name
        ]);

        $faculty->save();

        return redirect(route('all.faculties'))->with(['message' => 'Faculty Added']);
    }

    public function show()
    {

        $lecturers = User::where('role_id', 2)->get();
        return view('d_pages.lecturers', compact('lecturers'));
    }

    

}
