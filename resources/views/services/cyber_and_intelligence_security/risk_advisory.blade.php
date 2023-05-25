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
                            <h2 class="home-title mb-4">Risk Advisory</h2>
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
                    <h4 class="title-heading">Risk Advisory</h4>
                    <p class="title-desc text-muted mt-3">Risk advisory in cyber security involves identifying, assessing, and mitigating potential risks to an organization's information systems and networks. With the growing prevalence of cyber attacks, it is becoming increasingly important for businesses to have effective risk management strategies in place to protect against potential threats.</p>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/services/cyber_security/risk_advisory/popi.jpg')}}" class="img-fluid rounded" alt="">
                        </div>

                        <h4>Data Protection (POPI)</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">Our services for Data Protection (POPI) assist organizations in meeting compliance requirements and protecting personal information through risk assessments, policy development, and employee training.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/services/cyber_security/risk_advisory/forensics.jpg')}}" class="img-fluid rounded" alt="">
                        </div>
                        <h4>Digital Forensics</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">Our services for Digital Forensics assist in the investigation and analysis of digital evidence to uncover potential security breaches, data breaches or cyber attacks in order to support legal proceedings or provide insights for improved security measures..</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/services/cyber_security/risk_advisory/governance.jpg')}}" class="img-fluid rounded" alt="">
                        </div>
                        <h4>Data Governance</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">Our services for Data Governance help organizations establish policies, processes, and standards for the management of data throughout its lifecycle, ensuring data quality, security, and compliance.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/services/cyber_security/risk_advisory/business.jpg')}}" class="img-fluid rounded" alt="">
                        </div>
                        <h4>Business Continuity</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">Our services for Business Continuity help organizations develop and implement plans and strategies to ensure the continued operation of critical business processes and minimize the impact of potential disruptions or disasters.</p>
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
