<x-app-layout>

    <!-- main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Add Department</h2>
                <small class="text-muted">Welcome to Swift application</small>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Department Basic Info </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <form action="{{ route('store.department') }}" method="POST"> @csrf
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Department Name ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select name="faculty_id" id="" class="form-control">
                                                    <option>Select Faculty</option>
                                                    @foreach ($faculties as $faculty)
                                                        <option value="{{ $faculty->id }}">{{ $faculty->name }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-raised btn-default">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main content -->

</x-app-layout>
