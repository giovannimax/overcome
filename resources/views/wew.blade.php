@extends ('layouts.pnavbar')
@section ('content')


<div class="containerdiary">
    
    <div class="diary1">

    <div class="card w-100 border-info">
    <div class="card-header">
    <span class="float-left"><button class="diarybtn btn btn-info" data-toggle="modal" data-target="#adddiaryModal" >Add Note<i class="material-icons">note_add</i></button>
        </button>
       </div> <!-- End of card-header -->

       <div class="card-block">
              <nav class="anothernavdiary">
  <div class="navdiary nav nav-tabs justify-content-end" id="nav-tab" role="tablist">

  <div class="input-group">
  <input type="text" id="datepicker" placeholder="Search Date" class="form-control  border-right-0" />
        <span class="input-group-addon bg-info border-left-0"><i class="material-icons text-white" style="margin-top:8px;padding-left:5px;padding-right:5px;">date_range</i></span>
    </div>
  
    <a class="nav-item nav-link active" id="nav-appointments-tab" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-1" aria-selected="true">January 4, 2018</a>
      
    <a class="nav-item nav-link" id="nav-sesnotes-tab" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-2" aria-selected="false">January 3, 2018</a>
      
    <a class="nav-item nav-link" id="nav-diary-tab" data-toggle="tab" href="#nav-3" role="tab" aria-controls="nav-3" aria-selected="false">January 2, 2018</a>
      
    <a class="nav-item nav-link" id="nav-history-tab" data-toggle="tab" href="#nav-4" role="tab" aria-controls="nav-4" aria-selected="false">January 1, 2018</a>

  </div>
</nav>
    
       </div> <!-- End of card-block -->

    </div> <!-- End of Card -->
    </div> <!-- End of Diary1 -->

    <div class="diary2">
    <div class="card w-100 border-info">
    <div class="card-body">
    <div class="tab-content">
         <div class="tab-pane fade show active" id="nav-1">
             <h4>January 4, 2018</h4>
             <h6>9:30 PM</h6>
           <p class="txtdiary text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
             
         <div class="doccomment card bg-light mb-3">
            <div class="chead card-header">Psychologist's Comment</div>
                <div class="cbody card-body">
                        <p class="card-text text-info">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
        </div> 
             
     </div>
     
  <div class="tab-pane fade" id="nav-2">
             <h4>January 3, 2018</h4>
             <h6>9:30 PM</h6>
           <p class="txtdiary text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
             
         <div class="doccomment card bg-light mb-3">
            <div class="chead card-header">Psychologist's Comment</div>
                <div class="cbody card-body">
                        <p class="card-text text-info">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
        </div> 
             
     </div>
     
  <div class="tab-pane fade" id="nav-3">
             <h4>January 2, 2018</h4>
             <h6>9:30 PM</h6>
           <p class="txtdiary text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
             
         <div class="doccomment card bg-light mb-3">
            <div class="chead card-header">Psychologist's Comment</div>
                <div class="cbody card-body">
                        <p class="card-text text-info">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
        </div> 
             
     </div>
     
      
     <div class="tab-pane fade" id="nav-4">
             <h4>January 1, 2018</h4>
             <h6>9:30 PM</h6>
           <p class="txtdiary text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
             
         <div class="doccomment card bg-light mb-3">
            <div class="chead card-header">Psychologist's Comment</div>
                <div class="cbody card-body">
                        <p class="card-text text-info">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
        </div> 
             
     </div>
    
</div> <!-- End of Tab Content -->
     

    </div><!-- End of card-body diary2 -->
   </div> <!-- End of card diary2 -->
    </div> <!-- End of Diary2 -->

</div> <!-- End of Container -->

<!-- Modal for Add Diary -->
    
<div class="modal fade" id="adddiaryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adddiaryLabel">Send Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       {!! Form::open(['url' => 'userdiary/submit']) !!}
      <div class="modal-body">
          <div class='tab table'>  
                  <div class='diarytr tablerow'>
                  <div class='diarytc tablecell'>
                    {{Form::label('notesdate', 'Note Date')}}
				</div>
             <div class='diarytc tablecell'>{{Form::date('name', '',['class' => 'form-control'])}}</div>
           </div>      
                
                <div class='diarytr tablerow'>
                  <div class='diarytc tablecell'>
                    {{Form::label('notestime', 'Note Time')}}
				</div>
             <div class='diarytc tablecell'>{{Form::time('name', '', ['class' => 'form-control'])}}</div>
           </div>      
                

                
                <div class='diarytr tablerow'>
                     <div class='diarytc tablecell'>
                    {{Form::label('notescontent', 'Note Content')}}
				</div>
                   <div class='diarycontent tablecell'>
                   {{Form::textarea('msg', '',['class' => 'form-control'])}}
				</div>
           </div>  
                 
                                          
    </div> <!-- End of table -->
      </div> <!-- End of Modal-body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {{Form::submit('Save', ['class' => 'btn btn-primary'])}}
      </div> <!-- End of modal-footer -->
  </div> <!-- End of modal-content -->
 </div> <!-- End of modal-dialog -->
</div> <!-- End of modal fade -->
  {!! Form::close() !!}
    
  </div> <!-- End of modal-content -->
 </div> <!-- End of modal-dialog -->
</div> <!-- End of modal fade -->

@endsection

@section ('scripts')
<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>  -->
<!-- <script src="/js/core.js" type="text/javascript"></script>  -->
<!-- <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
<!-- <script src="//code.jquery.com/jquery-1.12.4.js"></script> -->
 <!-- <script src="{{ asset('js/jquery-ui.js') }}"></script> -->
<script>
  $(document).ready(function(){
    $('#datepicker').datepicker();

  })
 

</script>
@endsection