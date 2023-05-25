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
                            <h2 class="home-title mb-4">UFED Cloud Analyzer Analyzer</h2>
                            <!-- <p class="home-desc text-white-50 mx-auto">Maecenas class semper class semper sollicitudin lectus lorem iaculis imperdiet aliquam vehicula tempor auctor curabitur pede aenean ornare.</p> -->
                            <div class="text-left pt-4 navbar-nav" style="width: 250px">
                                <a href="#feature" class="btn btn-custom"><i class="mdi mdi-arrow-down ml-2">Web Services</i></a>
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
                    <h4 class="title-heading">UFED Cloud Analyzer</h4>
                    <!-- <p class="title-desc text-muted mt-3">Here goes the small description about "web_services"</p> -->
                    <p>
                        As people increasingly rely on social media and other cloud-based services to connect with others, store information and share their lives, digital evidence that can be critical to solving a case often exists beyond physical devices. Accessing data from public or private user profiles hosted in cloud-based applications and services needs to be fast and forensically sound to keep investigations moving forward.

                        Cloud-based sources represent virtual goldmines of potential evidence for investigations.

                        Extract, preserve and analyze social media data, instant messaging, file storage and other cloud-based content from public and legally pre-approved private sources with UFED Cloud Analyzer.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="text-left">
                <h6>Key Benefits</h6>
                <!-- <p class="title-desc text-muted mt-3">Here goes the small description about "web_services"</p> -->
                <ul>
                    <li>Acquire crucial details with a forensically sound process.</li>
                    <li>Fulfill requests for cloud-based private data Gather private user data in accordance with due process from over 40 of the most popular social media and cloud-based sources, including Facebook, Twitter, Gmail, Google Drive, Dropbox, Instagram, Vkontakte, What’s App, iCloud and more. Use login credentials provided by the subject, extracted from digital devices, retrieved from personal files or via other discovery means to gain access to time-sensitive evidence.</li>
                    <li>Capture public domain data for easy review.</li>
                    <li>Easily access, view and incorporate publicly available data into your investigations, such as location information, profiles, images, files and social communications from popular apps, including Facebook, Twitter and Instagram.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container mb-3">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="text-left">
                <h6>Forensically preserve data</h6>
                <!-- <p class="title-desc text-muted mt-3">Here goes the small description about "web_services"</p> -->
                <ul>
                    <li>ALog and trace the entire extraction process to maintain data authenticity. Each piece of extracted data is hashed separately and can be later compared against its origin to ensure forensic soundness and produce admissible evidence.</li>
                    <li>Enhance and share insights to accelerate investigations.</li>
                    <li>Track online behavior Gain insights into the subject’s intentions, interests and relationships by analyzing posts, likes, events and connections. View text searches conducted with Chrome and Safari on iOS devices backed-up on iCloud. Extract extensive details from Google web history including private location information from a suspect or victim, so investigators can track time-stamped movements minute by minute.</li>
                </ul>
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
