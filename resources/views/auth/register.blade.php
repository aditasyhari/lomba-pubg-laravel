@extends('auth.main')

@section('title') Register @endsection

@section('content')
<div class="auth-wrapper auth-v1 px-2">
    <div class="auth-inner py-2">
        <!-- Login v1 -->
        <div class="card mb-0">
            <div class="card-body">
                <a href="{{ url('/') }}" class="brand-logo">
                    <img src="{{ asset('logo.png') }}" alt="">
                    <!-- <h2 class="brand-text text-primary ml-1">PUBG Esports</h2> -->
                </a>

                <h4 class="card-title mb-1">Petualangan dimulai di sini 🚀</h4>
                <p class="card-text mb-2">Jadikan manajemen lomba Anda mudah dan menyenangkan!</p>

                <form class="auth-register-form mt-2" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="register-username" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="register-username" name="name" placeholder="nama anda" aria-describedby="register-username" tabindex="1" autofocus required/>
                    </div>
                    <div class="form-group">
                        <label for="register-email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="register-email" name="email" placeholder="akun@contoh.com" aria-describedby="register-email" tabindex="2" required/>
                    </div>

                    <div class="form-group">
                        <label for="register-password" class="form-label">Password</label>

                        <div class="input-group input-group-merge form-password-toggle">
                            <input type="password" class="form-control form-control-merge" id="register-password" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="register-password" tabindex="3" autofocus required/>
                            <div class="input-group-append">
                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirm-password" class="form-label">Ulangi Password</label>

                        <div class="input-group input-group-merge form-password-toggle">
                            <input type="password" class="form-control form-control-merge" id="confirm-password" name="password_confirmation" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="confirm-password" tabindex="3" autofocus required/>
                            <div class="input-group-append">
                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="terms" id="register-privacy-policy" tabindex="4" />
                            <label class="custom-control-label" for="register-privacy-policy">
                                I agree to <a href="javascript:void(0);">privacy policy & terms</a>
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" tabindex="5">Daftar</button>
                </form>

                <p class="text-center mt-2">
                    <span>Sudah punya akun?</span>
                    <a href="{{ url('/login') }}">
                        <span>masuk</span>
                    </a>
                </p>

                <div class="divider my-2">
                    <div class="divider-text">atau</div>
                </div>

                <div class="auth-footer-btn d-flex justify-content-center">
                    <a href="javascript:void(0)" class="btn btn-google">
                        <i data-feather="mail"></i> Google
                    </a>
                </div>
            </div>
        </div>
        <!-- /Login v1 -->
    </div>
</div>
@endsection