<!DOCTYPE html>
<html>

    <head><title>Try Lang</title> <link href="{{ asset('css/app.css') }}" rel="stylesheet">  @stack('css')</head>
     
<body>



<div class="regcontent">
    <div class="regcontent1">
    <div class="card w-75 border-info">
         <div class="card-body">
             <h5 class="card-title">Questions</h5>
                 <p class="card-text">1. What is your preference <b style="color:#01acbe;">Gender</b> of Psychologist?</p>
                 <fieldset class="form-group">
                 <div class="form-check">
                   <label class="form-check-label">
                     <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                     Male
                   </label>
                 </div>
                 <div class="form-check">
                 <label class="form-check-label">
                     <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                     Female
                   </label>
                 </div>
                 <div class="form-check">
                 <label class="form-check-label">
                     <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3">
                     Both
                   </label>
                 </div>
               </fieldset>
               <p class="card-text">2. What is your preference <b style="color:#01acbe;">Location</b> of Psychologist?</p>
               <select class="form-control">
                <option>Manila</option>
                <option>Cebu</option>
                <option>Davao</option>
                <option>Palawan</option>
                </select>
                     <a href="#" class="btn btn-primary btnquest" >Filter</a>
                    
         </div>
</div>
    </div>

    <div class="regcontent2">
    <div class="card  border-info">
         <div class="card-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-8">
               <input class="form-control" type="text"  id="searchpsych">   </div> 
              <div class="col-md-2">  <button type="submit" class="btn btn-primary" style="margin-left:-15px;">Search</button></div>                         
                <div class="col-md-2"><button type="submit" class="btn btn-primary" style="margin-left:-55px;">View All</button></div>         
                    </div>
             </div>
             <hr>
             <div class="clearfix forpsychsearchdiv">
             <a href="#" class="linkforpsychsearch">
             <div class="contforpsychsearch">
            <img class="sender rounded-circle d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">
            
            <div class="row">
            <div class="rowcolsearch col-md-4"><strong class="strong">John Snow</strong><br>
                <p class="newpar">Cebu,City</div>
             
                <div class="buttonrowsearch col-md-4"><button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#viewPsychModal" data-toggle="tooltip" style="float:right;">View Details</button></div>
                <div class="buttonrowsearch col-md-4"><button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#bookPsychModal" data-toggle="tooltip" style="margin-left:-15px;">Book an Appointment</button></div>
            </div>
          
             </div> <!-- end of contforpsychsearch   -->
             </a> 
             </div>     
             <hr>       
         </div>
    </div>
    </div>

<!-- Modal for View Psychologist -->
    
<div class="modal fade practice" id="viewPsychModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewPsychLabel">John Snow</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    
   
      <div class="modal-body">

      <div class="card">
      <img class="psychbookpic rounded-circle mx-auto d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">
  <div class="card-body">
  
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><h6 style="color:#01acbe;">About Me</h6><small class="details">I'm is a Licensed Psychologist with a unique skill set refined toward counseling and helping others.
         My work experience ranges from adult and adolescent outpatient services, as well as working with hospital based counseling
          services. Joh has over 5 years of experience helping clients with depression, anxiety, relationship struggles and various
           other mental health and emotional challenges. I uses a person-centered approach emphasizing the importance of the 
           therapist/client relationship, along with a cognitive behavioral approach to allow the client to explore the thought 
           patterns related to the challenging emotions and behaviors. My counseling philosophy is based on an acknowledgment of the
            individual’s background and personal beliefs. His expertise allows clients to develop their own perspective of problem 
            solving and empowers them to make the changes needed in order to accomplish their goals. Saju and his wife are blessed with 
            a young daughter and expecting another child later this year!

</small></li>
    <li class="list-group-item"><h6 style="color:#01acbe;">Specialty</h6>
    <ul style="color:#f58c37">
      <li>Stress</li>
      <li>Anxiety</li>
      <li>Self esteem</li>
      <li>Depression</li>
    </ul>
    </li>

    <li class="list-group-item"><h6 style="color:#01acbe;">Licensing</h6>
    <ul style="color:#f58c37;">
      <li>PRC 12345</li>
    </ul>
    </li>


  <li class="list-group-item"><h6 style="color:#01acbe;">Clinic</h6>
    <ul style="color:#f58c37;">
      <li>12345 Street Brgy.Somewhere Cebu City Philippines </li>
    </ul>
    </li>

    </div>
</div>

                    
           </div>      
                        
           </div> <!-- End of modal-content -->
 </div> <!-- End of modal-dialog -->
</div> <!-- End of modal fade -->

<!-- Modal for Book Psychologist -->
    
<div class="modal fade" id="bookPsychModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bookPsychLabel">Send Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="form-group row">
            <label for="example-date-input" class="col-2 col-form-label">Preferred Date</label>
                 <div class="col-10">
                    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                 </div>
        </div> <!-- End of form-group row for date -->
        
        <div class="form-group row">
            <label for="example-time-input" class="col-2 col-form-label">Preferred Time</label>
                 <div class="col-10">
                      <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                 </div>
        </div> <!-- Enf of form-group row for time -->
        <div class="form-group">
             <label for="exampleTextarea">Basic Information</label>
             <textarea class="form-control" id="exampleTextarea" rows="8" placeholder="Including how you feeling for the past few days/weeks."></textarea>
             <small style="font-size: 10px; color: red;">Please wait for the psychologist to accept and confirm your intended booking date. It might be change to other date or time. There's also a possiblity that you will be refered to other 
                 Psychologist who is inline with what you are experiencing.</small>
            </div>   <!-- End of form-group textarea -->  
        
        <button type="submit" class="btn btn-md btn-info" style="float:right;margin-bottom: 25px;">Book Appointment</button>
        
           </div>      
                        
                                          
    </div> <!-- End of table -->
      </div> <!-- End of Modal-body -->
 
  </div> <!-- End of modal-content -->
 </div> <!-- End of modal-dialog -->
</div> <!-- End of modal fade -->







</div> <!-- end of regcontent -->
</body>
</html>
<script src="{{ asset('js/app.js') }}"></script>
 
<style>
    .regcontent{
    display: inline-flex;
}

.regcontent1{
    margin-right:-80px;
  margin-top: 25px;
   margin-left: 80px;
   width:50%;
}

.regcontent2{
   width:900px;
    margin-top: 25px;
    margin-right:80px;
    
}

.btnquest{
    margin-top:50px;
    float:right;
}

.contforpsychsearch{
    margin-left: 50px;
    margin-top: 10px;
}

.newparsearch{
    font-size: 12px;
    color: #212834;
    
}

.rowcolsearch{
    margin-top: 15px;
}

.buttonrowsearch{
    margin-top:25px;
}

.psychbookpic{
    width: 120px;
    height: 120px;
    margin-top: 15px;

}

.details{
    text-indent: 50px;
}


</style>