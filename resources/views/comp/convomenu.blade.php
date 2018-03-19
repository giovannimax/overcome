<?php
     use Illuminate\Support\Facades\Input;
     use App\Http\Controllers\MessagesController;
     use App\Http\Controllers\PatientsController;

    use App\Http\Controllers\PsychologistsController;
     
     $id = Input::get('id');
     $idnty = Input::get('idnty');
     $resultt = MessagesController::convomenu($id, $idnty);
     
?>

@if($idnty=="psych")

@foreach($resultt as $res)
    <?php $patient = PatientsController::getspefpat($res->pat_id); ?>
<a href="#" onclick="loadmsg({{$res->convo_id.','.$res->pat_id}});">
<div class="row divforsearch">  
            <div class="col-md-2"><img class="insideimg2 rounded-circle d-block" src="{{ asset('images/pic.png') }}" alt="profile picture"></div>
            <div class="col-md-8" style="margin-top:20px;">
                @foreach($patient as $pat)
                    {{$pat->name}}
                @endforeach
            <br><small class="text-success">Active</small></div>
</div>
</a>
@endforeach

@else

@foreach($resultt as $res)
    <?php $psych = PsychologistsController::getspefpsych($res->psych_id); ?>
<a href="#" onclick="loadmsg({{$res->convo_id.','.$res->pat_id}});">
<div class="row divforsearch">  
            <div class="col-md-2"><img class="insideimg2 rounded-circle d-block" src="{{ asset('images/pic.png') }}" alt="profile picture"></div>
            <div class="col-md-8" style="margin-top:20px;">
                @foreach($psych as $pat)
                    {{$pat->psych_fname." ".$pat->psych_lname}}
                @endforeach
            <br><small class="text-success">Active</small></div>
</div>
</a>
@endforeach


@endif

<script>
    function loadmsg(id,pat_id){
        $('#pat_id').val(pat_id);
        $('#convoid').val(id);

@if($idnty=="pat")
    $.get('./convoloaderpat',{id:id},function(data){
            $('#msgcont').html(data);
     });
@else 
     $.get('./convoloader',{id:id,patid:pat_id},function(data){
            $('#msgcont').html(data);
     });

@endif
     $.get('./diaryloader',{id:pat_id},function(data){
            $('#diarycont').html(data);
     });

     $.get('./sessionloader',{id:pat_id},function(data){
            $('#nav-sesnotes').html(data);
     });

}
</script>