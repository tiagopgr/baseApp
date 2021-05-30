<div class="c-wrapper c-fixed-components">
    @auth
        <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
            <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar"
                    data-class="c-sidebar-show">
                <svg class="c-icon c-icon-lg">
                    <use xlink:href="{{ asset("") }}vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                </svg>
            </button>
            <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar"
                    data-class="c-sidebar-lg-show" responsive="true">
                <svg class="c-icon c-icon-lg">
                    <use xlink:href="{{ asset("") }}vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                </svg>
            </button>
        </header>
    @endauth
    <div class="c-body">
        <div class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                    @if (trim($__env->yieldContent('container')))
                        <div class="row">
                            <div class="col-md-12 col-12 col-lg-12">
                                <div class="card card-accent-primary">
                                    <div class="card-header">
                                        {{ $title ?? "Title não definido" }}
                                    </div>
                                    <div class="card-body">
                                        @include("partials.alerts")
                                        @yield("container")
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if (trim($__env->yieldContent('container2')))
                        <div class="row">
                            <div class="col-md-12 col-12 col-lg-12">
                                <div class="card card-accent-primary">
                                    <div class="card-header">
                                        {{ $title2 ?? "Title2 não definido!!!" }}
                                    </div>
                                    <div class="card-body">
                                        @yield("container2")
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    {{--para outros tipos de container --}}
                    @if (trim($__env->yieldContent('container3')))
                        <div class="row">
                            <!--- Aqui voce precisa por seu conteudo e grid -->

                            <!--- \end -->
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
