@if(Session::has('alert-danger-login'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <div class="fw-semibold">Acesso negado:</div>
        {!! Session::get('alert-danger-login') !!}
    </div>
@endif


@isset($acesso_negado)
    @if($acesso_negado === true)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <div class="fw-semibold">Acesso Negado:</div>
            <p>Você não tem permissão para acessar essa área.</p>
        </div>
    @endif
@endisset



@if(Session::has('alert-logout'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <div class="fw-semibold">Usuário desconectado.</div>
    </div>
@endif
