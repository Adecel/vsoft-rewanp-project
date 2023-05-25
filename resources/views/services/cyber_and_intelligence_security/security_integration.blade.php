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
                            <h2 class="home-title mb-4">Security Integration</h2>
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
            <div class="col-lg-7">
                <div class="text-center">
                    <h4 class="title-heading">Security Integration</h4>
                    <p class="title-desc text-muted mt-3">Security integration refers to the process of integrating security technologies and processes across an organization to create a more cohesive and effective security posture. This involves evaluating and optimizing existing security controls, implementing new technologies and processes, and ensuring seamless communication and collaboration between different security functions. The ultimate goal of security integration is to create a more comprehensive and proactive approach to security that is able to detect and respond to potential threats in real time.</p>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/services/cyber_security/security_integration/identity.jpg')}}" class="img-fluid rounded" alt="">
                        </div>

                        <h4>Identity Management</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">Our services for Identity Management assist organizations in managing and securing user identities and access privileges across multiple systems and applications, ensuring proper authentication, authorization, and accountability while minimizing the risk of insider threats and data breaches.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/services/cyber_security/security_integration/access.jpg')}}" class="img-fluid rounded" alt="">
                        </div>
                        <h4>Access Governance</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">Our services for Access Governance help organizations establish and enforce policies and controls for managing user access privileges and entitlements, ensuring compliance with regulatory requirements and minimizing the risk of unauthorized access or privilege escalation.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/services/cyber_security/security_integration/fraud.jpg')}}" class="img-fluid rounded" alt="">
                        </div>
                        <h4>Fraud Prevention</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">Our services for Fraud Prevention assist organizations in detecting and preventing fraud by analyzing transactional data and user behavior patterns, implementing fraud detection algorithms and models, and establishing effective fraud prevention strategies and controls.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/services/cyber_security/security_integration/security.jpg')}}" class="img-fluid rounded" alt="">
                        </div>
                        <h4>Managed Security Services</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">Our services for Managed Security Services provide organizations with ongoing monitoring, management, and support of their security technologies and processes, including threat detection and response, incident management, and vulnerability management, ensuring continuous protection against evolving cyber threats.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- WELCOME END -->


<!-- FOOTER START -->
<x-footer/>
<!-- FOOTER END -->

<!-- JAVASCRIPTS -->
<x-javascript/>

</body>
</html>
