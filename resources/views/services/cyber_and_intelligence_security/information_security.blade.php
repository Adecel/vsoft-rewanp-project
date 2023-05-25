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
                            <h2 class="home-title mb-4">Information Security</h2>
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
                    <h4 class="title-heading">Information Security</h4>
                    <p class="title-desc text-muted mt-3">Information security is a key component of cyber security that involves protecting the confidentiality, integrity, and availability of information and information systems from unauthorized access, use, disclosure, disruption, modification, or destruction. It encompasses a range of technical, physical, and administrative controls and involves a holistic approach to managing information risk.</p>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/services/cyber_security/information_security/risk.jpg')}}" class="img-fluid rounded" alt="">
                        </div>

                        <h4>Information Risk Management</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">Our services for Information Risk Management help organizations identify, assess, and manage information security risks through comprehensive risk assessments, vulnerability scans, and the development of risk management strategies tailored to their specific needs.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/services/cyber_security/information_security/health.jpg')}}" class="img-fluid rounded" alt="">
                        </div>
                        <h4>Security Health Check</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">Our services for Security Health Check help organizations evaluate the effectiveness of their existing security controls and identify potential vulnerabilities or areas for improvement through comprehensive security assessments and penetration testing.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/services/cyber_security/information_security/security.jpg')}}" class="img-fluid rounded" alt="">
                        </div>
                        <h4>Information Security Framework</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">Our services for Information Security Framework assist organizations in developing and implementing comprehensive frameworks to guide their information security practices and ensure compliance with industry standards and regulations.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/services/cyber_security/information_security/planning.jpg')}}" class="img-fluid rounded" alt="">
                        </div>
                        <h4>Disaster Recovery Planning</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">Our services for Disaster Recovery Planning help organizations develop and implement strategies and procedures to minimize the impact of potential disasters or disruptions and ensure the timely recovery of critical business processes and systems.</p>
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
