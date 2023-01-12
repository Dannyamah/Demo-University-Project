<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Faculty;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('d_pages.department', compact('departments'));
    }

    public function create()
    {
        $faculties = Faculty::latest()->get();

        return view('d_pages.add-department', compact('faculties'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'faculty_id' => 'required'
        ]);

        $department = Department::create([
            'name' => $request->name,
            'faculty_id' => $request->faculty_id
        ]);

        $department->save();

        return redirect(route('all.departments'))->with(['message' => 'Department Has Been Added']);
    }
}
