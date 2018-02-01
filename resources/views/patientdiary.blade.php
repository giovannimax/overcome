@extends ('layouts.pnavbar')
@section ('content')

<?php use App\Http\Controllers\DiariesController; ?>
<span class="float-left"><button class="diarybtn btn btn-info btn-lg" data-toggle="modal" data-target="#adddiaryModal" >Add Note<i class="material-icons">note_add</i></button>

<nav class="anothernavdiary">
  <div class="navdiary nav nav-tabs justify-content-end" id="nav-tab" role="tablist">
      
    <a class="nav-item nav-link active" id="nav-appointments-tab" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-1" aria-selected="true">January 4, 2018<br>9:30 PM</a>
      
    <a class="nav-item nav-link" id="nav-sesnotes-tab" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-2" aria-selected="false">January 3, 2018<br>9:30 PM</a>
      
    <a class="nav-item nav-link" id="nav-diary-tab" data-toggle="tab" href="#nav-3" role="tab" aria-controls="nav-3" aria-selected="false">January 2, 2018<br>9:30 PM</a>
      
    <a class="nav-item nav-link" id="nav-history-tab" data-toggle="tab" href="#nav-4" role="tab" aria-controls="nav-4" aria-selected="false">January 1, 2018<br>9:30 PM</a>

  </div>
</nav>
    

<?php 
  $result = DiariesController::retdiaries(Auth::user()->id);
?>


@if(count($result)>0)
  <?php $i=1;?>
  @foreach($result as $res)
  <div class="tab-content">
          <div class="tab-pane fade <?php if($i==1) echo 'show active';?>" id="nav-<?php echo $i;?>">
              <h4><?php echo $res->dia_date;?></h4>
              <h6><?php echo date("g:i A", strtotime($res->dia_time));?></h6>
            <p class="txtdiary text-justify"><?php echo $res->dia_content;?></p>
              
          <div class="doccomment card bg-light mb-3">
              <div class="chead card-header">Psychologist's Comment</div>
                  <div class="cbody card-body">
                          <p class="card-text text-info">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
          </div> 
              
      </div>
      <?php $i++;?>
    @endforeach

@else

  Empty

@endif
     
    
</div> <!-- End of Tab Content -->
     

    


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
       {!! Form::open(['method' => 'POST','action' => 'DiariesController@creatediary']) !!}
      <div class="modal-body">
          <div class='tab table'>  
                  <div class='diarytr tablerow'>
                  <div class='diarytc tablecell'>
                    {{Form::label('notesdate', 'Note Date')}}
				</div>
        <?php $today = date("Y-m-d");?>
             <div class='diarytc tablecell'> <?php echo date("F d, Y");?> {{Form::hidden('dia_date',$today)}}</div>
           </div>      
                <div class='diarytr tablerow'>
                     <div class='diarytc tablecell'>
                    {{Form::label('notescontent', 'Note Content')}}
				</div>
                   <div class='diarycontent tablecell'>
                   {{Form::textarea('dia_content', '',['class' => 'form-control'])}}
                   {{Form::hidden('pat_id', Auth::user()->id)}}
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