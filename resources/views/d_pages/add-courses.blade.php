<x-app-layout>

    <!-- main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Add Course</h2>
                <small class="text-muted">Welcome to Swift application</small>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Course Basic Information </h2>
                        </div>
                        @foreach ($errors->all() as $err)
                            <p class="text-danger text-center">{{ $err }}</p>
                        @endforeach
                        <form action="{{ route('store.courses') }}" method="POST" enctype="multipart/form-data"> @csrf
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group drop-custum">
                                            <select name="faculty_id" class="form-control show-tick">
                                                <option>-- Select Faculty --</option>
                                                @foreach ($faculties as $faculty)
                                                    <option value="{{ $faculty->id }}"> {{ $faculty->name }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group drop-custum">
                                            <select name="semester_id" class="form-control show-tick">
                                                <option>-- Select Semester --</option>
                                                @foreach ($semesters as $semester)
                                                    <option value="{{ $semester->id }}"> {{ $semester->name }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="course_code" class="form-control"
                                                    placeholder="Course code">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="form-group drop-custum">
                                            <select name="session_id" class="form-control show-tick">
                                                <option>-- Select Academic Session --</option>
                                                @foreach ($sessions as $session)
                                                    <option value="{{ $session->id }}"> {{ $session->name }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="dz-message">
                                            <div class="drag-icon-cph"> <i class="material-icons">Upload Course
                                                    Image</i> </div>
                                        </div>
                                        <div class="fallback">
                                            <input name="image" type="file" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="btn btn-raised waves-effect g-bg-blush2">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main content -->

    <div class="color-bg"></div>

</x-app-layout>
