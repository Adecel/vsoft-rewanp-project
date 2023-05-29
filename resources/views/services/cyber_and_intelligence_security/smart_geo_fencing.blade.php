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
                            <h2 class="home-title mb-4">Website Design</h2>
                            <!-- <p class="home-desc text-white-50 mx-auto">Maecenas class semper class semper sollicitudin lectus lorem iaculis imperdiet aliquam vehicula tempor auctor curabitur pede aenean ornare.</p> -->
                            <div class="text-left pt-4 navbar-nav" style="width: 250px">
                                <a href="/web_services" class="btn btn-custom"><i class="mdi mdi-arrow-left ml-2">Web Services</i></a>
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
            <div class="col-lg-10">
                <div class="text-center">
                    <h4 class="title-heading">Smart Geo-fencing Based on Geo-distribution of Mobile User Activity</h4>
                    <!-- <p class="title-desc text-muted mt-3">Here goes the small description about "web_services"</p> -->
                    <p >
                        Smart geo-fencing is a location-based marketing technique that uses a mobile device's GPS or location services to trigger targeted advertising messages when a user enters a defined geographic area. It can be a powerful tool for businesses to reach potential customers at the right time and place.
                    </p>
                    <p >
                        One way to enhance the effectiveness of smart geo-fencing is to analyze the geo-distribution of mobile user activity in a particular area. By understanding where users are spending their time and what locations they frequently visit, businesses can create more targeted and relevant marketing messages.
                    </p>
                </div>
            </div>
        </div>

        {{--<div class="row mt-4">
            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="images/about/2.jpg" class="img-fluid rounded" alt="">
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
                            <img src="images/about/2.jpg" class="img-fluid rounded" alt="">
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
                            <img src="images/about/3.jpg" class="img-fluid rounded" alt="">
                        </div>
                        <!-- <h4>Web Development</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">VsoftSytems offers a professional Website development service to help you successfully plan,</p> -->
                    </div>
                </div>
            </div>
        </div>--}}


    </div>
</section>

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-left">
                    <h6 >How it works</h6>
                    <p >
                        Geo-location is identifying the real-world geographical location of an object through either GPS tracking or inbuilt data transmitting ability of smart devices.
                    </p>
                </div>

                <div class="text-left">
                    <h6 >Managing an Effective Geo-targeting Advertising Campaign</h6>
                   <p> <ul>

                        <li>
                            Online advertising has become ever more sophisticated over the last decade, allowing marketing campaigns to target specific groups of customers through innovations such as contextual targeting and site specific advertising.
                        </li>
                        <br>
                        <li>
                            Many businesses use geo fencing to simply send special offers to customers when they walk or drive near a business’s location. But there’s plenty of opportunity for creativity beyond that. For example, real estate agencies can send push notifications to possible buyers when they come near open houses, and bands can send messages to fans when they walk by a concert venue the band will be performing at soon.
                        </li>
                        <br>
                        <li>
                            But there’s no real limit on location. Coffee shops could trigger geofenced push notifications when users are downtown and in need of some pre-work caffeine. A wedding planner could set up a geofenced push notification around bridal stores and bakeries, offering helpful shopping tips or highlighting the best deals for users. Retail stores could alert users to deals when they’re nearby the local mall.
                        </li>
                    </ul></p>
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
