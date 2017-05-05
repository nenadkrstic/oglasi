<!DOCTYPE HTML>
<html>
<head>
           <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     
         <!-- Style -->
        <link rel="stylesheet" type="text/css" href="../public/css/style.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/styleUpload.css">

       <!-- <link rel="stylesheet" type="text/css" href="../public/css/dropzone.css">-->
        <!-- jQuery -->
        <script src="../../public/js/app.js"></script>
        <!-- Jscript -->
        <script src="../../public/js/jScript.js"></script>
        <!-- Dropzone.js -->
       <!-- <script src="../public/js/dropzone.js"></script>-->
   </head>
   <body>
@include('layouts.nav')
  <div class="container">
   	@if(isset($singleListing))
       
           
            <h1>Naziv: {{$singleListing->name}}</h2><hr>
            <h3>Oglas: {{$singleListing->listing}}</h3>
          
            <h3>Mogucnost:{{$singleListing->possibility}}</h3>
            <h3>Cena: {{$singleListing->price}} {{$singleListing->deal}}</h3>
               
                
                 
            
        <div class="container">
              <div id="row" class="row">
                  @foreach($singleImage as $image)
                      <img src="../../public/uploads/list-id-{{$singleListing->id}}/{{$image->image}}" alt="..." class="img-rounded" width="200">
                   @endforeach
             </div>
             <h3>Telefon: {{$singleListing->phone}}</h3>
             <h3>{{$singleListing->created_at}}</h3> 
        </div>  
     @endif
</div>


</body>
</html>