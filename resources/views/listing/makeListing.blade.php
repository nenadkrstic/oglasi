@extends('app')
@section('head')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
@stop
@section('content')
<div  class="container">
      {{Form::open(['action'=>'PageController@fileUpload','method'=>'POST','class'=>'dropzone','id'=>'my-awesome-dropzone','enctype'=>'multipart/form-data'])}}
	 
	 <div class="dropzone-previews"></div>
           
    </div>

  
	<div class="col-md-4">
		<h4 for="kateg" class="">Kategorija</h4>
			<div class="col-md-12">
			  {{ Form::select('kateg', [
			   'nekretnine' => 'nekretnine',
			   'posao' => 'Posao',
			   'polovniAutomobili' => 'Polovni automobili'], null, ['class'=>'form-control']
			  ) }}
			 </div>
    </div> 


   <div class="col-md-4">
		<h4 for="grupa">Group</h4>
			<div class="col-md-12">
			  {{ Form::select('grupa', [
			   'nekretnine' => 'nekretnine',
			   'posao' => 'Posao',
			   'polovniAutomobili' => 'Polovni automobili'], null, ['class'=>'form-control']
			  ) }}
			 </div>
    </div> 

     <div class="col-md-4">
		<h4 for="stanje" >Stanje</h4>
			<div class="col-md-12 ">
			  {{ Form::select('stanje', [
			   'novo' => 'Novo',
			   'kaoNovo' => 'Kao novo',
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

      <div class="col-md-9 ">
		<h4 for="stanje" >Naziv Oglasa</h4>
			<div class="col-md-12 ">
			  {{ Form::text('name', null, ['class'=>'form-control']
			  ) }}
			 </div>
    </div>

    <div class="col-md-9 ">
		<h4 for="stanje" >Oglas</h4>
			<div class="col-md-12 ">
			  {{ Form::textarea('listing', null, ['class'=>'form-control']
			  ) }}<hr>
			 </div>
    </div>

   


    
    <div class="col-md-8 ">
		
			<div class="col-md-12 ">
			  {{ Form::submit('Snimi',['class'=>'btn btn-block btn-primary']
			  ) }}
			 </div>
    </div>




  {{Form::close()}}

</div>

      
  

</div>


@stop