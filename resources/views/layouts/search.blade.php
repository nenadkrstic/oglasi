@if (count($errors) > 0)
<div class="container-fluid text-center">
    <div class="row alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
<form action="{{url('search')}}" mrthod="GET">
<div class="container">
	<div class="container-fluid">
        <div class="col-sm-6 col-sm-offset-3">
            <div id="imaginary_container"> 
                <div class="input-group stylish-input-group">
                 
                    <input type="text" name="search" class="form-control"  placeholder="Search" >
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
             
                    
                </div>
            </div>
        </div>
	</div>
</div>  </form>