<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>REST</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <div class="container">
                        <a class="navbar-brand" href="#">
                            <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24">
                        </a>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class=col>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <form class="d-flex">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            <div>    
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <div class="login" class="col">     
                                    <ul  class="navbar-nav ml-auto">
                                        @guest
                                            @if (Route::has('login'))
                                            <div class="container">
                                                <div class="row">
                                                    <div class=col>
                                                        <div class="text-center">
                                                            <a href="#myModal" class="trigger-btn" data-toggle="modal">LOGIN</a>
                                                        </div>
                                                            <div id="myModal" class="modal fade">
                                                            <div class="modal-dialog modal-login">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                    <x-guest-layout>
                                                                        <x-jet-authentication-card>
                                                                            <x-slot name="logo">
                                                                                <x-jet-authentication-card-logo />
                                                                            </x-slot>

                                                                            <x-jet-validation-errors class="mb-4" />

                                                                            @if (session('status'))
                                                                                <div class="mb-4 font-medium text-sm text-green-600">
                                                                                    {{ session('status') }}
                                                                                </div>
                                                                            @endif

                                                                            <form method="POST" action="{{ route('login') }}">
                                                                                @csrf

                                                                                <div>
                                                                                    <x-jet-label for="email" value="{{ __('Email') }}" />
                                                                                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                                                                </div>

                                                                                <div class="mt-4">
                                                                                    <x-jet-label for="password" value="{{ __('Password') }}" />
                                                                                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                                                                                </div>

                                                                                <div class="block mt-4">
                                                                                    <label for="remember_me" class="flex items-center">
                                                                                        <x-jet-checkbox id="remember_me" name="remember" />
                                                                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                                                                    </label>
                                                                                </div>

                                                                                <div class="flex items-center justify-end mt-4">
                                                                                    @if (Route::has('password.request'))
                                                                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                                                            {{ __('Forgot your password?') }}
                                                                                        </a>
                                                                                    @endif

                                                                                    <x-jet-button class="ml-4">
                                                                                        {{ __('Log in') }}
                                                                                    </x-jet-button>
                                                                                </div>
                                                                            </form>
                                                                        </x-jet-authentication-card>
                                                                    </x-guest-layout>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>        
                
                                            @endif
                                        
                                            @if (Route::has('register'))
                                            <div class="container">
                                                <div class="row">
                                                    <div class=col>        
                                                        <div class="text-center">
                                                            <a href="#myModal" class="trigger-btn"  href="{{ route('register') }}"s data-toggle="modal">{{ __('Sign In') }}</a>
                                                        </div>
                                                            <div id="myModal" class="modal fade">
                                                            <div class="modal-dialog modal-login">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <x-guest-layout>
                                                                            <x-jet-authentication-card>
                                                                                <x-slot name="logo">
                                                                                    <x-jet-authentication-card-logo />
                                                                                </x-slot>

                                                                                <x-jet-validation-errors class="mb-4" />

                                                                                <form method="POST" action="{{ route('register') }}">
                                                                                    @csrf

                                                                                    <div>
                                                                                        <x-jet-label for="name" value="{{ __('Name') }}" />
                                                                                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                                                                    </div>

                                                                                    <div class="mt-4">
                                                                                        <x-jet-label for="email" value="{{ __('Email') }}" />
                                                                                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                                                                    </div>

                                                                                    <div class="mt-4">
                                                                                        <x-jet-label for="password" value="{{ __('Password') }}" />
                                                                                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                                                                    </div>

                                                                                    <div class="mt-4">
                                                                                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                                                                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                                                                                    </div>

                                                                                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                                                                        <div class="mt-4">
                                                                                            <x-jet-label for="terms">
                                                                                                <div class="flex items-center">
                                                                                                    <x-jet-checkbox name="terms" id="terms"/>

                                                                                                    <div class="ml-2">
                                                                                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                                                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                                                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                                                                        ]) !!}
                                                                                                    </div>
                                                                                                </div>
                                                                                            </x-jet-label>
                                                                                        </div>
                                                                                    @endif

                                                                                    <div class="flex items-center justify-end mt-4">
                                                                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                                                                            {{ __('Already registered?') }}
                                                                                        </a>

                                                                                        <x-jet-button class="ml-4">
                                                                                            {{ __('Register') }}
                                                                                        </x-jet-button>
                                                                                    </div>
                                                                                </form>
                                                                            </x-jet-authentication-card>
                                                                        </x-guest-layout>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>          
                                                  
                                            @endif
                                            @else
                                                <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }}
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                                                            {{ __('Log Out') }}
                                                        </x-jet-dropdown-link>
                                                    </form>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                    </form>
                                                    </div>
                                                </li>
                                        @endguest
                                    </ul>
                                </div>
                    </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    @yield('barra_navegacion')
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    
  </body>
</html>
       <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>-->
