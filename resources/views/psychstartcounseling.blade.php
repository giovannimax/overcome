<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

</style>
<body>
    <div class='counselingcont'>
        <div class="counselvideo"><video src="mpeg.mp4"></video></div>
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