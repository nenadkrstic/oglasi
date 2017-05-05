$().ready(function(){

  
	 //Handles menu drop down
    $('.dropdown-menu').find('form').click(function (e) {
        e.stopPropagation();
    });

    
    $("#welcome").toggle(10000);

    $('#nekretnine,#posao,#pAuto,#racunari,#mobilni,#tvIaudio,#masine,#eAparati,#namestaj,#igracke,#odeca,#ljubimci,#muzika,#sport,#deca,#negaLica').mouseenter(function(){
         $(this).animate({ 
          'padding-top': 30,
          'padding-left': 0,
          'opacity': 0.5,
          'margin': 0,
          'margin-right': 10,
           }, 500);
    }).mouseleave(function(){
         $(this).animate({ 
          'padding': 0,
          'opacity': 1,
          'margin': 5,
           }, 500);
    });

   //Hover Menu in Header
    $('#MainMenu').hover(function () {
        $(this).find('.mega-dropdown-menu').stop(true, true).delay(200).fadeIn(200);
        $('.darkness').stop(true, true).fadeIn();
    }, function () {
        $(this).find('.mega-dropdown-menu').stop(true, true).delay(200).fadeOut(200);
         $('.darkness').stop(true, true).delay(200).fadeOut();
    });

   
   

});

 function loadListings(){
   $.ajax({
      type:'GET',
      url:'getlastListings',
      success:function(data){
         jQuery.each(data, function(key, value){
        
            $('#getLastListings').append('<a href=singleListing/' + value.id + '><div id="ajaxListing" class="col-md-3"><img src="../public/uploads/list-id-' + value.id + '/img1.jpg"   width="180px" alt="" class="img-thumbnail"><h3>Naziv:'+ value.name +'</h3>' 
              +  '<h4>Cena:'+value.price+ '. ' +value.currency+ '</h4><hr></div></a>');
         });
      }

   });
 }
 setTimeout(loadListings,1000)
function register(){
	
				$("#myModal").modal();
				$("#form").html("<label name='name'>Update article name:</label>"
				 + "<input id='updateName'type='text' name='ime' class='form-control' value=''><br>"
				 + "<label name='desc'>Update article description</label>"
				 + "<input id='updateArt'type='text' name='prezime' class='form-control' value=''>");
				
				
				
}


/*function login(){
    var pass = $('#pass').val();
    var mail = $('#mail').val();
       $.ajaxSetup({
            headers:
            { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });

	$.ajax({
       type:"POST",
       url:"login",
       data:{pass:pass,mail:mail},
       success:function(data){
           alert(data);
       }

	});
	return false;
}*/


var colors = new Array(
  [62,35,255],
  [60,255,60],
  [255,35,98],
  [45,175,230],
  [255,0,255],
  [255,128,0]);

var step = 0;
//color table indices for: 
// current color left
// next color left
// current color right
// next color right
var colorIndices = [0,1,2,3];

//transition speed
var gradientSpeed = 0.002;

function updateGradient()
{
  
  if ( $===undefined ) return;
  
var c0_0 = colors[colorIndices[0]];
var c0_1 = colors[colorIndices[1]];
var c1_0 = colors[colorIndices[2]];
var c1_1 = colors[colorIndices[3]];

var istep = 1 - step;
var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
var color1 = "rgb("+r1+","+g1+","+b1+")";

var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
var color2 = "rgb("+r2+","+g2+","+b2+")";

 $('#gradient').css({
   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
  
  step += gradientSpeed;
  if ( step >= 1 )
  {
    step %= 1;
    colorIndices[0] = colorIndices[1];
    colorIndices[2] = colorIndices[3];
    
    //pick two new target color indices
    //do not pick the same as the current one
    colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    
  }
}

setInterval(updateGradient,10);


window.onload = function () {
    var fileUpload = document.getElementById("fileupload");
    fileUpload.onchange = function () {
        if (typeof (FileReader) != "undefined") {
            var dvPreview = document.getElementById("dvPreview");
            dvPreview.innerHTML = "";
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
            for (var i = 0; i < fileUpload.files.length; i++) {
                var file = fileUpload.files[i];
                if (regex.test(file.name.toLowerCase())) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = document.createElement("IMG");
                       var textbox = document.createElement('input');
                        textbox.type = 'text';
                        textbox.name = 'tag_line[]';
                        textbox.placeholder = 'Enter image tag line';
                       // img.height = "200";
                        img.width = "200";
                        img.src = e.target.result;

                        dvPreview.appendChild(img);
                      //  dvPreview.appendChild(textbox);
                    }
                    reader.readAsDataURL(file);
                } else {
                    alert(file.name + " is not a valid image file.");
                    dvPreview.innerHTML = "";
                    return false;
                }
            }
        } else {
            alert("This browser does not support HTML5 FileReader.");
        }
    }
};
function footerValidate(){
  var name = $('#footerName').val();
  var mail = $('#footerEmail').val();
   var mess = $('#footerMess').val();
    if(name == ""){
      $('#footerNameText').html('<p>Forma sa imenom ne sme biti prazna!!!</p>');
      $('#footerName').css({ "border": "1px solid red"});
      return false;

      }

      if(mail == ""){
        $('#footerNameText').html('<p>Forma sa mailom ne sme biti prazna!!!</p>');
        $('#footerEmail').css({ "border": "1px solid red"});
        return false;
      }

       if(mess == ""){
        $('#footerNameText').html('<p>Forma sa porukom ne sme biti prazna!!!</p>');
        $('#footerMess').css({ "border": "1px solid red"});
        return false;
      }
        
}