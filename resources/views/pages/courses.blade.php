<x-guest-layout>

<!--page-banner-area start-->
<div class="page-banner height-200 bg-1">
    <div class="d-table">
        <div class="page-title vertical-middle text-center">
            <h2 class="mt-5 pt-5">Our Courses</h2>
        </div>
    </div>
</div>
<!--page-banner-area end-->

<!--breadcrumb-area start-->
<div class="breadcrumb-area mt-25">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="site-breadcrumb">
                    <ul class="list-none">
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Courses Grid</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumb-area end-->

<!--course-area start-->
<div class="course-area mt-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row align-items-center mb-30">
                    <div class="col-lg-3">
                        <div class="sidebar-search mb-sm-30">
                            <input type="text" placeholder="Search courses name" />
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-7">
                        <div class="products-sort">
                            <form>
                                <select>
                                    <option>Default Sorting</option>
                                    <option>Sort by A - Z</option>
                                    <option>Sort Price Low - High</option>
                                </select>
                            </form>
                        </div>
                        <div class="products-sort">
                            <form>
                                <label>Show :</label>
                                <select>
                                    <option>12</option>
                                    <option>8</option>
                                    <option>4</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="site-pagination on-top pull-right">
                            <ul>
                                <li><a href=" " class="active">1</a></li>
                                <li>of</li>
                                <li><a href=" ">3</a></li>
                                <li><a href=" "><i class="fa fa-long-arrow-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="product-view-system pull-right" role="tablist">
                            <ul class="nav nav-tabs">
                                <li><a class="active" data-toggle="tab" href="#grid-products"><img src="assets/images/icons/icon-grid.png" alt="" /></a></li>
                                <li><a data-toggle="tab" href="#list-products"><img src="assets/images/icons/icon-list.png" alt="" /></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <!--single-tab-->
                    <div id="grid-products" class="tab-pane">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 mb-30">
                                <div class="course-single">
                                    <div class="course-thumb">
                                        <a href=""><img src="assets/images/courses/1.jpg" alt="" /></a>
                                    </div>
                                    <div class="course-info">
                                        <div class="author-info">
                                            <div class="author-name">
                                                <img src="assets/images/courses/authors/1.jpg" alt="" />
                                                <a href=" ">Mr. John Wick</a>
                                                <small>Materials</small>
                                            </div>
                                            <div class="course-price text-right">
                                                <h5>$180</h5>
                                            </div>
                                        </div>
                                        <div class="course-text mt-10">
                                            <h3><a href="">Chemical Engineering</a></h3>
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                                        </div>
                                    </div>
                                    <div class="course-meta">
                                        <a href=" "><i class="fa fa-calendar"></i>25 Oct, 2019</a>
                                        <a href=" "><i class="fa fa-user"></i>20/38 Student</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-30">
                                <div class="course-single">
                                    <div class="course-thumb">
                                        <a href=""><img src="assets/images/courses/2.jpg" alt="" /></a>
                                    </div>
                                    <div class="course-info">
                                        <div class="author-info">
                                            <div class="author-name">
                                                <img src="assets/images/courses/authors/2.jpg" alt="" />
                                                <a href=" ">Mr. Tom Redder</a>
                                                <small>Financial</small>
                                            </div>
                                            <div class="course-price text-right">
                                                <h5>$210</h5>
                                            </div>
                                        </div>
                                        <div class="course-text mt-10">
                                            <h3><a href="">Financial Accounting</a></h3>
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                                        </div>
                                    </div>
                                    <div class="course-meta">
                                        <a href=" "><i class="fa fa-calendar"></i>25 Oct, 2019</a>
                                        <a href=" "><i class="fa fa-user"></i>20/38 Student</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-30">
                                <div class="course-single">
                                    <div class="course-thumb">
                                        <a href=""><img src="assets/images/courses/3.jpg" alt="" /></a>
                                    </div>
                                    <div class="course-info">
                                        <div class="author-info">
                                            <div class="author-name">
                                                <img src="assets/images/courses/authors/3.jpg" alt="" />
                                                <a href=" ">Ms. Lucius</a>
                                                <small>Financial</small>
                                            </div>
                                            <div class="course-price text-right">
                                                <h5>Free</h5>
                                            </div>
                                        </div>
                                        <div class="course-text mt-10">
                                            <h3><a href="">Graphic Designer</a></h3>
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                                        </div>
                                    </div>
                                    <div class="course-meta">
                                        <a href=" "><i class="fa fa-calendar"></i>25 Oct, 2019</a>
                                        <a href=" "><i class="fa fa-user"></i>20/38 Student</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 ">
                                <div class="course-single">
                                    <div class="course-thumb">
                                        <a href=""><img src="assets/images/courses/4.jpg" alt="" /></a>
                                    </div>
                                    <div class="course-info">
                                        <div class="author-info">
                                            <div class="author-name">
                                                <img src="assets/images/courses/authors/4.jpg" alt="" />
                                                <a href=" ">Ms. Lara Croft</a>
                                                <small>Chemistry</small>
                                            </div>
                                            <div class="course-price text-right">
                                                <h5>$420</h5>
                                            </div>
                                        </div>
                                        <div class="course-text mt-10">
                                            <h3><a href="">UX/UI Designer</a></h3>
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                                        </div>
                                    </div>
                                    <div class="course-meta">
                                        <a href=" "><i class="fa fa-calendar"></i>25 Oct, 2019</a>
                                        <a href=" "><i class="fa fa-user"></i>20/38 Student</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-30">
                                <div class="course-single">
                                    <div class="course-thumb">
                                        <a href=""><img src="assets/images/courses/5.jpg" alt="" /></a>
                                    </div>
                                    <div class="course-info">
                                        <div class="author-info">
                                            <div class="author-name">
                                                <img src="assets/images/courses/authors/3.jpg" alt="" />
                                                <a href=" ">Ms. Lucius</a>
                                                <small>Financial</small>
                                            </div>
                                            <div class="course-price text-right">
                                                <h5>Free</h5>
                                            </div>
                                        </div>
                                        <div class="course-text mt-10">
                                            <h3><a href="">Materials Technology</a></h3>
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                                        </div>
                                    </div>
                                    <div class="course-meta">
                                        <a href=" "><i class="fa fa-calendar"></i>25 Oct, 2019</a>
                                        <a href=" "><i class="fa fa-user"></i>20/38 Student</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-30">
                                <div class="course-single">
                                    <div class="course-thumb">
                                        <a href=""><img src="assets/images/courses/6.jpg" alt="" /></a>
                                    </div>
                                    <div class="course-info">
                                        <div class="author-info">
                                            <div class="author-name">
                                                <img src="assets/images/courses/authors/4.jpg" alt="" />
                                                <a href=" ">Ms. Lara Croft</a>
                                                <small>Chemistry</small>
                                            </div>
                                            <div class="course-price text-right">
                                                <h5>$420</h5>
                                            </div>
                                        </div>
                                        <div class="course-text mt-10">
                                            <h3><a href="">Programming Techniques</a></h3>
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                                        </div>
                                    </div>
                                    <div class="course-meta">
                                        <a href=" "><i class="fa fa-calendar"></i>25 Oct, 2019</a>
                                        <a href=" "><i class="fa fa-user"></i>20/38 Student</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-30">
                                <div class="course-single">
                                    <div class="course-thumb">
                                        <a href=""><img src="assets/images/courses/10.jpg" alt="" /></a>
                                    </div>
                                    <div class="course-info">
                                        <div class="author-info">
                                            <div class="author-name">
                                                <img src="assets/images/courses/authors/1.jpg" alt="" />
                                                <a href=" ">Mr. John Wick</a>
                                                <small>Materials</small>
                                            </div>
                                            <div class="course-price text-right">
                                                <h5>$180</h5>
                                            </div>
                                        </div>
                                        <div class="course-text mt-10">
                                            <h3><a href="">Chemical Engineering</a></h3>
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                                        </div>
                                    </div>
                                    <div class="course-meta">
                                        <a href=" "><i class="fa fa-calendar"></i>25 Oct, 2019</a>
                                        <a href=" "><i class="fa fa-user"></i>20/38 Student</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="course-single mb-30">
                                    <div class="course-thumb">
                                        <a href=""><img src="assets/images/courses/9.jpg" alt="" /></a>
                                    </div>
                                    <div class="course-info">
                                        <div class="author-info">
                                            <div class="author-name">
                                                <img src="assets/images/courses/authors/2.jpg" alt="" />
                                                <a href=" ">Mr. Tom Redder</a>
                                                <small>Financial</small>
                                            </div>
                                            <div class="course-price text-right">
                                                <h5>$210</h5>
                                            </div>
                                        </div>
                                        <div class="course-text mt-10">
                                            <h3><a href="">Financial Accounting</a></h3>
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                                        </div>
                                    </div>
                                    <div class="course-meta">
                                        <a href=" "><i class="fa fa-calendar"></i>25 Oct, 2019</a>
                                        <a href=" "><i class="fa fa-user"></i>20/38 Student</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="course-single mb-30">
                                    <div class="course-thumb">
                                        <a href=""><img src="assets/images/courses/8.jpg" alt="" /></a>
                                    </div>
                                    <div class="course-info">
                                        <div class="author-info">
                                            <div class="author-name">
                                                <img src="assets/images/courses/authors/3.jpg" alt="" />
                                                <a href=" ">Ms. Lucius</a>
                                                <small>Financial</small>
                                            </div>
                                            <div class="course-price text-right">
                                                <h5>Free</h5>
                                            </div>
                                        </div>
                                        <div class="course-text mt-10">
                                            <h3><a href="">Graphic Designer</a></h3>
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                                        </div>
                                    </div>
                                    <div class="course-meta">
                                        <a href=" "><i class="fa fa-calendar"></i>25 Oct, 2019</a>
                                        <a href=" "><i class="fa fa-user"></i>20/38 Student</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--single-tab-->
                    <div id="list-products" class="tab-pane fade in show active">
                        <div class="row">
                            <div class="col-lg-12 mb-30">
                                <div class="course-single list-view">
                                    <div class="course-thumb">
                                        <a href=""><img src="assets/images/courses/10.jpg" alt="" /></a>
                                    </div>
                                    <div class="course-info">
                                        <div class="course-text mt-10">
                                            <div class="table-view">
                                                <div class="table-cell pr-10">
                                                    <h3><a href="">Chemical Engineering</a></h3>
                                                </div>
                                                <div class="table-cell">
                                                    <div class="course-price text-right">
                                                        <h5>$180</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="course-meta">
                                                <a href=" "><i class="fa fa-calendar"></i>25 Oct, 2019</a>
                                                <a href=" "><i class="fa fa-user"></i>20/38 Student</a>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                                        </div>
                                        <div class="author-info">
                                            <div class="author-name">
                                                <img src="assets/images/courses/authors/1.jpg" alt="" />
                                                <a href=" ">Mr. John Wick</a>
                                                <small>Materials</small>
                                            </div>
                                            <div class="course-rating text-right">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-30">
                                <div class="course-single list-view">
                                    <div class="course-thumb">
                                        <a href=""><img src="assets/images/courses/9.jpg" alt="" /></a>
                                    </div>
                                    <div class="course-info">
                                        <div class="course-text mt-10">
                                            <div class="table-view">
                                                <div class="table-cell pr-10">
                                                    <h3><a href="">Financial Accounting</a></h3>
                                                </div>
                                                <div class="table-cell">
                                                    <div class="course-price text-right">
                                                        <h5>$60</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="course-meta">
                                                <a href=" "><i class="fa fa-calendar"></i>25 Oct, 2019</a>
                                                <a href=" "><i class="fa fa-user"></i>20/38 Student</a>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                                        </div>
                                        <div class="author-info">
                                            <div class="author-name">
                                                <img src="assets/images/courses/authors/2.jpg" alt="" />
                                                <a href=" ">Mr. John Wick</a>
                                                <small>Materials</small>
                                            </div>
                                            <div class="course-rating text-right">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-30">
                                <div class="course-single list-view">
                                    <div class="course-thumb">
                                        <a href=""><img src="assets/images/courses/6.jpg" alt="" /></a>
                                    </div>
                                    <div class="course-info">
                                        <div class="course-text mt-10">
                                            <div class="table-view">
                                                <div class="table-cell pr-10">
                                                    <h3><a href="">Programming Techniques</a></h3>
                                                </div>
                                                <div class="table-cell">
                                                    <div class="course-price text-right">
                                                        <h5>$90</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="course-meta">
                                                <a href=" "><i class="fa fa-calendar"></i>25 Nov, 2019</a>
                                                <a href=" "><i class="fa fa-user"></i>20/38 Student</a>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                                        </div>
                                        <div class="author-info">
                                            <div class="author-name">
                                                <img src="assets/images/courses/authors/3.jpg" alt="" />
                                                <a href=" ">Mr. John Wick</a>
                                                <small>Materials</small>
                                            </div>
                                            <div class="course-rating text-right">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-30">
                                <div class="course-single list-view">
                                    <div class="course-thumb">
                                        <a href=""><img src="assets/images/courses/8.jpg" alt="" /></a>
                                    </div>
                                    <div class="course-info">
                                        <div class="course-text mt-10">
                                            <div class="table-view">
                                                <div class="table-cell pr-10">
                                                    <h3><a href="">Graphic Designer</a></h3>
                                                </div>
                                                <div class="table-cell">
                                                    <div class="course-price text-right">
                                                        <h5>$75</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="course-meta">
                                                <a href=" "><i class="fa fa-calendar"></i>25 Nov, 2019</a>
                                                <a href=" "><i class="fa fa-user"></i>20/38 Student</a>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                                        </div>
                                        <div class="author-info">
                                            <div class="author-name">
                                                <img src="assets/images/courses/authors/3.jpg" alt="" />
                                                <a href=" ">Mr. John Wick</a>
                                                <small>Materials</small>
                                            </div>
                                            <div class="course-rating text-right">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-30">
                                <div class="course-single list-view">
                                    <div class="course-thumb">
                                        <a href=""><img src="assets/images/courses/5.jpg" alt="" /></a>
                                    </div>
                                    <div class="course-info">
                                        <div class="course-text mt-10">
                                            <div class="table-view">
                                                <div class="table-cell pr-10">
                                                    <h3><a href="">UX/UI Designer</a></h3>
                                                </div>
                                                <div class="table-cell">
                                                    <div class="course-price text-right">
                                                        <h5>$85</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="course-meta">
                                                <a href=" "><i class="fa fa-calendar"></i>25 Nov, 2019</a>
                                                <a href=" "><i class="fa fa-user"></i>20/38 Student</a>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                                        </div>
                                        <div class="author-info">
                                            <div class="author-name">
                                                <img src="assets/images/courses/authors/1.jpg" alt="" />
                                                <a href=" ">Mr. John Wick</a>
                                                <small>Materials</small>
                                            </div>
                                            <div class="course-rating text-right">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="site-pagination">
                            <ul>
                                <li><a href=" " class="active">1</a></li>
                                <li>of</li>
                                <li><a href=" ">3</a></li>
                                <li><a href=" "><i class="fa fa-long-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-results pull-right">
                            <span>Showing 1–3 of 60 results</span>
                            <div class="products-sort ml-35 mr-0">
                                <form>
                                    <label>Show :</label>
                                    <select>
                                        <option>12</option>
                                        <option>8</option>
                                        <option>4</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--course-area end-->

</x-guest-layout>
