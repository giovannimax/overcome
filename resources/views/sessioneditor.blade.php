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
  $result=EcounselingsController::getspefnotes($id);
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
    width: 100%;
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
         <textarea id="txtsnote" name="txtsnote" ></textarea>
        <div id="statuscont"></div>
     </div>
    <div class="callender">
        <h2>Call ended.</h2>
    </div>
</body>
<script src="{{asset('js/app.js')}}"></script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
 <script>
        CKEDITOR.replace( 'txtsnote',{
            removePlugins : 'resize',
            extraPlugins : 'uicolor',
            height: 510,
        });
@foreach($result as $res)
    CKEDITOR.instances['txtsnote'].setData("{!!$res->session_notes!!}");
@endforeach

//CKEDITOR.instances['txtsnote'].setData("fgfgdf");

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
</script>
</html>