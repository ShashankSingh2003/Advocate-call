@extends('layouts.login')
@section('title', 'Login')
@section('content')

<div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner-login">

        <!-- Register -->
        <div class="card">
            <div class="card-body">
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <!-- Logo -->
                <div class="app-brand justify-content-center">
                    <a href="/" class="app-brand-link gap-2">
                        <span><img src="{{ asset('/assets/img/logo.png') }}" alt="" height="50px"
                                width="150px"></span>
                    </a>
                </div>
                <!-- /Logo -->
                <!-- <h4 class="mb-2">Welcome to Admin Login! 👋</h4>
              <p class="mb-4">Please sign-in to your account and start the adventure</p> -->

                <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email"
                            autofocus />
                        @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                        @endif
                    </div>
                    <div class="mb-3 form-password-toggle">
                        @if (Route::has('password.request'))
                        <div class="d-flex justify-content-between">
                            <label class="form-label" for="password">Password</label>
                            <a href="{{ route('password.request') }}">
                                <small>Forgot Password?</small>
                            </a>
                        </div>
                        @endif
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" class="form-control" name="password"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                aria-describedby="password" />
                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember-me" name="remember" />
                            <label class="form-check-label" for="remember-me"> Remember Me </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary d-grid w-100" type="submit">Sign
                            in</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /Register -->
    </div>
</div>

@endsection