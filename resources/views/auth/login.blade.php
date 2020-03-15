@extends('layouts.app')

@section('content')
<div class="row no-gutter justify-content-center bg-transparent">

    <!-- Panel de login -->
    <div class="col-10 col-lg-6 bg-transparent shadow">

        <!-- Contenido de login-->
        <div class="row align-items-center justify-content-center bg-transparent py-3">

            <div class="px-4 px-md-0">
                <h3 class="display-4 text-center text-md-left">Hola de nuevo!</h3>
                <p class="text-muted mb-4 text-center text-md-left pl-md-1">Inicia sesión para no perderte nada.
                </p>

                <!-- Formulario de login-->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="d-flex flex-column">
                        <div class="form-group mb-3">
                            <input name="email" type="text" id="inputEmail" class="form-control border-0 shadow px-4 @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group mt-3 mb-0">
                            <input name="password" type="password" id="inputPassword" class="form-control border-0 shadow px-4 text-primary @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <a class="btn btn-link w-100 p-0 mt-2 mb-1" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>

                        <div class="custom-control custom-checkbox mb-2">
                            <input name="remember" type="checkbox" id="remember_id" class="custom-control-input" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember_id" class="custom-control-label">{{ __('Remember Me') }}</label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block mb-2 shadow">Iniciar sesión</button>
                    </div>

                </form>
                <!-- Fin Formulario de login-->

                <a href="{{ route('register') }}" class="btn btn-info btn-block mb-2 shadow text-white">Registrarse</a>
            </div>
            <!-- Fin Contenido de login-->

        </div>
        <!-- Fin Panel de ogin -->

    </div>
</div>
<!-- Fin Row de login-->
@endsection
