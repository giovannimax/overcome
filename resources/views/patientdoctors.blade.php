@extends ('layouts.pnavbar')
@section ('content')
    <div class="content">
    

   <h4 id="psychologists">Psychologists</h4>
    
    <div class="contforpsych">
        <div class="row">
        <div class="char col-sm-4">

        <a  href="user_startecounseling">
           <img class="patientimg rounded-circle mx-auto d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">
            <div class="caption">
                <p class="text-center">John Doe </p>
        </a>
       
    </div>
</div> <!-- end of 1st col-sm-4 -->
        
      <div class="char col-sm-4">

     
        <a  href="user_startecounseling">
           <img class="patientimg rounded-circle mx-auto d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">
            <div class="caption">
                <p class="text-center">Joe Hannes </p>
        </a>
    
    </div>
</div> <!-- end of 2nd col-sm-4 -->
        
      <div class="char col-sm-4">

        <!-- Place the anchor tag here to cover both your caption and image -->
        <a  href="user_startecounseling">
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