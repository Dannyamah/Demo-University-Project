<x-app-layout>

    <!-- main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="d-sm-flex justify-content-between">
                    <div>
                        <h2>All Professors</h2>
                        <small class="text-muted">Welcome to Swift application</small>
                    </div>
                </div>
            </div>
            @if (session()->has('message'))

            <div class="alert" style="background-color: #F15F79">

                <button type="button" data-dismiss="alert" class="close">x
                </button>

                {{session()->get('message')}}

            </div>

            @endif
            <div class="row clearfix">
                @foreach ($lecturers as $lecturer)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="card">


                        <div class="body">

                                <div class="member-card verified">

                                    <div class="thumb-xl member-thumb">
                                        <img src="/storage/images/{{$lecturer->image}}"
                                            class="img-thumbnail rounded-circle" alt="profile-image">
                                    </div>

                                    <div class="m-t-20">
                                        <h4 class="m-b-0">{{ $lecturer->name }}</h4>
                                        <p class="text-muted"><span> <a href="#"
                                                    class="text-pink">websitename.com</a> </span></p>
                                    </div>

                                    <p class="text-muted">{{ $lecturer->address }}</p>
                                    <a href="{{ route('view.profile') }}" class="btn btn-raised btn-default">View
                                        Profile</a>
                                    <ul class="social-links  m-t-10">
                                        <li><a title="facebook" href=""><i class="zmdi zmdi-facebook"></i></a>
                                        </li>
                                        <li><a title="twitter" href=""><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a title="instagram" href=""><i class="zmdi zmdi-instagram"></i></a>
                                        </li>
                                    </ul>

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
