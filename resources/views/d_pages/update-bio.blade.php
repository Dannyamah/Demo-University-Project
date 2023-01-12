<x-app-layout>

    <!-- main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Update Profile</h2>
                <small class="text-muted">Welcome to Swift application</small>
            </div>


            <!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2> VERTICAL LAYOUT <small>With floating label</small> </h2>
                        </div>
                        @foreach ($errors->all() as $err)
                            <p class="text-danger text-center">{{ $err }}</p>
                        @endforeach
                        <div class="body">
                            @if (Auth::user()->role == 'student')
                                <form action="{{ route('student.profile') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <select name="faculty_id" class="form-control">
                                                <option>Select Faculty</option>
                                                @foreach ($faculties as $faculty)
                                                    <option value="{{ $faculty->id }}">{{ $faculty->name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <select name="department_id" class="form-control">
                                                <option>Select Department</option>
                                                @foreach ($departments as $department)
                                                    <option value="{{ $department->id }}">{{ $department->name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="bio" class="form-control">
                                            <label class="form-label">Short Bio About Yourself</label>
                                        </div>
                                    </div>
                                    <div>
                                        <input name="image" type="file" />
                                    </div>
                                    <button class="btn btn-raised btn-primary m-t-15 waves-effect">Save</button>
                                </form>
                                @elseif (Auth::user()->role == 'admin')

                                <form action="{{ route('student.profile') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <select name="faculty_id" class="form-control">
                                                <option>Select Faculty</option>
                                                @foreach ($faculties as $faculty)
                                                    <option value="{{ $faculty->id }}">{{ $faculty->name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <select name="department_id" class="form-control">
                                                <option>Select Department</option>
                                                @foreach ($departments as $department)
                                                    <option value="{{ $department->id }}">{{ $department->name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="bio" class="form-control">
                                            <label class="form-label">Short Bio About Yourself</label>
                                        </div>
                                    </div>
                                    <div>
                                        <input name="image" type="file" />
                                    </div>
                                    <button class="btn btn-raised btn-primary m-t-15 waves-effect">Save</button>
                                </form>
                            @elseif (Auth::user()->role == 'lecturer')
                                <form action="{{ route('lecturer.profile') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <select name="course_id" class="form-control">
                                                <option>Select Course</option>
                                                @foreach ($courses as $course)
                                                    <option value="{{ $course->id }}">{{ $course->name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <input name="image" type="file" />
                                    </div>
                                    <button class="btn btn-raised btn-primary m-t-15 waves-effect">Save</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vertical Layout | With Floating Label -->

        </div>
    </section>
    <!-- main content -->

    <div class="color-bg"></div>

</x-app-layout>
