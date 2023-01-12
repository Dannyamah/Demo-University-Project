<div>
    <form action="{{ route('student.profile') }}" method="POST" enctype="multipart/form-data">
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
    </form></div>
