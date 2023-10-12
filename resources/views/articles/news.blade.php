<!DOCTYPE html>
<html>
<head>
    <x-head/>
</head>

<body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky">
    <div class="container">
        <!--<a class="navbar-brand logo" href="#">Vsoft Systems</a>-->
        <a class="navbar-brand logo" href="/#">
            <img src="{{asset('/images/logo/vsoft_colour.png')}}" alt="Vsoft Systems" style="width: 180px; height: 30px;">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#service">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#client">Clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#team">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/articles">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#price">Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- NAVBAR END-->

<!-- HOME START-->
<section class="bg-home-half-two" style="background-image: url('/images/services/website_design.jpg');" id="home">
    <div class="bg-overlay"></div>
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="text-left text-white">
                            <h2 class="home-title mb-4" style="color:#fff;" ><b>Article Main Page</b></h2>
                            <div class="text-left pt-4 navbar-nav" style="width: 250px">
                                <a href="/#articles" class="btn btn-custom"><i class="mdi mdi-arrow-left ml-2">LATEST NEWS</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- HOME END-->



<!-- WELCOME START -->
<section class="section" id="feature">
    <div class="container">
        <div class="text-center">
            <h4 class="title-heading">{{$article[0]->Hdr}}</h4>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-left">
                    <!-- <h5>Home Affairs rejects almost 9 000 ‘refugees’ in 12 months</h5> -->
                    <!-- <h6 class="title-heading">24. Apr. 2024 Cape Argus</h6> -->
                    <p class="title-desc text-muted mt-3">{{$article[0]->PublishDate}} <br> {{$article[0]->source}}</p>
                    <p>
                        {{--{{$article[0]->Text}}--}}
                        {!! nl2br($article[0]->Text) !!}
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-center">
                    <!-- <h4 class="title-heading">Development Process</h4> -->
                    <div class="mb-4">
                        <img src="{{asset($article[0]->FileFolder.$article[0]->FileMiddle1)}}" class="img-fluid rounded" alt="">
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
