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
                            <h2 class="home-title mb-4">Chat bot</h2>
                            <div class="text-left pt-4 navbar-nav" style="width: 250px">
                                <a href="/services/chatbot-expertise" class="btn btn-custom"><i class="mdi mdi-arrow-left ml-2">Chat bot Expertise</i></a>
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
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center">
                    <h4 class="title-heading">Chat bot Service</h4>
                    <!-- <p class="title-desc text-muted mt-3">Here goes the small description about "web_services"</p> -->
                    <p>
                    Finding a professional web design company is a tiresome job so many to choose from !!. How to look past the sales pitch !! 
                    .This statement is true, since a professional and skillful web design company will be thorough in the design and development 
                    of your website. When you want to review or add a website following points must be taken into account in website redesigning 
                    services, you need to consider the following questions:<br>
                    <br>
                    Is your website up to date? <br>
                    Is the look and feel appealing? <br>
                    Is the design compatible with search engines? <br>
                    Does it portray a professional image? <br>
                    And most importantly, is it generating leads/sales? <br>
                    <br>
                    If the answer is No! You instantly need to get website redesign services, and we will be more than happy to help you. 
                    For free website review and consultation please contact us.
                  </p>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/services/web_services_images/website_design/image2.jpg')}}" class="img-fluid rounded" alt="">
                        </div>
                        <!-- <h4>Website Design</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">Finding a professional web design company is a tiresome job so many to choose from !</p> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/services/web_services_images/website_design/image2.jpg')}}" class="img-fluid rounded" alt="">
                        </div>
                        <!-- <h4>Web Maintenance</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">We at Vsoft Systems, with our website maintenance team we will focus on enhancing existing</p> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/services/web_services_images/website_design/image2.jpg')}}" class="img-fluid rounded" alt="">
                        </div>
                        <!-- <h4>Web Development</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">VsoftSytems offers a professional Website development service to help you successfully plan,</p> -->
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
