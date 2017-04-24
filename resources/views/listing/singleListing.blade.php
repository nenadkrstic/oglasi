@extends('app')

@section('content')

	@if(isset($singleListing))
       <h1>{{$singleListing->name}}</h1>
       <h1>{{$singleListing->listing}}</h1>
       


	@endif

@stop