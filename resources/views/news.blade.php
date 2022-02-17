@extends('layouts.main')

@section('title') News @endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-blog.css') }}">
@endsection

@section('content')
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">News</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">News
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-detached content-left">
            <div class="content-body">
                <!-- Blog List -->
                <div class="blog-list-wrapper">
                    <!-- Blog List Items -->
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <a href="page-blog-detail.html">
                                    <img class="card-img-top img-fluid" src="../../../app-assets/images/slider/02.jpg" alt="Blog Post pic" />
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="page-blog-detail.html" class="blog-title-truncate text-body-heading">The Best Features Coming to iOS and Web design</a>
                                    </h4>
                                    <div class="media">
                                        <div class="avatar mr-50">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" width="24" height="24" />
                                        </div>
                                        <div class="media-body">
                                            <small class="text-muted mr-25">by</small>
                                            <small><a href="javascript:void(0);" class="text-body">Ghani Pradita</a></small>
                                            <span class="text-muted ml-50 mr-25">|</span>
                                            <small class="text-muted">Jan 10, 2020</small>
                                        </div>
                                    </div>
                                    <!-- <div class="my-1 py-25">
                                        <a href="javascript:void(0);">
                                            <div class="badge badge-pill badge-light-info mr-50">Quote</div>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <div class="badge badge-pill badge-light-primary">Fashion</div>
                                        </a>
                                    </div> -->
                                    <p class="card-text blog-content-truncate">
                                        Donut fruitcake soufflé apple pie candy canes jujubes croissant chocolate bar ice cream.
                                    </p>
                                    <hr />
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="font-weight-bold">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="card">
                                <a href="page-blog-detail.html">
                                    <img class="card-img-top img-fluid" src="../../../app-assets/images/slider/02.jpg" alt="Blog Post pic" />
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="page-blog-detail.html" class="blog-title-truncate text-body-heading">The Best Features Coming to iOS and Web design</a>
                                    </h4>
                                    <div class="media">
                                        <div class="avatar mr-50">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" width="24" height="24" />
                                        </div>
                                        <div class="media-body">
                                            <small class="text-muted mr-25">by</small>
                                            <small><a href="javascript:void(0);" class="text-body">Ghani Pradita</a></small>
                                            <span class="text-muted ml-50 mr-25">|</span>
                                            <small class="text-muted">Jan 10, 2020</small>
                                        </div>
                                    </div>
                                    <!-- <div class="my-1 py-25">
                                        <a href="javascript:void(0);">
                                            <div class="badge badge-pill badge-light-info mr-50">Quote</div>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <div class="badge badge-pill badge-light-primary">Fashion</div>
                                        </a>
                                    </div> -->
                                    <p class="card-text blog-content-truncate">
                                        Donut fruitcake soufflé apple pie candy canes jujubes croissant chocolate bar ice cream.
                                    </p>
                                    <hr />
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="font-weight-bold">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--/ Blog List Items -->

                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center mt-2">
                                    <li class="page-item prev-item"><a class="page-link" href="javascript:void(0);"></a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                    <li class="page-item active" aria-current="page"><a class="page-link" href="javascript:void(0);">4</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">6</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">7</a></li>
                                    <li class="page-item next-item"><a class="page-link" href="javascript:void(0);"></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--/ Pagination -->
                </div>
                <!--/ Blog List -->

            </div>
        </div>
        <div class="sidebar-detached sidebar-right">
            <div class="sidebar">
                <div class="blog-sidebar my-2 my-lg-0">
                    <!-- Search bar -->
                    <div class="blog-search">
                        <div class="input-group input-group-merge">
                            <input type="text" class="form-control" placeholder="Cari..." />
                            <div class="input-group-append">
                                <span class="input-group-text cursor-pointer">
                                    <i data-feather="search"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--/ Search bar -->

                    <!-- Recent Posts -->
                    <div class="blog-recent-posts mt-3">
                        <h6 class="section-label">Recent News</h6>
                        <div class="mt-75">
                            <div class="media mb-2">
                                <a href="page-blog-detail.html" class="mr-2">
                                    <img class="rounded" src="../../../app-assets/images/banner/banner-22.jpg" width="100" height="70" alt="Recent Post Pic" />
                                </a>
                                <div class="media-body">
                                    <h6 class="blog-recent-post-title">
                                        <a href="page-blog-detail.html" class="text-body-heading">Why Should Forget Facebook?</a>
                                    </h6>
                                    <div class="text-muted mb-0">Jan 14 2020</div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--/ Recent Posts -->

                </div>

            </div>
        </div>
    </div>
</div>
<!-- END: Content-->
@endsection

@section('js')
@endsection