@extends ('layouts.pnavbar')

@section ('content')
    <div>
         <span class="mesbtn float-right"><button class="btn btn-info btn-md" data-toggle="modal" data-target="#sendmsgModal" ><i class="contact material-icons">contact_mail</i>Send a Message</button>
                        </span>
    <div class="clearfix">
        
      <img id="patimg" class="float-left gap-right rounded-circle" src="{{ asset('images/pic.png') }}" alt="profile">
        
       <strong id="docname">Dr. Psych</strong><br>
        <strong id="psycho">Psychologist</strong><br>
        <strong id="doclocation">Cebu, Ph</strong>
     </div>
  <br>
        <div class="patapprow row" style="margin-bottom:-25px;">
            <div class="col-md-8"></div>
            <div class="col-md-2"><p>Next Counseling: 0D 9H</p></div>
            <div class="col-md-2"><p>Duration: 1 hour</p> </div>
        </div> <!-- End of class row -->
<hr>

    <div class="card-deck">

      <div class="card border-primary float-left w-50 mb-3">
           <div class="card-body text-info">
                <h4>Psychologist's Profile</h4><br>
                <p class="text-dark text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        
        
        </div>
        <div class="bookings card border-info float-left w-50 mb-3">
            <div class="card-body text-info">
              <div class="row">
                <div class="col-md-6"><h4 id="book">Bookings</h4></div>
                  <div class="history col-md-4"><h6>History</h6></div>
                  
                
                   <!-- Button trigger modal -->
                  <div class="buttonmodal col-md-2" data-toggle="tooltip" data-placement="top" title="Add Bookings"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" ><i class="material-icons" >add</i>
                  </button></div>
                  
                </div>
                
                <div class="card">
                    
                  <div class='tab table'>  
                  <div class='patapptr tablerow'>
                  <div class='patapptc tablecell'>
                <div class="stepshapepatient bg-info">
		      	<div class="container d-flex h-100">
				    <div class="row justify-content-center text-center align-self-center mx-auto">
				   1
				    </div>
				</div>
            </div> <!-- End of stepshapepatient -->
           </div>         
                      <div class='patapptc tablecell'>04/29/17</div>
                      
                      <div class='patapptc tablecell'>10:00 am - 11:00 am</div>
                      
                      <div class='patapptc tablecell'> <span data-toggle="tooltip" data-placement="top" title="Cancel Bookings"><button class="hvr-buzz btn btn-outline-danger btn-md"><i class="material-icons">cancel</i></button>
                        </span></div>
                     
               </div> <!-- End of table row -->
           
                      
             </div> <!-- End of table -->
            </div> <!-- End of Card -->
                
        </div>
        </div>
      </div>  <!-- End of Card-Deck -->
        
        

<!-- Modal for Add Bookings -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Bookings</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
         {!! Form::open(['url' => 'userappointment/submit']) !!}
      <div class="modal-body">
          <div class='tab table'>  
                  <div class='patapptr tablerow'>
                  <div class='addbooktc tablecell'>
                    {{Form::label('bookingdate', 'Booking Date')}}
				</div>
             <div class='addbooktc tablecell'>{{Form::date('name')}}</div>
           </div>      
                
                <div class='patapptr tablerow'>
                  <div class='addbooktc tablecell'>
                    {{Form::label('bookingtime', 'Booking Time')}}
				</div>
             <div class='addbooktc tablecell'>{{Form::select('time', ['T' => 'Time', '1' => '6:30 am - 7:30 am', '2' => '7:30 am - 8:30 am' , '3' => '8:30 am - 9:30 am', '4' => '9:30 am - 10:30 am'], 'T')}}</div>
           </div>      
                
            
                <div class='patapptr tablerow'>
                  <div class='addbooktc tablecell'>
                    {{Form::label('bookingduration', 'Booking Duration')}}
				</div>
             <div class='addbooktc tablecell'>{{Form::select('duration', ['D' => 'Duration', '1' => '30 Minutes' , '2' => '1 Hour' , '3' => '1 Hour 30 Minutes', '4' => '2 Hours'], 'T')}}</div>
           </div>      
                
                <div class='patapptr tablerow'>
                  <div class='addbooktc tablecell'>
                    {{Form::label('bookingtype', 'Booking Type')}}
				</div>
             <div class='addbooktc tablecell'>{{Form::select('BT', ['BT' => 'Type', '1' => 'On-Site', '2' => 'E-Counseling'], 'T')}}</div>
           </div>  
                 
                                          
    </div> <!-- End of table -->
      </div> <!-- End of Modal-body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {{Form::submit('ADD', ['class' => 'btn btn-primary'])}}
      </div> <!-- End of modal-footer -->
  </div> <!-- End of modal-content -->
 </div> <!-- End of modal-dialog -->
</div> <!-- End of modal fade -->
  {!! Form::close() !!}
    
        
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
                 {{Form::text('receiver', '',['class' => 'form-control', 'placeholder' => 'To: Dr. Psych'])}}

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
        
        
        
        
</div>
@endsection