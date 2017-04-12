@extends('app')
@section('head')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
@stop
@section('content')

  {!! Form::open(array('url'=>'makeListing1','class'=>'dropzone','method'=>'POST', 'files'=>true)) !!}
  
{!! Form::submit('Submit', array('class'=>'send-btn','id'=>'submit')) !!}
{!! Form::close() !!}


@stop



