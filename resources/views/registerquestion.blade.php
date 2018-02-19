@extends ('layouts.anothernavbar')
@section ('content')
<?php
    use App\Http\Controllers\Auth\RegisterController;
    $availl = RegisterController::getprovinces();
?>
<div class="regcontent">
    <div class="regcontent1">
    <div class="card w-65  cardforquestion">
         <div class="card-body">
         <h5 class="card-title">Find your psychologist</h5>
                 <p class="card-text">1. What is your preference <b style="color:#01acbe;">Gender</b> of Psychologist?</p>
                 <fieldset class="form-group">
                 <div class="form-check">
                   <label class="form-check-label">
                     <input type="radio" class="form-check-input" name="gndr" onclick="radioclicked();" id="optionsRadios1" value="male" checked>
                     Male
                   </label>
                 </div>
                 <div class="form-check">
                 <label class="form-check-label">
                     <input type="radio" class="form-check-input" name="gndr" onclick="radioclicked();" id="optionsRadios2" value="female">
                     Female
                   </label>
                 </div>
                 <div class="form-check">
                 <label class="form-check-label">
                     <input type="radio" class="form-check-input" name="gndr" onclick="radioclicked();" id="optionsRadios3" value="" checked="checked"/>
                     Both
                   </label>
                 </div>
               </fieldset>
               <p class="card-text">2. What is your preference <b style="color:#01acbe;">Location</b> of Psychologist?</p>
               <select class="form-control" onchange="sendprov(this);" id="provdrop">
                <?php
                    foreach($availl as $av){
                        echo '<option>'.$av->prov_name.'</option>';
                    }
                ?>
                </select>
                     <a href="#" class="btn btn-primary btnquest" >Filter</a>
</div>      
        </div>
    </div>

    <div class="regcontent2">
    <div class="card cardforquestion">
         <div class="card-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-8">
               <input class="form-control" type="text"  id="searchpsych" placeholder="Name/City">   </div> 
              <div class="col-md-2">  <button type="submit" class="btn btn-primary btnstyle" style="margin-left:-15px;">Search</button></div>                         
                <div class="col-md-2"><button type="submit" class="btn btn-primary btnstyle" style="margin-left:-55px;">View All</button></div>         
                    </div>
             </div>
             <hr>
             <div class="psychretcont">

             </div>
             </a> 
             </div>     
             <hr>  
                              
         </div>
         <ul class="pagination page">
             <li><a href="#">1</a></li>
             <li><a href="#">2</a></li>
             <li><a href="#">3</a></li>
             <li><a href="#">4</a></li>
         </ul>
    </div>
    </div>

<!-- Modal for View Psychologist -->
<div id="viewDetailsModal" class="modal"> <!-- Start Modal -->
<div class="modal-dialog">
<div class="modal-content">
   
     <div class="modal-header">
        <span class="close" onclick="closeModal2();" style="color:red;"> x</span>
        <h4 class="modal-title">John Snow</h4>
    </div> <!-- End of Modal-Header -->
        
    <div class="modal-body" id="viewpsych">
    
</div> <!-- End of modal-body -->


</div> <!-- End of modal-content -->

</div> <!-- End of modal-dialog -->
</div> <!-- Close modal-->
<!-- End of Modal For View Psychologist -->

<!-- Modal for Book Psychologist -->

<div id="bookModal" class="modal"> <!-- Start modal -->
<div class="modal-dialog">
<div class="modal-content">

    <div class="modal-header">
    <span class="close" onclick="closeModal();" style="color:red;">x</span>
        <h4 class="modal-title">Book Appointment</h4>
    </div>

    <div class="modal-body">
<form method="POST" action="addpostappointment">
{{ csrf_field() }}
{!! Form::hidden('counsel_status', 'pending', ['id' => 'counsel_status']) !!}
    <div class="form-group rowcontent">
<label for="example-date-input" class="col-2 col-form-label">Preferred Date</label>
 <div class="col-10">
 <input class="form-control" id="counseldate" name="counsel_date" type="date" value="{{date('Y-m-d')}}" onChange="getavail(this);">
 </div>
</div> <!-- End of form-group row for date -->

<div class="form-group rowcontent">
<label for="example-time-input" class="col-2 col-form-label">Preferred Time</label>
 <div class="col-10">
    <div class='addbooktc tablecell' id="addbooktc"></div>
 </div>
</div> <!-- Enf of form-group row for time -->
<div class="form-group rowcontent">
<label for="exampleTextarea">Basic Information</label>
<textarea class="form-control" id="exampleTextarea" rows="8" placeholder="Including how you feeling for the past few days/weeks."></textarea>
<small style="font-size: 12px; color: red;">Please wait for the psychologist to accept and confirm your intended booking date. It might be change to other date or time. There's also a possiblity that you will be refered to other 
 Psychologist who is inline with what you are experiencing.</small>
</div>   <!-- End of form-group textarea -->  

<div class="modal-footer text-right">
<button type="submit" class="btn btn-md btn-info btnapp">Book Appointment</button>
</div>
</form>


    </div> <!-- End of modal-body -->


</div> <!-- End of modal-content -->

</div> <!-- End of moda-dialog -->

</div> <!-- Close modal-->

                        
           
 <!-- End of Modal for Book Psychologist -->







</div> <!-- end of regcontent -->

<script src="{{ asset('js/app.js') }}"></script>
 
 <script src="{{ asset('js/app.js') }}"></script>
<script>
   /* for(var i = 2; i <= 3; i++){
    $('.question'+i).hide();
    }
    function question(id, id2){
    $("."+id).show();
    $("."+id2).hide();
    }

    function loadAppointmentModal(){
    var bookModal = document.getElementById('bookModal');
    bookModal.style.display='block';
}

function loadViewDetailsModal(){
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
}*/
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var loc = '';
    var gndr = $('input[name=gndr]:checked').val();
    //alert(loc + " " + gndr)
    $.get('./browsepsych',{loc:loc,gndr:gndr},function(data){
            $('.psychretcont').html(data);
     });

function sendprov(sel){
    var loc = $('#provdrop').find(":selected").text();
    var gndr = $('input[name=gndr]:checked').val();
    //alert(loc + " " + gndr)
    $.get('./browsepsych',{loc:loc,gndr:gndr},function(data){
            $('.psychretcont').html(data);
     });
}

function radioclicked(){
    var loc = $('#provdrop').find(":selected").text();
    var gndr = $('input[name=gndr]:checked').val();
    //alert(loc + " " + gndr)
    $.get('./browsepsych',{gndr:gndr,loc:loc},function(data){
            $('.psychretcont').html(data);
     });
}
</script>

<script>

$(document).ready(function(){ 
 getavail($("#counseldate"));

})
    $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
  });
  function getavail(date){
  var date = $(date).val();
  $.get('./availcal',{date:date},function(data){
       $('#addbooktc').html(data);
        });
    }
</script>

@endsection