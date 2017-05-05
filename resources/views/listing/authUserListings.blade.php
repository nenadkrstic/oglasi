@extends('app')
@section('content')
<h1 class="text-center">Moji oglasi</h1>
@if(Session::has('delete'))
<h2 class="text-center">{{Session::get('delete')}}</h2>

@endif
	@if(isset($user))
      @foreach($user as $nekretnina)
         
		    <div class="media" id="listingSection">
		    	<a onClick="return confirm('Da li ste sigurni da želite da obrišete oglas?')" href="{{url('deleteAuthListing')}}/{{$nekretnina->id}}"><button  class="btn btn-danger pull-right">Obrisi oglas</button></a>
		    	<a href="{{url('updateAuthListing, $nekretnina->id')}}"><button class="btn btn-primary pull-right">Izmeni oglas</button></a>
		    	<div class="col-md-12">
		    		<h2 class="media-heading">{{$nekretnina->name}}</h2>
		    	</div>
		 		 <div class="media-left media-middle col-md-3">
			  
			   
			</div>

				<div class="col-md-3 pull-right"> 
					<h4 class="media-heading">Telefon: {{$nekretnina->phone}}</h4>
				</div>

			 <div class="media-body">
			    
			    
			    <h4 class="media-heading">Stanje: {{$nekretnina->cond}}</h4>
			   			    <p class="media-heading">{{$nekretnina->listing}}</p>
			     <h5 class="media-heading">Cena: {{$nekretnina->price}}.{{$nekretnina->currency}}</h5>

			  </div>
			  
			  @foreach($nekretnina->image as  $i)
			   
			    <a href="#">
			      <img class="media-object" src="../public/uploads/list-id-{{$nekretnina->id}}/{{$i->image}}" alt="..." width="200px"><hr>
			    </a>
			   @endforeach
			
			  <div class="col-md-12">
		    		
		    		 <h4 class="media-heading">Objavljen: {{$nekretnina->created_at}}</h4>
		    	</div>
		    </div>

      @endforeach


	@endif
{{ $user->links() }}
@stop