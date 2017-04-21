$().ready(function(){
	 //Handles menu drop down
    $('.dropdown-menu').find('form').click(function (e) {
        e.stopPropagation();
    });

    
    $("#welcome").toggle(10000);

    $('#nekretnine,#posao,#pAuto,#racunari').mouseenter(function(){
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

 

   //On scroll load listings Ajax
 


   

});

 function loadListings(){
   $.ajax({
      type:'GET',
      url:'getlastListings',
      success:function(data){
         jQuery.each(data, function(key, value){
        
            $('#getLastListings').append('<a href=singleListing/' + value.id + '><div id="ajaxListing" class="col-md-3"><img src="../public/uploads/2/img1..jpg"   width="150px" alt="" class="img-thumbnail"><h3>Naziv:'+ value.name +'</h3>' 
              +  '<h4>Cena:'+value.price+ '. ' +value.currency+ '</h4><hr></div></a>');
         });
      }

   });
 }
 setTimeout(loadListings,100)
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


