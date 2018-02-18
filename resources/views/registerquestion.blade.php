@extends ('layouts.anothernavbar')
@section ('content')

<div class="regcontent">
    <div class="regcontent1">
    <div class="card w-75  cardforquestion">
         <div class="card-body">
             <h3 class="card-title">Questions</h3>
             <div class="question">
                 <h4 class="card-text">1. What is your preference <b style="color:#01acbe;">Gender</b> of Psychologist?</h4>
                 <fieldset class="form-group">
                 <div class="form-check">
                     <div class="row rowgender">
                   <div class="col-md-2"><label class="form-check-label">
                   Male
                   </label></div>
                  <div class="col-md-10"> <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked></div>
                  </div> <!-- End of row -->
                 </div> <!-- End of form-check -->
                 <div class="form-check">
                     <div class="row  rowgender">
                <div class="col-md-2"> <label class="form-check-label">
                 Female       
                   </label></div>
                  <div class="col-md-10"> <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2"></div>
                    </div> <!-- End of row -->
                 </div> <!-- End of form-check -->
                 <div class="form-check">
                     <div class="row ">
                 <div class="col-md-2"><label class="form-check-label">
                     Both
                   </label> </div>
                  <div class="col-md-10"> <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3"></div>
                    </div> <!-- End of row -->
                 </div> <!-- End of form-check -->
               </fieldset>
               <a href="#" class="btn btn-primary btn-lg btnquest" onclick="question('question2','question')" >Next</a>
           </div>

            <div class="question2">
               <h4 class="card-text">2. What is your preferred <b style="color:#01acbe;">Location</b> of Psychologist?</h4>
               <select class="form-control">
                <option>Manila</option>
                <option>Cebu</option>
                <option>Davao</option>
                <option>Palawan</option>
                </select>
                <a href="#" class="btn btn-primary btn-lg btnquest" onclick="question('question3','question2')">Next</a>
                </div>
                
            <div class="question3">
               <h4 class="card-text">3. What is your preferred <b style="color:#01acbe;">Location</b> of Psychologist?</h4>
               <select class="form-control">
                <option>Manila</option>
                <option>Cebu</option>
                <option>Davao</option>
                <option>Palawan</option>
                </select>
                <a href="#" class="btn btn-primary btn-lg btnquest">Next</a>
                </div>
            
         </div>
</div>
    </div>

    <div class="regcontent2">
    <div class="card cardforquestion">
         <div class="card-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-8">
               <input class="form-control" type="text"  id="searchpsych" placeholder="Name/City">   </div> 
              <div class="col-md-2">  <button type="submit" class="btn btn-primary btnstyle" style="margin-left:-15px;">Search</button></div>                         
                <div class="col-md-2"><button type="submit" class="btn btn-primary btnstyle" style="margin-left:-55px;">View All</button></div>         
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
             
                <div class="divrowsearch col-md-2"><button type="button" class="btn btn-sm btn-info btnrowsearch" onclick="loadViewDetailsModal();">View Details</button></div>
                <div class="divrowsearch col-md-2"><button type="button" class="btn btn-sm btn-info btnrowsearch2" onclick="loadAppointmentModal();">Book an Appointment</button></div>
            </div>
          
             </div> <!-- end of contforpsychsearch   -->
             </a> 
             </div>     
             <hr>       
             
             <div class="clearfix forpsychsearchdiv">
             <a href="#" class="linkforpsychsearch">
             <div class="contforpsychsearch">
            <img class="sender rounded-circle d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">
            
            <div class="row">
            <div class="rowcolsearch col-md-4"><strong class="strong">John Snow</strong><br>
                <p class="newpar">Cebu,City</div>
             
                <div class="divrowsearch col-md-2"><button type="button" class="btn btn-sm btn-info btnrowsearch">View Details</button></div>
                <div class="divrowsearch col-md-2"><button type="button" class="btn btn-sm btn-info btnrowsearch2">Book an Appointment</button></div>
            </div>
          
             </div> <!-- end of contforpsychsearch   -->
             </a> 
             </div>     
             <hr>      

             <div class="clearfix forpsychsearchdiv">
             <a href="#" class="linkforpsychsearch">
             <div class="contforpsychsearch">
            <img class="sender rounded-circle d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">
            
            <div class="row">
            <div class="rowcolsearch col-md-4"><strong class="strong">John Snow</strong><br>
                <p class="newpar">Cebu,City</div>
             
                <div class="divrowsearch col-md-2"><button type="button" class="btn btn-sm btn-info btnrowsearch">View Details</button></div>
                <div class="divrowsearch col-md-2"><button type="button" class="btn btn-sm btn-info btnrowsearch2" >Book an Appointment</button></div>
            </div>
          
             </div> <!-- end of contforpsychsearch   -->
             </a> 
             </div>     
             <hr>  
                              
         </div>
         <ul class="pagination page">
             <li><a href="#">1</a></li>
             <li><a href="#">2</a></li>
             <li><a href="#">3</a></li>
             <li><a href="#">4</a></li>
         </ul>
    </div>
    </div>

