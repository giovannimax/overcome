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
  <div class="card-block insidecontent" id="convomenu">
       
  </div>
  
</div>
    </div> <!-- End of containercounseling1 -->

    <div class="containercounseling2">

    <div class="card">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs justify-content-end" id="nav-tab" role="tablist"> 
    <li class="nav-item">
        <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="true">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-item nav-link" id="nav-messages-tab" data-toggle="tab" href="#nav-messages" role="tab" aria-controls="nav-messages" aria-selected="true">Messages</a>
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

<div class="tabmessages tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">  <!-- Start of Appointment Tab -->
   
   <img class="rounded-circle mx-auto d-block" src="{{ asset('images/pic.png') }}" alt="profile picture" style="width: 100px; height: 100px;margin-top: 50px;margin-bottom:25px;">
     <div class="">
        <table class="d-flex justify-content-center">
        <tr class="trspace">
            <td class="text-info" style="padding-right: 25px;padding-bottom: 25px;">First Name</td>
            <td style="padding-bottom: 25px;">John</td>
        </tr>

         <tr class="trspace">
            <td class="text-info" style="padding-right: 25px;padding-bottom: 25px;">Middle Name</td>
            <td style="padding-bottom: 25px;">Wow</td>
        </tr>

         <tr>
            <td class="text-info" style="padding-right: 25px; padding-bottom: 25px;">Last Name</td>
            <td style="padding-bottom: 25px;">Snow</td>
        </tr>

         <tr>
            <td class="text-info" style="padding-right: 25px; padding-bottom: 25px;">Address</td>
            <td style="padding-bottom: 25px;">sfsfsfs</td>
        </tr>

         <tr>
            <td class="text-info" style="padding-right: 25px; padding-bottom: 25px;">Email Address</td>
            <td style="padding-bottom: 25px;">asdad@gmail.com</td>
        </tr>

         <tr>
            <td class="text-info" style="padding-right: 25px; padding-bottom: 25px;">Mobile No.</td>
            <td style="padding-bottom: 25px;">123456</td>
        </tr>

        </table>
     
 </div>
 </div> <!-- End of profile tab-content -->


  <div class="tabmessages tab-pane fade" id="nav-messages" role="tabpanel" aria-labelledby="nav-messages-tab">  <!-- Start of Appointment Tab -->
   
  <p id="duration">Duration: 58mins left</p>
    <div class="row">
    <div class="col-md-12">
        <div class="card card-primary mb3 cardmsg">
            <div id="msgcont">

            </div>
            <div class="card-footer">
                <div class="input-group">
                    <input id="msgcontent" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                    <span >
                        <input type="hidden" id="convoid" value="">

                        <button class="btn btn-primary btn-md" id="btn-chat" onclick="sendmsg()">
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

<div class="diarycontainer" id="diarycont">
    
    </div> <!-- End of diarycontainer -->
    
 </div> <!-- End of diary tab -->
    

 <div class="tabsesnotes tab-pane fade" id="nav-snotes" role="tabpanel" aria-labelledby="nav-sesnotes-tab"><!--
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
    var id = "{{ Auth::user()->id}}";
    var idnty= "psych";
    $.get('./convomenu',{id:id,idnty,idnty},function(data){
            $('#convomenu').html(data);
     });

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

<script>
    function sendmsg(){
        var msgcontent = $('#msgcontent').val();
        var sender = 1;
        var convoid = $('#convoid').val();

        $.get('./sendmsg',{msg:msgcontent,sender:sender,id:convoid},function(data){
            $.get('./convoloader',{id:convoid},function(data){
            $('#msgcont').html(data);
     });
     });
     $('#msgcontent').scrollTop($('#msgcontent')[0].scrollHeight);
     $('#msgcontent').val("");
    }
</script>
@endsection

