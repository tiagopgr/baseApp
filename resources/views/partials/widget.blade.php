<div class="col-md-{{ $size ?? 3 }} col-lg-{{ $size ?? 3 }} col-12">
    <div class="card">
        <div class="card-body p-3 d-flex align-items-center">
            <div class="bg-{{ $color ?? "primary" }} p-3 mfe-3">
                <svg class="c-icon c-icon-xl">
                    <use xlink:href="{!! asset("") !!}vendors/@coreui/icons/svg/free.svg#cil-{{ $icon }}"></use>
                </svg>
            </div>
            <div>
                <div class="fs-6 fw-semibold text-primary">{{ $valor }}</div>
                <div class="text-muted text-uppercase font-weight-bold small">{{ $name }}</div>
            </div>
        </div>
        @isset($go)
            <div class="card-footer px-3 py-2">
                <a class="btn-block text-muted d-flex justify-content-between align-items-center"
                   href="{{ $go }}">
                    <span class="small font-weight-bold">Visualizar</span>
                    <svg class="c-icon">
                        <use xlink:href="{{ asset("") }}vendors/@coreui/icons/svg/free.svg#cil-chevron-right"></use>
                    </svg>
                </a>
            </div>
        @endisset
    </div>
</div>
