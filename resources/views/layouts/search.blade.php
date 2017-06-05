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

    <div class="row">
      <a href="http://www.mihailovic.rs/">  <div class="col-md-4">
            <img src="../public/baners/BCSMihailovic1.JPG" alt="Mihajlovic bosh" class=" img-responsive" >
          </div></a>

       <a href="https://www.facebook.com/aleksandra.milosavljevic.501"> <div  class="col-md-4 baner" >
            <img src="../public/baners/nails.jpg" class="img-thumbnail img-responsive" alt="Aleksandra nails 066/32-61-90">
            <h2 >Aleksandra nails</h2>
            <h5>Tel 064/32-61-900</h5>
        </div></a>


    </div>

</div>