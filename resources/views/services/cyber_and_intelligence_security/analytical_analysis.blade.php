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
                            <h2 class="home-title mb-4">Analytical Analysis</h2>
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
                    <h4 class="title-heading">Analytical analysis</h4>
                    <!-- <p class="title-desc text-muted mt-3">Here goes the small description about "web_services"</p> -->
                    <p>
                        Vsoft Systems has positioned itself as a IT infrastructure Services and Solutions company focusing on Database Management, Operating Systems Support, Backup and Recovery Solutions and IT Security.
                    </p>
                    <p>
                        We have partnered with vendors providing solutions in all our focus areas and have grown a critical mass of certified and experienced technicians supporting these vendor solutions. We recognise that specialist solutions require specialized support teams capable of providing the technical solutions our clients require and we accordingly:
                    </p>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-6">
                <div class="features mt-4">
                    <div class="text-left">
                        <h4>Focus on:</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2 "></p>
                        <p>
                            <ul>
                            <li>Database Management</li>
                            <li>Operating Systems Management</li>
                            <li>Backup & Recovery Systems</li>
                            <li>Virtualization</li>
                            <li>IBM Cloud Services</li>
                            <li>Storage</li>
                            <li>Security</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="features mt-4">
                    <div class="text-left">
                        <h4>Operating Systems</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2 ">We do the following:</p>
                        <p>
                        <ul>
                            <li>Performance Management, Systems Optimisation & Capacity Planning</li>
                            <li>Installations, Upgrades & Migrations</li>
                            <li>Proactive Monitoring & Administration</li>
                            <li>High Availability & Disaster Recovery</li>
                            <li>Security Administration & Maintenance</li>
                            <li>Clustering & Virtualization</li>
                            <li>Open Stack</li>
                            <li>Platform Migration</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-4">
            <div class="col-lg-6">
                <div class="features mt-4">
                    <div class="text-left">
                        <h4>Databases</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2 ">We look at:</p>
                        <p>
                        <ul>
                            <li>Database Optimization</li>
                            <li>Performance Tuning</li>
                            <li>Installations, Upgrades & Migrations</li>
                            <li> High Database Availability and Clustering</li>
                            <li> Log Shipping, Replication & Mirroring</li>
                            <li> Backup & Recovery Planning</li>
                            <li> Sql Tuning & Analysis</li>
                            <li> Space Management & Capacity Planning</li>
                            <li> Proactive Database Monitoring</li>
                            <li> Indexes & Fragmentation</li>
                            <li> Database Integrity Checks</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="features mt-4">
                    <div class="text-left">
                        <h4>Backup & Recovery</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2 ">We perform the following functions:</p>
                        <p>
                        <ul>
                            <li></li>Configuring the Backup Specifications for Databases & File Systems</li>
                            <li>Creating & Maintaining Backup Policies & Procedures as Required</li>
                            <li>Restoring Database Backups From One System to Another</li>
                            <li>Installations, Upgrades, Migration & Configuration</li>
                            <li> Proactive Monitoring & Administration</li>
                            <li> Space Management & Capacity Planning</li>
                            <li> Platform Migration</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<x-services_services/>

<!-- FOOTER START -->
<x-footer_2/>
<!-- FOOTER END -->

<!-- JAVASCRIPTS -->
<x-javascript/>

</body>
</html>
