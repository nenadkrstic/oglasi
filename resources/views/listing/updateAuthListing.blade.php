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
   <div class="container">	
@include('layouts.nav')

  <div class="container-fluid">
  @if (count($errors) > 0)
   <div class="container-fluid text-center">
    <div class="row alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif

{{Form::model($listing,['method'=>'PATCH','action'=>['ListingViewsController@saveAuthListing',$listing->id]])}}<
	

<div class="col-md-5">
		<h4 for="kateg" class="">Kategorija</h4>
			<div class="col-md-12">
			  {{ Form::select('category', [
			   'nekretnine' => 'Nekretnine',
			   'posao' => 'Posao',
			   'polovniAutomobili' => 'Polovni automobili',
			   'racunari'=>'Računari',
			   'mobilni'=>'Mobilni telefoni',
			   'tvIaudio'=>'Tv i audio',
			   'masineIalati'=>'Mašine i alati',
			   'elAparati'=>'Električni aparati',
			   'namestaj'=>'Nameštaj',
			   'igracke'=>'Igračke',
			   'odecaIobuca'=>'Odeća i obuća',
			   'kucniLjubimci'=>'Kućni ljubimci',
			   'muzika'=>'Muzika',
			   'sport'=>'Sport',
			   'zaDecu'=>'Za decu',
			   'negaLica'=>'Nega lica i tela',
			   'ostalo'=>'Ostalo',
			   
			   ], null, ['class'=>'form-control']
			  ) }}
			 </div>
    </div> 


 

     <div class="col-md-5">
		<h4 for="stanje" >Stanje</h4>
			<div class="col-md-12 ">
			  {{ Form::select('cond', [
			   'novo' => 'Novo',
			   'kaonovo' => 'Kao novo',
			   'polovno' => 'Polovno',
			   'neispravno'=>'Neispravno'], null, ['class'=>'form-control']
			  ) }}
			 </div>
    </div>

     <div class="col-md-4 ">
		<h4 for="stanje" >Cena</h4>
			<div class="col-md-12 ">
			  {{ Form::text('price', null, ['class'=>'form-control']
			  ) }}
			 </div>
    </div>
     <div class="col-md-6 ">
		<h4 >Valuta</h4>
			<div class="col-md-12 ">

				<label class="radio-inline">
			      <input type="radio" name="currency" value="Rsd">Rsd
			    </label>
			    <label class="radio-inline">
			      <input type="radio" name="currency" value="Eura">Euro
			    </label>
			  
			 </div>

			 </div>

      <div class="col-md-10 ">
		<h4 for="stanje" >Naziv Oglasa</h4>
			<div class="col-md-12 ">
			  {{ Form::text('name', null, ['class'=>'form-control']
			  ) }}
			 </div>
    </div>

    <div class="col-md-5 ">
		<h4 for="stanje" >Oglas</h4>
			<div class="col-md-12 ">
			  {{ Form::textarea('listing', null, ['class'=>'form-control']
			  ) }}
			 </div>
    </div>
    <div class="col-md-5 ">
		<h4 for="stanje" >Kontakt telefon</h4>
			<div class="col-md-12 ">
			  {{ Form::text('phone', null, ['class'=>'form-control','value'=>'telefon'])
			   }}<hr>
			 </div>

			 
			<div class="col-md-6">
			  {{ Form::select('possibility', [
			   'zamena' => 'Zamena',
			   'bez zamene' => 'Bez zamene',
			   ], null, ['class'=>'form-control']
			  ) }}
			 </div>


			<div class="col-md-6 ">
			  {{ Form::select('deal', [
			   'fixno' => 'Fixno',
			   'dogovor' => 'Dogovor',
			   ], null, ['class'=>'form-control']
			  ) }}<br>
			 </div>
    </div>
   
   


 
   

    
    <div class="col-md-5 ">
		
			<div class="col-md-12 ">
			  {{ Form::submit('Snimi',['id'=>'submit','class'=>'btn btn-block btn-primary']
			  ) }}
			 </div>
    </div>



 {{Form::close()}}


</div>
</div>
</div>
</div>


</body>
</html>