<script>
    var message_alert = "";
    var icon_alerta = "info";
    var subtitle_alerta = 'Clique em Ok para continuar!'

    @if(Session::has('alert-success'))
    message_alert = '{{ Session::get('alert-success') }}';
    icon_alerta = "success";
    @endif

    @if(Session::has('alert-danger'))
    message_alert = '{{ Session::get('alert-danger') }}';
    icon_alerta = "error";
    @endif

    @if(Session::has('alert-subtitle'))
    icon_alerta = '{{ Session::get('alert-subtitle') }}';
    @endif

    if (message_alert != "") {
        Swal.fire({
            title: message_alert,
            icon: icon_alerta,
            html: subtitle_alerta,
        });
    }
</script>
