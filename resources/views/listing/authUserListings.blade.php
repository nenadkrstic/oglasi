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
				   </div><hr>



				  </div>


     <div class="carousel slide article-slide" id="article-photo-carousel">

         <!-- Wrapper for slides -->
         <div class="carousel-inner cont-slider">

             @foreach($data->listingImage->chunk(1) as  $item)




                     @foreach($item as $image)

                         <img src="../public/uploads/list-id-{{$data->id}}/{{$image['image']}}" alt="..." class="img-rounded img-responsive" width="600px">

                     @endforeach



             @endforeach
             @foreach($data->listingImage as $count =>$image)
                 {{print_r($image['image'])}}
                 <ol class="carousel-indicators">
                     <li class="active" data-slide-to="{{$count}}" data-target="#article-photo-carousel">
                         <img alt="" src="../public/uploads/list-id-{{$data->id}}/{{$image['image']}}">
                     </li>

                 </ol>
                 @endforeach
         </div>
         <!-- Indicators -->

     </div>


     <div class="row">




		 <div class="col-md-4">
			 <p class="media-heading">Objavljen: {{$data->created_at}}</p>
		 </div>


	 </div>
     </div>



	 @endforeach


	@endif

@stop