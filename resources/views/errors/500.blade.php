@extends("main")
@php($title2 = "Erro 500")

@section("container2")

    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Aconteceu um erro!</h4>
        <p>Código com código 500</p>
        <hr>
        @if(env('APP_ENV') === "local" || env('APP_ENV') === "dev")
            <p class="mb-0">Mensagem de erro: {{ $exception->getMessage() }}</p>
        @else
            <p class="mb-0">Tente novamente ou consulte o administrador do sistema</p>
        @endif
    </div>



@endsection
