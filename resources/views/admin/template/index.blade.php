<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Petcare | Admin</title>
        <link rel="icon" href="{{ asset('./logo__petcare.png') }}" type="image/png">
        <!--plugins-->
        <link rel="stylesheet" type="text/css" href="{{ asset('./admin/plugins/metismenu/metisMenu.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('./admin/plugins/metismenu/mm-vertical.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('./admin/plugins/simplebar/css/simplebar.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('./admin/plugins/notifications/css/lobibox.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('./admin/plugins/bootstrap-fileinput/css/fileinput.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('./fontawesome/css/all.min.css') }}">
        <!--bootstrap css-->
        <link rel="stylesheet" type="text/css" href="{{ asset('./admin/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('./admin/css/css2') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('./admin/css/css') }}">
        <!--main css-->
        <link rel="stylesheet" type="text/css" href="{{ asset('./admin/css/bootstrap-extended.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('./admin/css/main.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('./admin/css/responsive.css') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body class="">
        <script src="{{ asset('./admin/js/jquery.min.js') }}"></script>
        @include('admin.template.main')
        <script src="{{ asset('./admin/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('./admin/plugins/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('./admin/plugins/notifications/js/lobibox.min.js') }}"></script>
        <script src="{{ asset('./admin/plugins/notifications/js/notifications.min.js') }}"></script>
        <script src="{{ asset('./admin/plugins/notifications/js/notification-custom-script.js') }}"></script>
        <script src="{{ asset('./admin/plugins/simplebar/js/simplebar.min.js') }}"></script>
        <script src="{{ asset('./admin/plugins/bootstrap-fileinput/js/fileinput.min.js') }}"></script>
        <script src="{{ asset('./admin/plugins/bootstrap-fileinput/themes/fa5/theme.min.js') }}"></script>
        <script src="{{ asset('./admin/plugins/bootstrap-fileinput/js/locales/es.js') }}"></script>
        <script src="{{ asset('./admin/js/main.js') }}"></script>
        <script>
            function toggleStatus(url, itemId) {
                $.ajax({
                    url: url + '/' + itemId,
                    method: 'POST',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content') // Incluye el token CSRF
                    },
                    success: function(response) {
                        // Encuentra el botón asociado con el itemId
                        var button = $('[data-id="' + itemId + '"]');
                        
                        // Actualiza el estado en el frontend
                        if (response.estado) {
                            button.removeClass('btn-danger').addClass('btn-success').text('Activo');
                        } else {
                            button.removeClass('btn-success').addClass('btn-danger').text('Inactivo');
                        }
                    },
                    error: function(xhr) {
                        console.log('Error:', xhr.responseText);
                    }
                });
            }
        </script>
        @if (session('success'))
            <script>
                $(document).ready(function() {
                    success_noti('{{ session('success') }}');
                });
            </script>
        @endif
        @if (session('error'))
            <script>
                $(document).ready(function() {
                    error_noti('{{ session('error') }}');
                });
            </script>
        @endif
    </body>
</html>