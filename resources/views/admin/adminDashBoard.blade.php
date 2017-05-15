@extends('app')

@section('content')





<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
             <form action="" method="" onSubmit="searchUsers();return false;" class="search-form">
            <div id="imaginary_container"> 
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Search" >
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<div id="adminSearch"></div>

@stop