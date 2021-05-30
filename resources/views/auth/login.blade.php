@include("partials.header")
@include("partials.wrapper")
@section("container3")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card-group d-block d-md-flex row">
                <div class="card p-4">
                    {!! Form::open(['method' => "post"]) !!}
                    <div class="card-body">
                        @include("partials.alerts")
                        <h1>Acesso</h1>
                        <p class="text-muted">Entre com seu usuário e senha</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend"><span class="input-group-text">
                                <svg class="c-icon">
                                <use xlink:href="{{ asset("") }}vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                            </svg></span></div>
                            {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Usuário', 'required' => 'required']) !!}
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend"><span class="input-group-text">
                            <svg class="c-icon">
                            <use xlink:href="{{ asset("") }}vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                            </svg></span></div>
                            {!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Senha', 'required' => 'required']) !!}
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <button class="btn btn-primary btn-block px-4" type="submit">Entrar</button>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                <a class="btn btn-link btn-block px-0" href="#">Esqueceu sua senha?</a>
                            </div>
                        </div>
                        @if(Session::has('identificador') && Session::has('route'))
                            <input type="hidden" name="identificador" value="{{ Session::get('identificador') }}">
                            <input type="hidden" name="route" value="{{ Session::get('route') }}">
                        @endif
                    </div>
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@include("partials.footer")
