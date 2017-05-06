@extends('app')
@section('content')
<h1 class="text-center">Moji oglasi</h1>
@if(Session::has('delete'))
<h2 class="text-center">{{Session::get('delete')}}</h2>

@endif
	@if(isset($user))





      
      @foreach($user as $data)



      <div id="listingSection" class="media">
<a onClick="return confirm('Da li ste sigurni da želite da obrišete oglas?')" href="{{url('deleteAuthListing')}}/{{$data->id}}"><button  class="btn btn-danger pull-right">Obrisi</button></a>
		    	<a href="{{url('updateAuthListing')}}/{{$data->id}}"> <button class="btn btn-primary pull-right">Izmeni</button></a>

		    <div class="media-left">
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
                    <div class="col-md-3">
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
{{ $user->links() }}
@stop