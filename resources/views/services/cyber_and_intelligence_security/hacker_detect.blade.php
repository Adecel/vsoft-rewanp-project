<!DOCTYPE html>
<html>
<head>
    <x-head/>
</head>

<body>
<!-- NAVBAR -->
<x-services_nav/>
<!-- NAVBAR END-->

<!-- HOME START-->
<section class="bg-home-half" id="home">
    <div class="bg-overlay"></div>
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="text-left text-white">
                            <!-- <h5 class="home-small-title text-uppercase text-white-50 mb-4">We create the web</h5> -->
                            <h2 class="home-title mb-4">Hacker Detect, Isolate & Trace</h2>
                            <!-- <p class="home-desc text-white-50 mx-auto">Maecenas class semper class semper sollicitudin lectus lorem iaculis imperdiet aliquam vehicula tempor auctor curabitur pede aenean ornare.</p> -->
                            <div class="text-left pt-4 navbar-nav" style="width: 250px">
                                <a href="#read-more" class="btn btn-custom"><i class="mdi mdi-arrow-down ml-2">Read More</i></a>
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
<section class="section" id="read-more">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center">
                    <h4 class="title-heading">What is VSOFT Detect, Isolate & Trace?</h4>
                </div>

                <ul class="features-desc text-muted mt-3 pl-2 pr-2">
                    <li>Fundamentally, VSOFT Detect, Isolate & Trace is a cyber security vendor. What sets it apart, however, is its innovative use of AI or, more specifically, machine learning.</li>
                    <br>
                    <li>At the core of all its products is VSOFT Detect. Isolate & Trace's Organization Detect & Neutralize System, an unsupervised machine learning technology and probabilistic mathematics. What this means in practice is that the software learns from the experience of analyzing vast amounts of data by itself, without human intervention, and can adapt to a business's changing needs. It can also use probabilistic mathematics to determine how likely an attack is.</li>
                    <br>
                    <li>One of the products takes this a step further, releasing 'antigens' in the same way the immune system in a living organism does to slow and repel the attack.</li>
                    <br>
                    <li>The organisation has also added specialized products focused specifically on cloud, primary defence (such as security information and event management, or SIEM), virtualized environments and industrial control systems.</li>
                    <br>
                    <li>In short, VSOFT Detect, Isolate & Trace is a company focused solely on the enterprise, with apparently no intention of heading into the consumer space.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<div class="container" style="padding-bottom: 50px">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="text-left">
                <h4 class="title-heading">Key Features of the System</h4>
            </div>

            <ul class="features-desc text-muted mt-3 pl-2 pr-2">
                <li>Adaptive – evolves with your organization</li>
                <br>
                <li>Self-learning – constantly refines its understanding of normal</li>
                <br>
                <li>Probabilistic – works out likelihood of serious threat</li>
                <br>
                <li>Real-time – spots threats as they emerge</li>
                <br>
                <li>Works from day one – delivers instant value</li>
                <br>
                <li>Low false positives – correlation of weak indicators</li>
                <br>
                <li>Data agnostic – ingests all data sources</li>
            </ul>

        </div>

        <div class="col-lg-5">

            <div class="mb-5">
                <img src="{{asset('images/services/cyber_security/hacker.jpg')}}" class="img-fluid rounded" alt="">
            </div>

        </div>
    </div>
</div>

<div class="container" style="padding-bottom: 50px">
    <div class="row justify-content-center">

        <div class="col-lg-7">
            <div class="text-left">
                <h4 class="title-heading">Detection of Human Behavior Deviation Core Elements of the System</h4>
            </div>

            <p class="features-desc text-muted mt-3 pl-2 pr-2">
                VSOFTsystems detects subtle shifts in behaviors, such as the way someone is using technology, a machine’s data access patterns, or trends in communications, threatening events, such as the theft of a user’s credentials, a compromised device, or the actions of a disaffected or negligent employee.
            </p>

        </div>

        <div class="col-lg-3">

            <div class="mb-4">
                {{--<img src="{{asset('images/services/cyber_security/hacker.jpg')}}" class="img-fluid rounded" alt="">--}}
            </div>

        </div>
    </div>
</div>

<!-- FOOTER START -->
<x-footer_2/>
<!-- FOOTER END -->

<!-- JAVASCRIPTS -->
<x-javascript/>

</body>
</html>
