@extends('app')
@section('content')
<h1>Nekretnine</h1>
	@if(isset($datas))
	
      @foreach($datas as $data)

      <div id="listingSection" class="media">
		    <div class="media-left">
				     <a href="#">
						 <img class="media-object" src="../public/uploads/list-id-{{$data->id}}/img1.jpg" alt="..." width="200px">
					</a>
				  </div>
				  <div class="media-body">
				   <a href="{{url('singleListing',$data->id)}}"> <h2 class="media-heading">{{$data->name}}</h2></a>
				    <h4 class="media-heading">Telefon: {{$data->phone}}</h4>
				    <h4 class="media-heading">Stanje: {{$data->cond}}</h4>
									   			    <p class="media-heading">{{$data->listing}}</p>
									     <h5 class="media-heading">Cena: {{$data->price}}.{{$data->currency}}</h5>
				    <h4 class="media-heading">Objavljen: {{$data->created_at}}</h4>
				  </div>
</div>

				
              

                   
                     

         
			


		    


      @endforeach


	@endif
{{ $datas->links() }}

@stop

