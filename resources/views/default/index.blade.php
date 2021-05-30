@extends("main")
@section("container")
    <div class="row">
        <div class="col-12">
            @if($acesso_negado === false)
                @include("partials.datatable")
            @endif
        </div>
    </div>
@endsection()
