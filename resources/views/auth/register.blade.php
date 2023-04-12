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

    <title>Registrasi</title>
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
                                <h3>Sign Up to <strong>Kluwarga</strong></h3>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur
                                    adipisicing.</p>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group first">
                                    <label for="name">Nama</label>
                                    <input type="name" name="name" class="form-control" id="name" required
                                        autofocus autocomplete="name">
                                </div>
                                <div class="form-group first">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" required
                                        autofocus autocomplete="username">
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="phone">No. Telepon</label>
                                    <input type="phone" class="form-control" id="phone" name="phone" required
                                        autocomplete="phone">
                                </div>

                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required
                                        autocomplete="new-password">
                                </div>

                                <div class="form-group last mb-4">
                                    <label for="confirm_password">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirm_password"
                                        name="confirm_password" required autocomplete="new-password">
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
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Phone -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
