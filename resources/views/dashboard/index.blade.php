@extends("main")

@section("container")

    <div class="row">
        @include("partials.widget", ['icon' => 'education', 'valor' => null, 'name' => 'Questionários','color' => 'primary', 'go' => "#"])
        @include("partials.widget", ['icon' => 'comment-bubble', 'valor' => null, 'name' => 'Perguntas','color' => 'info', 'go' => "#"])
        @include("partials.widget", ['icon' => 'truck', 'valor' => null, 'name' => 'Fornecedores','color' => 'warning', 'go' => "#"])
        @include("partials.widget", ['icon' => 'settings', 'valor' => null, 'name' => 'Perguntas Respondidas','color' => 'success', 'go' => "#"])
    </div>
@endsection

@section('container2')
    @hasanyrole('adm|operador|fornecedor')
    @isset($dataquestionarios)
        <div class="row">
            <div class="col-md-12 mt-4">
                <table class="table table-responsive-sm table-bordered table-striped table-hover table-sm">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Questionário</th>
                        <th>Disponibilidade</th>
                        <th>Situação</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($dataquestionarios as $questionariorow)
                        <tr data-toggle="tooltip" title="{{ $questionariorow->titulo }}">
                            <td class="text-center">{{ $loop->iteration}}</td>
                            <td>{{ Str::limit($questionariorow->titulo, '70') }}</td>
                            <td>
                                @if($questionariorow->data_limite === null)
                                    Tempo indeterminado
                                @else
                                    {{ \Carbon\Carbon::parse($questionariorow->data_limite)->format("d/m/Y") }}
                                @endif
                            </td>
                            <td>
                                @if($questionariorow->situacao === "datalimite")
                                    <span class="badge badge-danger">Data limite excedida</span>
                                @endif

                                @if($questionariorow->respondidas_user === true)
                                    <span class="badge badge-success">Respondido</span>
                                @elseif($questionariorow->respondidas_user === false && $questionariorow->situacao !== "datalimite")
                                    <span class="badge badge-info">Disponível</span>
                                @endif

                            </td>
                            <td>
                                @if($questionariorow->respondidas_user === true)
                                    <a
                                        data-toggle="tooltip"
                                        title="Visualizar"
                                        href="{{ route("questionario.show", [Crypt::encrypt($questionariorow->id)]) }}"
                                        class="btn btn-success btn-block    ">
                                        <svg class="c-icon c-icon-sm">
                                            <use
                                                xlink:href="{{ asset("") }}vendors/@coreui/icons/svg/free.svg#cil-monitor"></use>
                                        </svg>
                                        Visualizar
                                    </a>
                                @endif
                                @if($questionariorow->respondidas_user === false)
                                    <a
                                        data-toggle="tooltip"
                                        title="Responder"
                                        href="{{ route("questionario.responder", [Crypt::encrypt($questionariorow->id)]) }}"
                                        class="btn btn-info btn-block">
                                        <svg class="c-icon c-icon-sm">
                                            <use
                                                xlink:href="{{ asset("") }}vendors/@coreui/icons/svg/free.svg#cil-check-circle"></use>
                                        </svg>
                                        Responder
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    @endhasanyrole

@endsection


