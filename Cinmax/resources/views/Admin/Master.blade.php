<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CINMAX</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/d9f213cfa1.js" crossorigin="anonymous"></script>
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assetsAdmin/Css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assetsAdmin/Css/style.css') }}">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        @include('Admin.Includes.Sidebar')



        <div class="content">
            @include('Admin.Includes.Nav')

            <!-- in this dashboard my nav and footer are inside the content -->
            <br>
            <hr style="color: aliceblue;">

            @yield('content')

            @include('Admin.Includes.Footer')
        </div>

        <!-- Back to Top -->
        <a href="/Dashboard" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- this pretty javascript for disappear and  appear-->
    <!-- <script src="https://unpkg.com/scrollreveal"></script> -->

    <!-- <script>
     ScrollReveal({ reset: true ,
             distance: '60px',
             duration : 2500 ,
             delay:400

});

ScrollReveal().reveal('.title', { delay: 500 , origin: 'left' });
ScrollReveal().reveal('.container-fluid .box-container', { delay: 500 , origin: 'bottom' });
ScrollReveal().reveal('.pizzas .box-container', { delay: 500 , origin: 'bottom' });
ScrollReveal().reveal('.about .box-container .image', { delay: 500 , origin: 'bottom' });



    </script> -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('assetsAdmin/Js/main.js') }}"></script>
</body>

</html>