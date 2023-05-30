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
                            <h2 class="home-title mb-4">Contextua Chatbot</h2>
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
<!-- <section class="section" id="feature">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center">
                    <h4 class="title-heading">Contextua Chatbot Service</h4>
                    <p>
                    Contextual chatbots. These chatbots are more complex than others and require a 
                    data-centric focus. They use AI and ML to remember user conversations and interactions, 
                    and use these memories to grow and improve over time. Instead of relying on keywords, 
                    these bots use what customers ask and how they ask it to provide answers and 
                    self-improve.<br>
                </div>
            </div>
        </div> -->

    <!-- ABOUT START -->
    <section class="section" id="about" id="feature">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="text-center">
                        <h4 class="title-heading">Contextua Chatbot Service</h4>
                        <!-- <p class="title-desc text-muted mt-3">Small quote about what goes with ITHIMBA </p> -->
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-6">
                    <div class="features mt-4">
                        <div class="text-center">
                            <!-- <div class="mb-4">
                                <img src="images/about/2.jpg" class="img-fluid rounded" alt="">
                            </div> -->

                            <!-- <h4>Software Development Company</h4> -->
                            <p class="features-desc text-muted mt-3 pl-2 pr-2">
                            Contextual chatbots. These chatbots are more complex than others and require a 
                            data-centric focus. They use AI and ML to remember user conversations and interactions, 
                            and use these memories to grow and improve over time. Instead of relying on keywords, 
                            these bots use what customers ask and how they ask it to provide answers and 
                            self-improve.
                        <br>
                        The rapidly evolving digital world is altering and increasing customer expectations. 
                        Many consumers expect organizations to be available 24/7 and believe an organization's 
                        CX is as important as its product or service quality. Furthermore, buyers are more informed 
                        about the variety of products and services available and are less likely to remain loyal to 
                        a specific brand.
                    </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="features mt-4">
                        <div class="text-center">
                            <div class="mb-4">
                                <img src="{{asset('images/services/chatbot_expertise/Contextual_Chatbot_Service.jpg')}}" class="img-fluid rounded" alt="">
                                <!-- images/home/home-bg-thinking.jpg -->
                            </div>

                            <!-- <h4>Mission</h4>
                            <p class="features-desc text-muted mt-3 pl-2 pr-2">At Vsoft Systems, our mission is to empower businesses to leverage the full potential of technology, by providing expert web and software development services that are tailored to their unique needs and goals.</p> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ABOUT END -->

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
