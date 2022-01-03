<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>

body{
	background:black;
}

.container{
	display:flex;
	flex-direction:row;
	justify-content:center;
	align-items:center;
}
.form-control{
	border:none;
	border-bottom:3px solid dodgerblue;
	background:black;
	color:white;
	border-radius:0px;
}

.row{
	width:60%;
	margin-top:50px;
	border: 3px solid orange;
	border-radius:14px;
	height:auto;
}

form h2{
	color:white;
}

.checkbox span{
	color:white;
}

.checkbox{
	float:left;
}

button{
	float:right;
	width:120px;
}

@media(max-width:768px){
	body{
		font-size:10px;
	}
	
	h2{
		font-size:15px;
	}
	
	input[type=text]{
		font-size:13px;
	}
	
	input[type=password]{
		font-size:13px;
	}
	
	input[type=email]{
		font-size:13px;
	}
	
	button{
		width:80px;
		height:30px;
		float:right;
		font-size:10px;
		margin-bottom:10px;
	}
	
	.checkbox{
		display:inline;
	}
	
}


</style>


<h1 style="color: White; text-align:center; " >Make a complaint</h1>

<div class="container">
  <div class="row">
  
  <form action="{{route('user.form.store')}}" class="col-xs-12 col-sm-12 col-md-12" method="POST">
  @csrf
  <h2 style=" text-align:center; " >Please fill all mandatory fields</h2>
  <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Enter Issue Date</label>
            <input name="date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Issue Time</label>
            <input name="time" type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Complainer Name </label>
            <input name="cname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Complainer Address</label>
            <input name="c_address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Complainer Phone</label>
            <input name="cell" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>

        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Complainer Email</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>
    
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Case Type</label>
            <select name="casetype" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
            <option> </option>
            <option>General Dairy(GD)</option>
           
    <optgroup label="Criminal Case(select any on them)">
            <option>Murder</option>
            <option>Acid Offences</option>
            <option>Violence Against Women and Children</option>        
            <option>Rape</option>
            <option>Kidnapping</option>
            <option>Eveteasing</option>
            <option>Defamation</option>        
            <option>Cheating</option>
            <option>Drug</option>
            <option>Robbery</option>
    </optgroup>
            </select> 
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Complaint Description</label>
            <textarea name="details" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Defendant Name</label>
            <input name="dname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Defendant Address</label>
            <input name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Crime place Photo</label>
            <input name="photo" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
</br>
</br>

    <button type="submit" class="btn btn-success"  >Submit</button>
  </form>
  </div>
</div>




   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
        
        

