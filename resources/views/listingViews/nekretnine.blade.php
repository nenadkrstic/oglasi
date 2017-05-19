@extends('app')
@section('content')
<h1 class="text-center">Nekretnine</h1><hr>
	@if(isset($datas))
	
      @foreach($datas as $data)

      <div id="listingSection" class="media">
		    <div class=" col-md-3">
				     <a href="#">
						 <img class="media-object" src="../public/uploads/list-id-{{$data->id}}/img1.jpg" alt="..." width="200px">

					</a>
					<p class="media-heading">Objavljen: {{$data->created_at}}</p>
			</div>
				  <div class="media-body">
				  	<div class="col-md-4">
				  		<p>Oglas</p><hr>
					   <a href="{{url('singleListing',$data->id)}}"> <h5 class="media-heading">{{$data->name}}</h5></a>
					    <p class="media-heading">{{$data->listing}}</p>
					    
				   </div>
				   <div class="col-md-2">
				   	<p>Cena</p><hr>
                      <h5 class="media-heading"> {{$data->price}}.{{$data->currency}}</h5>
                    </div>
                    <div class="col-md-2">
                    	<p>Telefon</p><hr>
                        <h5 class="media-heading">{{$data->phone}}</h5>
				   </div> 


                    <div class="col-md-3">
                    	<p>Mesto</p><hr>
                        <h5 class="media-heading">{{$data->userToListing->city}}</h5>	
				   </div>

				   
				  </div>
</div>

	 @endforeach


	@endif
{{ $datas->links() }}

@stop

