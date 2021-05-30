@if(Auth::check())
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed {{ (empty($close_menu)? "c-sidebar-lg-show" : "") }}"
         id="sidebar">
        <div class="c-sidebar-brand d-lg-down-none">
            <h5>MP</h5>
        </div>
        <ul class="c-sidebar-nav">
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link {{ (count($brand) == 1 && $brand[0] == "Home") ? "c-active" : "" }}"
                   href="{{ url("/dashboard") }}">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="{{ asset("") }}vendors/@coreui/icons/svg/free.svg#cil-home"></use>
                    </svg>
                    Home
                </a>
            </li>
            @hasanyrole('adm|operador')
            <li class="c-sidebar-nav-title">Cadastros</li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link {{ in_array('usuarios', $brand)? "c-active" : "" }}"
                   href="{{ route("dashboard.usuarios.index")  }}">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="{{ asset("") }}vendors/@coreui/icons/svg/free.svg#cil-user-plus"></use>
                    </svg>
                    Usuários</a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link {{ in_array('funcoes', $brand)? "c-active" : "" }}"
                   href="{{ route("dashboard.funcoes.index") }}">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="{{ asset("") }}vendors/@coreui/icons/svg/free.svg#cil-sitemap"></use>
                    </svg>
                    Funções</a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link {{ in_array('questionarios', $brand)? "c-active" : "" }}"
                   href="{{ route("dashboard.questionarios.index") }}">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="{{ asset("") }}vendors/@coreui/icons/svg/free.svg#cil-education"></use>
                    </svg>
                    Questionários</a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link {{ in_array('perguntas', $brand)? "c-active" : "" }}"
                   href="{{ route("dashboard.perguntas.index")}}">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="{{ asset("") }}vendors/@coreui/icons/svg/free.svg#cil-comment-bubble"></use>
                    </svg>
                    Perguntas</a>
            </li>
            @endhasanyrole
            <li class="c-sidebar-nav-title">Olá, {{ \Auth::user()->name }}</li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{ route("logout")  }}">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="{{ asset("") }}vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                    </svg>
                    Logout/Sair</a>
            </li>
        </ul>
        <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
                data-class="c-sidebar-minimized"></button>
    </div>
@endif
