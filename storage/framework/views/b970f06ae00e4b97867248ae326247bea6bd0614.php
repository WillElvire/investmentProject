<!DOCTYPE html>
<html lang="en">
<head>
	<title>Formulaire</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo e(asset('/asset/images/icons/favicon.ico')); ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/asset/vendor/bootstrap/css/bootstrap.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/asset/vendor/animate/animate.css')); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/asset/vendor/css-hamburgers/hamburgers.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/asset/vendor/animsition/css/animsition.min.css')); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/asset/vendor/select2/select2.min.css')); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/asset/vendor/daterangepicke')); ?>r/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/asset/css/util.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/asset/css/main.css')); ?>">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="<?php echo e(route('store.customer.path')); ?>" enctype="multipart/form-data" method="POST" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					<?php echo csrf_field(); ?>
					<span class="login100-form-title">
						Inscription    
					</span>

					<div  class="wrap-input100 validate-input m-b-16" data-validate="this field is required">
						<input value="<?php echo e(old('name')); ?>" required="required" class="input100" type="text" name="name" placeholder="Entrez votre nom">
						<span class="focus-input100"></span>
					</div>
                    <?php echo $errors->first('name','<span class="help-block">:message</span>'); ?>


                    <div class="wrap-input100 validate-input m-b-16" data-validate="this field is required">
						<input value="<?php echo e(old('lastname')); ?>" required="required" class="input100" type="text" name="lastname" placeholder="Entrez votre prenom">
						<span class="focus-input100"></span>
					</div>
                    <?php echo $errors->first('lastname','<span class="help-block">:message</span>'); ?>


                    <div class="wrap-input100 validate-input m-b-16" data-validate="this field is required">
						<input value="<?php echo e(old('email')); ?>" required="required" class="input100" type="email" name="email" placeholder="Entrez votre email">
						<span class="focus-input100"></span>
					</div>
                   <?php echo $errors->first('email','<span class="help-block">:message</span>'); ?>


                    <div  class="wrap-input100 validate-input m-b-16" data-validate="this field is required">
						<input value="<?php echo e(old('phone')); ?>" required="required" class="input100" type="number" name="phone" placeholder="entrez votre numero de telephone">
						<span class="focus-input100"></span>
					</div>
                    <?php echo $errors->first('phone','<span class="help-block">:message</span>'); ?>


                 
					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input required="required" class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div><br>
                    <?php echo $errors->first('password','<span class="help-block">:message</span>'); ?>


					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="password_confirm" placeholder="Confimation Password">
						<span class="focus-input100"></span>
					</div><br>
                    <?php echo $errors->first('password_confirm','<span class="help-block">:message</span>'); ?>


                    <div class="wrap-input100" >
						<input class="input100" type="text" name="id_parrain" placeholder="Parrain id">
						<span class="focus-input100"></span>
					</div><br>
                    <?php echo $errors->first('password_confirm','<span class="help-block">:message</span>'); ?>


                   <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                   	<label class="text-center" style="font-size: 20px;">Entrer une carte('passport,carte de sejour, carte d'identité...)</label>
						<input class="input100" type="file" name="identity" placeholder="">
						<span class="focus-input100"></span>
					</div>
                    <?php echo $errors->first('identity','<span class="help-block">:message</span>'); ?>

                    <br>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Sign in
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="#" class="txt3">
							se connecter au back office
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="/asset/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/asset/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/asset/vendor/bootstrap/js/popper.js"></script>
	<script src="/asset/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/asset/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/asset/vendor/daterangepicker/moment.min.js"></script>
	<script src="/asset/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/asset/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/asset/js/main.js"></script>

</body>
</html><?php /**PATH /home/nagninimeta/Documents/PROJET/laravel/investmentProject/resources/views/layout/inscription.blade.php ENDPATH**/ ?>