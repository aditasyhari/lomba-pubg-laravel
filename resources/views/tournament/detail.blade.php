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
            @auth
                @if(Auth::user()->id_user == $data->id_penyelenggara)
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="grid"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ url('/tournament/edit/'.$data->slug) }}">
                                    <i class="mr-1" data-feather="edit-2"></i>
                                    <span class="align-middle">Edit</span>
                                </a>
                                <form id="form-delete" action="{{ url('/tournament/detail/delete/'.$data->id_tournament) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a class="dropdown-item" id="delete" href="#">
                                        <i class="mr-1" data-feather="trash-2"></i>
                                        <span class="align-middle">Hapus</span>
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @endauth
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
                                    <img src="{{ url('storage/images/tournament/thumbnail/'.$data->thumbnail) }}" class="img-fluid product-img" alt="product image" />
                                </div>
                            </div>
                            <div class="col-12 col-md-7">
                                <h4>{{ $data->nama }}</h4>
                                <span class="card-text item-company">By <a href="javascript:void(0)" class="company-name">{{ $data->penyelenggara->nama }}</a></span>
                                <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                                    <h4 class="item-price mr-1">Rp {{ number_format($data->biaya_pendaftaran, 0, '.', '.') }}</h4>

                                </div>
                                <p class="card-text">{{ $data->jumlah_slot }} Slot - <span class="text-success">{{ $data->sisa_slot }} Tersedia</span></p>
                                <p class="card-text">
                                    <i data-feather="map-pin" class="mr-50"></i> {{ $data->lokasi }}
                                </p>
                                <p class="card-text">
                                    {!! $data->deskripsi !!}
                                </p>

                                <hr />
                                <p class="card-text">
                                    <div>
                                        <span class="text-warning">Terakhir Pendaftaran</span> : {{ tanggal_indonesia($data->tgl_valid) }}
                                    </div>
                                    <div>
                                        <span class="text-info">Tanggal Tournament</span> : {{ tanggal_indonesia($data->tgl_tournament) }}
                                    </div>
                                </p>
                                <div class="d-flex flex-column flex-sm-row pt-1">
                                    <a href="#" class="btn btn-primary mr-0 mr-sm-1 mb-1 mb-sm-0">
                                        <i data-feather="corner-down-right" class="mr-50"></i>
                                        <span class="add-to-cart">Ikut Tournament</span>
                                    </a>
                                    @if($data->file != null && $data != '')
                                    <a href="{{ url('storage/images/tournament/file/'.$data->file) }}" target="_blank" class="btn btn-secondary mr-0 mr-sm-1 mb-1 mb-sm-0">
                                        <i data-feather="download" class="mr-50"></i>
                                        <span class="add-to-cart">Download Poster/File</span>
                                    </a>
                                    @endif
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
                                    <h4 class="mt-2 mb-1">100% Asli</h4>
                                    <p class="card-text">Tournament yang diposting dijamin asli.</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mb-4 mb-md-0">
                                <div class="w-75 mx-auto">
                                    <i data-feather="clock"></i>
                                    <h4 class="mt-2 mb-1">Transaksi Mudah</h4>
                                    <p class="card-text">Transaksi sangat mudah.</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mb-4 mb-md-0">
                                <div class="w-75 mx-auto">
                                    <i data-feather="shield"></i>
                                    <h4 class="mt-2 mb-1">Garansi</h4>
                                    <p class="card-text">Terdapat garansi jika terjadi kesalahan teknis atau penipuan.</p>
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

<script>
    $('#delete').on('click', function(e) {
        e.preventDefault();
        let form = $('#form-delete');
        Swal.fire({
            title: '<strong>Hapus Tournament?</strong>',
            icon: 'info',
            html:
            'Jika dihapus, data tidak dapat dikembalikan!',
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: false,
            confirmButtonText: 'Hapus',
            // confirmButtonAriaLabel: 'Thumbs up, great!',
            cancelButtonText: feather.icons['x'].toSvg({ class: 'font-medium-1' }),
            // cancelButtonAriaLabel: 'Thumbs down',
            customClass: {
                confirmButton: 'btn btn-primary',
                cancelButton: 'btn btn-outline-danger ml-1'
            },
            buttonsStyling: false
        }).then(function(isConfirm) {
            if(isConfirm.value == true) {
                form.submit();
            }
        });
    });
</script>
@endsection