<div>
    <form action="{{ route('lecturer.profile') }}" method="POST" enctype="multipart/form-data">
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

</div>
