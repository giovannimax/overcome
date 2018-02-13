@extends ('layouts.navbar')
@section ('content')

<div class="content">
    
    <div class="forform"> 
       <table>
       
            {!! Form::open(['url' => 'patient/submit']) !!}
          
       <tr>
       <td id="forsearch">{{Form::text('search', '',['class' => 'form-control', 'placeholder' => 'Search by Name/Diagnosis'])}}</td>
        
        <td>{{Form::submit('Search', ['class' => 'btnsearchpat btn btn-outline-warning', 'width' => '350px', 'style' => 'border:2px solid #f58c37;color:#212834;'])}}</td>
           
           </tr>
        
        {!! Form::close() !!}
         </table>   
            
    </div>
    
   <h4 id="forrecents">Recents</h4>
    
    <div class="contforpatient">
        <div class="row">
        <div class="char col-sm-4">

        <a  href="patient_details">
           <img class="patientimg rounded-circle mx-auto d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">
            <div class="caption">
                <p class="text-center">John Doe </p>
        </a>
       
    </div>
</div> <!-- end of 1st col-sm-4 -->
        
      <div class="char col-sm-4">

     
        <a  href="patient_details">
           <img class="patientimg rounded-circle mx-auto d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">
            <div class="caption">
                <p class="text-center">Joe Hannes </p>
        </a>
    
    </div>
</div> <!-- end of 2nd col-sm-4 -->
        
      <div class="char col-sm-4">

        <!-- Place the anchor tag here to cover both your caption and image -->
        <a  href="patient_details">
           <img class="patientimg rounded-circle mx-auto d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">
            <div class="caption">
                <p class="text-center">Jane Doe </p>
        </a>
       
    </div>
</div> <!-- end of 3rd col-sm-4 -->
        </div> <!-- End of class row -->
        
    </div> <!-- End of div anothercontainer -->

</div>

@endsection