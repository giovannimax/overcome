@extends ('layouts.navbar')
@section ('content')
 
 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary mb3 w-100 h-100">
                <div class="card-header">
                    <table>
                    <tr>
                        <td><img class="sendernewimg rounded-circle d-block" src="{{ asset('images/pic.png') }}" alt="profile picture" align="left"></td>
                        <td><strong>John Snow</strong></td>
                   </tr> </table>
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
    </div> <!-- End of container -->



@endsection