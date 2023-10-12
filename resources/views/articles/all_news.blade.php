<!DOCTYPE html>
<html>
<head>
    <x-head/>
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet"> -->
</head>

<body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky">
    <div class="container">
        <!--<a class="navbar-brand logo" href="#">Vsoft Systems</a>-->
        <a class="navbar-brand logo" href="/#">
            <img src="{{asset('images/logo/vsoft_colour.png')}}" alt="Vsoft Systems" style="width: 180px; height: 30px;">
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
                    <a class="nav-link" href="/#articles">Articles</a>
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
<section class="bg-home-half-two" style="background-image: url('/images/services/website_design.jpg');" class="bg-home-half" id="home">
    <div class="bg-overlay"></div>
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="text-left text-white">
                            <!--<h2 class="home-title mb-4">All ARTICLES</h2>-->
                            <h2 class="home-title mb-4" style="color:#fff;" ><b>All ARTICLES</b></h2>
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
            <h4 class="title-heading">ALL ARTICLES</h4>
        </div>

        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">

                <div class="row mt-4">

                    @if(!empty($allArticles) && $allArticles->count())
                        @foreach($allArticles as $article)
                        
                        <a class="col-lg-6 card-article" href="/articles/news/{{$article->TextNo}}">
                                <div class="shadow p-3 mb-5 bg-white rounded">
                                    <div class="features mt-4">
                                        <div class="text-left">
                                            <div class="mb-4 blog-image">

                                                <img src="{{asset($article->FileFolder.$article->FileTop)}}" style="height: 150px; width: 300px" class="img-fluid rounded" alt="">

                                            </div>

                                            <h4>{{$article->Hdr}}</h4>

                                            <p class="mt-2 text-muted">{{ Illuminate\Support\Str::limit($article->IntroText, 250, ' ... ') }}</p>
                                            <p class="mt-2 btn-link blog-link " >Read More</p>

                                        </div>

                                    </div>
                                </div>
                            </a>

                        @endforeach
                    @else
                        <div>
                            <p>There are no data.</p>
                        </div>
                    @endif

                    <div class="mt-4">
                        {!! $allArticles->links() !!}
                    </div>

                    </div>

                </div>

            <div class="col-lg-3">
                <div class="text-center">
                    <div class="mb-4">
                        <img src="{{asset('images/services/web_services_images/Web_Development/inWebDevelopment01.jpg')}}" class="img-fluid rounded" alt="">
                    </div>
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
