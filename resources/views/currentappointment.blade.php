@extends ('layouts.navbar')
@section ('content')

    <div class="currentcontainer">
         <span class="mesbtn float-right"><button class="btn btn-info btn-md" data-toggle="modal" data-target="#sendmsgModal" ><i class="contact material-icons">contact_mail</i>Send a Message</button>
                        </span>
    <div class="clearfix">
          
      <img id="curimg" class="float-left gap-right rounded-circle" src="{{ asset('images/pic.png') }}" alt="profile">
       <strong id="patname">John Doe</strong><br>
        <strong id="patlocation">Cebu, Ph</strong>
     </div>
  <br>
     </div> <!-- End of currentcontainer -->


<nav class="anothernav">
  <div class="nav nav-tabs justify-content-end" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-appointments-tab" data-toggle="tab" href="#nav-appointment" role="tab" aria-controls="nav-appointment" aria-selected="true">Appointments</a>
      
    <a class="nav-item nav-link" id="nav-sesnotes-tab" data-toggle="tab" href="#nav-sesnotes" role="tab" aria-controls="nav-sesnotes" aria-selected="false">Session Notes</a>
      
    <a class="margdiary nav-item nav-link" id="nav-diary-tab" data-toggle="tab" href="#nav-diary" role="tab" aria-controls="nav-diary" aria-selected="false">Diary</a>
      
    <a class="marghistory nav-item nav-link" id="nav-history-tab" data-toggle="tab" href="#nav-history" role="tab" aria-controls="nav-history" aria-selected="false">History</a>

  </div>
</nav>




<div class="tab-content" id="nav-tabContent">
  <div class="tabappointment tab-pane fade show active" id="nav-appointment" role="tabpanel" aria-labelledby="nav-appointments-tab">  <!-- Start of Appointment Tab -->
    <table class="appointmenttbl">
        <tr>
  <td><div class="stepshape bg-info mx-auto">
		      	<div class="container d-flex h-100">
				    <div class="approw row justify-content-center text-center align-self-center mx-auto">
				    Dec 25
				    </div>
				</div>
      
		      </div></td>
          <td> 
        <div class="col text-center stepdesc2">
             10:00 am - 11:00 am
        </div>
        </td> 
        </tr>
     <tr>
  <td><div class="stepshape bg-info mx-auto">
		      	<div class="container d-flex h-100">
				    <div class="approw row justify-content-center text-center align-self-center mx-auto">
				    Dec 25
                    </div>
				</div>
      
		      </div></td>
          <td> <div class="col text-center stepdesc2">
             10:00 am - 11:00 am 
        </div></td><br>
        </tr>
</table> <!-- End of Table for Appointment Dates -->

</div> <!-- End of appointment tab-content --> 
    
 <div class="tabsesnotes tab-pane fade" id="nav-sesnotes" role="tabpanel" aria-labelledby="nav-sesnotes-tab"><!--
Start of Session Notes Tab -->
     
    <table class="table table-hover">
        <thead class="sesnotesthead text-center">
             <th>Session No.</th>
             <th>Date</th>
             <th>Time</th>
        </thead>
        <tbody class="text-center sesnotestbody">
        <tr>
             <td>1</td>
             <td>August 29, 2017</td>
             <td>10:00 am - 11:00 am</td>
        
        </tr>
            
        <tr>
             <td>2</td>
             <td>August 29, 2017</td>
             <td>10:00 am - 11:00 am</td>
             
        </tr>
    
    </tbody>
    </table>
 
</div>   <!-- End of Session Notes -->
    
    
    
  
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
    
    
    <div class="tabhistory tab-pane fade" id="nav-history" role="tabpanel" aria-labelledby="nav-history-tab"><!-- Start of history tab -->
        
    <table class="table table-hover" >
        <thead class="theadhistory text-center">
             <th>Date</th>
             <th>Time</th>
             <th>Description</th>
             <th></th>
        </thead>
        <tbody class="theadbody text-center">
        <tr>
             <td>August 29, 2017</td>
             <td>10:00 am - 11:00 am</td>
             <td>3rd Session</td>
             <td><button type="button" class="btnwatchvideo btn btn-outline-warning"><strong>Watch Video</strong></button></td>
        </tr>
            
        <tr>
             <td>August 15, 2017</td>
             <td>09:00 am - 10:00 am</td>
             <td>3rd Session</td>
             <td><button type="button" class="btnwatchvideo btn btn-outline-warning"><strong>Watch Video</strong></button></td>
        </tr>
    
    </tbody>
    </table>
    
    </div> <!-- End of history tab -->
  
    
    
    
  
</div> <!-- end of navTabcontent -->

<!-- Modal for Send Message -->
    
<div class="modal fade" id="sendmsgModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sendsmgLabel">Send Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        {!! Form::open(['url' => 'usersendmessage/submit']) !!}
      <div class="modal-body">
          <div class='tab table'>  
                  <div class='patapptr tablerow'>
                    <div class="sendmsg tablecell">
                 {{Form::text('receiver', '',['class' => 'form-control', 'placeholder' => 'To: John Doe'])}}

                </div>
              </div>
              <br>
                
                <div class='patapptr tablerow'>
                  <div class='sendmsg tablecell'>
                   {{Form::textarea('msg', '',['class' => 'form-control'])}}
				</div>

                    
           </div>      
                        
                                          
    </div> <!-- End of table -->
      </div> <!-- End of Modal-body -->
      <div class="modal-footer">
          <span >
                            <button class="btn btn-primary btn-md" id="btn-chat">
                              <i class="material-icons">send</i> Send</button>
                        </span>
                        <span><button class="btn btn-primary btn-md" id="btn-attach"><i class="material-icons">attach_file</i>Attach File</button>
                        </span>
      </div> <!-- End of modal-footer -->
  </div> <!-- End of modal-content -->
 </div> <!-- End of modal-dialog -->
</div> <!-- End of modal fade -->
  {!! Form::close() !!}
        
        
@endsection

@section ('scripts')
<script>
    
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
    
    
    
</script>

@endsection