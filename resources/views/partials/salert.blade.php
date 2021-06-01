<script>
    var message_alert = "";
    var icon_alert = "info";
    var subtitle_alert = 'Clique em Ok para continuar!'

    @if(Session::has('alert-success'))
        message_alert = '{{ Session::get('alert-success') }}';
        icon_alert = "success";
    @endif

        @if(Session::has('alert-danger'))
        message_alert = '{{ Session::get('alert-danger') }}';
        icon_alert = "error";
    @endif

    @if(Session::has('alert-subtitle'))
        subtitle_alert = '{{ Session::get('alert-subtitle') }}';
    @endif

    if (message_alert != "") {
        Swal.fire({
            title: message_alert,
            icon: icon_alert,
            html: subtitle_alert,
        });
    }
</script>
