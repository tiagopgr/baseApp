<div class="row pt-3 pb-3">
    <div class="col-sm-12 col-md-12">
        <div class="card card-accent-warning">
            <div class="card-header">
                Realizar pesquisa
                @if(Request::get('search') !== null && $data->total() > 0)
                    <span class="badge badge-success float-right">Total encontrados na pesquisa: {{ $data->total() }}</span>
                @elseif(Request::get('search') !== null && $data->total() === 0)
                    <span class="badge badge-danger float-right">Nenhum registro encontrado na pesquisa</span>
                @else
                    <span class="badge badge-success float-right">Total de registros: {{ $data->total() }}</span>
                @endif
            </div>
            {!! Form::open(["method" => "get", 'autocomplete' => 'off']) !!}
            <div class="card-body">
                {!! Form::text('search', Request::get("search"), [
                                                'class' => 'form-control',
                                                'placeholder' => '...',
                                                'autocomplete' => 'off'
                                                ]) !!}
            </div>

            <div class="card-footer">
                <button class="btn btn-dark" type="submit">
                    <i class="cil-search"></i>
                </button>
            </div>
            {!! Form::close() !!}

        </div>
    </div>
</div>
