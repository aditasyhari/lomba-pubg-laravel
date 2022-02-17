@extends('layouts.main')

@section('title') Tournament @endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-ecommerce.css') }}">
@endsection

@section('content')
<!-- BEGIN: Content-->
<div class="app-content content ecommerce-application">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Tournament</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Tournament
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-detached">
            <div class="content-body">
                <section id="ecommerce-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="ecommerce-header-items">
                                <div class="result-toggler">
                                    <button class="navbar-toggler shop-sidebar-toggler" type="button" data-toggle="collapse">
                                        <span class="navbar-toggler-icon d-block d-lg-none"><i data-feather="menu"></i></span>
                                    </button>
                                    <div class="search-results">16285 hasil ditemukan</div>
                                </div>
                                <div class="view-options d-flex">
                                    <!-- <div class="btn-group dropdown-sort">
                                        <button type="button" class="btn btn-outline-primary dropdown-toggle mr-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="active-sorting">Featured</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Featured</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Lowest</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Highest</a>
                                        </div>
                                    </div> -->
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-icon btn-outline-primary view-btn grid-view-btn">
                                            <input type="radio" name="radio_options" id="radio_option1" checked />
                                            <i data-feather="grid" class="font-medium-3"></i>
                                        </label>
                                        <label class="btn btn-icon btn-outline-primary view-btn list-view-btn">
                                            <input type="radio" name="radio_options" id="radio_option2" />
                                            <i data-feather="list" class="font-medium-3"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- background Overlay when sidebar is shown  starts-->
                <div class="body-content-overlay"></div>
                <!-- background Overlay when sidebar is shown  ends-->

                <section id="ecommerce-searchbar" class="ecommerce-searchbar">
                    <div class="row mt-1">
                        <div class="col-sm-12">
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control search-product" id="shop-search" placeholder="Cari Tournament" aria-label="Cari..." aria-describedby="tournament-search" />
                                <div class="input-group-append">
                                    <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="ecommerce-products" class="grid-view">
                    <div class="card ecommerce-card">
                        <div class="item-img text-center">
                            <a href="#">
                                <img class="img-fluid card-img-top" src="../../../app-assets/images/pages/eCommerce/1.png" alt="img-placeholder" /></a>
                        </div>
                        <div class="card-body">
                            <div class="item-wrapper">
                                <div>
                                    Tersedia <b class="text-warning">20</b> dari <b>32</b> Slot
                                </div>
                                <div>
                                    <h6 class="item-price text-light">Rp 150.000 <span class="text-secondary">/ team</span></h6>
                                </div>
                            </div>
                            <h6 class="item-name">
                                <a class="text-body" href="#">Disini Judul Tournament</a>
                                <span class="card-text item-company">By <a href="javascript:void(0)" class="company-name">Anonymous</a></span>
                            </h6>
                            <p class="card-text item-description">
                                On Retina display that never sleeps, so it’s easy to see the time and other important information, without
                                raising or tapping the display. New location features, from a built-in compass to current elevation, help users
                                better navigate their day, while international emergency calling1 allows customers to call emergency services
                                directly from Apple Watch in over 150 countries, even without iPhone nearby. Apple Watch Series 5 is available
                                in a wider range of materials, including aluminium, stainless steel, ceramic and an all-new titanium.
                            </p>
                        </div>
                        <div class="item-options text-center">
                            <div class="item-wrapper">
                                <div class="item-cost">
                                    <h4 class="item-price text-light">Rp 150.000 <span class="text-secondary">/ team</span></h4>
                                </div>
                            </div>
                            <a href="#" class="btn btn-primary btn-cart">
                                <span>Detail</span>
                            </a>
                            <!-- <a href="javascript:void(0)" class="btn btn-primary btn-cart">
                                <i data-feather="shopping-cart"></i>
                                <span class="add-to-cart">Add to cart</span>
                            </a> -->
                        </div>
                    </div>

                    <div class="card ecommerce-card">
                        <div class="item-img text-center">
                            <a href="#">
                                <img class="img-fluid card-img-top" src="../../../app-assets/images/pages/eCommerce/1.png" alt="img-placeholder" /></a>
                        </div>
                        <div class="card-body">
                            <div class="item-wrapper">
                                <div>
                                    Tersedia <b class="text-warning">20</b> dari <b>32</b> Slot
                                </div>
                                <div>
                                    <h6 class="item-price text-light">Rp 150.000 <span class="text-secondary">/ team</span></h6>
                                </div>
                            </div>
                            <h6 class="item-name">
                                <a class="text-body" href="#">Disini Judul Tournament</a>
                                <span class="card-text item-company">By <a href="javascript:void(0)" class="company-name">Anonymous</a></span>
                            </h6>
                            <p class="card-text item-description">
                                On Retina display that never sleeps, so it’s easy to see the time and other important information, without
                                raising or tapping the display. New location features, from a built-in compass to current elevation, help users
                                better navigate their day, while international emergency calling1 allows customers to call emergency services
                                directly from Apple Watch in over 150 countries, even without iPhone nearby. Apple Watch Series 5 is available
                                in a wider range of materials, including aluminium, stainless steel, ceramic and an all-new titanium.
                            </p>
                        </div>
                        <div class="item-options text-center">
                            <div class="item-wrapper">
                                <div class="item-cost">
                                    <h4 class="item-price text-light">Rp 150.000 <span class="text-secondary">/ team</span></h4>
                                </div>
                            </div>
                            <a href="{{ url('tournament/detail') }}" class="btn btn-primary btn-cart">
                                <span>Detail</span>
                            </a>
                            <!-- <a href="javascript:void(0)" class="btn btn-primary btn-cart">
                                <i data-feather="shopping-cart"></i>
                                <span class="add-to-cart">Add to cart</span>
                            </a> -->
                        </div>
                    </div>
                    
                </section>

                <!-- Pagination Starts -->
                <section id="ecommerce-pagination">
                    <div class="row">
                        <div class="col-sm-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center mt-2">
                                    <li class="page-item prev-item"><a class="page-link" href="javascript:void(0);"></a></li>
                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                    <li class="page-item" aria-current="page"><a class="page-link" href="javascript:void(0);">4</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">6</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">7</a></li>
                                    <li class="page-item next-item"><a class="page-link" href="javascript:void(0);"></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </section>
                <!-- Pagination Ends -->

            </div>
        </div>

    </div>
</div>
<!-- END: Content-->
@endsection

@section('js')
<script src="{{ asset('app-assets/js/scripts/pages/app-ecommerce.js') }}"></script>
@endsection