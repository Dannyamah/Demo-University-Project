<x-app-layout>

    <!-- main content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>ALL DEPARTMENTS</h2>
        </div>
        <!-- Basic Examples -->
        @if (session()->has('message'))

        <div class="alert " style="background-color: #F15F79">

            <button type="button" data-dismiss="alert" class="close">x
            </button>

            {{session()->get('message')}}

        </div>

        @endif
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>All Departments</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="{{ route('add.department') }}">Add Departments</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>Dept. Name</th>
                                    <th>Faculty</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($departments as $department)
                                <tr>
                                    <td>{{ $department->id }}</td>
                                    <td>{{ $department->name }}</td>
                                    <td>{{ $department->faculty->name }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
</section>

</x-app-layout>
