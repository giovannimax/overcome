<?php
     use Illuminate\Support\Facades\Input;
     use App\Http\Controllers\MessagesController;
     use App\Http\Controllers\PatientsController;
     
     $id = Input::get('id');
     $ress = MessagesController::retconvo($id);
     $resultt = MessagesController::loadmsg($id);
     $patient="";
?>
<html>

<body>

@foreach($ress as $r)
<?php $patient = PatientsController::getspefpat($r->pat_id); ?>
@endforeach

            <div class="card-header">
                <div class="row">
                <div class="col-md-8">
                <table>
                <tr>
                    <td><img class="sendernewimg rounded-circle d-block" src="{{ asset('images/pic.png') }}" alt="profile picture" align="left"></td>
                    <td><strong>@foreach($patient as $pat)
                    {{$pat->name}}
                @endforeach</strong></td>
               </tr> </table>
               </div>

                <div class="col-md-2">
                <button type="submit" class="btn btn-success" style="margin-top:15px;margin-left:50px;" onclick="showvideo()"><span><i class="material-icons">videocam</i>Start E-counseling</span></button>
                </div>

               </div> <!--End of row -->
            </div> <!-- End of card-header -->
<div class="card-block">
@foreach($resultt as $res)

@if($res->sender=="1")

                <div align="right">
                  <img class="insideimg rounded-circle d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">
            <div class="insidecard card text-white bg-secondary w-50" align="right">
        <div class="pnmcont">
            <p class="pmsg">{!!$res->msg_content!!}</p></[></div>
         <div class="dtime" style="margin-top:15px;margin-left:15px;"><p class="insidetime text-white"s>{{$res->created_at}}</p></div>
         </div>
            </div>
            
   @else             
                <img class="insideimg2 rounded-circle d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">
            <div class="insidecard card text-white bg-info w-50">
        <div class="pmcont">
            <p class="pmsg2">{!!$res->msg_content!!}</p></div>
         <div class="dtime2"><p class="insidetime2 text-white">{{$res->created_at}}</p></div>
         </div>

@endif

@endforeach
</div> <!-- End of card-block -->

</body>
</html>