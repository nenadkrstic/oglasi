<!--@if (count($errors) > 0)
<div class="container-fluid text-center">
    <div class="row alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif -->
<form action="{{url('search')}}" mrthod="GET">
    {{csrf_field()}}
<div class="container">
	<div class="container-fluid">
        <div class="col-sm-6 col-sm-offset-3">
            <div id="imaginary_container"> 
                <div class="input-group stylish-input-group">
                 
                    <input type="search" name="search" class="form-control"  placeholder="Search" >
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

<div  class="container text-center baner">
    <div  class="col-md-6">
        <img src="../public/baners/nails.jpg" class="img-responsive" alt="Aleksandra nails 066/32-61-90">
        <h2 >Aleksandra nails</h2>
    </div>

    <div class="col-md-6  baner">
        <a href="http://www.obucacvrcak.com"><img src="../public/baners/cvrcak.jpg" class="img-responsive"> </a>
        <h2 >Obuća cvrčak</h2>
    </div>
</div>