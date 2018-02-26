<?php
     use Illuminate\Support\Facades\Input;
     use App\Http\Controllers\EcounselingsController;
     
     $id = Input::get('id');
     $resultt = EcounselingsController::getnotes($id);
     $i=1;
?>

@foreach($resultt as $res)
@if(!empty($res->session_notes))
<button class="accordion">Session {{$i++." ".date("F d, Y",strtotime($res->notes_date))." ".date("h:m A",strtotime($res->notes_time))}}</button>
<a href="google.com" onclick="window.open('sessioneditor?id={{$res->notes_id}}', 'newwindow', 'width=50%, height=400'); return false;">Edit</a>
<div class="panell">
 {!! $res->session_notes !!}
</div>
@endif
@endforeach

<script>
var $myGroup = $('#diarycont');
$myGroup.on('show.bs.collapse','.collapse', function() {
$myGroup.find('.collapse.show').collapse('hide');
});

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active2");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}

</script>