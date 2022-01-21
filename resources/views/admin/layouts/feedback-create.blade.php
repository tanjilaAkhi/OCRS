@extends('admin.master')


@section('content')

    <h1>Create New Feedback</h1>
    
    <form action="{{route('admin.feedbacks.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Email</label>
            <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Complainer Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>

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
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Responsible Officer Name</label>
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


        </div>
        
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Feedback</label>
            <input name="feedback" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>
        

        <button type="submit" class="btn btn-primary">Send Feedback</button>
        
        
    </form>

@endsection
