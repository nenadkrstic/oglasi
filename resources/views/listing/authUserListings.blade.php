@extends('app')

@section('content')
@if(isset($user))
  @foreach($user as $list)
    
    <h2>Ime:{{$list->name}}</h2>
    <h2>{{$list->listing}}</h2>


  @endforeach
  @else
<h3>Nemate Oglasa</h3>

  @endif


@stop