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

{{Form::open(['action'=>'PageController@saveListing','files' => true,'method'=>'POST','enctype'=>'multipart/form-data'])}}
	

<div class="col-md-4">
		<h4 for="kateg" class="">Kategorija</h4>
			<div class="col-md-12">
			  {{ Form::select('kategorija', [
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
			   'kaonovo' => 'Kao novo',
			   'polovno' => 'Polovno',
			   'neispravno'=>'Neispravno'], null, ['class'=>'form-control']
			  ) }}
			 </div>
    </div>

     <div class="col-md-4 ">
		<h4 for="stanje" >Cena</h4>
			<div class="col-md-12 ">
			  {{ Form::text('cena', null, ['class'=>'form-control']
			  ) }}
			 </div>
    </div>

      <div class="col-md-9 ">
		<h4 for="stanje" >Naziv Oglasa</h4>
			<div class="col-md-12 ">
			  {{ Form::text('naziv', null, ['class'=>'form-control']
			  ) }}
			 </div>
    </div>

    <div class="col-md-9 ">
		<h4 for="stanje" >Oglas</h4>
			<div class="col-md-12 ">
			  {{ Form::textarea('oglas', null, ['class'=>'form-control']
			  ) }}<hr>
			 </div>
    </div>
   
    <div class="col-md-9 ">
		<h4 for="stanje" >Slika</h4>
			<div class="col-md-12 ">
			  {{ Form::file('img[]',['multiple' => 'multiple']
			  ) }}<hr>
			 </div>
    </div>
   

    
    <div class="col-md-8 ">
		
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