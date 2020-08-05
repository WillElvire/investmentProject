@extends('welcome')
@section('container')
    <!-- END nav -->
    <div class="hero-wrap">
	    <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image:url(images/image_6.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-center">
		          <div class="col-md-8 ftco-animate">
		          	<div class="text w-100 text-center">
		          		<h2 class="text-primary"></b>Together we will go futher</b> </h2>
						<h1 class="mb-4">Welcome to E-TRADING212</h1>
						
						<p>
							<a href="{{config('app.url')}}/action/inscription" class=" col-md- 6 btn btn-primary">Connect with us</a>
						
						</p>
						
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image:url(images/pictures/features.png);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-center">
		          <div class="col-md-8 ftco-animate">
		          	<div class="text w-100 text-center">
		          		<h2 class="text-primary"><b>Together we will go futher</b></h2>
			            <h1 class="mb-4">Let's change world </h1>
			            <p><a href="{{config('app.url')}}/action/inscription" class="btn btn-primary">Connect with us</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image:url(images/pictures/forextrading.png);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-center">
		          <div class="col-md-8 ftco-animate">
		          	<div class="text w-100 text-center">
					    <h2 class="text-primary"><b>together we will go futher</b></h2>
			            <h1 class="mb-4">find out our investment plan</h1>
			            <p><a href="{{config('app.url')}}/action/inscription" class="btn btn-primary">Connect with us</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>
	    </div>
	  </div>
   	
    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 d-flex" >
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(images/pictures/mobil.png);background-position:container">
    				</div>
    			</div>
    			<div class="col-md-6 pl-md-5 py-md-5">
    				<div class="heading-section pl-md-4 pt-md-5">
    					
	            <h2 class="mb-4">Nos Atouts</h2>
    				</div>
    				<div class="services-2 w-100 d-flex">
    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wealth"></span></div>
    					<div class="text pl-4">
    						<h4>Analyse Technique</h4>
    						
    					</div>
    				</div>
    				<div class="services-2 w-100 d-flex">
    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-accountant"></span></div>
    					<div class="text pl-4">
    						<h4>Gestion de Risque</h4>
    						
    					</div>
    				</div>
    				<div class="services-2 w-100 d-flex">
    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-teamwork"></span></div>
    					<div class="text pl-4">
    						<h4>Parrainage</h4>
    						
    					</div>
    				</div>
    				<div class="services-2 w-100 d-flex">
    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-accounting"></span></div>
    					<div class="text pl-4">
    						<h4>Broker de precision</h4>
    						
    					</div>
    				</div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section bg-light ftco-no-pt">
    	<div class="container">
    		<div class="row">
          <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block">
              <div class="icon d-flex mr-2">
            		<span class="flaticon-accounting-1"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Gestion de Wallet</h3>
                
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block">
              <div class="icon d-flex mr-2">
            		<span class="flaticon-tax"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Aucun  spread</h3>
               
              </div>
            </div>    
          </div>
          <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block">
              <div class="icon d-flex mr-2">
            		<span class="flaticon-loan"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Payement fiable et sécurisé</h3>
                
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block">
              <div class="icon d-flex mr-2">
            		<span class="flaticon-budget"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Broker avec une fiabilité à 100%</h3>
                
              </div>
            </div>      
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-counter bg-light ftco-no-pt" id="section-counter">
    	<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="10">0</strong>
              </div>
              <div class="text">
              	<span>Années d'Expérience</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="3500">0</strong>
              </div>
              <div class="text">
              	<span>Nombre de vues</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="500">0</strong>
              </div>
              <div class="text">
              	<span>Total des inscrits</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="10">0</strong>
              </div>
              <div class="text">
              	<span>Entreprise partenaire</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section bg-light">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
          	
            <h2>Happy Clients &amp; Feedbacks</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">J'etais à court d'argent sur un projet immobilier j'ai donc decider d'investir sur E-TRADING aujourd'hui le projet est terminé vive E-TRADING</p>
                    <div class="d-flex align-items-center">
                    	
                    	<div class="pl-3">
		                    <p class="name">Abou tall junior</p>
		                    <span class="position">Entrepreneur</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">E-Trading 212 est de loin la plateforme la plus fiable du moment</p>
                    <div class="d-flex align-items-center">
                    	
                    	<div class="pl-3">
		                    <p class="name">Sory Sawadogo</p>
		                    <span class="position">Etudiant</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">E-Trading 212 c'est simplement magnifique</p>
                    <div class="d-flex align-items-center">
                    	
                    	<div class="pl-3">
		                    <p class="name">Jean Jacques Boigny</p>
		                    <span class="position">CEO (Agir Pour Lutter)</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt bg-light ftco-faqs">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6">
    				<div class="img-faqs w-100">
	    				<div class="img mb-4 mb-sm-0" style="background-image:url(images/pictures/trade.png);">
	    				</div>
	    				<div class="img img-2 mb-4 mb-sm-0" style="background-image:url(images/pictures/indicators.png);">
	    				</div>
	    			</div>
    			</div>
    			<div class="col-lg-6 pl-lg-5">
    				<div class="heading-section mb-5 mt-5 mt-lg-0">
    					<span class="subheading">A propos de nous</span>
	            <h2 class="mb-3">Ce que vous devez savoir</h2>
	           
    				</div>
    				<div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
						  <div class="card">
						    <div class="card-header p-0" id="headingOne">
						      <h2 class="mb-0">
						        <button href="#collapseOne" type="button" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
						        	<p class="mb-0">Qui sommes nous ?</p>
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
						      <div class="card-body py-3 px-0">
						      	<b>Nous sommes une compilation  de brokers  relativement debonnaire en mode usage ,fonctionnalité, et prime  ; Qui permettent 
								à l'apprehension professionnelle des actifs proposés. 
								Par ailleur en terme d'outil indispensable de trading , nous avons un dispositif essentiel octroyant le nécéssaire d'information d'investissement 
								en vue de la sureté de votre capital . Notre facteur reste l'un des plus approuvé en satisfaction .Cependant vue la compréhension indiferente des investisseurs dans l'application du courtage boursier
								nous offrons une autre manière plus fiable d'en bénéficier sans toutefois etre en défaillance de fond de départ.En somme tout comme le broker FXCM , la 
								plateforme de trading 212 propose tout ce qu'il a de plus standard.Actuellement il est possible de constater une réelle expansion du domaine du trading,
								mais aussi de ses risques.Alors que beaucoup se lancent dans cette activité financière afin de devnir autonome financièrement
								parlant , il faut impérativement rester prudent et veiller à choisir un courtier de qualité comme le notre 
								
								   </b>

						      </div>
						    </div>
						  </div>

						  <div class="card">
						    <div class="card-header p-0" id="headingTwo" role="tab">
						      <h2 class="mb-0">
						        <button href="#collapseTwo" type="button" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
						        	<p class="mb-0">Notre siège?</p>
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
						      <div class="card-body py-3 px-0">
						      	
								  <b>E-trading 212 est enregistrée en Angleterre  (numéro d'enregistrements 8695225), avec une adresse enregistrée au 43-45 Dorset Street , London , W1U 7NA,trading 
								  212 UK Ltd.</b>


						      </div>
						    </div>
						  </div>

						  <div class="card">
						    <div class="card-header p-0" id="headingThree" role="tab">
						      <h2 class="mb-0">
						        <button href="#collapseThree" type="button" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
						        	<p class="mb-0">Comment accroitre son investissement?</p>
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo">
						      <div class="card-body py-3 px-0">
						      
									<b>La bourse permet de rapprocher les agents qui ont des bésoins de financement (l'offre) et les agens 
									qui ont des capacités de financement ( la demande ).de ce pat , e-trading 212 vous propose aujourd'hui 
									une alternative de placement traditionnel qui permet au particulier d'investir en ligne 
									en toute sécurité avec un capital accessible à tous .En effet votre investissement nous permetra d'avoir 
									un capital considerable afin de peser lourd sur les marchés boursier . </b>

						      </div>
						    </div>
						  </div>

						  <div class="card">
						    <div class="card-header p-0" id="headingFour" role="tab">
						      <h2 class="mb-0">
						        <button href="#collapseFour" type="button" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
						        	<p class="mb-0">Quelle sont les choses requises pour les investissements ?</p>
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingTwo">
						      <div class="card-body py-3 px-0">
						       
							     <ol>
								 <b><li>
										Avoir un capital selon les critères de l'entreprise
									</li>
									<li>
										Se positionner sur un plan d'investissement qui nous siert 
									</li>
									<li>
									     Investir  
									</li> </b>
								 </ol>


						      </div>
						    </div>
						  </div>
						</div>
	        </div>
        </div>
    	</div>
    </section>

		

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-secondary">
      <div class="container py-5">
    		<div class="row">
          <div class="col-md-7 d-flex align-items-center">
            <h2 class="mb-3 mb-sm-0" style="color:black; font-size: 22px;">Souscribe at our newletter</h2>
          </div>
          <div class="col-md-5 d-flex align-items-center">
            <form method="POST" action="{{ route('newletter.path') }}" class="subscribe-form">
              @csrf
              <div class="form-group d-flex">
                <input name="email" type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="btn btn-primary ">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          
            <h2>Les Pays Béneficiaires</h2>
          </div>
        </div>
    		
	       
	       
	        
	      </div>
    	</div>
	</section>
	
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    
  
 @include('sweet::alert')
  <!-- loader -->
  


 
 @stop