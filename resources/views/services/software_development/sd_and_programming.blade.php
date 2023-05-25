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
                            <h2 class="home-title mb-4">Software Development and Programming</h2>
                            <!-- <p class="home-desc text-white-50 mx-auto">Maecenas class semper class semper sollicitudin lectus lorem iaculis imperdiet aliquam vehicula tempor auctor curabitur pede aenean ornare.</p> -->
                            <div class="text-left pt-4 navbar-nav" style="width: 250px">
                                <a href="/services/software-development" class="btn btn-custom"><i class="mdi mdi-arrow-left ml-2">More</i></a>
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
  <div class="row gx-4 justify-content-centre">
    <div class="col-md-6">
    <h6 style="text-align: justify;"> <span style="color: blue;">EXPERT SERVICES</span></h6>
    <h4 class="header1"><br>Software </br>
        Development<br> and 
        Programming </br></h4>
    <p>Developing the right software solutions for your business and integrating complex systems is both an art and a science – a symphony, 
        if you like – and it’s what we do best. We partner with the top technical people in the World ,
         and this talented team builds strategic software solutions to successfully orchestrate your online business. We specialise in business analysis,
          technology consulting, custom software development and complex integration</p>
          
      
        <p> software development It is often more effective to build specifically tailored solutions as opposed to using shelf products.
             Such customised systems can range from database software to tracking clients to enabling the exchange of data between unrelated systems.
            To ensure that the customised solution delivered meets the business intent on time and within budget, 
            the projects demand close liaison between the client and software development company and this is where we excel.<br><p></p>
            Our software development focus is on the delivery of custom line-of-business systems,
            data-driven applications, enterprise software solutions, system integration as well as internet and mobile applications. Our solutions are based on established software design methodologies and current software architecture principles.</br></p>
     <h6><span style="color: blue;">Our services solution includes :</span></h6>
     <ul>
  <li>Client-facing web solutions and portals</li>
  <li>Document management and content management systems</li>
  <li>Line-of-business system development</li>
  <li>System integration and partner integration</li>
  <li>Database development</li>
  <li>Business Intelligence and Master Data Management</li>
  <li>Mobile app solutions</li>
  <li>Line-of-business system development</li>
  <li>System integration and partner integration</li>
  <li>Database development</li>
  <li>Business Intelligence and Master Data Management</li>
</ul>

    <div class="col-md-6">
    <div class="mb-4">
  <img src="/images/about/sdPrograming1.jpg" class="img-fluid rounded" alt="">
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