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
                            <h2 class="home-title mb-4">Web Development</h2>
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
            <h4 class="title-heading">Website Development Solutions</h4>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-left">
                    <!-- <h4 class="title-heading">Website Development Solutions</h4> -->
                    <!-- <p class="title-desc text-muted mt-3">Here goes the small description about "web_services"</p> -->
                    <p>
                    VsoftSytems offers a professional Website development service to help you successfully plan, create, maintain and market
                    your Web development project in an ideal structured manner. Our strengths include fresh and creative graphic design, solid 
                    information architecture, navigation features and useful Web interactive features.<br>
                    <br>
                    Vsoft Systems uses a combination of advanced technology to develop your pages which can help you in terms of expanding your 
                    business by using such features as Web Application Development, ASP.NET Web Development, PHP Web Development, Content Management 
                    System (CMS), Active Server Pages, SQL Server and straight web design to create pages that work in almost every browser and are
                    more user friendly to view. Our design team will analyse your needs when we take your web site into account and your expectation 
                    and we employ the process best suited with these technologies for your web page development. Our careful evaluation process for 
                    your web site will ensure you get significant benefits over conventional technology.<br>
                    <br>
                    Our focus is on easily viewednavigation , quick loading, fresh website navigation and well planned and organized web page design 
                    with a layout that enables the visitor to find what he or she is looking for quickly and easily.<br>
                    <br>
                    We offer the following services:
                    <br>
                        - Web Site Design - From single pages to entire sites
                        <br>
                        - Multimedia Development
                        <br>
                        - Programming - C++, Java, CGI, HTML, XML,
                        <br>
                        - Database integration - Access, DBase, and SQL
                        <br>
                        - E-commerce - From online shopping to customer order management
                        <br>
                        Internet Marketing and Advertising
                        <br>
                        -Web site statistics - Analysis of your site traffic
                        <br>
                        -Web Site Hosting - Storage of Web sites on a Web Server
                        <br>
                        -Domain Name Registration
                        <br>
                        -Company Email Systems <br>
                        <br>
                        Does it portray a professional image? <br>
                        And most importantly, is it generating leads/sales? <br>
                    <br>
                    If the answer is No! You instantly need to get website redesign services, and we will be more than happy to help you. 
                    For free website review and consultation please contact us.
                  </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-center">
                    <!-- <h4 class="title-heading">Development Process</h4> -->
                    <div class="mb-4">
                        <img src="{{asset('images/services/web_services_images/Web_Development/test_long_img.jpg')}}" class="img-fluid rounded" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/services/web_services_images/Web_Development/image.jpg')}}" class="img-fluid rounded" alt="">
                        </div>
                        <!-- <h4>Search Engine Marketing</h4> -->
                        <!-- <p class="features-desc text-muted mt-3 pl-2 pr-2">Now you say: "Whether you're a small business or a high profile corporation, 
                            we can offer cutting-edge and strategic marketing services that will promote your business on the Internet."</p> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/services/web_services_images/Web_Development/image.jpg')}}" class="img-fluid rounded" alt="">
                        </div>
                        <!-- <h4>Mobile Application Development</h4> -->
                        <!-- <p class="features-desc text-muted mt-3 pl-2 pr-2">Mobile applications can help individuals with quicker information access, 
                            maximum productivity, and timely responsiveness, there helping him reduce operating cost and risks.</p> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/services/web_services_images/Web_Development/image.jpg')}}" class="img-fluid rounded" alt="">
                        </div>
                        <!-- <h4>Game Development</h4> -->
                        <!-- <p class="features-desc text-muted mt-3 pl-2 pr-2">Game development is one of the most intricate parts of software development.
                            Unlike ordinary applications, game development requires completely updated resources.</p> -->
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
