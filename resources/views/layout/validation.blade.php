<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/form/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
       <script>
    var botmanWidget = {
        aboutText: 'ssdsd',
        introMessage: "✋ Hello comment pouvons nous vous aidez?"
    };
    </script>
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>

    @include('sweet::alert')
    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                       <a href="/">Page d'Accueil</a>
                        <h2 class="form-title">Message de validation</h2>

                        <p>Félicitation vous etes inscrit nous vous prions de vous connecter sur votre back office afin d'effectuer tout eventuelle transaction</p>
                        <p>
                            
                             Vos identifiants:  <br>

                             <b>Email : </b> {{$email ?? ''}}
                             <br>
                             <b>Mot de passe : </b>{{$pass ?? ''}}

                             <div class="alert alert-danger">
                                   Ce mot de passe est modifiable à partir de votre back office
                             </div>
                             

                        </p>

                        <a class="btn btn-primary " href="/user/connection">Mon back office</a>
                        
                    </div>
                    <div class="signup-image">
                        <figure><img src="/form/images/signup-image.jpg" alt="sing up image"></figure>
                       
                    </div>
                </div>
            </div>
        </section>

       
    </div>

    <!-- JS -->
    <script src="/form/vendor/jquery/jquery.min.js"></script>
    <script src="/form/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>