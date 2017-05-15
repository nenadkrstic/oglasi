@extends('app');

@section('content')

    @if(isset($users))
        @foreach($users as $data)



            <div id="listingSection" class="media">

                <a  onclick="unblockUser({{$data->id}});return false" href=""> <button class="btn btn-primary pull-right">Aktiviraj korisnka</button></a>


                <div class="media-body">
                    <div class="col-md-2">
                        <p>ID korisnika</p><hr>

                        <h5 class="media-heading">{{$data->id}}</h5></a>



                    </div>
                    <div class="col-md-4">
                        <p>Ime</p><hr>
                        <a href="{{url('singleListing',$data->id)}}">
                            <h5 class="media-heading">{{$data->name}} {{$data->lname}}</h5></a>


                    </div>

                    <div class="col-md-3">
                        <p>Telefon</p><hr>
                        <h5 class="media-heading">{{$data->phone}}</h5>
                    </div>


                    <div class="col-md-3">
                        <p>Mesto</p><hr>
                        <h5 class="media-heading">{{$data->city}}</h5>
                        <h5 class="media-heading">{{$data->addres}}</h5>
                        <p class="media-heading">Objavljen: {{$data->created_at}}</p>
                    </div>


                </div>
            </div>

        @endforeach
     @endif

@stop

