<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/styles.css') }}">
        <script src="https://kit.fontawesome.com/d7d48a0d12.js" crossorigin="anonymous"></script>


    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    {{--  <img src="https://careydevelopment.us/img/branding/careydevelopment-logo-sm.png" />  --}}
                    logo
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">about us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Our services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">get a quote</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">login</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <div class="header">
            <div class="header_overlay"></div>
            <div class="header_content">
                <h1>We treat your lawn like family</h1>
                <p>We have been keeping Ohioans happy and their lawns healthy for over 20 years. Professional services, proudly serving our local community. </p>
                <button type="button" class="btn btn-outline-primary">get started now</button>
            </div>

            {{--  <img src="/img/lawn.jpg" alt="">  --}}
        </div>

        <div class="about_home">
            <div class="container">
                <div class="row">
                    <div class="col ">
                        <div class="image">
                        <img src="/img/owner.jpg" alt="" class="img-fluid">
                    </div>
                    </div>
                    <div class="col ">
                        <h3>Open Since 2001!</h3>
                        <h6>We deliver quality services</h6>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>

                        <a href="#">More about us</a>

                    </div>
                    <div class="col ">
                        <h3>Our Benefits</h3>
                        <ul>
                            <li>Quality Landscaping</li>
                            <li>100% Satisfaction Guarantee</li>
                            <li>Highly Professional Members </li>
                            <li>Deliver Always on Time</li>
                            <li>best Value Solutions</li>
                            <li>Professional and Qualified</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="services_home">
            <div class="container">
                <h1>Why choose us?</h1>
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <div class="card-top">
                                    <h5>
                                        <i class="fa-regular fa-credit-card"></i>
                                      </h5>
                                      <h6>Free Estimates</h6>
                                </div>

                              <p class="card-text">Reach out to us for a free estimates of costs for your lawn care or project</p>
                            </div>
                          </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <div class="card-top">
                                    <h5>
                                        <i class="fa-brands fa-houzz"></i>
                                      </h5>
                                      <h6>Your Home is Our Business</h6>
                                </div>

                              <p class="card-text">Residential lawn care and personalizedservice is our focus and our specialty.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <div class="card-top">
                                    <h5>
                                        <i class="fa-solid fa-handshake-simple"></i>
                                      </h5>
                                      <h6>Dependable Services</h6>
                                </div>

                              <p class="card-text">We take pride in the reputation we have for quality, professional service.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <div class="card-top">
                                    <h5>
                                        <i class="fa-solid fa-calendar-days"></i>
                                      </h5>
                                      <h6>Scheduling</h6>
                                </div>

                              <p class="card-text">We schedule regular times to visit your property.</p>
                            </div>
                          </div>
                    </div>

                </div>
            </div>
        </div>

        <section class="footer">
            <div class="container">
                <div class="row">
                    <div class="col footer_top">
                        <div class="footer_logo">
                            <a href="#">logo</a>
                        </div>
                        <div class="footer_social">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook"></i> </a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i> </a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
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


                </div>
            </div>
            <div class="row">
                <p class="footer_copy">&copy; <?php $year= date("Y"); echo $year; ?> All rights reserved</p>
            </div>
        </section>

    </body>
</html>
