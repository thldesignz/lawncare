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
                    <div class="col img-section">
                        <div class="image">
                        <img src="/img/owner.jpg" alt="" class="img-fluid">
                    </div>
                    </div>
                    <div class="col home_section_1 ">
                        <h3>Open Since 2001!</h3>
                        <h6>We deliver quality services</h6>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>

                        <a href="#">More about us</a>

                    </div>
                    <div class="col home_section_2 ">
                        <h3>Our Benefits</h3>
                        <ul>
                            <li><i class="fas fa-check-circle"></i> Quality Landscaping</li>
                            <li> <i class="fas fa-check-circle"></i> 100% Satisfaction Guarantee</li>
                            <li> <i class="fas fa-check-circle"></i> Highly Professional Members </li>
                            <li> <i class="fas fa-check-circle"></i> Deliver Always on Time</li>
                            <li> <i class="fas fa-check-circle"></i> best Value Solutions</li>
                            <li> <i class="fas fa-check-circle"></i> Professional and Qualified</li>
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
                                        <i class="fas fa-calculator"></i>
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
                                        <i class="fas fa-home"></i>
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
                                        <i class="fas fa-shield-alt"></i>
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
                                        <i class="fas fa-calendar-alt"></i>
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
        <section class="vid">
            <div class="container-fluid">

                <div class="row">
                    <div class="col">
                        <div class="vid_overlay"></div>
                        <div class="vid_bg-vid">
                            <iframe class="bg-vid" width="560" height="315" src="https://www.youtube.com/embed/JWJI7nU2Dxc?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="vid_text">
                            <h2>With 10+ years of Experience with landscape and gardening </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="get_quote">
            <div class="container">
                <div class="row ">
                    <div class="col top_quote">
                        <div class="quote_sale">
                            <div class="left">
                                <span class="icon"><i class="fas fa-tag"></i></span>
                                <span class="big">Save Now</span>
                            </div>
                            <div class="right">
                                <span class="small">50% off your <br/> first application</span>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="quote">
                            <h2>get a custom quote</h2>

                    <form>
                        <div class="row">
                        <div class="form-group col">
                            <label for="fnameinput">First Name</label>
                            <input type="text" name="fname" class="form-control" id="fnameinput" placeholder="first Name">
                          </div>
                          <div class="form-group col">
                            <label for="fnameinput">Last Name</label>
                            <input type="text" name="fname" class="form-control" id="fnameinput" placeholder="Last Name">
                          </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="emailinput">Email</label>
                                <input type="email" name="email" class="form-control" id="emailinput" placeholder="name@example.com">
                              </div>
                              <div class="form-group col">
                                  <label for="phoneinput">Phone Number</label>
                                  <input type="text" name="phone" class="form-control" id="phoneinput" placeholder="555-555-1234">
                                </div>

                        </div>


                          <div class="form-group">
                          <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                      </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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

    </body>
</html>
