<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">   
</head>
<?php 
    use Illuminate\Support\Facades\Input;
  use App\Http\Controllers\EcounselingsController;
  $id = Input::get('id');
  EcounselingsController::addnotes($id);
  $result=EcounselingsController::retvideoid($id);
  EcounselingsController::deletevidid();
?>

<style>
body,html{
    margin: 0;
}
.counselingcont{
    display: inline-flex;
    width: 100%;
    position: relative;
}
.counselvideo{
    width: 60%;
    height: 100vh;
    background: black;
    position:relative
}
.counselnote{
    width: 40%;
    height: 100vh;
    background: red;
}
.convocont{
    background: yellow;
    height: 80vh;
}

#txtsnote{
    resize:none;
    height: 90vh !important;
}
.divcont{
    display: inline-flex;
    width: 100%;
    
}

.patientvideo{
    height:250px;
    background: blue;
    height: 20vh;
   position: absolute;
   right: 20px;
   bottom: 20px;
    
}

.videobuttons{
    z-index: 999;
    background: rgba(27, 37, 47, 0.8);
    width: fit-content;
    border-radius: 5px;
    height: fit-content;
   position:absolute;
   right: 50%;
   bottom: 20px;
    padding: 20px;
    
}
.btnvid{
    background: transparent;
    border-radius: 0px;
}

a:active{
    background:white;
}

a:active .aicons{
    color: black;
}

.btnvidactive{
    background:white;
}

.btnvidactive>.aicons{
    color: black;
}

.aicons{
    color: #85898c;
}
#peer-camera {
  width: 100%    !important;
  height: auto   !important;
}

.callender{
    background: black;
    position:fixed;
    width:100%;
    height: 100vh;
    z-index:999;
    top:0;
    display:none;
}

.callender>h2{
    text-align: center;
    vertical-align: middle;
    line-height: 100vh;
    color:white;
}
</style>
<body>
    <div class='counselingcont'>
    <span id="peer-id-label" style="display:none;"></span>
        <div class="counselvideo">
             <div class="divcont"><video id="peer-camera" autoplay="autoplay" class="center-block"></video>
                     <div class="videobuttons">
                         <span><a herf="#" class="btn btn-lg btnvid" onclick="mutevid();" id="btnmutevideo"><i class="material-icons aicons">videocam</i></a> </span>
                         <span><a herf="#" class="btn btn-lg btnvid" onclick="mutesound();" id="btnmuteaudio"><i class="material-icons aicons ">mic</i></a> </span>
                         <span><a herf="#" class="btn btn-lg btnvid" onclick="endcall();"><i class="material-icons text-danger">call_end</i></a> </span>
                    </div> <!-- End of videobuttos -->
            
  
            <div class="patientvideo"><video id="my-camera"  height="100%" autoplay="autoplay" muted="true" class="center-block"></video></div>
@foreach($result as $res)

    <input type="hidden" value="{{$res->address}}" id="peer_id">
    <input type="hidden" value="user" id="name">

@endforeach

    
            </div> <!-- End of divcont -->
           </div> <!-- End of counselvideo -->
        <div class="counselnote">
         <textarea id="txtsnote" name="txtsnote"></textarea>
        <div id="statuscont"></div>
        </div>
    </div>
    <div class="callender">
        <h2>Call ended.</h2>
    </div>
</body>
<script src="{{asset('js/app.js')}}"></script>

 <script src="js/source/js/peer.min.js"></script>
 <script src="js/source/js/script.js"></script>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
 <script>
        
        CKEDITOR.replace( 'txtsnote',{
            removePlugins : 'resize',
            extraPlugins : 'uicolor',
            extraPlugins : 'emojione',
            height: 510,
        });

for (var i in CKEDITOR.instances) {
        CKEDITOR.instances[i].on('change', function() {
            var editorData = CKEDITOR.instances.txtsnote.getData();
            $.ajaxSetup({
             headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
            });

           // alert(editorData);
            $("#statuscont").text('Saving...');
             $.get( "/updatenotes",{notes:editorData},function( data ) {
                $("#statuscont").html("All changes saved.");
            });

           // $("#statuscont").text('Saving...');
           // setTimeout(function(){
              //  $("#statuscont").text('All changes saved.'); 
          //  }, 500);
        });
        
    }

    //var peer = new Peer('someid', {host: 'localhost', port: 9000, path: '/myapp'});

    function mutevid(){
        if(window.localStream.getVideoTracks()[0].enabled){
        window.localStream.getVideoTracks()[0].enabled = false;
        $('#btnmutevideo').toggleClass('btnvidactive');
        $('#btnmutevideo>.aicons').text('videocam_off');
        }else {
            window.localStream.getVideoTracks()[0].enabled = true;
            $('#btnmutevideo').toggleClass('btnvidactive');
            $('#btnmutevideo>.aicons').text('videocam');
        }
    }

    function mutesound(){
        if(window.localStream.getAudioTracks()[0].enabled){
        window.localStream.getAudioTracks()[0].enabled = false;
        $('#btnmuteaudio').toggleClass('btnvidactive');
        $('#btnmuteaudio>.aicons').text('mic_off');
        }else {
            window.localStream.getAudioTracks()[0].enabled = true;
            $('#btnmuteaudio').toggleClass('btnvidactive');
            $('#btnmuteaudio>.aicons').text('mic');
        }
    }

    function endcall(){
        $(".callender").css({"display":"block"});
        setTimeout(function(){
            window.close();
        }, 2000);
    }
</script>
</html>