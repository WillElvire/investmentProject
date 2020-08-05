 <!-- END nav -->
 @extends('welcome')
 @section('container')

 @include('sweet::alert')
 <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>Tableaux <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Nos tableaux</h1>
          </div>
        </div>
      </div>
    </section>

     <br>
    <section class="ftco-section bg-light ftco-no-pt">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Nos Tableaux d'investissement</span>
            <h2>Plan d'investissement</h2>
          </div>
        </div>

		    <div class="alert alert-success">
			 
			<div id="compte_a_rebours"><noscript>Fin de l'évènement le 1er janvier 2018.</noscript></div>

			</div>

			<div class="container">

						<center>  
							
						
								 <img src="/images/table/e-trading4.jpg" width="1000" height="1000" class="img-fluid">
								 
                                 <div class="text">

								   <br>
								    <p style="font-size:16px;font-weight:bold">
									     L'indication horaire se présente comme le plus avantageux sur la plateforme de trading et accorde une expressivité
										 de retour sur fond investi.
										Comme déduction elle s'intentifie d'un taux allant de minimum 15 % à 30% maximum selon votre propre choix d'heure .
										Par example si vous investissez 300 000 XOF  pour un retour d'investissement de 6 heures vous recevez 350 000 XOF pour le meme montant en 12 heures 
										375 000 XOF  et en  24 heures  400 000 XOF ; 
										reciproque pour les autres montants .
									</p>
								 </div>
								 <br>
								 <br>

								 <img src="/images/table/e-trading2.jpg" width="1000" height="1000" class="img-fluid">
									<div class="text">
									
										<p style="font-size:16px;font-weight:bold">
											Le tableau préambule consiste tout simplement à un rétour  sur investissement doublé en fonction du capital investi 
											sur un temps de 7 jours . <br>
											Comme ilustration si vous investissez 100.000 XOF pour 7 jours,  vous percevez le double qui est la somme de 200.000 XOF  qui inclu capital + interet <br>

										</p>

									</div>
								 <br>
								 <br>

								 <div class="alert alert-danger"> Pas encore asseccible aux adhérants</div>
								 <img src="/images/table/e-trading1.jpg" width="1000" height="1000" class="img-fluid">

								 <br>
								 <br>

								 
								 <div class="alert alert-danger"> Pas encore asseccible aux adhérants</div>
								 <img src="/images/table/e-trading3.jpg" width="1000" height="1000" class="img-fluid">
					
					
					   </center>

			</div>

			<br>
			<br>
    		
    	</div>
    </section>

   


	
   <script src="/js/rebour.js"></script>
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
    @stop