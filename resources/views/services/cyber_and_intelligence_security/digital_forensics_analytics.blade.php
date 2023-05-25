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
                            <h2 class="home-title mb-4">Digital Forensics Analytics</h2>
                            <!-- <p class="home-desc text-white-50 mx-auto">Maecenas class semper class semper sollicitudin lectus lorem iaculis imperdiet aliquam vehicula tempor auctor curabitur pede aenean ornare.</p> -->
                            <div class="text-left pt-4 navbar-nav" style="width: 250px">
                                <a href="#digital-forensics" class="btn btn-custom"><i class="mdi mdi-arrow-down ml-2">Ream More</i></a>
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
<section class="section" id="digital-forensics">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center">
                    <h4 class="title-heading">Digital Forensics Analytics</h4>
                    <!-- <p class="title-desc text-muted mt-3">Here goes the small description about "web_services"</p> -->
                    <p class="title-desc text-muted mt-3">
                        When the chances of solving a case drop by half after the first 48 hours, investigative teams need to work fast. Collaboration, speed and accuracy are essential. Case backlogs, processing times and time consuming analysis of device, cloud and computer data in large, static PDF reports put investigations at risk. To successfully solve cases and keep communities safe, teams need solutions to move beyond siloed data repositories and manual analysis to transform the intelligence gathering process.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="text-left">
                <h4 class="title-heading">Text analytics</h4>
                <!-- <p class="title-desc text-muted mt-3">Here goes the small description about "web_services"</p> -->
                <p class="title-desc text-muted mt-3">
                    Analytics Enterprise delivers a complete end-to-end digital forensics workflow that eliminates manual, time-intensive data management tasks, automates analytical processes and unifies investigative efforts. Store, index and unify all mobile, cloud, computer and telco data in a centralized digital forensics library. Analytics Enterprise uses cutting-edge neural network-based machine learning algorithms, so investigative teams can simplify and speed up the analysis of all digital artifacts to discover key evidence that can solve a case faster.
                </p>

                <h6>
                    <b>Key Benifits</b>
                </h6>
                <p>Eliminate complex, manual analysis.<br>

                    Go beyond regex and watch lists with natural language processing to uncover names, addresses, locations and more from artifacts like emails, websites, text messages or even images that contain text, using OCR, in multiple languages.</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10" style="margin-top: 30px; margin-bottom: 30px;">
            <div class="text-left">
                <h4 class="title-heading">Digital Forensics Analytics</h4>
                <!-- <p class="title-desc text-muted mt-3">Here goes the small description about "web_services"</p> -->
                <h6 style="margin-top:20px ">
                    <b>Media analytics</b><br>
                </h6>
                <p>
                    Eliminate manual review of media with neural network-based machine learning algorithms that automatically detect previously unknown images and video clips related to key categories, such as child exploitation, weapons, money, drugs, nudity and more. Quickly search and identify persons of interest with advanced facial recognition capabilities.
                </p>

                <h6 style="margin-top:20px ">
                    <b>Hash database integration</b><br>
                </h6>
                <p>
                    Integration with Project VIC, CAID and other defined hash value databases reduce the psychological stress of reviewing sensitive material. Existence of known incriminating images are automatically identified by matching image hash values and then classified using pre-defined categories. Unmatched images that are discovered can also be categorized and exported.                </p>

                <h6 style="margin-top:20px ">
                    <b>Timeline and map analytics</b><br>
                </h6>
                <p>
                    Access location-related data to track a suspect’s whereabouts, identify case related hotspots, and detect meetings, geo-routines and routes. Create maps and timelines based on mutual locations, communication flow and patterns across suspects, events or even cases to find patterns that lead to new investigative paths.
                </p>

            </div>
        </div>
    </div>
</div>

<!-- FOOTER START -->
<x-footer/>
<!-- FOOTER END -->

<!-- JAVASCRIPTS -->
<x-javascript/>

</body>
</html>
