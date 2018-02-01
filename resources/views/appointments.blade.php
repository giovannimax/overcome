@extends ('layouts.pnavbar')

<?php
  use App\Http\Controllers\EcounselingsController;
?>
@section ('content')
    <div>
         <span class="mesbtn float-right"><button class="btn btn-info btn-md" data-toggle="modal" data-target="#sendmsgModal" ><i class="contact material-icons">contact_mail</i>Send a Message</button>
                        </span>
    <div class="clearfix">
        
      <img id="patimg" class="float-left gap-right" src="{{ asset('images/psychp.jpg') }}" alt="profile">
        
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
        <?php 
          $result = EcounselingsController::retapppsych(Auth::user()->id);
          //print_r($result);
        ?>
        @if(count($result)>0)
          <?php
            $i=1;
          ?>
          @foreach($result as $result)
        <div class='patapptr tablerow'>
                  <div class='patapptc tablecell'>
                <div class="stepshapepatient bg-info">
		      	<div class="container d-flex h-100">
				    <div class="row justify-content-center text-center align-self-center mx-auto">
				   {{$i}}
				    </div>
				</div>
            </div> <!-- End of stepshapepatient -->
           </div>        
                      <div class='patapptc tablecell'>{{ date('M d, Y ', strtotime($result->counsel_date)) }}</div>
                      
                      <div class='patapptc tablecell'>{{ date('h:i A', strtotime($result->counsel_time)) }} 
                  - 
                  {{ date('h:i A', strtotime($result->counsel_time)+ 60*60*$result->session_length) }}</div>
                      
                  {!! Form::open(['action' => 'EcounselingsController@cancelapp', 'method' => 'POST']) !!}
                  {!! Form::hidden('counsel_id',$result->counsel_id) !!}
                      <div class='patapptc tablecell'> <span data-toggle="tooltip" data-placement="top" title="Cancel Bookings">
                      <button type="submit" class="hvr-buzz btn btn-outline-danger btn-md"><i class="material-icons">cancel</i></button>
                        </span></div>
                  {!! Form::close() !!}
               </div> <!-- End of table row -->
               <?php $i++; ?>
               @endforeach
           @else
            No appointment yet.

           @endif
                      
             </div> <!-- End of table -->
            </div> <!-- End of Card -->
                
        </div>
        </div>
      </div>  <!-- End of Card-Deck -->
        <?php 
          $time;
          for($i=1;$i<=24;$i++){
            $time[date('H:i:s', strtotime('00:00:00')+60*60*$i)] = date('h:i A', strtotime('00:00:00')+60*60*$i);
          }
        ?>

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
      <div class="modal-body">
          <div class='tab table'>  
                  <div class='patapptr tablerow'>
                  <div class='addbooktc tablecell'>
       {!! Form::open(['action' => 'EcounselingsController@addapp', 'method' => 'POST']) !!}
       {!! Form::hidden('counsel_status', 'active') !!}
       {!! Form::hidden('pat_id', Auth::user()->id) !!}
                    {{Form::label('bookingdate', 'Booking Date')}}
				</div>
             <div class='addbooktc tablecell'>
             <input class="form-control" id="counseldate" name="counsel_date" type="date" value="{{date('Y-m-d')}}" onChange="getavail(this);">
              </div>
           </div>      
                
                <div class='patapptr tablerow'>
                  <div class='addbooktc tablecell'>
                    {{Form::label('bookingtime', 'Booking Time')}}
				</div>
             <div class='addbooktc tablecell' id="addbooktc"></div>
           </div>      
                
            
                <div class='patapptr tablerow'>
                  <div class='addbooktc tablecell'>
                    {{Form::label('bookingduration', 'Booking Duration')}}
				</div>
             <div class='addbooktc tablecell'>{{Form::number('session_length','', ['class' => 'form-control', 'placeholder' => '01'])}} hr</div>
           </div>      
                
                <div class='patapptr tablerow'>
                  <div class='addbooktc tablecell'>
                    {{Form::label('bookingtype', 'Booking Type')}}
				</div>
             <div class='addbooktc tablecell'>{{Form::select('counsel_type', ['BT' => 'Type', 'offsite' => 'On-Site', 'ecounseling' => 'E-Counseling'], 'T',['class' => 'form-control'])}}</div>
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

@section('scripts')
<script>

$(document).ready(function(){ 
 getavail($("#counseldate"));

})
    $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
  });
  var date = $(date).val();
  $.post('./availcal',{date:date},function(data){
       $('#addbooktc').html(data);
        });
  }
</script>
@endsection