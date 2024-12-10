<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Petcare</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">

        <!-- Favicon -->
        <link href="{{ asset('./logo_petcare.png') }}" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('./assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('./assets/lib/owlcarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
        <link href="{{ asset('./assets/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('./assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('./assets/lib/twentytwenty/twentytwenty.css') }}" rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('./assets/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('./assets/css/style.css') }}" rel="stylesheet">
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-info m-1" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-grow text-dark m-1" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-grow text-info m-1" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
            <a href="{{url('/')}}" class="navbar-brand p-0">
                <img style="width: 5rem" src="{{ asset('./logo_petcare.png') }}" alt="Image">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{url('/')}}" class="nav-item nav-link active">Inicio</a>
                    <a href="{{url('/nosotros')}}" class="nav-item nav-link">Nosotros</a>
                    <a href="{{url('/products')}}" class="nav-item nav-link">Productos</a>
                    <a href="{{url('/contacto')}}" class="nav-item nav-link">Contacto</a>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        
        @yield('contenido')

        <div class="container-fluid  pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        </div>
    
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: -75px;">
            <div class="container pt-5">
                <div class="row g-5 pt-4">
                    <div class="col-lg-4 col-md-6">
                        <h3 class="text-white mb-4">Enlaces</h3>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="{{ url('/') }}"><i class="bi bi-arrow-right text-info me-2"></i>Inicio</a>
                            <a class="text-light mb-2" href="{{ url('/nosotros') }}"><i class="bi bi-arrow-right text-info me-2"></i>Nosotros</a>
                            <a class="text-light mb-2" href="{{ url('/products') }}"><i class="bi bi-arrow-right text-info me-2"></i>Productos</a>
                            <a class="text-light mb-2" href="{{ url('/conectaco') }}"><i class="bi bi-arrow-right text-info me-2"></i>Contacto</a>
                            <a class="text-light" href="{{ url('/dashboard') }}"><i class="bi bi-arrow-right text-info me-2"></i>Admin</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h3 class="text-white mb-4">Contactanos</h3>
                        <p class="mb-2"><i class="bi bi-geo-alt text-info me-2"></i>Guayaquil - Ecuador</p>
                        {{--<p class="mb-2"><i class="bi bi-envelope-open text-info me-2"></i>info@example.com</p>--}}
                        <p class="mb-0"><i class="bi bi-telephone text-info me-2"></i>+593 98 171 4966</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/pet_caregye/profilecard/?igsh=ZnVlY2ZzZjB4djBv" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/people/PetCare-Veterinaria-247/100070179608941/?mibextid=LQQJ4d&rdid=DyVvcSJcKkDR7My7&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F12FCjA1uJGX%2F%3Fmibextid%3DLQQJ4d" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            {{--<a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-youtube"></i></a>--}}
                            <a class="btn btn-outline-light btn-social" href="https://api.whatsapp.com/send/?phone=593981714966&amp;text&amp;type=phone_number&amp;app_absent=0" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="embed-responsive embed-responsive-21by9">
                            <iframe 
                                class="embed-responsive-item"
                                src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d63720844.68626046!2d-110.92099191354491!3d-12.894103877883666!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sec!4v1733698194181!5m2!1ses!2sec" 
                                
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-info btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('./assets/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('./assets/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('./assets/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('./assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('./assets/lib/tempusdominus/js/moment.min.js') }}"></script>
        <script src="{{ asset('./assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
        <script src="{{ asset('./assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
        <script src="{{ asset('./assets/lib/twentytwenty/jquery.event.move.js') }}"></script>
        <script src="{{ asset('./assets/lib/twentytwenty/jquery.twentytwenty.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('./assets/js/main.js') }}"></script>
        <script type="text/javascript">
            $('.owl-carousel').owlCarousel({
                stagePadding: 50,
                loop: true,
                margin: 10,
                nav: false,
                autoplay: true,             // Activa la reproducción automática
                autoplayTimeout: 2000,      // Intervalo entre desplazamientos en ms
                autoplayHoverPause: true,   // Pausa al pasar el mouse sobre el carrusel
                smartSpeed: 800,            // Velocidad de transición (ajustable)
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            });
        </script>
    </body>

</html>