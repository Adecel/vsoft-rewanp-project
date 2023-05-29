<!DOCTYPE html>
<html>
<head>
    <x-head/>
</head>

<body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky">
    <div class="container">
        <a class="navbar-brand logo" href="#">Vsoft Systems</a>
        <button class="navbar-toggler collapsed" type="button" 
        data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" 
        aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#service">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#client">Clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#team">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#articles">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#price">Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- NAVBAR END-->

<!-- HOME START-->
<section class="bg-home-half-two" class="bg-home-half" id="home">
    <div class="bg-overlay"></div>
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="text-left text-white">
                            <!-- <h5 class="home-small-title text-uppercase text-white-50 mb-4">We create the web</h5> -->
                            <h2 class="home-title mb-4">E-Commerce Platform</h2>
                            <!-- <p class="home-desc text-white-50 mx-auto">Maecenas class semper class semper sollicitudin lectus lorem iaculis imperdiet aliquam vehicula tempor auctor curabitur pede aenean ornare.</p> -->
                            <div class="text-left pt-4 navbar-nav" style="width: 250px">
                                <a href="/services/enterprise-solutions" class="btn btn-custom"><i class="mdi mdi-arrow-left ml-2">Enterprise Solutions</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- HOME END-->

{{-- Floating Action Button #Fab--}}
<x-fab/>

<!-- WELCOME START -->
<section class="section" id="feature">
    <div class="container">
        <div class="text-center">
            <h4 class="title-heading">E-Commerce Platform</h4>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-left">
                    <!-- <h4 class="title-heading">E-Commerce Platform</h4> -->
                    <!-- <p class="title-desc text-muted mt-3">Here goes the small description about "web_services"</p> -->
                    <p>
                        VSOFT Systems. (VSOFT) is a leading boutique E-commerce Platform ( ERP ) company providing robust, flexible, and fast 
                        social e-commerce solutions to both emerging and well-established brands. VSOFT Social E-commerce platform, with its 
                        service components developed and developing, as below:
                    <br>
                    <br>
                        <b>a) Social E-commerce Platform Applications</b>
                    <br>
                    <br>
                        i) Social Learning Management System <br>
                        ii) Social Job Boards <br>
                        iii) Consumer E-commerce Application <br>
                        iv) VSOFT Inventory Control Application and its service components:<br>
                    <br>
                    <br>
                        <b>b) Cloud Network Application</b>
                    <br>
                    <br>
                        <b>c) VSOFT Hosting Application</b>
                    <br>
                    <br>
                        <b>d) VSOFT Payment Gateway Solution – Integrated with First Data</b>
                    <br>
                    <br>
                        <b>e) VSOFT Documents Management System – Auto Scanning and Documents Storage on VSOFT Cloud</b>
                    <br>
                    <br>
                        <b>f) VSOFT CMS</b>
                    <br>
                    <br>
                        <b>g) VSOFT Mobile Apps – Mobi POS – Mobi Tunes – Mobi Search – Mobi Websites</b>
                    <br>
                  </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-center">
                    <h4 class="title-heading"></h4>
                    <div class="mb-4">
                        <img src="{{asset('images/services/enterprise_solutions/E-Commerce_Platform/E-Commerce_Platform01.jpg')}}" class="img-fluid rounded" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="row mt-4">
            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/services/web_services_images/Web_Development/image.jpg')}}" class="img-fluid rounded" alt="">
                        </div>
                        <h4>Search Engine Marketing</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">Now you say: "Whether you're a small business or a high profile corporation, 
                            we can offer cutting-edge and strategic marketing services that will promote your business on the Internet."</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/services/web_services_images/Web_Development/image.jpg')}}" class="img-fluid rounded" alt="">
                        </div>
                        <h4>Mobile Application Development</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">Mobile applications can help individuals with quicker information access, 
                            maximum productivity, and timely responsiveness, there helping him reduce operating cost and risks.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/services/web_services_images/Web_Development/image.jpg')}}" class="img-fluid rounded" alt="">
                        </div>
                        <h4>Game Development</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">Game development is one of the most intricate parts of software development.
                            Unlike ordinary applications, game development requires completely updated resources.</p>
                    </div>
                </div>
            </div>
        </div> -->

    </div>
</section>
<!-- WELCOME END -->

<!-- SERVICES START -->
<x-services_services/>
<!-- SERVICES END -->

<!-- FOOTER START -->
<x-footer_2/>
<!-- FOOTER END -->

<!-- JAVASCRIPTS -->
<x-javascript/>

</body>
</html>
