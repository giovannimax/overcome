@extends ('layouts.navbar')
@section ('content')
<div class="forpsychcounsel">

    <div class="containercounseling1">
    <div class="card text-center">
  <div class="card-header" style="padding-bottom:10px;padding-top:7px;">
  <div class="form-group row">
  <div class="col-10">
    <input class="form-control" type="search" id="search" placeholder="Name/Diagnosis" style="margin-top:15px;"> 
  </div>
  <div class="col-2">
  <button type="submit" class="btn btn-info btn-md text-center" style="margin-left:-25px;margin-top:15px;">Search</button>
  </div>
</div>
  </div>
  <div class="card-block insidecontent">
        <a href="#">
        <div class="row divforsearch">  
            <div class="col-md-2"><img class="insideimg2 rounded-circle d-block" src="{{ asset('images/pic.png') }}" alt="profile picture"></div>
            <div class="col-md-8" style="margin-top:20px;">John Doe</div>
            <div class="col-md-2" style="margin-top:20px;"><small class="text-success">Active</small></div>    
        </div> 
        </a>

        <a href="#">
        <div class="row divforsearch">  
            <div class="col-md-2"><img class="insideimg2 rounded-circle d-block" src="{{ asset('images/pic.png') }}" alt="profile picture"></div>
            <div class="col-md-8" style="margin-top:20px;">Jessa Char</div>
            <div class="col-md-2" style="margin-top:20px;"><small class="text-success">Active</small></div>    
        </div> 
        </a>

        <a href="#">
        <div class="row divforsearch">  
            <div class="col-md-2"><img class="insideimg2 rounded-circle d-block" src="{{ asset('images/pic.png') }}" alt="profile picture"></div>
            <div class="col-md-8" style="margin-top:20px;">Jane Doe</div>
            <div class="col-md-2" style="margin-top:20px;"><small class="text-success">Active</small></div>    
        </div> 
        </a>

        <a href="#">
        <div class="row divforsearch">  
            <div class="col-md-2"><img class="insideimg2 rounded-circle d-block" src="{{ asset('images/pic.png') }}" alt="profile picture"></div>
            <div class="col-md-8" style="margin-top:20px;">Joe Hannes</div>
            <div class="col-md-2" style="margin-top:20px;"><small class="text-success">Active</small></div>    
        </div> 
        </a>
  </div>
  
</div>
    </div> <!-- End of containercounseling1 -->

    <div class="containercounseling2">

    <div class="card">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs justify-content-end" id="nav-tab" role="tablist"> 
      <li class="nav-item">
        <a class="nav-item nav-link active" id="nav-messages-tab" data-toggle="tab" href="#nav-messages" role="tab" aria-controls="nav-messages" aria-selected="true">Messages</a>
      </li>
      <li class="nav-item">
      <a class="margdiary nav-item nav-link" id="nav-diary-tab" data-toggle="tab" href="#nav-diary" role="tab" aria-controls="nav-diary" aria-selected="false">Diary</a>
      </li>
      <li class="nav-item">
      <a class="nav-item nav-link" id="nav-sesnotes-tab" data-toggle="tab" href="#nav-sesnotes" role="tab" aria-controls="nav-sesnotes" aria-selected="false">Session Notes</a>
      </li>
    </ul>
  </div>

  <div class="card-block insidecontent2">
