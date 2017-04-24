 @if(Session::has('msg'))
             <div id="welcome" class="row text-center"><h1>{{Session::get('msg')}}</h1></div>
            @endif

   <div id="centrall" class="container">
   
    <div id="div1" class="row">             
        <a href="{{url('nekretnine')}}"> <div id="nekretnine" class="col-md-3 nav text-center">
            <h2 >Nekretnine</h2>
         </div></a>

        <a href=""> <div id="posao" class="col-md-2 nav text-center">
            <h2>Posao</h2>
         </div></a>

         <a href=""><div id="pAuto"class="col-md-3 nav text-center">
            <h2>Polovni automobili</h2>
         </div></a>

         <a href=""><div id="racunari" class="col-md-3 nav text-center">
            <h2>Računari</h2>
         </div></a>
     </div>


<div id="div2" class="row">
     <a href=""><div id="mobilni" class="col-md-4 nav text-center">
        <h2>Mobilni telefoni</h2>
     </div></a>

     <a href=""><div id="tvIaudio" class="col-md-2 nav text-center">
        <h2>Tv i audio aparati</h2>
     </div></a>

     <a href=""><div id="masine" class="col-md-3 nav text-center">
        <h2>Mašine i alati</h2>
     </div></a>

      <a href=""><div id="eAparati" class="col-md-2 nav text-center">
        <h2>Elektricni aparati</h2>
     </div></a>

    

      
 </div>

<div id="div3" class="row">
    
    <a href=""><div id="namestaj" class="col-md-3 nav text-center">
        <h2>Nameštaj</h2>
     </div></a>

     <a href=""><div id="igracke" class="col-md-2 nav text-center">
        <h2>Igračke</h2>
     </div></a>

     <a href=""><div id="odeca" class="col-md-2 nav text-center">
        <h2>Odeća i obuća</h2>
     </div></a>

     <a href=""><div id="ljubimci" class="col-md-4 nav text-center">
        <h2>Kućni ljubimci</h2>
     </div></a>
      
 </div>

    <div id="div4" class="row">

         <a href=""><div id="muzika" class="col-md-2 nav text-center">
            <h2>Muzika</h2>
         </div></a>

         <a href=""><div id="sport" class="col-md-4 nav text-center">
            <h2>Sport i rekreacija</h2>
         </div></a>

         <a href=""><div id="deca" class="col-md-2 nav text-center">
            <h2>Za decu</h2>
         </div></a>
         <a href=""><div id="negaLica" class="col-md-3 nav text-center">
            <h2>Nega lica i tela</h2>
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
                </div><br>



                <div id="getLastListings" class="text-center"><h2>Najnoviji oglasi</h2><hr></div>