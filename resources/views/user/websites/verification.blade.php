
<h1 style="color: White; text-align:center; " >Enter Your LOG IN INFORMATION</h1>
    

       
		
<!-- css file -->
<style>
/*-----Background-----*/

body{
	 background-image:url(https://s3.envato.com/files/243754334/primag.jpg);
	 background-repeat:no-repeat;
	 background-size:cover;
	 width:100%;
	 height:100vh;
	 overflow:auto;
	 
}

/*-----for border----*/
.container{
	font-family:Roboto,sans-serif;
	  background-image:url(https://image.freepik.com/free-vector/dark-blue-blurred-background_1034-589.jpg) ;
    
     border-style: 1px solid grey;
     margin: 0 auto;
     text-align: center;
     opacity: 0.8;
     margin-top: 67px;
   box-shadow: 2px 5px 5px 0px #eee;
     max-width: 500px;
     padding-top: 10px;
     height: 363px;
     margin-top: 166px;
}

	  

/*---for heading-----*/
.heading{
	 text-decoration:bold;
	 text-align : center;
	 font-size:30px;
	 color:#F96;
	 padding-top:10px;
}
/*-------for email----------*/
  /*------label----*/

.pass{
	 color: white;
     margin-top: 9px;
     font-size: 14px;
     font-family: sans-serif;
     margin-left: 6px;
     margin-top: 9px;
}
#password{
 margin-top: 6px;
}



     
/*------------For submit button---------*/
.sbutton{
	 color: white;
     font-size: 20px;
     border: 1px solid white;
     background-color: #080808;
     width: 32%;
     margin-left: 41%;
     margin-top: 16px;
	 box-shadow: 0px 2px 2px 0px white;
  	   
   }
.btn.btn-warning:hover {
    box-shadow: 2px 1px 2px 3px #99ccff;
	background:#5900a6;
	color:#fff;
	transition: background-color 1.15s ease-in-out,border-color 1.15s ease-in-out,box-shadow 1.15s ease-in-out;
	
}	 
	  

</style>
  


<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!Doctype html>
<html>
<head>
     <meta charset="UTF-8">
     <title>Verification Form</title>
     	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
 <div class="container">
 <!---heading---->
     <header class="heading"> Login-Form</header><hr></hr>
	<!---Form starting----> 

<!-- confirmation with sms   -->
@if(session('message'))
<div class="alert alert-success">
	{!! session('message')!!}
</div>
@endif


@if(session('sms'))
<div class="alert alert-danger">
	{!! session('sms')!!}
</div>
@endif










	<div class="row ">
	<form action="{{route('user.do.verification')}}" method="post">
	@csrf
	 <!-----For Password and confirm password---->
          <div class="col-sm-12">
		         <div class="row">
				
				     <div class="col-xs-4">
					
							   <label for="name" class="text-info">USER NAME</label>
							   
							  </div>
							
			 
						
				  <div class="col-xs-8">
			             <!-- <input name="password" type="password"  placeholder="Enter your nid number" class="form-control" require> -->
			             <input name="name" type="text"  placeholder="Enter your name" class="form-control" require>

				 </div>
				 
          </div>
		  </div>
		  </br>
</br>
</br>
</br>
		  <div class="col-sm-12">
		         <div class="row">
				
				     <div class="col-xs-4">
					
							   <label for="password" class="text-info">USER PASSWORD</label>
							   
							  
							</div>
							
			 
						
				  <div class="col-xs-8">
			             <!-- <input name="password" type="password"  placeholder="Enter your nid number" class="form-control" require> -->
			             <input name="password" type="password"  placeholder="Enter your password" class="form-control" require>

				 </div>
				 
          </div>
		  </div>
</br>
</br>
</br>
</br>


		  
<!-----------For Phone number-------->
<div class="col-sm-12" style="color: White; text-align:center; ">
		     <!-- <div class ="row">
                 <div class="col-xs-4 " >
			       <p >Do you have NID?Verified</P>
				 </div>
			  -->
			     
			
		  	 <!-- </div> -->
		     <div class="col-sm-12">
		         
				 <button type="submit" class="btn btn-warning" > Submit</button>
				 <!-- <a href="{{route('user.form.create')}}" class="btn btn-warning">Submit</a> -->
		   </div>
		 </div>
	 </div>	 	 
		 		 
</form>	 
</div>

</body>		
</html>
	 
	 




