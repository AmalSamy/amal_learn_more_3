@extends('SiteOne.master')
@section('content')
<!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>

                       @if($errors->any())
                <div class = "alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $e)
                        <li>{{$e}}</li>
                        @endforeach

                    </ul>
                </div>
                  @endif
                      </div>
              
            
                <form id="contactForm" enctype="multipart/form-data" method="POST" action="{{route('site1.postcontact')}}">
                    @csrf
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control @error('name') is-invalid @enderror" name="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback"></div>
                                @error('name')
                                <small class="invalid-feedback">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" name="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" name="phone" type="tel" placeholder="Your Phone *"/>
                                
                            </div>
                            <div class="form-group mb-md-0 mt-3">
                                <!-- Phone number input-->
                                <input class="form-control" name="image" type="file"/>
                                
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" name="msg" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                            </div>

                    <button class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </form>
            </div>
        </section>
        @stop