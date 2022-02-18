@extends('layouts.main')

@section('title') Detail Berita @endsection

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
                        <h2 class="content-header-title float-left mb-0">Detail Berita</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ url('news') }}">Berita</a>
                                </li>
                                <li class="breadcrumb-item active">Detail
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="content-detached content-left">
            <div class="content-body">
                <!-- Blog Detail -->
                <div class="blog-detail-wrapper">
                    <div class="row">
                        <!-- Blog -->
                        <div class="col-12">
                            <div class="card">
                                <img src="../../../app-assets/images/banner/banner-12.jpg" class="img-fluid card-img-top" alt="Blog Detail Pic" />
                                <div class="card-body">
                                    <h4 class="card-title">The Best Features Coming to iOS and Web design</h4>
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
                                    <div class="my-1 py-25">
                                        <a href="javascript:void(0);">
                                            <div class="badge badge-pill badge-light-danger mr-50">Gaming</div>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <div class="badge badge-pill badge-light-warning">Video</div>
                                        </a>
                                    </div>
                                    <p class="card-text mb-2">
                                        Before you get into the nitty-gritty of coming up with a perfect title, start with a rough draft: your
                                        working title. What is that, exactly? A lot of people confuse working titles with topics. Let's clear that
                                        Topics are very general and could yield several different blog posts. Think "raising healthy kids," or
                                        "kitchen storage." A writer might look at either of those topics and choose to take them in very, very
                                        different directions.A working title, on the other hand, is very specific and guides the creation of a
                                        single blog post. For example, from the topic "raising healthy kids," you could derive the following working
                                        title See how different and specific each of those is? That's what makes them working titles, instead of
                                        overarching topics.
                                    </p>
                                    
                                    <div class="media">
                                        <div class="avatar mr-2">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" width="60" height="60" alt="Avatar" />
                                        </div>
                                        <div class="media-body">
                                            <h6 class="font-weight-bolder">Willie Clark</h6>
                                            <p class="card-text mb-0">
                                                Based in London, Uncode is a blog by Willie Clark. His posts explore modern design trends through photos
                                                and quotes by influential creatives and web designer around the world.
                                            </p>
                                        </div>
                                    </div>
                                    <hr class="my-2" />
                                    <div class="d-flex align-items-center justify-content-between">
                                        <!-- <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center mr-1">
                                                <a href="javascript:void(0);" class="mr-50">
                                                    <i data-feather="message-square" class="font-medium-5 text-body align-middle"></i>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <div class="text-body align-middle">19.1K</div>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" class="mr-50">
                                                    <i data-feather="bookmark" class="font-medium-5 text-body align-middle"></i>
                                                </a>
                                                <a href="javascript:void(0);">
                                                    <div class="text-body align-middle">139</div>
                                                </a>
                                            </div>
                                        </div> -->
                                        <div class="dropdown blog-detail-share">
                                            <i data-feather="share-2" class="font-medium-5 text-body cursor-pointer" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="javascript:void(0);" class="dropdown-item py-50 px-1">
                                                    <i data-feather="github" class="font-medium-3"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item py-50 px-1">
                                                    <i data-feather="gitlab" class="font-medium-3"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item py-50 px-1">
                                                    <i data-feather="facebook" class="font-medium-3"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item py-50 px-1">
                                                    <i data-feather="twitter" class="font-medium-3"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="dropdown-item py-50 px-1">
                                                    <i data-feather="linkedin" class="font-medium-3"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Blog -->

                        <!-- Blog Comment -->
                        <div class="col-12 mt-1" id="blogComment">
                            <h6 class="section-label mt-25">Komentar</h6>
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="avatar mr-75">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-9.jpg" width="38" height="38" alt="Avatar" />
                                        </div>
                                        <div class="media-body">
                                            <h6 class="font-weight-bolder mb-25">Chad Alexander</h6>
                                            <p class="card-text">May 24, 2020</p>
                                            <p class="card-text">
                                                A variation on the question technique above, the multiple-choice question great way to engage your
                                                reader.
                                            </p>
                                            <a href="javascript:void(0);">
                                                <div class="d-inline-flex align-items-center">
                                                    <i data-feather="corner-up-left" class="font-medium-3 mr-50"></i>
                                                    <span>Reply</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Blog Comment -->

                        <!-- Leave a Blog Comment -->
                        <div class="col-12 mt-1">
                            <h6 class="section-label mt-25">Tinggalkan Komentar</h6>
                            <div class="card">
                                <div class="card-body">
                                    <form action="javascript:void(0);" class="form">
                                        <div class="row">
                                            <div class="col-12">
                                                <textarea class="form-control mb-2" rows="4" placeholder="Comment"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary">Komentar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--/ Leave a Blog Comment -->
                    </div>
                </div>
                <!--/ Blog Detail -->

            </div>
        </div>
        <div class="sidebar-detached sidebar-right">
            <div class="sidebar">
                <div class="blog-sidebar my-2 my-lg-0">
                    <!-- Search bar -->
                    <div class="blog-search">
                        <div class="input-group input-group-merge">
                            <input type="text" class="form-control" placeholder="Cari berita" />
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
                        <h6 class="section-label">Berita Terakhir</h6>
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