$().ready(function(){
	 //Handles menu drop down
    $('.dropdown-menu').find('form').click(function (e) {
        e.stopPropagation();
    });

    $('#nekretnine,#posao').mouseenter(function(){
         $(this).animate({ 
          'padding-top': 30,
          'padding-left': 40,
          'opacity': 0.5,
          'margin': 0,
           }, 1000);
    }).mouseleave(function(){
         $(this).animate({ 
          'padding': 0,
          'opacity': 1,
          'margin': 5,
           }, 1000);
    });
	
});

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