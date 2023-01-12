<x-app-layout>

    <!-- main content -->
<section class="content patients">
    <div class="container-fluid">
        <div class="block-header">
            <div class="d-sm-flex justify-content-between">
                <div>
                    <h2>All Student</h2>
                    <small class="text-muted">Welcome to Swift application</small>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            @foreach ($students as $student)

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card all-patients">
                    <div class="body">

                        <div class="row">
                            <div class="col-lg-4 col-md-12 m-b-0">
                                <a href="{{ route('view.profile') }}" class="p-profile-pix">
                                    <img src="/storage/images/{{$student->image}}" class="img-thumbnail img-fluid" style="width: 68.44px; height: 68.44px" alt="">
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-12 m-b-0">
                                <h5 class="m-b-0">{{$student->name}} <a href="#" class="edit"><i class="zmdi zmdi-edit"></i></a></h5> <small>MCA Sem-5</small>
                                <address class="m-t-10 m-b-0">
                                    123 Folsom Ave, Suite 100 New York, CADGE 56824<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- main content -->

<div class="color-bg"></div>

</x-app-layout>
