@extends ('layouts.navbar')
@section ('content')
<div class="forformpsych"> 
       <table>
       
            {!! Form::open(['url' => 'patient/submit']) !!}
          
       <tr>
       <td id="forsearchpsych">{{Form::text('search', '',['class' => 'form-control', 'placeholder' => 'Search by Name'])}}</td>
        
        <td>{{Form::submit('Search', ['class' => 'btnsearchpat btn btn-outline-warning', 'width' => '350px', 'style' => 'border:2px solid #f58c37;color:#212834;'])}}</td>
           
           </tr>
        
        {!! Form::close() !!}
         </table>   
            
    </div>

<div class="forpsychcounsel"> 

<div class="newtxtmsg">
  

<div class="nt card text-white bg-light border-info mb-3 w-100 " >
        <div class="newtext2 card">
        <a href="conversation">
        <div class="cont1">
            <img class="sender rounded-circle" src="{{ asset('images/pic.png') }}" alt="profile picture">
            
            <div class="row">
            <div class="rowcol col-md-8"><strong class="strong">John Snow <small class="text-success">Active</small></strong><br>
                <p class="newpar">Lorem ipsum dolor sit amet, munere eligendi percipit in ius, vim dolorem probatus ex.</p></div>
                
             <div class="rowcol col-md-4"> <strong class="txtd">08/16/17</strong><br><p class="txtdd">8:15PM</p></div>
             </div>
          
    </div> <!-- end of cont1 -->
    </a>
    </div>


<hr style="margin-bottom: -5px;">
 <div class="newtext2 card">
 <a href="conversation">
        <div class="cont1">
            <img class="sender rounded-circle" src="{{ asset('images/pic.png') }}" alt="profile picture">
            
            <div class="row">
                <div class="rowcol col-md-8"><h6 class="h6str">John Snow</h6>
                <p class="txtp">Lorem ipsum dolor sit amet, munere eligendi percipit in ius, vim dolorem probatus ex.</p></[></div>
             <div class="rowcol -md-4"><h6 class="txtd">08/16/17</h6><p class="txtdd" style="font-size:12px;">8:15PM</p></div>
             </div>
          
    </div> <!-- end of cont1 -->
</div>
</a>
<hr>
</div>  


    </div> <!-- end of card -->
</div>
   

      
<div  class="upcomingcounseling">
 <div class="card w-100 border-info bg-light">
    <div class="card-body">
         <h4 style="margin-bottom:25px;">Today's List of Consultee</h4>
        <div class="row">    
       <div class="col-md-3"><img class="imgforlist rounded-circle" src="{{ asset('images/pic.png') }}" alt="profile picture"></div>
       <div class="col-md-6"> <p>John Snow</p></div>
       <div class="col-md-3"> <p>10:30</p> </div>
   
        </div>
    </div>
 </div>

</div> <!-- End of upcomingcounseling -->
</div> <!-- End of forpsychcounsel -->
@endsection
        
@section ('scripts')
<script>
    
   $('[data-toggle="sidebar"]').click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});     
               
</script>     
@endsection