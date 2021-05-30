@extends("main")
@php($title2 = "Erro 404 - Página ou registro não encontrado!")
@section("container2")
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Aconteceu um erro!</h4>
        <p>Código com código 404, página ou registro não encontrado.</p>
        <hr>
        @hasanyrole('adm|operador')
        <p class="mb-0">Mensagem de erro: {{ $exception->getMessage() }}</p>
        @else
            <p class="mb-0">Tente novamente ou consulte o administrador do sistema</p>
        @endhasanyrole
    </div>
@endsection
