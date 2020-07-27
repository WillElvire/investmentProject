<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>

    <!-- Font Icon -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="/form/vendor/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/form/css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                       <a href="/">Page d'Accueil</a>
                        <h2 class="form-title">Inscrivez vous</h2>
                        
                        <form method="POST" class="register-form" id="register-form">
                            @csrf()
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="first_name" id="name" placeholder="Votre nom" required/>
                            </div>
                            <div class="form-group">
                                <label for="prenom"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="last_name" id="prenom" placeholder="Votre prénom" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Votre email" required/>
                            </div>

                            <p style="color:red;font-weight:bold;font-size:14px">

                    
                          NB:votre mobile money est réqui pour votre retour sur investissement

                            </p>
                            
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="number" name="mobile" id="re_pass" placeholder="Votre numero de télephone" required/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="créer mon compte"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="/form/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="/user/connection" class="signup-image-link">J'ai déja un compte </a>
                    </div>
                </div>
            </div>
        </section>
        @include('sweet::alert')
       
    </div>

    <!-- JS -->
    <script src="/form/vendor/jquery/jquery.min.js"></script>
    <script src="/form/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>