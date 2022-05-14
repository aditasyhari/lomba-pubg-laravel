@extends('layouts.main')

@section('title') Transaksi @endsection

@section('css')
@endsection

@section('content')
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-10 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Transaksi</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Transaksi
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section class="app-user-list">
                <div class="card">
                    <div class="card-datatable table-responsive pt-0">
                        <table class="transaction-list-table table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nama Team</th>
                                    <th>Logo</th>
                                    <th>Tournament</th>
                                    <th>Status</th>
                                    <th>Peserta</th>
                                    <th>Penyelenggara</th>
                                    <th>Bukti</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            {{-- <tbody>
                                @foreach($data as $d)
                                <tr>
                                    <td>{{ $d->team }}</td>
                                    <td>
                                        <img src="{{ url('storage/images/transaksi/logo/'.$d->logo) }}" height="32" width="32" alt="Logo">
                                    </td>
                                    <td>{{ $d->tournament }}</td>
                                    <td class="text-uppercase">{{ $d->status }}</td>
                                    <td>{{ $d->peserta }}</td>
                                    <td>{{ $d->penyelenggara }}</td>
                                    <td>
                                        @if($d->bukti)
                                        <a href="{{ url('storage/images/transaksi/bukti/'.$d->bukti) }}" target="_blank" rel="noopener noreferrer">Lihat Bukti</a>
                                        @else
                                            Tidak Ada
                                        @endif
                                    </td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody> --}}
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- END: Content-->
@endsection

@section('js')
<script src="{{ asset('app-assets/js/scripts/pages/app-transaction-list-custom.js') }}"></script>
@if($message = Session::get('success'))
    <script>
        Swal.fire({
            // position: 'top-end',
            icon: 'success',
            title: '{{ $message }}',
            showConfirmButton: false,
            timer: 2200,
            customClass: {
            confirmButton: 'btn btn-primary'
            },
            buttonsStyling: false
        });
    </script>
@endif
@endsection