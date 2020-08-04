
<head>
        <meta charset="utf-8" />
        <title>Admin | E-trading 212</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="/admin/assets/images/favicon.ico">

        <!-- plugins -->
        <link href="/admin/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="/admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/admin/assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

  <div class="container">
      <br>
      <br>
      <h3 class="row justify-content-center">Admin E-Trading 212</h3>
     <div class="row">
                            <div class="col-12">
                                    <br>
                                    <br>
                                <div class="card">
                   
                                    <div class="card-body">
                                        <h4 class="header-title mt-0">S'authentifier</h4>
                                        
                                        @if(isset($message))
                                            <div class="alert alert-danger">{{$message}}</div>
                                        @endif
                                        <form class="form-horizontal" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col">
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-lg-2 col-form-label"
                                                            for="example-email">Email</label>
                                                        <div class="col-lg-10">
                                                            <input type="email" id="example-email" name="email"
                                                                class="form-control" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-2 col-form-label"
                                                            for="example-password">Password</label>
                                                        <div class="col-lg-10">
                                                            <input type="password" class="form-control" name="password"
                                                                id="example-password"  placeholder="password" >

                                                                <br>


                                                                <button type="submit" class="btn btn-primary">S'authentifier</button>
                                                        </div>

                                                        
                                                    </div>

                                                   

                                                   

                                                    
                                                </div>
                                            </div>
                                        </form>
            
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->
                        </div>

