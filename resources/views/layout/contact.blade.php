@extends('welcome')

@section('container')

@include('sweet::alert')
 <!-- bradcam_area  -->
 <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Contact us</h1>
          </div>
        </div>
      </div>
    </section>
    <!--/ bradcam_area  -->

    <section class="ftco-section bg-light ftco-no-pt">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          

           
        
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    <br>
                    <br>
                        <h2 class="contact-title">Contactez nous</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="{{ route('store.message') }}" method="POST" id="contactForm">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea required="required" class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Name">{{old('message')}}</textarea>
                                    </div>
                                </div>
                             {!! $errors->first('message','<span class="help-block">:message</span>') !!}

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="required" value="{{old('name')}}" class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                             {!! $errors->first('name','<span class="help-block">:message</span>') !!}

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required="required" value="{{old('email')}}" class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                           {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                                <div class="col-12">
                                    <div class="form-group">
                                        <input required="required" value="{{old('subject')}}" class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                           {!! $errors->first('content','<span class="help-block">:message</span>') !!}
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-success col-md-12">Envoyez nous un message</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>United Kingdom, London.</h3>
                                

                                
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+1 253 565 2365</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>support@colorlib.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>

@stop