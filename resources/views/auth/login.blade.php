<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oncofarm SA | Admin</title>
        <link rel="icon" href="./logo.png" type="image/png">
        <!--plugins-->
        <link rel="stylesheet" type="text/css" href="./admin/plugins/metismenu/metisMenu.min.css">
        <link rel="stylesheet" type="text/css" href="./admin/plugins/metismenu/mm-vertical.css">
        <link rel="stylesheet" type="text/css" href="./admin/plugins/simplebar/css/simplebar.css">
        <!--bootstrap css-->
        <link href="./admin/css/bootstrap.min.css" rel="stylesheet">
        <link href="./admin/css/css2" rel="stylesheet">
        <link href="./admin/css/css" rel="stylesheet">
        <!--main css-->
        <link href="./admin/css/bootstrap-extended.css" rel="stylesheet">
        <link href="./admin/css/main.css" rel="stylesheet">
        <link href="./admin/css/responsive.css" rel="stylesheet">
    </head>
    <body class="">
        <form method="POST" action="{{ route('login') }}">
            @csrf
    
            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
    
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>
    
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
    
                <button class="ms-3">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
        <script src="./admin/js/bootstrap.bundle.min.js"></script>
        <script src="./admin/js/jquery.min.js"></script>
        <script src="./admin/plugins/metismenu/metisMenu.min.js"></script>
        <script src="./admin/plugins/simplebar/js/simplebar.min.js"></script>
        <script src="./admin/js/main.js"></script>
    </body>
</html>