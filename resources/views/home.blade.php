@extends('app')


@section('content')
    
    @include('layouts.search')


   <div id="centrall" class="container">
   
    <div id="div1" class="row">             
        <a href="{{url('nekretnine')}}"> <div id="nekretnine" class="col-md-3 nav">
            <h2>Nekretnine</h2>
         </div></a>

        <a href=""> <div id="posao" class="col-md-2 nav">
            <h2>Posao</h2>
         </div></a>

         <a href=""><div class="col-md-3 nav">
            <h2>Polovni automobili</h2>
         </div></a>

         <a href=""><div class="col-md-3 nav">
            <h2>Polovni automobili</h2>
         </div></a>
     </div>


<div id="div2" class="row">
     <a href=""><div class="col-md-4 nav">
        <h2>Računari</h2>
     </div></a>

     <a href=""><div class="col-md-2 nav">
        <h2>Telefoni</h2>
     </div></a>

     <a href=""><div class="col-md-3 nav">
        <h2>Električni aparati</h2>
     </div></a>

      <a href=""><div class="col-md-2 nav">
        <h2>Tv i audio aparati</h2>
     </div></a>

    

      
 </div>

<div id="div3" class="row">
    
    <a href=""><div class="col-md-3 nav">
        <h2>Nameštaj</h2>
     </div></a>

     <a href=""><div class="col-md-2 nav">
        <h2>Igračke</h2>
     </div></a>

     <a href=""><div class="col-md-2 nav">
        <h2>Odeća i obuća</h2>
     </div></a>

     <a href=""><div class="col-md-4 nav">
        <h2>Odeća i obuća</h2>
     </div></a>
      
 </div>

    <div id="div4" class="row">

         <a href=""><div class="col-md-2 nav">
            <h2>Kućni ljubimci</h2>
         </div></a>

         <a href=""><div class="col-md-4 nav">
            <h2>Sport i rekreacija</h2>
         </div></a>

         <a href=""><div class="col-md-4 nav">
            <h2>Nekretnine</h2>
         </div></a>

    </div>
</div>

 <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-body">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                         
                          <form id="form">
                        
                           
                          </form>
                        </div>
                        
                        <div class="modal-footer">
                          <button  type="button" class="btn btn-primary"  data-dismiss="modal" onclick="updateArt()">Update</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                </div>

  
   @stop
