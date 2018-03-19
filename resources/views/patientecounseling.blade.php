@extends ('layouts.pnavbar')
@section ('content')
<a href="findpsychologist" style="float:right;margin:10px;" class="btn btn-info">Add Another Psychologist</a>
<br>
<div class="forpsychcounsel d-flex justify-content-center">

    <div class="containercounseling1">
    <div class="card text-center">
  <div class="card-header" style="padding-bottom:10px;padding-top:7px;">
  <div class="form-group row">
  <div class="col-10">
    <input class="form-control" type="search" id="search" placeholder="Name/Diagnosis" style="margin-top:15px;"> 
  </div>
  <div class="col-2">
  <button type="submit" class="btn btn-info btn-md text-center" style="margin-left:-25px;margin-top:15px;margin-right: 150px;">Search</button>
  </div>
</div>
  </div>
  <div class="card-block insidecontent" id="convomenu">
       
  </div>
  
</div>
<input type="hidden" id="pat_id" value="">
    </div> <!-- End of containercounseling1 -->

    <div class="containercounseling2">

    <div class="card">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs justify-content-end" id="nav-tab" role="tablist"> 

      <li class="nav-item">
        <a class="nav-item nav-link active" id="nav-messages-tab" data-toggle="tab" href="#nav-messages" role="tab" aria-controls="nav-messages" aria-selected="false">Messages</a>
      </li>
    </ul>
  </div>

  <div class="card-block insidecontent2">
  
<div class="tab-content" id="nav-tabContent">


  <div class="tabmessages tab-pane fade show active" id="nav-messages" role="tabpanel" aria-labelledby="nav-messages-tab">  <!-- Start of Appointment Tab -->
   
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
    

 <div class="tabsesnotes tab-pane fade" id="nav-sesnotes" role="tabpanel" aria-labelledby="nav-sesnotes-tab"><!--
Start of Session Notes Tab -->
  
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
    var idnty= "pat";
    $.get('./convomenu',{id:id,idnty:idnty},function(data){
            $('#convomenu').html(data);
     });

function showvideo() {

      var width = 1200;
      var height = 650;
      var top = parseInt((screen.availHeight/2) - (height/2));
      var left = parseInt((screen.availWidth/2) - (width/2));
      window.open('patecounseling_start', 
            "Video Counselling", 
            "menubar=no,resizable=no,width=" + width + ",height=" + height + ",scrollbars=no,left="  
            + left + ",top=" + top + ",screenX=" + left + ",screenY=" + top);    
      }

function showcall() {

var width = 1200;
var height = 650;
var top = parseInt((screen.availHeight/2) - (height/2));
var left = parseInt((screen.availWidth/2) - (width/2));
window.open('patecounseling_start', 
      "Call Counselling", 
      "menubar=no,resizable=no,width=" + width + ",height=" + height + ",scrollbars=no,left="  
      + left + ",top=" + top + ",screenX=" + left + ",screenY=" + top);    
}
</script> 
<script>
    function sendmsg(){
        var msgcontent = $('#msgcontent').val();
        var sender = 0;
        var convoid = $('#convoid').val();

        $.get('./sendmsg',{msg:msgcontent,sender:sender,id:convoid},function(data){
            $.get('./convoloaderpat',{id:convoid},function(data){
            $('#msgcont').html(data);
     });
     });
     $('#msgcontent').scrollTop($('#msgcontent')[0].scrollHeight);
     $('#msgcontent').val("");
    }
</script>
@endsection
