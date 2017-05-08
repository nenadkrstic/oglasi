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
        <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
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

       <div id="singleListing" class="media">
          <div class="media-body">
              <div class="col-md-4">
                  <p>Oglas</p><hr>
                   <h3 class="media-heading">{{$singleListing->name}}</h3>
                  <h4 class="media-heading">{{$singleListing->listing}}</h4>
                
              </div>
              
              <div class="col-md-2">
                  <p>Cena</p><hr>
                  <h4 class="media-heading"> {{$singleListing->price}}.{{$singleListing->currency}}</h4>
                  <h4 class="media-heading"> {{$singleListing->deal}}</h4>
                  <h4 class="media-heading"> {{$singleListing->possibility}}</h4>
              </div>

              <div class="col-md-3">
                  <p>Telefon</p><hr>
                  <h4 class="media-heading">{{$singleListing->phone}}</h4>
              </div> 


              <div class="col-md-3">
                  <p>Informacije</p><hr>
                   <h4 class="media-heading">{{ucFirst($singleListing->userToListing->name)}} {{$singleListing->userToListing->lname}}</h4> 
                  
                  <h4 class="media-heading">{{$singleListing->userToListing->city}}</h4> 
              </div>
          </div>

              <br>


           
            <div class="media-left">
                    
                  <h5 class="media-heading">Objavljen: {{$singleListing->created_at}}</h5>
                  <h5 class="media-heading"><a href="{{url('/')}}">Vrati se nazad...</a></h5>

              </div> <hr>

              
        </div>

       <div id="myCarousel" class="carousel slide col-md-7" data-ride="carousel" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner text-center" role="listbox">
@foreach($singleImage->chunk(1) as $count => $item)
    
    
    <div class="item {{ $count == 0 ? 'active' : ' '}} text-center">
        
        @foreach($item as $image)

            <img src="../../public/uploads/list-id-{{$singleListing->id}}/{{$image->image}}" alt="..." class="img-rounded img-responsive" width="600px">       
        
        @endforeach 
    
    </div>

@endforeach
 
  
    
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
     @endif
</div>


</body>
</html>