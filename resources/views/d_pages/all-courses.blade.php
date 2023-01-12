<x-app-layout>

    @if (session()->has('message'))

    <div class="alert alert-success">

        <button type="button" data-dismiss="alert" class="close">x
        </button>

        {{session()->get('message')}}

    </div>

    @endif
    <!-- main content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>All Courses</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>

        <div class="row clearfix">
           @foreach ($courses as $course)
           <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="thumbnail card">
                <img src="/storage/images/{{ $course->image }}" alt=""  class="img-fluid">
                <div class="caption  body">
                    <h3>{{ $course->name }}</h3>
                    <p>{{$course->semester->name}} Semester, {{$course->session->name}}</p>
                    <p>Prof.: Prof. <strong>Will Smith</strong></p>
                    <p>Faculty: <strong class="col-green">{{$course->faculty->name}}</strong></p>
                    <a href="courses-info.html" class="btn  btn-raised btn-info waves-effect" role="button">Read more</a>
                </div>
            </div>
        </div>
           @endforeach
        </div>

    </div>
</section>


<div class="color-bg"></div>

</x-app-layout>
