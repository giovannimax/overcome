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
  use App\Http\Controllers\EcounselingsController;
  EcounselingsController::addnotes();
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
    width: 30%;
    background: blue;
    height: 20vh;
    margin-top: 500px;
    margin-right: -100px;
    margin-bottom: 50px;
    
}

.videobuttons{
    background: rgba(27, 37, 47, 0.8);
    width: fit-content;
    border-radius: 5px;
    height: fit-content;
     margin-top: 600px;
     margin-left: 350px;
     margin-right: 150px;
    
}
.btnvid{
    background: transparent;
    border-radius: 0px;
}

a:active{
    background:white;
}

.aicons{
    color: #85898c;
}
</style>
<body>
    <div class='counselingcont'>
        <div class="counselvideo"><video src="mpeg.mp4"></video>
             <div class="divcont">
                     <div class="videobuttons">
                         <span><a herf="#" class="btn btn-lg btnvid"><i class="material-icons aicons">videocam</i></a> </span>
                         <span><a herf="#"class="btn btn-lg btnvid"><i class="material-icons aicons ">mic</i></a> </span>
                         <span><a herf="#"class="btn btn-lg btnvid"><i class="material-icons text-danger">call_end</i></a> </span>
                    </div> <!-- End of videobuttos -->
            
  
            <div class="patientvideo"><video src="mpeg.mp4"></video></div>

            </div> <!-- End of divcont -->
           </div> <!-- End of counselvideo -->
        <div class="counselnote">
         <textarea id="txtsnote" name="txtsnote"></textarea>
        <div id="statuscont"></div>
        </div>
    </div>
    
</body>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/peer.min.js')}}"></script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
 <script>
        CKEDITOR.replace( 'txtsnote',{
            removePlugins : 'resize',
            extraPlugins : 'uicolor',
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
            $.ajax({
                type: "GET",
                url: "updatenotes?notes='" + editorData + "'",
            //data: "{notes: " + editorData + "}",
                success: function(result){
                $("#statuscont").html("All changes saved.");
               //  alert(result.d);
             //console.log(result);
         },

          error: function(xhr, textStatus, errorThrown){
             alert(xhr.responseText);
        },
        });

           // $("#statuscont").text('Saving...');
           // setTimeout(function(){
              //  $("#statuscont").text('All changes saved.'); 
          //  }, 500);
        });
        
    }

    var peer = new Peer('someid', {host: 'localhost', port: 9000, path: '/myapp'});
</script>
</html>