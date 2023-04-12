<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ url('https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/assets-login/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/assets-login/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/assets-login/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('assets/assets-login/css/style.css') }}">

    <title>Login #8</title>
</head>

<body>



    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 contents">
                    <img src="{{ asset('assets/assets-login/images/undraw_file_sync_ot38.svg') }}" alt="Image"
                        class="img-fluid">
                </div>
                <div class="col-md-6 order-md-2" style="background: rgba(0,0,0,0.5); padding:25px;">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Sign In to <strong>Kluwarga</strong></h3>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur
                                    adipisicing.</p>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group first">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" required
                                        autofocus autocomplete="username">

                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required
                                        autocomplete="current-password">

                                </div>

                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember
                                            me</span>
                                        <input type="checkbox" checked="checked" />
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot
                                            Password</a></span>
                                </div>

                                <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">

                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <script src="assets/assets-login/js/jquery-3.3.1.min.js"></script>
    <script src="assets/assets-login/js/popper.min.js"></script>
    <script src="assets/assets-login/js/bootstrap.min.js"></script>
    <script src="assets/assets-login/js/main.js"></script>
</body>

</html>


{{-- 
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
