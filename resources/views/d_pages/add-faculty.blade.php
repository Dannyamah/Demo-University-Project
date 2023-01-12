<x-app-layout>

    <!-- main content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Faculty</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Faculty Information </h2>
					</div>
					<div class="body">
                        <form action="{{ route('store.faculties') }}" method="POST"> @csrf
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="name" class="form-control" placeholder="Faculty Name">
                                        </div>
                                    </div>
                                </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-raised g-bg-blush2">Submit</button>
                            </div>
                            </div>
                    </form>
                    </div>
				</div>
			</div>
		</div>
    </div>
</section>
<!-- main content -->

</x-app-layout>
