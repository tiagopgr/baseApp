<div class="c-sidebar c-sidebar-dark c-sidebar-fixed {{ (empty($close_menu)? "c-sidebar-lg-show" : "") }}"
     id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        <h5>Dashboard</h5>
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link c-active"
               href="{{ url("/dashboard") }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset("") }}vendors/@coreui/icons/svg/free.svg#cil-home"></use>
                </svg>
                Home
            </a>
        </li>
        <li class="c-sidebar-nav-title">Cadastros</li>

        <!-- usuarios -->
        <li class="c-sidebar-nav-item">
            {{--            {{ in_array('usuarios', $brand)? "c-active" : "" }}--}}
            <a class="c-sidebar-nav-link"
               href="#">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset("") }}vendors/@coreui/icons/svg/free.svg#cil-user-plus"></use>
                </svg>
                Usuários</a>
        </li>
        <!-- permissoes/permissions -->
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link"
               href="{{ route("dashboard.permission.index") }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset("") }}vendors/@coreui/icons/svg/free.svg#cil-sitemap"></use>
                </svg>
                Permissões</a>
        </li>
        <!-- funcoes/roles  -->
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link"
               href="{{ route("dashboard.role.index") }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset("") }}vendors/@coreui/icons/svg/free.svg#cil-education"></use>
                </svg>
                Funções</a>
        </li>
        <!-- pessoas -->
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link"
               href="#">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset("") }}vendors/@coreui/icons/svg/free.svg#cil-comment-bubble"></use>
                </svg>
                Pessoas</a>
        </li>
    {{--<li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link"
           href="#">
            <svg class="c-sidebar-nav-icon">
                <use xlink:href="{{ asset("") }}vendors/@coreui/icons/svg/free.svg#cil-comment-bubble"></use>
            </svg>
            ???</a>
    </li>--}}

    <!-- separador para saudação ao usuário e botão de perfil, logout... -->
        <li class="c-sidebar-nav-title">Olá, {{ \Auth::user()->name ?? "Não identificado" }}</li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="#">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset("") }}vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                </svg>
                Perfil</a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="#">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset("") }}vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                </svg>
                Logout/Sair</a>
        </li>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
            data-class="c-sidebar-minimized"></button>
</div>
