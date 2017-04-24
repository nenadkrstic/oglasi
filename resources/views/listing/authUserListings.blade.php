@extends('app')
@section('content')
<h1>Nekretnine</h1>
	@if(isset($user))
      @foreach($user as $nekretnina)
		    <div class="media" id="listingSection">
		    	<div class="col-md-12">
		    		<h2 class="media-heading">{{$nekretnina->name}}</h2>
		    	</div>
		 		 <div class="media-left media-middle col-md-3">
			    <a href="#">
			      <img class="media-object" src="../public/uploads/2/img2..png" alt="..." width="200px"><hr>
			    </a>
			</div>

				<div class="col-md-3 pull-right"> 
					<h4 class="media-heading">Telefon: {{$nekretnina->phone}}</h4>
				</div>

			 <div class="media-body">
			    
			    
			    <h4 class="media-heading">Stanje: {{$nekretnina->cond}}</h4>
			   			    <p class="media-heading">{{$nekretnina->listing}}</p>
			     <h5 class="media-heading">Cena: {{$nekretnina->price}}.{{$nekretnina->currency}}</h5>

			  </div>
			  <div class="col-md-12">
		    		
		    		 <h4 class="media-heading">Objavljen: {{$nekretnina->created_at}}</h4>
		    	</div>
		    </div>

      @endforeach


	@endif

@stop