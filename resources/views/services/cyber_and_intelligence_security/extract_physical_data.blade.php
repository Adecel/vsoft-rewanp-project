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
                            <h2 class="home-title mb-4">Extract physical data from Chinese Phones</h2>
                            <!-- <p class="home-desc text-white-50 mx-auto">Maecenas class semper class semper sollicitudin lectus lorem iaculis imperdiet aliquam vehicula tempor auctor curabitur pede aenean ornare.</p> -->
                            <div class="text-left pt-4 navbar-nav" style="width: 250px">
                                <a href="#extraction" class="btn btn-custom"><i class="mdi mdi-arrow-down ml-2">Read More</i></a>
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
<section class="section" id="extraction">
    <div class="container" style="margin-bottom: 60px;">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center">
                    <h4 class="title-heading">Extract physical data from Chinese Phones</h4>
                    <!-- <p class="title-desc text-muted mt-3">Here goes the small description about "web_services"</p> -->
                    <p>
                        UFED Physical Analyzer is the most powerful mobile forensic application available. It provides users with powerful decoding, analysis and reporting functions with its intuitive user interface, instant search, advanced highlights engine, superb hex viewer, report generator and much more.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-left">
                    <h6>How it works</h6>
                    <p>
                        Using the UFED CHINEX is simple and efficient: The UFED CHINEX connectivity box acts as the interface between the phone and the UFED. The UFED enables the automatic pin-out identification. By selecting “Chinese phones physical extraction” in the UFED menu, the phone pin-out will be detected and the extraction will start automatically.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-left">
                    <h6>Extraction of phone data</h6>

                    <ul>
                        <li>Physical extraction of existing, hidden and deleted data.</li>
                        <li>State-of-the-art decoding and reporting of data with UFED (Universal Forensic Extraction Device) Physical Analyzer: Call logs, SMS, MMS, videos, images, apps data, deleted data, GPS fixes and much more.</li>
                        <li>User password extraction.</li>
                        <li>Automatic pin-out recognition.</li>
                        <li>Ability to bypass and decode the user lock from the extraction using UFED Physical Analyzer.</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

</section>

<!-- FOOTER START -->
<x-footer_2/>
<!-- FOOTER END -->

<!-- JAVASCRIPTS -->
<x-javascript/>

</body>
</html>