<div class="tab-content" id="nav-tabContent">
  <div class="tabmessages tab-pane fade show active" id="nav-messages" role="tabpanel" aria-labelledby="nav-messages-tab">  <!-- Start of Appointment Tab -->
   
  <p id="duration">Duration: 58mins left</p>
    <div class="row">
    <div class="col-md-12">
        <div class="card card-primary mb3 cardmsg">
            <div class="card-header">
                <div class="row">
                <div class="col-md-8">
                <table>
                <tr>
                    <td><img class="sendernewimg rounded-circle d-block" src="{{ asset('images/pic.png') }}" alt="profile picture" align="left"></td>
                    <td><strong>John Doe</strong></td>
               </tr> </table>
               </div>

                <div class="col-md-2">
                <button type="submit" class="btn btn-success" style="margin-top:15px;margin-left:50px;" onclick="showvideo()"><span><i class="material-icons">videocam</i>Start E-counseling</span></button>
                </div>

               </div> <!--End of row -->
            </div> <!-- End of card-header -->
           
            
            <div class="card-block">
                <div align="right">
                  <img class="insideimg rounded-circle d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">
            <div class="insidecard card text-white bg-secondary w-50" align="right">
        <div class="pnmcont">
            <p class="pmsg">Lorem ipsum dolor sit amet, munere eligendi percipit in ius, vim dolorem probatus ex.</p></[></div>
         <div class="dtime" style="margin-top:15px;margin-left:15px;"><p class="insidetime text-white"s>8:15PM</p></div>
         </div>
            </div>
            
                
                <img class="insideimg2 rounded-circle d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">
            <div class="insidecard card text-white bg-info w-50">
        <div class="pmcont">
            <p class="pmsg2">Lorem ipsum dolor sit amet, munere eligendi percipit in ius, vim dolorem probatus ex.</p></div>
         <div class="dtime2"><p class="insidetime2 text-white">8:15PM</p></div>
         </div>
            </div> <!-- End of card-block -->
        

            <div class="card-footer">
                <div class="input-group">
                    <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                    <span >
                        <button class="btn btn-primary btn-md" id="btn-chat">
                          <i class="material-icons">send</i> Send</button>
                    </span>
                    <span><button class="btn btn-primary btn-md" type="file" id="btn-attach"><i class="material-icons">attach_file</i>Attach File</button>
                    </span>
                    
                    </div>
                </div> <!-- End of footer -->
            </div> <!-- End of card -->
        </div>
    </div> <!-- End of row -->

</div> <!-- End of appointment tab-content --> 

<div class="tabdiary tab-pane fade" id="nav-diary" role="tabpanel" aria-labelledby="nav-diary-tab"> <!-- Start of diary tab -->

<div class="diarycontainer">
       {!! Form::open(['url' => 'diary/submit']) !!}
  <h5 class="h5diary"> August 29, 2017<a class="adiary" data-toggle="collapse" href="#collapseDiary" aria-expanded="false" aria-controls="collapseExample">
   See More <i class="material-icons">arrow_drop_down</i>
  </a></h5>
  

<div class="divdiary collapse" id="collapseDiary">
    
     <div class="form-group"> 
            {{Form::label('npass', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',['style' => 'color:#f58c37'])}} 
         
            {{Form::textarea('about', '',['class' => 'form-control', 'placeholder' => 'Add Comment Here','style' => 'height:150px'])}}<br>
         
            {{Form::submit('SAVE', ['class' => 'btn btn-primary' , 'style' => 'float:right'])}}
    </div>
         
</div>
       {!! Form::close() !!}
    
        {!! Form::open(['url' => 'diary/submit']) !!}
  <h5 class="h5diary"> August 21, 2017<a class="adiary" data-toggle="collapse" href="#collapseDiary2" aria-expanded="false" aria-controls="collapseExample">
   See More <i class="material-icons">arrow_drop_down</i>
  </a></h5>
  

<div class="divdiary collapse" id="collapseDiary2">
    
     <div class="form-group"> 
            {{Form::label('npass', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',['style' => 'color:#f58c37'])}} 
         
            {{Form::textarea('about', 'Add Comment Here',['class' => 'form-control', 'style' => 'height:150px'])}}<br>
         
            {{Form::submit('SAVE', ['class' => 'btn btn-primary' , 'style' => 'float:right'])}}
    </div>
         
</div>
       {!! Form::close() !!}
    
    
    </div> <!-- End of diarycontainer -->
    
 </div> <!-- End of diary tab -->
    

 <div class="tabsesnotes tab-pane fade" id="nav-sesnotes" role="tabpanel" aria-labelledby="nav-sesnotes-tab"><!--
Start of Session Notes Tab -->
<button class="accordion">Session 1 Feb 1, 2018 10:30-12:00 PM</button>
<div class="panell">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Section 2</button>
<div class="panell">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Section 3</button>
<div class="panell">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
  
</div> <!-- End of Session tab -->

</div> <!-- End of tabcontent -->

</div> <!-- End of Card-block -->
</div> <!-- End of Card -->
    </div> <!-- End of containercounseling2 -->


</div> <!-- End of container forpsychcounseling -->
@endsection

@section ('scripts')
<script Language="JavaScript">

function showvideo() {

      var width = 1600;
      var height = 750;
      var top = parseInt((screen.availHeight/2) - (height/2));
      var left = parseInt((screen.availWidth/2) - (width/2));
      window.open('ecounseling_start', 
            "Video Counselling", 
            "menubar=no,resizable=no,width=" + width + ",height=" + height + ",scrollbars=no,left="  
            + left + ",top=" + top + ",screenX=" + left + ",screenY=" + top);    
      }

      $(function() {
    $('a[data-toggle="tab"]').on('click', function(e) {
        window.localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = window.localStorage.getItem('activeTab');
    if (activeTab) {
        $('#nav-tab a[href="' + activeTab + '"]').tab('show');
        window.localStorage.removeItem("activeTab");
    }
});
    
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active2");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}

</script> 
@endsection

