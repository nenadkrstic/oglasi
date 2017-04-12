<div  class="container">
      {{Form::open(['action'=>'PageController@saveListing','files' => true,'class'=>'dropzone','method'=>'POST','enctype'=>'multipart/form-data'])}}
	  
		       
		   			 {{ Form::file('img[]', array('multiple'=>true)) }}
		  		
         		
         </div>

    
   
	
  

   

    
    <div class="col-md-8 ">
		
			<div class="col-md-12 ">
			  {{ Form::submit('Snimi',['id'=>'submit','class'=>'btn btn-block btn-primary']
			  ) }}
			 </div>
    </div>

     <input typr="text" name="name">


  {{Form::close()}}

</div>

      
  

</div>