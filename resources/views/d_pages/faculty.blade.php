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
            <h2>All Faculties</h2>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Faculty Details</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="{{route('add.faculties')}}">Add Faculty</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="body table-responsive">

                       <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Subject</th>
                            </tr>
                        </thead>
                        @foreach ($faculties as $faculty)
                        <tbody>
                            <tr>
                                <td>{{$faculty->id}}</td>
                                <td>{{$faculty->name}}</td>
                                <td>Management</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>

                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>

</x-app-layout>
