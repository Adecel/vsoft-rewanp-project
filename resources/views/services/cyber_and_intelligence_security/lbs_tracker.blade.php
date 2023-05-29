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
                            <h2 class="home-title mb-4">LBS Tracker</h2>
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
            <div class="col-lg-6">
                <div class="text-left">
                    <h4 class="title-heading">LBS Tracker</h4>
                    <!-- <p class="title-desc text-muted mt-3">Here goes the small description about "web_services"</p> -->
                    <p>
                        <ul>

                        <li>
                            You can find anyone in real time and find their location immediately
                        </li>
                        <br>
                        <li>
                            Get up to date confirmation of your clients current addresses
                        </li>
                        <br>
                        <li>
                            Keep track of cars you financed
                        </li>
                        <br>
                        <li>
                            You can track of your staff
                        </li>
                        <br>
                        <li>
                            You had an interdict and were alerted to whereabouts of your stalker
                        </li>
                        <br>
                        <li>
                            Had a shopping mall and were alerted to possible threats
                        </li>
                        <br>
                        <li>
                            Parent and wanted to know whether your children was school or not
                        </li>
                        <br>
                        <li>
                            Confirm your marketing database
                        </li>
                        <br>
                        <li>
                            Keeping track of your security team
                        </li>
                        <br>
                        <li>
                            Any other tracing solution
                        </li>
                        <br>
                    </ul>
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-center">
                    <div class="mb-4">
                        <img src="{{asset('images/services/cyber_security/tracker.jpg')}}" class="img-fluid rounded" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-4">
        <div class="row justify-content-start">
            <div class="col-lg-10">
                <div class="text-left">
                    <h6 >All I need is the active cell number of the person you are trying to locate!</h6>
                    <p>
                        <ul>
                        <li>
                            We have a cutting edge tool that can assist you when your clients disappear, or you have an interdict and need to know if the person is violating the conditions.
                        </li>
                        <br>
                        <li>
                            You are at school or parent and you need to keep track of the pupils or you had a marketing database and wanted to know if it was still valid
                        </li>
                        <br>
                        <li>
                            If you have been wondering to find someone other than checking when they were last credit active here is the answer. Currently the consumer profiles offered allow you to see who else has done a credit check on a person, all the latest contact details of the person (when doing an enquiry you typically have to update the details) and most importantly, the details of any bad debts or judgments in that person’s name.
                        </li>
                        <br>
                    </ul>
                    </p>
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
