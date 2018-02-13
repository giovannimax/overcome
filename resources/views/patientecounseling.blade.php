@extends ('layouts.pnavbar')
@section ('content')

<div class="containerpatcounsel">
    <p id="durationpat">Duration: 58mins left</p>
        <div class="col-4 mx-auto text-center">
           <img class="ecounselingp rounded-circle" src="{{ asset('images/pic.png') }}" alt="profile picture"><br>
            <b>Dr. Psych</b><br>
            <b class="txtsucp text-success">Active</b>
            <br>
            <button class="btnecp btn btn-info btn-md" type="submit" data-toggle="modal" data-target=".patient-ecounseling">Start E-Counseling</button>
    </div>



<!-- Start of Modal -->
<div class="modal fade patient-ecounseling" tabindex="-1" role="dialog" aria-labelledby="patientEcounselingLabel" aria-hidden="true">
  <div class="modalvidpat modal-dialog modal-lg">
    <div class="modal-content">
     <div class="vidcontainer">
      <div class="box">
          Video here
        </div>
          <div class="videocard card mb3 w-100 h-100 mx-auto text-center">
           <div class="card-block">
                    <div align="right">
                      <img class="insideimg rounded-circle d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">
                <div class="insidecard card text-white bg-secondary w-50" align="right">
            <div class="pnmcont">
                <p class="pmsg">Lorem ipsum dolor sit amet, munere eligendi percipit in ius, vim dolorem probatus ex.</p></[></div>
             <div class="dtime" style="margin-top:15px;margin-left:15px;"><p class="insidetime text-white"s>8:15PM</p></div>
             </div>
                </div>
                
                    
                    <img class="insideimg2 rounded-circle d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">
                <div class="insidecard card text-white bg-info w-50">
            <div class="pmcont">
                <p class="pmsg2">Lorem ipsum dolor sit amet, munere eligendi percipit in ius, vim dolorem probatus ex.</p></div>
             <div class="dtime2"><p class="insidetime2 text-white">8:15PM</p></div>
             </div>
                </div> <!-- End of card-block -->
            

                <div class="card-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                        <span >
                            <button class="btn btn-primary btn-md" id="btn-chat">
                              <i class="material-icons">send</i> Send</button>
                        </span>
                        
                        </div>
                    </div> <!-- End of footer -->
                </div> <!-- End of card -->
      </div>
    </div>
  </div>
</div> <!-- End of Modal -->




</div>


@endsection
