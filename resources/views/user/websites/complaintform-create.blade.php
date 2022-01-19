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
  
  <form action="{{route('user.form.store')}}" class="col-xs-12 col-sm-12 col-md-12" enctype="multipart/form-data" method="POST">
  @csrf
  <h2 style=" text-align:center; " >Please fill all mandatory fields</h2>


  
  <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Enter Your NID Number</label>
            <input name="nid_no" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>

        </div>
  
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
            <input type="file" name="image"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Police Station</label>
            <select name="policestation" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
            <option> </option>
            
           
    <optgroup label="Criminal Case(select any on them)">
            <option>Ashulia</option>
            <option>Savar</option>
            <option>Turag</option>        
            <option>Banani</option>
            <option>Dhanmondi</option>
            
    </optgroup>
            </select> 
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Issused At</label>
            <input name="issued_at" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Officer Name</label>
            <select name="officername" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
            <option> </option>
            <option>Ashulia Thana</option>
           
    <optgroup label="Choose Selected Officer Email under Ashulia Thana">
            <option>Salman Hasan(Police Officer)</option>
            <option>Md Sazibur Rahman(Sub-Inspector)</option>
            
            
    </optgroup>
    <option>Savar Thana</option>
           
           <optgroup label="Choose Selected Officer Email under Savar Thana">
                   <option>Shohel Rahman(Police Officer)</option>
                   <option>MITHUN MAITRA [avik](Sub-Inspector)</option>
                   
                   
           </optgroup>
           <option>Turag Thana</option>
           
           <optgroup label="Choose Selected Officer Email under Turag Thana" >
                   <option>Nasir Ahmed(Sub-Inspector)</option>
                   <option>Bhaskar Saha(Police Officer)</option>
                   
                   
           </optgroup>
           <option>Banani Thana</option>
           
           <optgroup label="Choose Selected Officer Email under Banani Thana">
                   <option>Sazzad Khan(Sub-Inspector)</option>
                   <option>Sharif Uddin(Police Officer)</option>
                   
                   
           </optgroup>
           <option>Dhanmondi Thana</option>
           
           <optgroup label="Choose Selected Officer Email under Dhanmondi Thana">
                   <option>Abdus Salam(Police Officer)</option>
                   <option>Rajib Deb(Sub-Inspector)</option>
                   
                   
           </optgroup>
            </select> 

            
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Selected Officer Email</label>
            <select name="officeremail" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
            <option> </option>
            <option>Ashulia Thana</option>
           
    <optgroup label="Officer Name under Dhanmondi Thana(select any on them)">
            <option>Salman.Hasan@police.gov.bd</option>
            <option>Sazibur.Rahman@police.gov.bd</option>
            
            
    </optgroup>
    <option>Savar Thana</option>
           
           <optgroup label="Officer Name under Dhanmondi Thana(select any on them)">
                   <option>Shohel.Rahman@police.gov.bd</option>
                   <option>MITHUN.MAITRA@police.gov.bd</option>
                   
                   
           </optgroup>
           <option>Turag Thana</option>
           
           <optgroup label="Officer Name under Dhanmondi Thana(select any on them)">
                   <option>Nasir.Ahmed@police.gov.bd</option>
                   <option>Bhaskar.Saha@police.gov.bd</option>
                   
                   
           </optgroup>
           <option>Banani Thana</option>
           
           <optgroup label="Officer Name under Dhanmondi Thana(select any on them)">
                   <option>Sazzad.Khan@police.gov.bd</option>
                   <option>Sharif.Uddin@police.gov.bd</option>
                   
                   
           </optgroup>
           <option>Dhanmondi Thana</option>
           
           <optgroup label="Officer Name under Dhanmondi Thana(select any on them)">
                   <option>Abdus.Salam@police.gov.bd</option>
                   <option>Rajib.Deb@police.gov.bd</option>
                   
                   
           </optgroup>
            </select> 

            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Selected Officer Phone</label>
            <select name="officerphone" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
            <option> </option>
            <option>Ashulia Thana</option>
           
    <optgroup label="Salman">
            <option>01711538313</option>
    <optgroup label="Sazibur">
            <option>01713373101</option>
            
            
    </optgroup>
    <option>Savar Thana</option>
           
           <optgroup label="Shohel"> 
                   <option>01713373103</option>
          <optgroup label="MITHUN">
                   <option>01711883712</option>
                   
                   
           </optgroup>
           <option>Turag Thana</option>
           
           <optgroup label="Nasir">
                   <option>01713373100</option>
           <optgroup label="Bhaskar">
                   <option> 01713373102</option>
                   
                   
           </optgroup>
           <option>Banani Thana</option>
           
           <optgroup label="Sazzad">
                   <option>01769691415</option>
           <optgroup label="Sharif">
                   <option>01713398370</option>
                   
                   
           </optgroup>
           <option>Dhanmondi Thana</option>
           
           <optgroup label="Salam">
                   <option>01713398402</option>
           <optgroup label="Rajib">
                   <option>01713398383</option>
                   
                   
           </optgroup>
            </select> 


            
</br>
</br>

    <button type="submit" class="btn btn-success"  >Submit</button>
  </form>
  </div>
</div>





   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
        
        

