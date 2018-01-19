@extends ('layouts.navbar')
@section ('content')

<div class="forpsychcounsel">
 

   
    
 <div class="forformpsych"> 
       <table>
       
            {!! Form::open(['url' => 'patient/submit']) !!}
          
       <tr>
       <td id="forsearchpsych">{{Form::text('search', '',['class' => 'form-control', 'placeholder' => 'Search by Name/Diagnosis'])}}</td>
        
        <td>{{Form::submit('Search', ['class' => 'btnsearchpat btn btn-outline-warning', 'width' => '350px', 'style' => 'border:2px solid #f58c37;color:#212834;'])}}</td>
           
           </tr>
        
        {!! Form::close() !!}
         </table>   
            
    </div>
     
   <h4 id="forpat">Patients</h4>
    
    <div class="contforpatient">
        <div class="row">
        <div class="char col-sm-4">

        <a  href="ecounseling_start">
           <img class="patientimg rounded-circle mx-auto d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">
            <div class="caption">
                <p class="text-center">John Doe </p>
        </a>
       
    </div>
</div> <!-- end of 1st col-sm-4 -->
        
      <div class="char col-sm-4">

     
        <a  href="ecounseling_start">
           <img class="patientimg rounded-circle mx-auto d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">
            <div class="caption">
                <p class="text-center">Joe Hannes </p>
        </a>
    
    </div>
</div> <!-- end of 2nd col-sm-4 -->
        
      <div class="char col-sm-4">

        <!-- Place the anchor tag here to cover both your caption and image -->
        <a  href="ecounseling_start">
           <img class="patientimg rounded-circle mx-auto d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">
            <div class="caption">
                <p class="text-center">Jane Doe </p>
        </a>
       
    </div>
</div> <!-- end of 3rd col-sm-4 -->
        </div> <!-- End of class row -->
        
    </div> <!-- End of div anothercontainer -->

    
</div> <!-- End of forpsychcounsel -->

<div id="wrapper">

    <div id="sidebar-wrapper">
        <h6 id="h6"><strong>Today's List of Consultee</strong></h6>
        <b class="name">Jane Doe</b>
        <b class="time">10:00 - 11:00 am</b> <br>
        <b class="name">John Doe</b>
        <b class="time">12:00 - 01:00 am</b> <br>
        
    </div> <!-- End of sidebar-wrapper -->

</div> <!-- End of wrapper -->

@endsection
        
@section ('scripts')
<script>
    
   $('[data-toggle="sidebar"]').click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});     
               
</script>     
@endsection