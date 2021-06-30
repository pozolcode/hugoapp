@extends(backpack_view('layouts.auth'))

@section('content')
<div class="container register">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="header-main">
                        <div class="header-image">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo" />

                            <div>Racional y Emocional</div>
                        </div>
                    </div>

                    <div class="header-decoration"></div>
                </div>

                <div class="card-body">
                    <div class="card-title">Regístrate</div>

                    <form method="POST" action="{{ route('backpack.auth.register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input
                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    type="text"
                                    name="name"
                                    id="name"
                                    placeholder="Nombre"
                                />

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div>
                                <input
                                    type="{{ backpack_authentication_column()=='email'?'email':'text'}}"
                                    class="form-control{{ $errors->has(backpack_authentication_column()) ? ' is-invalid' : '' }}"
                                    name="{{ backpack_authentication_column() }}" id="{{ backpack_authentication_column() }}"
                                    value="{{ old(backpack_authentication_column()) }}"
                                    placeholder="Correo electrónico"
                                />

                                @if ($errors->has(backpack_authentication_column()))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first(backpack_authentication_column()) }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    type="password"
                                    name="password"
                                    id="password"
                                    placeholder="Contraseña"
                                />

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input
                                    class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                    type="password_confirmation"
                                    name="password_confirmation"
                                    id="password_confirmation"
                                    placeholder="Confirmar contraseña"
                                />

                                @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row submit-button">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-block btn-primary">Regístrate</button>
                            </div>
                        </div>

                        <div class="form-group row alternative-register">
                            <div class="col-md-12">
                                <div class="alternative-register-message">
                                    Puedes crear tu cuenta usando tus redes sociales
                                </div>

                                <div class="alternative-register-buttons">
                                    <button class="btn btn-facebook">
                                        <svg width="8" height="16" viewBox="20 15 65 70" style="enable-background:new 0 0 96.124 96.123" xml:space="preserve"><path d="M72.089.02 59.624 0C45.62 0 36.57 9.285 36.57 23.656v10.907H24.037a1.96 1.96 0 0 0-1.96 1.961v15.803a1.96 1.96 0 0 0 1.96 1.96H36.57v39.876a1.96 1.96 0 0 0 1.96 1.96h16.352a1.96 1.96 0 0 0 1.96-1.96V54.287h14.654a1.96 1.96 0 0 0 1.96-1.96l.006-15.803a1.963 1.963 0 0 0-1.961-1.961H56.842v-9.246c0-4.444 1.059-6.7 6.848-6.7l8.397-.003a1.96 1.96 0 0 0 1.959-1.96V1.98A1.96 1.96 0 0 0 72.089.02z"/></svg>
                                        Facebook
                                    </button>

                                    <button class="btn btn-google">
                                        <svg height="15" width="15" viewBox="0 20 650 500"><path d="M120 256c0-25.367 6.989-49.13 19.131-69.477v-86.308H52.823C18.568 144.703 0 198.922 0 256s18.568 111.297 52.823 155.785h86.308v-86.308C126.989 305.13 120 281.367 120 256z" fill="#fbbd00"/><path d="m256 392-60 60 60 60c57.079 0 111.297-18.568 155.785-52.823v-86.216h-86.216C305.044 385.147 281.181 392 256 392z" fill="#0f9d58"/><path d="m139.131 325.477-86.308 86.308a260.085 260.085 0 0 0 22.158 25.235C123.333 485.371 187.62 512 256 512V392c-49.624 0-93.117-26.72-116.869-66.523z" fill="#31aa52"/><path d="M512 256a258.24 258.24 0 0 0-4.192-46.377l-2.251-12.299H256v120h121.452a135.385 135.385 0 0 1-51.884 55.638l86.216 86.216a260.085 260.085 0 0 0 25.235-22.158C485.371 388.667 512 324.38 512 256z" fill="#3c79e6"/><path d="m352.167 159.833 10.606 10.606 84.853-84.852-10.606-10.606C388.668 26.629 324.381 0 256 0l-60 60 60 60c36.326 0 70.479 14.146 96.167 39.833z" fill="#cf2d48"/><path d="M256 120V0C187.62 0 123.333 26.629 74.98 74.98a259.849 259.849 0 0 0-22.158 25.235l86.308 86.308C162.883 146.72 206.376 120 256 120z" fill="#eb4132"/></svg>
                                        Google
                                    </button>
                                </div>
                            </div>
                        </div>

                        @if (config('backpack.base.registration_open'))
                            <div class="form-group row registration-row">
                                <div class="registration-message">¿Ya tienes cuenta? <a href="{{ route('backpack.auth.login') }}">Inicia Sesión</a></div>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
