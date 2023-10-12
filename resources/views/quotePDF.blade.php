<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vsoft Systems</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="vsoftsystems" />

    {{--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">


    <!-- header for home -->
    <!-- bootstrap css -->

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">

    <!-- Magnificpopup Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/materialdesignicons.min.css')}}" />

    <!--Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}" />

    <!--Slider-->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}"/>

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/quotePDFstyle.css')}}" />

    {{--
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    --}}

    <!-- Custom  Hover Animation -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/hover-animation.css')}}" />
</head>
<body>
    
    <x-services_nav/>

    <div class="quotation-container">
        <div class="quotation-header">
            <h1>Quotation</h1>
        </div>
        <div class="quotation-details">
            <label>Full Name:</label>
            <p>John Doe</p>
            <label>Email:</label>
            <p>johndoe@example.com</p>
            <label>Phone Number:</label>
            <p>(123) 456-7890</p>
            <label>Company:</label>
            <p>ABC Company</p>
            <label>Website:</label>
            <p>www.abc.com</p>
        </div>
        <div class="quotation-form">
            <label>Services Required:</label>
            <input type="text" placeholder="Enter services required">
            <label>Quick Overview of the Project:</label>
            <textarea rows="4" placeholder="Provide a brief overview of your project"></textarea>
            <label>Budget:</label>
            <input type="text" placeholder="Enter your budget">
            <label>Start Date:</label>
            <input type="text" placeholder="Enter start date">
        </div>
        <div class="quotation-total">
            <label>Total:</label>
            <p>$190.00</p>
        </div>
    </div>
</body>

  <!-- FOOTER START -->
  <x-footer_2/>
  <!-- FOOTER END -->

  <!-- JAVASCRIPTS -->
  <x-javascript/>

</html>