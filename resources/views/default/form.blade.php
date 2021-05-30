<div class="row">
    <div class="col-12">
        @isset($form)
            {!! form_start($form) !!}
            {!! form_rest($form) !!}
            {!! form_end($form) !!}
        @endisset

        @empty($form)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <div class="fw-semibold">Atenção!</div>
                <p>A variável de formulário está nula ou não está sendo enviada no controlador</p>
            </div>
        @endempty
    </div>

    <div class="col-12">
        <a href="{{ route($route_index) }}" class="btn btn-link">Voltar</a>
    </div>
</div>
