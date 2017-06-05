<script>
$(window).ready(function(){
$('#text').hide();
$('.loader').hide();
$(document).ajaxStart(function(){
$(".loader").show();
$('body').css({'opacity':'0.5'});
});
$(document).ajaxComplete(function(){
$(".loader").hide();
$('body').css({'opacity':'1','background-color':'white'});
});
});
</script>

@if(Session::has('status'))
    <h2 class="text-center alert-danger">{{Session::get('status')}}</h2>
@endif
   <div id="centrall" class="container">
   
    <div id="div1" class="container">
        <a href="{{url('nekretnine')}}"> <div id="nekretnine" class="col-md-3 nav text-center bottom">
            <h2 >Nekretnine</h2>
         </div></a>

        <a href="{{url('posao')}}"> <div id="posao" class="col-md-2 nav text-center bottom">
            <h2>Posao</h2>
         </div></a>

         <a href="polovniAutomobili"><div id="pAuto"class="col-md-3 nav text-center bottom">
            <h2>Polovni automobili</h2>
         </div></a>

         <a href="racunari"><div id="racunari" class="col-md-3 nav text-center bottom">
            <h2>Računari</h2>
         </div></a>
     </div>


<div id="div2" class="container">
     <a href="mobilniTelefoni"><div id="mobilni" class="col-md-4 nav text-center">
        <h2>Mobilni telefoni</h2>
     </div></a>

     <a href="tvIaudio"><div id="tvIaudio" class="col-md-2 nav text-center">
        <h2>Tv i audio aparati</h2>
     </div></a>

     <a href="masineIalati"><div id="masine" class="col-md-3 nav text-center">
        <h2>Mašine i alati</h2>
     </div></a>

      <a href="elAparati"><div id="eAparati" class="col-md-2 nav text-center">
        <h2>Elektricni aparati</h2>
     </div></a>

    

      
 </div>

<div id="div3" class="container">
    
    <a href="namestaj"><div id="namestaj" class="col-md-3 nav text-center">
        <h2>Nameštaj</h2>
     </div></a>

     <a href="igracke"><div id="igracke" class="col-md-2 nav text-center">
        <h2>Igračke</h2>
     </div></a>

     <a href="odecaIobuca"><div id="odeca" class="col-md-2 nav text-center">
        <h2>Odeća i obuća</h2>
     </div></a>

     <a href="kucniLjubimci"><div id="ljubimci" class="col-md-4 nav text-center">
        <h2>Kućni ljubimci</h2>
     </div></a>
      
 </div>

    <div id="div4" class="container">

         <a href="muzika"><div id="muzika" class="col-md-2 nav text-center">
            <h2>Muzika</h2>
         </div></a>

         <a href="sport"><div id="sport" class="col-md-4 nav text-center">
            <h2>Sport i rekreacija</h2>
         </div></a>

         <a href="zaDecu"><div id="deca" class="col-md-2 nav text-center">
            <h2>Za decu</h2>
         </div></a>
         <a href="negaLica"><div id="negaLica" class="col-md-3 nav text-center">
            <h2>Nega lica i tela</h2>
         </div></a>

    </div>

</div>


   <div class="col-lg-pull-6 col-md-pull-5 col-xs-pull-5  col-md-pull-5 loader"></div>


   <div id="getLastListings" class="container text-center">

<div class="row" id="baner2">
       <div class="col-md-3  baner">
           <a href="http://www.obucacvrcak.com"><img src="../public/baners/cvrcak.jpg" class="img img-thumbnail img-responsive"> </a>
           <h2>Obuća cvrčak</h2>
           <h5>www.obucacvrcak.com</h5>

       </div>

       <div class="col-md-5">
           <img src="../public/baners/scMihajlovic.JPG" alt="MihajlovicSC" class="img-thumbnail img-responsive">
       </div>

</div>
   </div>



