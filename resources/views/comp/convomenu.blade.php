<?php
     use Illuminate\Support\Facades\Input;
     use App\Http\Controllers\MessagesController;
     use App\Http\Controllers\PatientsController;
     
     $id = Input::get('id');
     $idnty = Input::get('idnty');
     $resultt = MessagesController::convomenu($id, $idnty);
     
?>

@foreach($resultt as $res)
    <?php $patient = PatientsController::getspefpat($res->pat_id); ?>
<a href="#" onclick="loadmsg({{$res->convo_id}});">
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

<script>
    function loadmsg(id){
        $('#convoid').val(id);
    $.get('./convoloader',{id:id},function(data){
            $('#msgcont').html(data);
     });
}
</script>