
<?php
	$locale = session('locale');
	
	App::setlocale(session('locale'));
?>
<div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="bg-wrap">
							<div class="row">
								<div class="col-md-4 d-flex align-items-center">
									<p class="mb-0 phone pl-md-2">
										<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a> 
										<a href="#"><span class="fa fa-paper-plane mr-1"></span> youremail@email.com</a>
									</p>
								</div>
								
								<div class="col-md-6 d-flex justify-content-md-end">
									<div class="social-media">
						    		<p class="mb-0 d-flex">
						    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
						    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
						    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
						    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
						    		</p>
					        </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> 
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="/">	E-Trading 212</a>
	    	
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> e-trading212
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item "><a href="/" class="nav-link">{{ __('navbar.home') }}</a></li>
	        	<li class="nav-item"><a href="/tableaux" class="nav-link">{{ __('navbar.tables')}}</a></li>
	        	
	          <li class="nav-item"><a href="/action/inscription" class="nav-link">{{ __('navbar.register')}}</a></li>
			  @if(\Session::has('user_id'))
	             <li class="nav-item"><a href="/invest/home/{{\Session::get('user_id')}}" class="nav-link">Back office</a></li>
			  @else
			  	 <li class="nav-item"><a href="/invest/login/" class="nav-link">Back office</a></li>
			  @endif
	          <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
			  

 
			   <div class=" nav-item d-flex align-items-center">
									<form method="post">
										@csrf
										<select name="lang" class="  form-control " onChange="this.parentNode.submit()">
											<option selected>{{$locale}}</option>
											<option value="en">en</option>
											<option value="fr">fr</option>
										</select>
									<form>
										
								</div>
			     
						
			
			   
	        </ul>
	      </div>
	    </div>
	  </nav>