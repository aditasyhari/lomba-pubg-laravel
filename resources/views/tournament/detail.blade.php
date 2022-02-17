@extends('layouts.main')

@section('title') Detail Turnamen @endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-ecommerce-details.css') }}">
@endsection

@section('content')
<!-- BEGIN: Content-->
<div class="app-content content ecommerce-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Detail Tournament</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ url('tournament') }}">Tournament</a>
                                </li>
                                <li class="breadcrumb-item active">Detail
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <!-- app e-commerce details start -->
            <section class="app-ecommerce-details">
                <div class="card">
                    <!-- Product Details starts -->
                    <div class="card-body">
                        <div class="row my-2">
                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="../../../app-assets/images/pages/eCommerce/1.png" class="img-fluid product-img" alt="product image" />
                                </div>
                            </div>
                            <div class="col-12 col-md-7">
                                <h4>Apple Watch Series 5</h4>
                                <span class="card-text item-company">By <a href="javascript:void(0)" class="company-name">Apple</a></span>
                                <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                                    <h4 class="item-price mr-1">Rp 150.000</h4>

                                </div>
                                <p class="card-text">32 Slot - <span class="text-success">20 Tersedia</span></p>
                                <p class="card-text">
                                    GPS, Always-On Retina display, 30% larger screen, Swimproof, ECG app, Electrical and optical heart sensors,
                                    Built-in compass, Elevation, Emergency SOS, Fall Detection, S5 SiP with up to 2x faster 64-bit dual-core
                                    processor, watchOS 6 with Activity trends, cycle tracking, hearing health innovations, and the App Store on
                                    your wrist
                                </p>

                                <hr />
                                <div class="d-flex flex-column flex-sm-row pt-1">
                                    <a href="#" class="btn btn-primary mr-0 mr-sm-1 mb-1 mb-sm-0">
                                        <i data-feather="shopping-cart" class="mr-50"></i>
                                        <span class="add-to-cart">Ikut Tournament</span>
                                    </a>
                                    <div class="btn-group dropdown-icon-wrapper btn-share">
                                        <button type="button" class="btn btn-icon hide-arrow btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i data-feather="share-2"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item">
                                                <i data-feather="facebook"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item">
                                                <i data-feather="twitter"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item">
                                                <i data-feather="youtube"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item">
                                                <i data-feather="instagram"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Details ends -->

                    <!-- Item features starts -->
                    <div class="item-features">
                        <div class="row text-center">
                            <div class="col-12 col-md-4 mb-4 mb-md-0">
                                <div class="w-75 mx-auto">
                                    <i data-feather="award"></i>
                                    <h4 class="mt-2 mb-1">100% Original</h4>
                                    <p class="card-text">Chocolate bar candy canes ice cream toffee. Croissant pie cookie halvah.</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mb-4 mb-md-0">
                                <div class="w-75 mx-auto">
                                    <i data-feather="clock"></i>
                                    <h4 class="mt-2 mb-1">10 Day Replacement</h4>
                                    <p class="card-text">Marshmallow biscuit donut dragée fruitcake. Jujubes wafer cupcake.</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mb-4 mb-md-0">
                                <div class="w-75 mx-auto">
                                    <i data-feather="shield"></i>
                                    <h4 class="mt-2 mb-1">1 Year Warranty</h4>
                                    <p class="card-text">Cotton candy gingerbread cake I love sugar plum I love sweet croissant.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item features ends -->

                </div>
            </section>
            <!-- app e-commerce details end -->

        </div>
    </div>
</div>
<!-- END: Content-->
@endsection

@section('js')
<script src="{{ asset('app-assets/js/scripts/pages/app-ecommerce-details.js') }}"></script>
@endsection