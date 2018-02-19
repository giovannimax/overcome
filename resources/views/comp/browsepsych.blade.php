
<?php
    use App\Http\Controllers\PsychologistsController;
    $availl = PsychologistsController::findpsych();
?>
@if(!empty($availl))
<?php foreach($availl as $a){ ?>
<div class="clearfix forpsychsearchdiv">
             <a href="#" class="linkforpsychsearch">
             <div class="contforpsychsearch">
            <img class="sender rounded-circle d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">
            
            <div class="row">
            <div class="rowcolsearch col-md-4"><strong class="strong"><?php echo $a->psych_fname." ".$a->psych_lname;?></strong><br>
                <p class="newpar"><?php echo $a->clinic_province;?></div>
             
                <div class="divrowsearch col-md-2"><button type="button" class="btn btn-sm btn-info btnrowsearch" onclick="loadViewDetailsModal(<?php echo $a->psych_id;?>);">View Details</button></div>
                <div class="divrowsearch col-md-2"><button type="button" class="btn btn-sm btn-info btnrowsearch2" onclick="loadAppointmentModal(<?php echo $a->psych_id;?>);">Book an Appointment</button></div>
            </div>
          
             </div> <!-- end of contforpsychsearch   -->

<?php } ?>

@else
    <p>No psychologist found.<p>
@endif
<script>
    for(var i = 2; i <= 3; i++){
    $('.question'+i).hide();
    }
    function question(id, id2){
    $("."+id).show();
    $("."+id2).hide();
    }

    function loadAppointmentModal(id){
    var bookModal = document.getElementById('bookModal');
    bookModal.style.display='block';
}

function loadViewDetailsModal(id){
    $.get('./viewpsych',{psychid:id},function(data){
           $('#viewpsych').html(data);
     });
    var bookModal = document.getElementById('viewDetailsModal');
    bookModal.style.display='block';
}

function closeModal(){
    var closeModal=document.getElementById('bookModal');
    closeModal.style.display="none";
}

function closeModal2(){
    var closeModal=document.getElementById('viewDetailsModal');
    closeModal.style.display="none";
}
</script>
