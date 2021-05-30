<div class="row">
    @isset($link_create)
    <div class="col-md-2 col-lg-2 col-sm-12 col-12 float-right">
        <a href="{{ route($link_create) }}" class="btn btn-block btn-success text-light">Cadastrar</a>
    </div>
    @endisset
</div>

@isset($campos_busca)
    @if(count($campos_busca))
        @include("default.searchform")
    @endif
@endisset

<div class="m-2">&nbsp</div>

@isset($data)
    @if($data->count())
        @isset($data)
            {{ $data->links() }}
        @endif

        <table class="table table-responsive-sm table-bordered table-striped table-sm">
            <thead>
            <tr>
                <th class="text-center">#</th>
                @foreach($columns as $column)
                    <th class="{{ in_array($column, ['id', 'created_at', 'roles']) ? "text-center" : "" }}">{{ __("abstract.".$column) }}</th>
                @endforeach

                <th></th>
            </tr>
            </thead>
            <tbody>

            @foreach($data as $k => $d)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    @foreach($columns as $column)

                        @if(in_array($column, ['created_at', 'updated_at', 'data_limite', 'data_inicio']))

                            <td class="text-center">
                                @if($d->$column !== null)
                                    {{ \Carbon\Carbon::parse($d->$column)->format("d/m/Y") ?? " - "}}
                                @else
                                    -
                                @endif
                            </td>

                        @else
                            @if($column == "roles")
                                <td class="text-center">{{ ($d->getRoleNames()->count() == 0) ? "Nenhuma função vinculada" : $d->getRoleNames()->implode(', ') }}</td>
                            @elseif($column == "questionario_id")
                                <td class="">{{ $d->questionario->titulo ?? "Erro ao localizar questionário" }}</td>
                            @elseif($column == "qtd_perguntas")
                                <td class="">{{ $d->perguntas()->count() }}</td>
                            @else
                                <td class="">{{ $d->$column ?? " - "}}</td>
                            @endif
                        @endif
                    @endforeach
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-expanded="false">Ações
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                       href="{{ route($route_edit, ['id' => $d->id]) }}">Editar</a>
                                </li>
                                <li><a class="dropdown-item btn_delete"
                                       @isset($displayNameVar)
                                       data-displaynamevar="{{ ($displayPrefix != "") ? mb_strtolower("$displayPrefix "). $d->$displayNameVar : $d->$displayNameVar }}"
                                       @endisset
                                       href='{{ route($route_delete, ['id' => $d->id]) }}'>Excluir</a>
                                </li>
                                @if(isset($moreactions))
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    @foreach($moreactions as $moreaction)
                                        @if(array_key_exists('crypt', $moreaction))
                                            @php($identificador = Crypt::encrypt($d->id))
                                        @else
                                            @php($identificador = $d->id)
                                        @endif

                                        @if(array_key_exists('target', $moreaction))
                                            @php($target = "_" . $moreaction["target"])
                                        @else
                                            @php($target = "_self")
                                        @endif
                                        <li>
                                            <a
                                                class="dropdown-item {{ $moreaction["class"] ?? null }}"
                                                id="{{ $moreaction["id"] ?? null }}"
                                                target="{{ $target }}"
                                                href="{{ route($moreaction["route"], [$identificador])  }}"
                                            @isset($moreaction["modal"])
                                                @foreach($moreaction["modal"] as $key => $rowmodal )
                                                    {{ $key ."=". "$rowmodal" }}
                                                    @endforeach
                                                @endisset
                                            >
                                                {{$moreaction["display"]}}

                                            </a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        @if($data->links())
            {{ $data->links() }}
        @endif

    @else
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    Nenhum registro cadastrado!
                </div>
            </div>
        </div>
    @endif
@endisset
