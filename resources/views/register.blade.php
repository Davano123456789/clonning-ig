@extends('elements.front')
@section('title', 'Registrasi')
<link rel="stylesheet" href="../css/login.css">
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-5 offset-1">
                <img src="{{ asset('images/image.png') }}" class="img-fluid" alt="Gambar">
            </div>
            <div class="col-5">
                <div class="wrap-right mt-5">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="logo_ig text-center">
                        <img src="../images/logo.png" alt="">
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="wrapinput mb-3">
                            <div class="input">
                                <input type="text" class="w-100 mt-5" name="username" placeholder="Username"
                                    value="{{ old('username') }}">
                                @error('username')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input">
                                <input type="password" class="w-100 mt-2" name="password" placeholder="Password">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input">
                                <input type="password" class="w-100 mt-2" name="password_confirmation"
                                    placeholder="Confirm Password">
                            </div>
                            <div class="input">
                                <label for="gender">Gender:</label>
                                <div>
                                    <input type="radio" id="male" name="gender" value="laki laki">
                                    <label for="male">Laki Laki</label>
                                    <input type="radio" id="female" name="gender" value="perempuan">
                                    <label for="female">Perempuan</label>
                                </div>
                                @error('gender')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button class="btn btn-primary w-100">Register Now</button>
                    </form>

                    <div class="or">
                        <div class="line"></div>
                        <p>OR</p>
                        <div class="line"></div>
                    </div>
                    <div class="log-fb">
                        <a href="" class=" text-decoration-none font-weight-bold"><img src="../images/facebook.png"
                                alt="">Login With Facebook</a>
                    </div>
                    <div class="log-fb mt-3">
                        <a href="" style="color: black" class="text-decoration-none font-weight-bold">Forgot
                            Password</a>
                    </div>
                </div>
                <div class="wrap-akun">
                    <p class="mt-3">have an account? <a href="/login">Login Now</a></p>
                </div>
                <div class="get-app text-center mt-2">
                    <p>Get the app.</p>
                </div>
                <div class="img-app text-center">
                    <img src="../images/app.png" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
