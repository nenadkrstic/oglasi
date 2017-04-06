@extends('app')
@section('head')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
@stop
@section('content')

  {!! Form::open(array('url'=>'apply/multiple_upload','method'=>'POST', 'files'=>true)) !!}
    <div class="control-group">
      <div class="controls">
      {!! Form::file('images[]', array('multiple'=>true)) !!}
	<p class="errors">{!!$errors->first('images')!!}</p>
	@if(Session::has('error'))
	<p class="errors">{!! Session::get('error') !!}</p>
	@endif
     </div>
</div>
{!! Form::submit('Submit', array('class'=>'send-btn')) !!}
{!! Form::close() !!}


@stop



