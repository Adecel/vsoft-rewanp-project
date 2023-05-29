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
                            <h2 class="home-title mb-4">Graphic Design & Logo Service</h2>
                            <!-- <p class="home-desc text-white-50 mx-auto">Maecenas class semper class semper sollicitudin lectus lorem iaculis imperdiet aliquam vehicula tempor auctor curabitur pede aenean ornare.</p> -->
                            <div class="text-left pt-4 navbar-nav" style="width: 250px">
                                <a href="/services/web-services" class="btn btn-custom"><i class="mdi mdi-arrow-left ml-2">Web Services</i></a>
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
            <h4 class="title-heading">Graphic Design & Logo Service</h4>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-left">
                    <!-- <h4 class="title-heading">Graphic Design & Logo Service</h4> -->
                    <!-- <p class="title-desc text-muted mt-3">Here goes the small description about "web_services"</p> -->
                    <p>
                        Graphic design is the process of communicating visually using text and images to present information.
                        <br>
                        <br>
                        In a graphic oriented website it is important that the graphic element should be defines in proper 
                        manner which allows the viewers attention to be captured and speak volumes of the business. In business 
                        world graphics says it all and will either attract or repel a potential client. Well presented graphics 
                        makes the case for attractive websites and draws the potential client in by create interest and desire 
                        to get to know the brand better.
                        <br>
                        <br>
                        The Vsoft Systems teamare professional devoted & visionary graphic artists. We are produced some of the 
                        best graphic solutions by ensuring attention to detail and the latest tools. We are dedicated professionals 
                        and one of the biggest advantages of working with our company is that we are abreast of 
                  </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-center">
                    <div class="mb-4">
                        <img src="{{asset('images/services/web_services_images/Graphic_Design&Logo_Service/Graphic_Design&Logo_Service.jpg')}}" class="img-fluid rounded" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="text-left">
                    <div class="mb-4">
                    <p>
                        advanced technology 
                        to extract value for your business environment for your website thereby creating a positive image to your
                        customer and clients.Our aim is always to create that kind of website that expresses your ideas in a 
                        positive manner. You will be always part of the design process where your ideas and input will always 
                        be taken into consideration in the designing of your website. Our major intention to turn your vision 
                        into reality through the medium of an effective website design we will during the project provide you 
                        with all the flexibility that may be needed to create a logo or design that expresses your ethos.
                        <br>
                        <br>
                        If you want cost effective graphic solutions then just click "contact us". Vsoftsystems Graphic 
                        solutions specialist. We offer our service on clients demand. We offer a free initial consultation 
                        service and feel free to contact us for any graphics advice.
                  </p>
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
<x-footer_2/>
<!-- FOOTER END -->

<!-- JAVASCRIPTS -->
<x-javascript/>

</body>
</html>
