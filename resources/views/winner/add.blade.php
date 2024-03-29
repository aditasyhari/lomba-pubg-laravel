@extends('layouts.main')

@section('title') Tambah Pemenang @endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-blog.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/editors/quill/katex.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/editors/quill/monokai-sublime.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/editors/quill/quill.snow.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-quill-editor.css') }}">
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
                        <h2 class="content-header-title float-left mb-0">Pemenang</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Tambah Pemenang
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Blog Edit -->
            <div class="blog-edit-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="avatar mr-75">
                                        @if(Auth::user()->foto == '' || Auth::user()->foto == null)
                                        <img src="{{ asset('images/default.jpg') }}" width="38" height="38" alt="Avatar" />
                                        @else
                                        <img src="{{ asset('images/profile/'.Auth::user()->foto) }}" width="38" height="38" alt="Avatar" />
                                        @endif
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-25 text-capitalize">{{ Auth::user()->nama }}</h6>
                                        <p class="card-text">{{ tanggal_indonesia($date) }}</p>
                                    </div>
                                </div>
                                @if ($errors->any())
                                    <div class="alert alert-danger mt-2" role="alert">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <!-- Form -->
                                <form action="{{ url('/pemenang/add') }}" class="mt-2" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="judul">Judul</label>
                                                <input type="text" id="judul" class="form-control" name="judul" placeholder="judul" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="blog-edit-status">Status</label>
                                                <select class="form-control" id="status">
                                                    <option value="Published" selected>Published</option>
                                                    <!-- <option value="Pending">Pending</option>
                                                    <option value="Draft">Draft</option> -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="">Team Pemenang</label>
                                                <input type="text" id="team" class="form-control" name="team" placeholder="nama team" required/>
                                            </div>
                                        </div>
                                        @if(Auth::user()->role != 'admin')
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="">No. Rekening</label>
                                                <input type="text" id="norek_pemenang" class="form-control" name="norek_pemenang" placeholder="Contoh: BCA 678xxxx" required/>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="col-12">
                                            <div class="form-group mb-2">
                                                <label>Konten</label>
                                                <div id="blog-editor-wrapper">
                                                    <div id="blog-editor-container">
                                                        <input type="hidden" id="konten" name="konten">
                                                        <div class="editor" id="editor">
                                                            <p>
                                                                ketikkan sesuatu disini...
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3 mb-2">
                                            <div class="border rounded p-2">
                                                <h4 class="mb-1">Thumbnail</h4>
                                                <div class="media flex-column flex-md-row">
                                                    <!-- <img src="{{ asset('images/default.jpg') }}" id="blog-feature-image" class="rounded mr-2 mb-1 mb-md-0" width="130" height="110" alt="thumbnail" /> -->
                                                    <div class="media-body">
                                                        <small class="text-muted">Recommended image resolution 800x400,<br>max image size 2mb.</small>
                                                        <div class="d-inline-block">
                                                            <div class="form-group mb-0">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="" name="thumbnail" accept="image/*" required/>
                                                                    <label class="custom-file-label" for="blogCustomFile">Pilih file</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3 mb-2">
                                            <div class="border rounded p-2">
                                                <h4 class="mb-1">Bukti Point</h4>
                                                <div class="media flex-column flex-md-row">
                                                    <!-- <img src="{{ asset('images/default.jpg') }}" id="blog-feature-image" class="rounded mr-2 mb-1 mb-md-0" width="130" height="110" alt="thumbnail" /> -->
                                                    <div class="media-body">
                                                        <small class="text-muted">Recommended image resolution 800x400,<br>max image size 2mb.</small>
                                                        <div class="d-inline-block">
                                                            <div class="form-group mb-0">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="" name="bukti_point" accept="image/*" required/>
                                                                    <label class="custom-file-label" for="blogCustomFile">Pilih file</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-50">
                                            <button type="submit" class="btn btn-primary mr-1">Buat</button>
                                            <!-- <button type="reset" class="btn btn-outline-secondary">Batal</button> -->
                                        </div>
                                    </div>
                                </form>
                                <!--/ Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Blog Edit -->

        </div>
    </div>
</div>
<!-- END: Content-->
@endsection

@section('js')
<script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/editors/quill/katex.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/editors/quill/highlight.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/editors/quill/quill.min.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/pages/page-blog-edit.js') }}"></script>

<script>
    $('.editor').keyup(function() {
        var konten = $('.ql-editor').html();

        $('#konten').val(konten);
    });

</script>

@if($message = Session::get('success'))
<script>
    Swal.fire({
        // position: 'top-end',
        icon: 'success',
        title: '{{ $message }}',
        showConfirmButton: false,
        timer: 2000,
        customClass: {
          confirmButton: 'btn btn-primary'
        },
        buttonsStyling: false
    });
</script>
@endif
@endsection