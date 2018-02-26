<?php
     use Illuminate\Support\Facades\Input;
     use App\Http\Controllers\DiariesController;
     
     $id = Input::get('id');
     $resultt = DiariesController::retdiaries($id);
     $i=1;
?>

@foreach($resultt as $res)

{!! Form::open(['action' => 'DiariesController@addcomment','method'=>'GET']) !!}
  <h5 class="h5diary"> {{ date("F m, Y", strtotime($res->dia_date))." ".date("H:m A", strtotime($res->dia_time)) }}<a class="adiary" data-toggle="collapse" data-parent="#diarycont" href="#collapseDiary{{$i}}" aria-expanded="false" aria-controls="collapseExample">
   See More <i class="material-icons">arrow_drop_down</i>
  </a></h5>
  
<div class="divdiary collapse" id="collapseDiary{{$i}}">
    
    @if(empty($res->psych_comment)) 
     
     <div class="form-group">  
         {{$res->dia_content}}
         {{Form::hidden('dia_id', $res->dia_id,['class' => 'form-control', 'placeholder' => 'Add Comment Here','style' => 'height:150px'])}}
            {{Form::textarea('comment', '',['class' => 'form-control', 'placeholder' => 'Add Comment Here','style' => 'height:150px'])}}<br>
         
            {{Form::submit('SAVE', ['class' => 'btn btn-primary' , 'style' => 'float:right'])}}
    </div>

    @else
    
    <div class="form-group"> 
      {{$res->dia_content}}<br>
    {{Form::label('npass', $res->psych_comment,['style' => 'color:#f58c37'])}}
    </div>
    
    @Endif
         
</div>
       {!! Form::close() !!}
      <?php $i++;?>
@endforeach

<script>
var $myGroup = $('#diarycont');
$myGroup.on('show.bs.collapse','.collapse', function() {
$myGroup.find('.collapse.show').collapse('hide');
});
</script>