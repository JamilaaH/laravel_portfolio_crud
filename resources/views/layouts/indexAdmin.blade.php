<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - backoffice</title>
    <link href={{asset('img/favicon.png')}} rel="icon">
    <link href={{asset('img/apple-touch-icon.png')}} rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href={{asset('vendor/bootstrap/css/bootstrap.min.css')}} rel="stylesheet">
    <link href={{asset('vendor/icofont/icofont.min.css')}} rel="stylesheet">
    <link href={{asset('vendor/boxicons/css/boxicons.min.css')}} rel="stylesheet">
    <link href={{asset('vendor/venobox/venobox.css')}} rel="stylesheet">
    <link href={{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}} rel="stylesheet">
    <link href={{asset('vendor/aos/aos.css')}} rel="stylesheet">

    <link rel="stylesheet" href={{asset('css/app.css')}}>
    <link rel="stylesheet" href={{asset('css/styleAdmin.css')}}>
</head>
<body>
    <header id="header-admin">
        @include('partial.bo.nav')
    </header>
    <div id="main" class="mt-5">
        @yield('content')

    </div>
</body>
</html>