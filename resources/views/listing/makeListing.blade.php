@extends('app')
@section('head')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
@stop
@section('content')
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

{{Form::open(['onSubmit'=>'return validate();','action'=>'ListingViewsController@saveListing','files' => true,'method'=>'POST','enctype'=>'multipart/form-data'])}}

<div class="container">
    <div class="col-md-5">
		<h4 for="kateg" class="">Kategorija</h4>
	        <p class="text-center" id="categoryErr"></p>
			<div class="col-md-12" >
			  {{ Form::select('category', [
			   ''=>'Odaberi kategoriju',
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
			  
			   
			   ], null, ['class'=>'form-control','id'=>'selectCategory']
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
</div>
	  <div class="container">


		  <div class="col-md-4 ">
			  <h4 for="price" >Cena</h4>
			  <p class="text-center" id="priceErr"></p>
			  <div class="col-md-12 ">
				  {{ Form::text('price', null, ['class'=>'form-control','id'=>'price']
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
					  <input type="radio" name="currency" value="Eura" checked>Euro
				  </label>

			  </div>

		  </div>
	  </div>

	  <div class="container">

		  <div class="col-md-10 ">
			  <h4 for="name" >Naziv Oglasa</h4>
			  <p class="text-center" id="nameErr"></p>
			  <div class="col-md-12 ">
				  {{ Form::text('name', null, ['class'=>'form-control','id'=>'formName']
                  ) }}
			  </div>
		  </div>
	   </div>

	  <div class="container">

		  <div class="col-md-5 ">
			  <h4 for="listing" >Oglas</h4>
			  <p id="listingErr"></p>
			  <div class="col-md-12 ">
				  {{ Form::textarea('listing', null, ['class'=>'form-control','id'=>'listing']
                  ) }}
			  </div>
		  </div>
		  <div class="col-md-5 ">
			  <h4 for="phone" >Kontakt telefon</h4>
			  <p class="text-center" id="phoneErr"></p>
			  <div class="col-md-12 ">
				  {{ Form::text('phone', null, ['class'=>'form-control','value'=>'telefon','id'=>'phone'])
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
                  ) }}
			  </div>
	  </div>


</div>
   
    <div class="col-md-10 ">
		<h4 for="img" >Slika</h4>
			<div class="col-md-12 ">
			  {{ Form::file('img[]',['multiple' => 'multiple','id'=>'fileupload']
			  ) }}<hr>
			 </div>
			 <div id="dvPreview">
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
@stop