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
<section class="bg-home-half-two" id="home">
    <div class="bg-overlay"></div>
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="text-left text-white">
                            <!-- <h5 class="home-small-title text-uppercase text-white-50 mb-4">We create the web</h5> -->
                            <h2 class="home-title mb-4">Biometric Solution</h2>
                            <!-- <p class="home-desc text-white-50 mx-auto">Maecenas class semper class semper sollicitudin lectus lorem iaculis imperdiet aliquam vehicula tempor auctor curabitur pede aenean ornare.</p> -->
                            <div class="text-left pt-4 navbar-nav" style="width: 250px">
                                <a href="#feature" class="btn btn-custom"><i class="mdi mdi-arrow-down ml-2">Read more</i></a>
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
                    <h4 class="title-heading">Biometric Solution</h4>
                    <!-- <p class="title-desc text-muted mt-3">Here goes the small description about "web_services"</p> -->
                </div>
            </div>
        </div>

        <div class="row mt-5 mb-5">

            <div class="col-lg-7">
                <div class="features mt-4">
                    <div class="text-left">

                        <ul>
                            <li></li>IDENTIFICATION MANAGEMENT (IDM) VSOFT BIOMETRIC offers organisations a secure real-time identity management solution.</li>
                            <li>Voter Registration and Voting</li>
                            <li>Access</li>
                            <li>Insurance</li>
                            <li>Health industry and health services management</li>
                            <li>Education</li>
                            <li>Social services</li>
                            <li>Device locking</li>
                            <li> Internet Login</li>
                            <li> Retail loyalty programs</li>
                            <li> Corporate registration</li>
                            <li> Authority management</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-6 pt-4">
                            <img src="{{asset('images/services/cyber_security/smart_city/platform.jpg')}}" class="img-fluid rounded" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-10">
                <div class="features mt-4">
                    <div class="text-left">
                        <h4>Database unification and cleaning</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2 ">
                            The VSOFT biometric solution runs securely centrally from the web cloud and can blanket and unify disparate systems and industries (eg.linking Law Enforcement to Prison Services and Court processing) At the same time cleaning up corrupted and badly managed databases. Even Ghost worker auditing and prevention.                        </p>
                        <p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-10">
                <div class="features mt-4">
                    <div class="text-left">
                        <h4>Single sign-on</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2 ">
                            The VSOFT biometric solution offers each enrolled individual only one identity across all subscribed organisations no matter what industry or sector thus preventing record duplication and fraud. True Universal Single Sign-on.
                        <p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-10">
                <div class="features mt-4">
                    <div class="text-left">
                        <h4>Custom application integration</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2 ">
                            The VSOFT biometric solution ensures that all enrolled individuals only ever have and can only ever use one Identity (an ID-Key) with VSOFT biometric, independent of whatever legacy systems exist in whatever form of dysfunction. All these identification interactions (ID-Vers) are audited and can offer further application integration development (the ID-Ver Audit-Trail).
                        <p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<x-services_services/>

<!-- FOOTER START -->
<x-footer/>
<!-- FOOTER END -->

<!-- JAVASCRIPTS -->
<x-javascript/>

</body>
</html>
