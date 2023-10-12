<!DOCTYPE html>
<html>
<head>
<!doctype html>
<html lang="en">
  <head>
      <x-head/>
  </head>
  
  <body>

  <x-services_nav/>
<!-- HOME START -->
  <section class="bg-home-half-two" style="background-image: url('/images/services/quote_image 02.jpg');" id="home">
      <div class="bg-overlay"></div>
      <div class="home-center">
          <div class="home-desc-center">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-lg-9">
                          <div class="text-left text-white">
                          
                              <h2 class="home-title mb-4">Get a Free Quote</h2>
                              <!-- <h4 class="home-title mb-4">Contact Information</h4> -->
                              
                              <div class="text-left pt-4 navbar-nav" style="width: 250px">
                                  <a href="/" class="btn btn-custom"> <i class="mdi mdi-arrow-left ml-2"></i>Home </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
<!-- HOME END -->

<!-- QUOTE START -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="contact-head text-center">
                        <h4 class="title-heading text-uppercase">Contact INFORMATION</h4>
                    </div>
                </div>
            </div>

            <div class="row mt-4 vertical-content">
                <div class="col-lg-12">
                    <div class="row mt-5">

                    
                        <div class="col-lg-3">
                            <div class="contact-info">
                                <div class="mt-3">
                                    <div class="float-left">
                                        <i data-feather="name"></i>
                                    </div>
                                    <div class="ml-5">
                                        <h6 class="text-muted">Full Name: *</h6>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="float-left">
                                        <i data-feather="mail"></i>
                                    </div>
                                    <div class="ml-5">
                                        <br>
                                        <h6 class="text-muted">E-mail: *</h6>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="float-left">
                                        <i data-feather="phone-call"></i>
                                    </div>
                                    <div class="ml-5">
                                        <br>
                                        <h6 class="text-muted">Phone Number: *</h6>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="float-left">
                                        <i data-feather="phone"></i>
                                    </div>
                                    <div class="ml-5">
                                        <br>
                                        <h6 class="text-muted">WhatsApp: *</h6>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="float-left">
                                        <i data-feather="skype"></i>
                                    </div>
                                    <div class="ml-5">
                                        <br>
                                        <h6 class="text-muted">Skype ID: </h6>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="float-left">
                                        <i data-feather="comapany"></i>
                                    </div>
                                    <div class="ml-5">
                                        <br>
                                        <h6 class="text-muted">Company: </h6>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="float-left">
                                        <i data-feather="website"></i>
                                    </div>
                                    <div class="ml-5">
                                        <br>
                                        <h6 class="text-muted">Website (is applicable): </h6>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="float-left">
                                        <i data-feather="message"></i>
                                    </div>
                                    <div class="ml-5">
                                        <br><br><br><br>
                                        <h6 class="text-muted">Services you require:</h6>
                                        
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="float-left">
                                        <i data-feather="message"></i>
                                    </div>
                                    <div class="ml-5">
                                        <br><br><br><br><br><br><br><br>
                                        <h6 class="text-muted">Quick overview of your project: *</h6>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="float-left">
                                        <i data-feather="message"></i>
                                    </div>
                                    <div class="ml-5">
                                        <br><br>
                                        <h6 class="text-muted">Do you have a budget in mind ?: *</h6>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="float-left">
                                        <i data-feather="message"></i>
                                    </div>
                                    <div class="ml-5">
                                        <h6 class="text-muted">How soon are you ready to start ?: *</h6>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="custom-form">
                                <div id="message"></div>
                                <form method="post" action="{{route('email-sent')}}" name="contact-form" id="contact-form">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="firstname" id="firstname" type="text" class="form-control" placeholder="First Name" required="required" value="{{ old('firstname') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="lastname" id="lastname" type="text" class="form-control" placeholder="Last Name" required="required" value="{{ old('lastname') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input name="email" id="email" type="email" class="form-control" placeholder="ex: myname@example.com" required="required" value="{{ old('email') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="areaCode" id="areaCode" type="number" class="form-control" placeholder="Area Code" required="required" value="{{ old('areaCode') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="phoneNumber" id="phoneNumber" type="number" class="form-control" placeholder="Phone Number" required="required" value="{{ old('phoneNumber') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="areaCode" id="areaCode" type="number" class="form-control" placeholder="Area Code" required="required" value="{{ old('areaCode') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="phoneNumber" id="phoneNumber" type="number" class="form-control" placeholder="Phone Number" required="required" value="{{ old('phoneNumber') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="skype" id="skype" type="text" class="form-control" placeholder="Skype ID" required="required" value="{{ old('skype') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="company" id="company" type="text" class="form-control" placeholder="Company Name" required="required" value="{{ old('company') }}">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="website" id="website" type="text" class="form-control" placeholder="http://" required="required" value="{{ old('website') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <style>
                                                #checkboxes label{display:block;}
                                            </style>
                                            <div id="checkboxes">
                                                <label for="Web_Services"><input type="checkbox" id="Web_Services"/>&nbsp&nbsp Web Services</label>
                                                <label for="Enterprice_Solutions"> <input type="checkbox" id="Enterprice_Solutions"/>&nbsp&nbsp Enterprice Solutions</label> 
                                                <label for="Digital_Marketing_Services"><input type="checkbox" id="Digital_Marketing_Services"/>&nbsp&nbsp Digital Marketing Services</label>
                                                <label for="Cyber_and_Intelligence_Security"> <input type="checkbox" id="Cyber_and_Intelligence_Security"/>&nbsp&nbsp Cyber and Intelligence Security</label> 
                                                <label for="Software_Development"><input type="checkbox" id="Software_Development"/>&nbsp&nbsp Software Development</label>
                                                <label for="Smart_AI_Services"> <input type="checkbox" id="Smart_AI_Services"/>&nbsp&nbsp Smart AI Services</label> 
                                                <label for="Technology_Experitise"><input type="checkbox" id="Technology_Experitise"/>&nbsp&nbsp Technology Experitise</label>
                                                <label for="Chatbot_Expertise"> <input type="checkbox" id="Chatbot_Expertise"/>&nbsp&nbsp Chatbot Expertise</label> 
                                                <label for="Branding_Solutions"><input type="checkbox" id="Branding_Solutions"/>&nbsp&nbsp Branding Solutions</label>
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

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="budget" id="budget" type="select" class="form-control" placeholder="Please Select" required="required" value="{{ old('budget') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="date" id="date" type="date" class="form-control" placeholder="Please Select" required="required" value="{{ old('date') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <!--  -->
                                    <div class="row mt-3 ">
                                        <div class="col-lg-1">
                                        </div>
                                        <div class="col-lg-7">
                                            <input href="{{ route('quotePDF') }}" type="submit" id="submit" name="submit" class="submitBnt btn btn-custom" value="Submit">
                                            <div id="simple-msg"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- QUOTE END -->

</body>

  <!-- FOOTER START -->
  <x-footer_2/>
  <!-- FOOTER END -->

  <!-- JAVASCRIPTS -->
  <x-javascript/>

</html>
