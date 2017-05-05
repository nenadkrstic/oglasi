@extends('app')
@section('content')
<h1>Posao</h1>
	@if(isset($datas))
      @foreach($datas as $data)
		    <div class="media" id="listingSection">
		    	
		    <div class="col-md-12">
		    		<h2 class="media-heading">{{$data->name}}</h2>
		    	</div>
		 		 <div class="media-left media-middle col-md-3">
			    foreach($data->image as $img)
				    <a href="#">
				      <img class="media-object" src="../public/uploads/{{$data->id}}/{{$img}}" alt="..." width="200px"><hr>
				    </a>
			    endforeach
			</div>

				<div class="col-md-3 pull-right"> 
					<h4 class="media-heading">Telefon: {{$data->phone}}</h4>
				</div>

			 <div class="media-body">
			    
			    
			    <h4 class="media-heading">Stanje: {{$data->cond}}</h4>
			   			    <p class="media-heading">{{$data->listing}}</p>
			     <h5 class="media-heading">Cena: {{$data->price}}.{{$data->currency}}</h5>

			  </div>
			  <div class="col-md-12">
		    		
		    		 <h4 class="media-heading">Objavljen: {{$data->created_at}}</h4>
		    	</div>
		    </div>

      @endforeach


	@endif
{{ $datas->links() }}
@stop

