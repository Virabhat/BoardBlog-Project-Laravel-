<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/Font/font.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-reboot.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet">
    <link rel="shortcut icon"
        href="https://cdn1.iconfinder.com/data/icons/business-e-commerce-logistics-full-colours-set-1/91/Business_E-commerce__Logistics_C-06-256.png"
        type="image/x-icon">

    <title>BoardBlog เว็บบอร์ด: เข้าสู่ระบบ </title>
</head>

<body class="d-flex flex-column min-vh-100">

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#"><i class="fa-solid fa-box-open"></i> : BoardBlog</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"> <i class="fa-solid fa-right-to-bracket"></i>
                                เข้าสู่ระบบ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    @include('sweetalert::alert')

    @yield('content')




    <footer class="bg-body-tertiary text-center  text-lg-start mt-auto">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2020 Copyright:
            <a class="text-body" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    @if (Session::has('message'))
        <script>
            swal("Message", "{{ Session::get('message') }}", 'success', {
                button: true,
                button: "OK",
                timer: 3000,
            });
        </script>
    @endif


    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('bootstrap/css/bootstrap.min.css') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('bootstrap/css/bootstrap-reboot.css') }}"></script>
    <script src="{{ asset('bootstrap/css/bootstrap-grid.css') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>
