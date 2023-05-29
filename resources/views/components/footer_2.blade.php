<section class="footer bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-menu">
                    <h5 class="mb-4 text-uppercase">VSoft Systems</h5>
                    <p>The Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium eaque quae ab illo inventore veritatis et.</p>
                    <div class="text-white">
                        <a href="#facebook"><i class="mdi mdi-facebook facebook footer_mdi"></i></a>
                        <a href="#twitter"><i class="mdi mdi-twitter twitter footer_mdi"></i></a>
                        <a href="#google"><i class="mdi mdi-google google footer_mdi"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="footer-menu">
                    <h5 class="mb-4 text-uppercase">About</h5>
                    <ul class="text-muted list-unstyled">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#service">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#client">Clients</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#articles">Articles</a></li>
                        <!-- <li><a href="#price">Store</a></li> -->
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>


            <div class="col-lg-3">
                <div class="footer-menu">
                    <h5 class="mb-4 text-uppercase">Contact us</h5>
                    <h6 class="text-muted">Email Address</h6>
                    <p>info@vsoftsystems.co.za</p>
                    <h6 class="text-muted">Phone number</h6>
                    <p>(+27)084 249 6846 , (+27)086 579 0155</p>
                    <h6 class="text-muted">Office Address</h6>
                    <p>56 Barrack Street, Cape Town, Western Cape, South Africa, ZA-8001</p>
                    <!-- <p>The Nam eget dui Etiam rhoncus. Maecenas eget sem quam semper libero.</p>
                    <span class="footer-support">Support@abc.com</span> -->
                </div>
            </div>

            <div class="col-lg-4">
                        <div class="custom-form">
                            <div id="message"></div>
                            <form method="post" action="{{route('email-sent')}}" name="contact-form" id="contact-form">

                                @if(Session::has('success'))
                                    <div class="alert alert-success contact_msg" role="alert">
                                        {{ Session::get('success') }}
                                        @php
                                            Session::forget('success');
                                        @endphp
                                    </div>
                                @endif

                                {{csrf_field()}}

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Name" required="required" value="{{ old('name') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Email" required="required" value="{{ old('email') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input name="subject" id="subject" type="text" class="form-control" placeholder="Subject" required="required" value="{{ old('subject') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" rows="4" class="form-control" placeholder="Message" required="required" > {{ old('message') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <input type="submit" id="submit" name="submit" class="submitBnt btn btn-custom" value="Send Message">
                                        <div id="simple-msg"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <!-- </div> -->
            </div>
        </div>
<!--
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center mt-5">
                    <p class="mb-0">2020  ©  VSoft Systems.</p>
                </div>
            </div>
        </div> -->
    </div>
</section>
