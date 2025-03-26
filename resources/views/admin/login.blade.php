<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="{{ asset ('admin/plugins/bootstrap/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{ asset ('admin/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{ asset ('admin/plugins/pace/pace-theme-big-counter.css')}}" rel="stylesheet" />
   <link href="{{ asset ('admin/css/style.css')}}" rel="stylesheet" />
      <link href="{{ asset ('admin/css/main-style.css')}}" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="{{ asset ('admin/img/logo.png')}}" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-body">
                        <form role="form" action="{{ route('login.check')}}" method="POST">
                           @csrf
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name" name="name" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password">
                                </div>

                                <div class="form-group">

                                    <strong>ReCaptcha:</strong>

                                    <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>

                                    @if ($errors->has('g-recaptcha-response'))

                                        <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>

                                    @endif

                                </div>  
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-success">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <!-- <script src="https://www.google.com/recaptcha/api.js"></script> -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="{{ asset ('admin/plugins/jquery-1.10.2.js')}}"></script>
    <script src="{{ asset ('admin/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{ asset ('admin/plugins/metisMenu/jquery.metisMenu.js')}}"></script>

</body>

</html>
