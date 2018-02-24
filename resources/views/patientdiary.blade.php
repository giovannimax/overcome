@extends ('layouts.pnavbar')
@section ('content')
<div class="containerdiary">
    
    <div class="diary1">

<?php 
  use App\Http\Controllers\DiariesController;
  $result = DiariesController::retdiaries(Auth::user()->id);
?>

<div class="diacont">



<div class="bd-example bd-example-tabs">
  <div class="row">
    <div class="col-md-3" style="margin-right:50px;">
      <span ><button class="diarybtn btn btn-info btn-lg" data-toggle="modal" data-target="#adddiaryModal" >Add Note<i class="material-icons">note_add</i></button></span>
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <?php $i=1; ?>
@if(count($result))
  @foreach($result as $res)
  <a class="nav-link bginfo<?php if($i==1&&empty(Session::get('id'))) echo ' active'; else if(Session::get('id')==$res->dia_id) echo " active";?> show" id="v-pills-<?php echo $i;?>-tab" data-toggle="pill" href="#v-pills-<?php echo $i;?>" role="tab" aria-controls="v-pills-<?php echo $i;?>" aria-selected="true" style="width: 200px;margin-bottom:5px;"><?php echo date("F d, Y", strtotime($res->dia_date));?></a>
    <?php $i++; ?>
  @endforeach
@endif
      </div>
    </div>

<div class="col-md-9" style="margin-left: 300px;margin-top: -150px;">
      <div class="tab-content" id="v-pills-tabContent" style="width:800px;">

 @if(count($result)>0)
  <?php $j=1;?>
  @foreach($result as $res)

  <div class="tab-pane fade <?php if($j==1&&empty(Session::get('id'))) echo 'active'; else if(Session::get('id')==$res->dia_id) echo "active";?> show" id="v-pills-<?php echo $j;?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $j;?>-tab">
  <h4><?php echo $res->dia_date;?></h4>
              <h6><?php echo date("g:i A", strtotime($res->dia_time));?></h6>
              <a href="#" class="edittrig <?php if($res->dia_date!=date('Y-m-d')) echo "hidetext";?>">EDIT</a>
            <p class="txtdiary text-justify"><?php echo $res->dia_content;?></p>
        <div class="editcont">
            <form method="GET" action="editdiary">
            <input name="dia_id" type="hidden" value="<?php echo $res->dia_id;?>">
            <textarea class="editcontent" name="dia_content" rows="8" cols="100"></textarea><br>
            <input type="submit"  class="btn btn-info" value="Save">
            <a class="canceledit btn btn-info text-light">Cancel</a>
            </form>
            
            
        </div>
          <div class="doccomment card bg-light mb-3">
              <div class="chead card-header">Psychologist's Comment</div>
                  <div class="cbody card-body">
                          <p class="card-text text-info">{{$res->psych_comment}}</p>
                  </div>
  
  </div>

  </div>
  <?php $j++;?>
    @endforeach

@else

  Empty

@endif

</div>

</div>

</div>
   </div>
    </div> <!-- diacont -->
    </div> <!-- Diary1 -->

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
     $(".editcont").hide();
    $('.edittrig').click(function(e) {
    e.preventDefault();
    $('.edittrig').hide();
    var content = $('.active .txtdiary').text();
    $('.active .txtdiary').hide();
    $(".editcontent").val(content);
    $(".editcont").show();
});

$('.canceledit').click(function(e) {
    e.preventDefault();
    $('.edittrig').show();
    $('.active .txtdiary').show();
    $(".editcont").hide();
});
</script>

@endsection