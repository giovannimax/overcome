@extends ('layouts.pnavbar')
@section ('content')
<?php
    use App\Http\Controllers\MessagesController;
    $resultt = MessagesController::convomenu(Auth::user()->id, Auth::user()->usertype);
?>

  <div class="card-block insidecontent2">
<div class="tab-content" id="nav-tabContent">
  <div class="tabmessages tab-pane fade show active" id="nav-messages" role="tabpanel" aria-labelledby="nav-messages-tab">  <!-- Start of Appointment Tab -->
   
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
                        @foreach($resultt as $ress)
                            <input type="hidden" id="convoid" value="{{$ress->convo_id}}">
                        @endforeach
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

@endsection

@section ('scripts')
<script Language="JavaScript">
    var idd= $('#convoid').val();
          //$('#convoid').val(6);
    $.get('./convoloaderpat',{id:idd},function(data){
        $('#msgcont').html(data);
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
