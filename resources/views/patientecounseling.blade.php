@extends ('layouts.pnavbar')
@section ('content')


<div class="patcounsel d-flex justify-content-center">

    <div class="patcounsel1">
        <div class="row">
   <div class="col-md-4"> <h5 style="margin-bottom: 25px;">Upcoming Counseling:</h5></div>
   <div class="col-md-8"> <h6 class="text-danger" style="margin-top: 25px;margin-left: -50px;">Feb 25, 2018 10:00Am - 12:00Pm</h6></div>
</div>


     <div class="row">
     <div class="col-md-12">
         <div class="card card-primary mb3 cardmsg">
             <div class="card-header">
                 <div class="row">
                 <div class="col-md-8">
                 <table>
                 <tr>
                     <td><img class="sendernewimg rounded-circle d-block" src="{{ asset('images/pic.png') }}" alt="profile picture" align="left"></td>
                     <td><strong>Lizl Marquez</strong></td>
                </tr> </table>
                </div>
 
 
                </div> <!--End of row -->
             </div> <!-- End of card-header -->
            
             
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
                     <span><button class="btn btn-primary btn-md" type="file" id="btn-attach"><i class="material-icons">attach_file</i>Attach File</button>
                     </span>
                     
                     </div>
                 </div> <!-- End of footer -->
             </div> <!-- End of card -->
         </div>
     </div> <!-- End of row -->
 
 

    </div> <!-- End of patcounsel1-->


  <div class="patcounsel2">
  <div class="card bg-light mb-3 cardpatcounsel2">
  <div class="card-header">Psychologist's Profile</div>
      <div class="card-body card-block">
      <img class="propicdisplay rounded-circle mx-auto d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">
      <table style="margin-left: 50px;">
            <tr class="trpat">
            <td class="text-info">First Name</td>
            <td>Lizl</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Middle Name</td>
            <td>Canson</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Last Name</td>
            <td>Marquez</td>
            </tr>

             
            <tr class="trpat">
            <td class="text-info">Gender</td>
            <td>Female</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Email Address</td>
            <td>lizl@gmail.com</td>
            </tr>
         
          
            <tr class="trpat">
            <td class="text-info">Birthday</td>
            <td>July 5, 1994</td>
            </tr>
 
            <tr class="trpat">
            <td class="text-info">Mobile Number</td>
            <td>09164646465</td>
            </tr>
            <tr class="trpat">
            <td class="text-info">License Number</td>
            <td>123456</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">License Title</td>
            <td>PRC</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">License Picture</td>
            <td><img src="images/pp.jpg" width="200px" height="100px"></td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Clinic Name</td>
            <td>Mental Health Clinic</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Clinic Address</td>
            <td>1234 Jagubao Basak Pardo</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Province/City</td>
            <td>Cebu</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Clinic Email Address</td>
            <td>lmhc@gmail.com</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Clinic Number</td>
            <td>555-1234</td>
            </tr>
</table>
      </div>

</div>

    </div> <!-- End of patcounsel2 -->


</div> <!-- End of Patcounsel-->
@endsection
