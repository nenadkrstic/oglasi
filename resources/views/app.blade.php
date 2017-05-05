<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
@yield('head')
        <title>Laravel</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
         <!-- Style -->
        <link rel="stylesheet" type="text/css" href="../public/css/style.css">

       <!-- <link rel="stylesheet" type="text/css" href="../public/css/dropzone.css">-->
        <!-- jQuery -->
        <script src="../public/js/app.js"></script>
        <!-- Jscript -->
        <script src="../public/js/jScript.js"></script>
        <!-- Dropzone.js -->
       <!-- <script src="../public/js/dropzone.js"></script>-->
    </head>
    <body>




  <div class="col-md-2">
            <div class="sidebar-nav-fixed pull-right affix">
                <div class="well">
                    
                   <iframe src="http://kursna-lista.com/gedzeti/gadget1white.php" frameborder="0" height="200" scrolling="no" width="110"></iframe>
                </div>

                
            </div>
            <!--/sidebar-nav-fixed -->
        </div>
        <!--/span-->
    </div>

      <div class="col-md-2 pull-right">
            <div class="sidebar-nav-fixed pull-left affix">
                <div class="well">
                    
                   <iframe src="http://kursna-lista.com/gedzeti/gadget1white.php" frameborder="0" height="200" scrolling="no" width="110"></iframe>
                </div>

                
            </div>
            <!--/sidebar-nav-fixed -->
        </div>
        <!--/span-->
    </div>
           
       
        <div class="container">
             @include('layouts.nav')
             @yield('content')
             

        </div>
        @include('layouts.footer')
    </body>
</html>