<!-- Modal for View Psychologist -->
<div id="viewDetailsModal" class="modal"> <!-- Start Modal -->
<div class="modal-dialog">
<div class="modal-content">
   
     <div class="modal-header">
        <span class="close" onclick="closeModal2();" style="color:red;"> x</span>
        <h4 class="modal-title">John Snow</h4>
    </div> <!-- End of Modal-Header -->
        
    <div class="modal-body">

    
         <div class="text-center">
  <img class="psychbookpic rounded-circle mx-auto d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">
    </div>
<div class="detailscontent">

<ul class="list-group list-group-flush">
<li class="list-group-item"><h4 style="color:#01acbe;">About Me</h4><p class="details">I'm is a Licensed Psychologist with a unique skill set refined toward counseling and helping others.
     My work experience ranges from adult and adolescent outpatient services, as well as working with hospital based counseling
      services. Joh has over 5 years of experience helping clients with depression, anxiety, relationship struggles and various
       other mental health and emotional challenges. I uses a person-centered approach emphasizing the importance of the 
       therapist/client relationship, along with a cognitive behavioral approach to allow the client to explore the thought 
       patterns related to the challenging emotions and behaviors. My counseling philosophy is based on an acknowledgment of the
        individual’s background and personal beliefs. His expertise allows clients to develop their own perspective of problem 
        solving and empowers them to make the changes needed in order to accomplish their goals. Saju and his wife are blessed with 
        a young daughter and expecting another child later this year!

</p></li>
<li class="list-group-item"><h4 style="color:#01acbe;">Specialty</h4>
<ul style="color:#f58c37">
  <li class="list">Stress</li>
  <li class="list">Anxiety</li>
  <li class="list">Self esteem</li>
  <li class="list">Depression</li>
</ul>
</li>

<li class="list-group-item"><h4 style="color:#01acbe;">Licensing</h4>
<ul style="color:#f58c37;">
  <li class="list">PRC 12345</li>
</ul>
</li>


<li class="list-group-item"><h4 style="color:#01acbe;">Clinic</h4>
<ul style="color:#f58c37;">
  <li class="list">12345 Street Brgy.Somewhere Cebu City Philippines </li>
</ul>
</li>

</div>


</div> <!-- End of modal-body -->


</div> <!-- End of modal-content -->

</div> <!-- End of modal-dialog -->
</div> <!-- Close modal-->
<!-- End of Modal For View Psychologist -->

<!-- Modal for Book Psychologist -->

<div id="bookModal" class="modal"> <!-- Start modal -->
<div class="modal-dialog">
<div class="modal-content">

    <div class="modal-header">
    <span class="close" onclick="closeModal();" style="color:red;">x</span>
        <h4 class="modal-title">Book Appointment</h4>
    </div>

    <div class="modal-body">
    
    <div class="form-group rowcontent">
<label for="example-date-input" class="col-2 col-form-label">Preferred Date</label>
 <div class="col-10">
    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
 </div>
</div> <!-- End of form-group row for date -->

<div class="form-group rowcontent">
<label for="example-time-input" class="col-2 col-form-label">Preferred Time</label>
 <div class="col-10">
      <input class="form-control" type="time" value="13:45:00" id="example-time-input">
 </div>
</div> <!-- Enf of form-group row for time -->
<div class="form-group rowcontent">
<label for="exampleTextarea">Basic Information</label>
<textarea class="form-control" id="exampleTextarea" rows="8" placeholder="Including how you feeling for the past few days/weeks."></textarea>
<small style="font-size: 12px; color: red;">Please wait for the psychologist to accept and confirm your intended booking date. It might be change to other date or time. There's also a possiblity that you will be refered to other 
 Psychologist who is inline with what you are experiencing.</small>
</div>   <!-- End of form-group textarea -->  

<div class="modal-footer text-right">
<button type="submit" class="btn btn-md btn-info btnapp">Book Appointment</button>
</div>



    </div> <!-- End of modal-body -->


</div> <!-- End of modal-content -->

</div> <!-- End of moda-dialog -->

</div> <!-- Close modal-->

                        
           
 <!-- End of Modal for Book Psychologist -->







</div> <!-- end of regcontent -->

<script src="{{ asset('js/app.js') }}"></script>
 
 <script src="{{ asset('js/app.js') }}"></script>
<script>
    for(var i = 2; i <= 3; i++){
    $('.question'+i).hide();
    }
    function question(id, id2){
    $("."+id).show();
    $("."+id2).hide();
    }

    function loadAppointmentModal(){
    var bookModal = document.getElementById('bookModal');
    bookModal.style.display='block';
}

function loadViewDetailsModal(){
    var bookModal = document.getElementById('viewDetailsModal');
    bookModal.style.display='block';
}

function closeModal(){
    var closeModal=document.getElementById('bookModal');
    closeModal.style.display="none";
}

function closeModal2(){
    var closeModal=document.getElementById('viewDetailsModal');
    closeModal.style.display="none";
}

</script>

@endsection