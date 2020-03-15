@extends('layouts.app')

@section('title', 'Registro')

@section('content')
<div class="py-2 mx-2 px-lg-5">
    <form class="bg-transparent mx-lg-3" id="reg_form" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="shadow m-1 mb-3 p-4 bg-transparent-dark mx-lg-5">
            <h2 class="text-center mb-5">Registro</h2>
            <div class="bg-transparent container">
                <div class="bg-transparent d-flex flex-column">

                    <!-- Primera fila -->
                    <div class="w-100 d-flex flex-wrap flex-md-nowrap mb-md-2">

                        <!-- Input de Nombre -->
                        <div class="w-100 mr-md-3 form-group mb-4 mb-md-3">
                            <label for="name_id" class="mb-2">Nombre de Usuario</label>

                            <input name="name" type="text" id="name_id" class="py-1 px-3 form-control shadow @error('name') is-invalid @enderror" value="{{ old('name') }}" {{--required--}} placeholder="usuario..." autocomplete="username" autofocus>

                            @error('name')
                            <span class="invalid-feedback position-absolute" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Input de Email -->
                        <div class="w-100 ml-md-3 form-group mb-4 mb-md-3">
                            <label for="email_id" class="mb-2">E-mail</label>

                            <input name="email" type="text" id="email_id" class="py-1 px-3 form-control shadow @error('email') is-invalid @enderror" value="{{ old('email') }}" {{--required--}} placeholder="email@ejemplo.com" autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback position-absolute" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>
                    <!--// Fin Primer Fila //-->

                    <!-- Segunda fila -->
                    <div class="w-100 d-flex flex-wrap flex-md-nowrap">

                        <!-- Input de Contraseña -->
                        <div class="w-100 mr-md-3 form-group mb-4 mb-md-3">
                            <label for="password_id" class="mb-2">Contraseña</label>

                            <input name="password" type="password" id="password_id" class="w-100 py-1 px-3 form-control shadow @error('password') is-invalid @enderror" {{--required--}} placeholder="contraseña...">

                            @error('password')
                            <span class="invalid-feedback position-absolute" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Input de Confirmar Contraseña -->
                        <div class="w-100 ml-md-3 form-group mb-4 mb-md-3">
                            <label for="password_confirmation_id" class="mb-2 d-flex flex-nowrap">Confirmar contraseña</label>

                            <input name="password_confirmation" type="password" id="password_confirmation_id" class="w-100 py-1 px-3 form-control shadow" {{--required--}} placeholder="confirmar contraseña...">
                        </div>
                    </div>
                    <!--// Fin Segunda Fila //-->

                </div>
            </div>

            <!-- Checkboxes -->
            <div class="container d-flex flex-column w-100">

                <!-- Checkbox de Recordarme -->
                <div class="custom-control custom-checkbox mt-1">
                    <input name="remember" type="checkbox" id="remember_id" class="custom-control-input" value="yes" {{ old('remember') ? 'checked' : '' }}>

                    <label for="remember_id" class="custom-control-label">{{ __('Remember Me') }}</label>
                </div>

                <!-- Checkbox de Mayor de Edad-->
                <div class="custom-control custom-checkbox mt-2">
                    <input name="mayor" type="checkbox" id="mayor_id" class="custom-control-input @error('mayor') is-invalid @enderror" value="yes" {{ old('mayor') ? 'checked' : '' }}>

                    <label for="mayor_id" class="custom-control-label @error('mayor') text-danger @enderror">Soy mayor de edad</label>
                </div>

                <!-- Checkbox de ToS -->
                <div class="custom-control custom-checkbox mt-2 mb-3">
                    <input name="tos" type="checkbox" id="tos_id" class="custom-control-input @error('tos') is-invalid @enderror" value="yes" {{ old('tos') ? 'checked' : '' }} >

                    <label for="tos_id" class="custom-control-label @error('tos') text-danger @enderror">Acepto los Términos y Condiciones del sitio</label>
                </div>

                <!-- Botón de Registro -->
                <div class="w-100 d-flex">
                    <button type="submit" class="btn-primary p-2 border-0 w-50 mx-auto">Registrarse</button>
                </div>
            </div>
            <!--// Fin Checkboxes //-->

        </div>
    </form>
</div>
@endsection
