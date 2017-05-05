 
<div id = "footer" class="row">

       <div id="footerFastLinks" class="col-md-2 col-md-offset-2">
             	<h3 class="text-center">Brzi linkovi</h3><hr>
                <ul>
                  <li><a href="{{url('nekretnine')}}">Nekretnine</a></li>
                  <li><a href="{{url('posao')}}">Posao</a></li>
                  <li><a href="{{url('polovniAutomobili')}}">Polovni automobili</a></li>
                  <li><a href="{{url('racunari')}}">Računari</a></li>
                  <li><a href="{{url('mobilniTelefoni')}}">Mobilni telefoni</a></li>
                  <li><a href="{{url('tvIaudio')}}">Tv i audio</a></li>
                  

                </ul>
            </div>

             
              <div id="footerAbout" class="col-md-2">
              <h3 class="text-center">O nama</h3><hr>
                <ul>
                  <li><a href=""></a></li>
                  <li><a href="">O nama</a></li>
                  <li><a href="">Uslovi korišćenja</a></li>
                  <li><a href="">...</a></li>
                  <li><a href="">...</a></li>

                </ul>
            </div>


       
        <div id="footerContact" class="col-md-4">
                    <h3>Kontaktirajte nas</h3><hr>
                <div class="row">
                         <form role="form" onsubmit="return footerValidate()" id="contact-form" class="contact-form">
                              <div class="row">

                                <p id="footerNameText" class="text-center"></p>
                                <div  class="col-md-6">
                                
                                  <div  class="form-group">

                                        <input type="text" class="form-control" name="fooName" autocomplete="off" id="footerName" value="">
                                  </div>
                                </div>
                                  <div class="col-md-6">
                                  <div class="form-group">
                                        <input type="email" class="form-control" name="fooEmail" autocomplete="off" id="footerEmail" value="">
                                  </div>
                                </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                  <div class="form-group">
                                        <textarea class="form-control textarea" rows="3" name="Message" id="footerMess" placeholder="Message"></textarea>
                                  </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-12">
                              <button type="submit" class="btn main-btn pull-right">Send a message</button>
                              </div>
                            </div>
                        </form>
                        
                </div>
        </div>



</div> 