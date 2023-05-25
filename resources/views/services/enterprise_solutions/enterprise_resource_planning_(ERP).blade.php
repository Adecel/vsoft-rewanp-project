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
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                            <h2 class="home-title mb-4">Enterprise Resource Planning</h2>
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
            <h4 class="title-heading">Open ERP – Enterprise Resource Planning ( ERP )</h4>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-left">
                    
                    <!-- <h4 class="title-heading">E-Commerce Platform</h4> -->
                    <p>
                        <b>So, what IS ERP?</b>
                        <br>
                        <br>
                        ERP, or Enterprise Resource Planning Software, is business software that integrates and runs all aspects of your 
                        business – everything from traceability of raw materials, management and optimization of inventory, production 
                        planning and scheduling, to financial controls and even customer relationship management. An ERP system, like S
                        YSPRO, enables businesses to identify waste, eliminate inefficiencies, improve customer relations and facilitate 
                        real-time collaboration.
                        <br>
                        <br>
                            <b>How does it help my business?</b>
                        <br>
                        <br>
                        ERP systems enable businesses to have greater insight and visibility into their supply chain operations. Access 
                        to this key information allows them to make critical business decisions and to maintain a competitive edge in 
                        their industry, no matter how big or small the competition may be. An ERP system 360° visibility into operations, 
                        so problems are more easily identified and employees can make informed decisions. Financial data is always current 
                        thanks to real-time integration between financial, distribution and manufacturing solutions.
                        <br>
                        <br>
                        ERP solutions available on the market cater to the specific needs of target retail stores, while others serve the 
                        needs of healthcare facilities, and still others meet the specificities of oil and gas producers, and so on.
                  </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-center">
                    <h4 class="title-heading"></h4>
                    <div class="mb-4">
                        <img src="{{asset('images/services/enterprise_solutions/Enterprise_Resource_Planning_(ERP)/Enterprise_Resource_Planning_(ERP)01.jpg')}}" class="img-fluid rounded" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- WELCOME END -->

<!-- SERVICES START -->
<x-services_services/>
<!-- SERVICES END -->

<!-- FOOTER START -->
<x-footer/>
<!-- FOOTER END -->

<!-- JAVASCRIPTS -->
<x-javascript/>

</body>
</html>
