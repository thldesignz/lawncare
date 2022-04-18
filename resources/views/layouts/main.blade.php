<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/styles.css') }}">
        <script src="https://kit.fontawesome.com/29332e2c78.js" crossorigin="anonymous"></script>


    </head>
    <body>
        <header class="header2">
            <div class="container">
                <div class="header2__logo">
                    Berries Lawn Care
                </div>
                <div class="header2__menu">
                    <a class="header2__menu-link header2__menu-link--active" href="#">Home</a>
                    <a class="header2__menu-link" href="/about">About Us</a>
                    <a class="header2__menu-link" href="/services">Services</a>
                    <a class="header2__menu-link" href="/quote">Get Quote</a>


                </div>
                <div class="header2__menu">
                    <a class="header2__menu-link " href="/account"><i class="fas fa-user"></i></a>
                </div>
            </div>

        </header>

        @yield('content')


        <section class="footer">
            <div class="container">
                <div class="row">
                    <div class="col footer_top">
                        <div class="footer_logo">
                            <a href="#">logo</a>
                        </div>
                        <div class="footer_social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook"></i> </a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i> </a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="container-fluid">
                <div class="row">
                    <hr>
                </div>

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 footer_mid">
                        <h5>Explore</h5>
                        <div class="footer_links">
                            <a href="#">link</a>
                            <a href="#">link</a>
                            <a href="#">link</a>
                            <a href="#">link</a>
                    </div>
                    </div>
                    <div class="col-lg-3">
                        <h5>Explore</h5>
                        <div class="footer_links">
                            <a href="#">link</a>
                            <a href="#">link</a>
                            <a href="#">link</a>
                            <a href="#">link</a>
                    </div>
                    </div>
                    <div class="col-lg-3">
                        <h5>Explore</h5>
                        <div class="footer_links">
                            <a href="#">link</a>
                            <a href="#">link</a>
                            <a href="#">link</a>
                            <a href="#">link</a>
                    </div>
                    </div>
                    <div class="col-lg-3">
                        <h5>Contact</h5>
                        <div class="footer_links">
                           <li> <i class="fas fa-phone"></i> (513)123-45678</li>
                           <li> <i class="fas fa-envelope"></i> help@company.com</li>
                           <li> <i class="fas fa-map-marked-alt"></i> 531 Lane St, Monroe, OH</li>
                    </div>
                    </div>


                </div>
            </div>
            <div class="row footer_bottom">
                <p class="footer_copy">&copy; <?php $year= date("Y"); echo $year; ?> All rights reserved</p>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>
