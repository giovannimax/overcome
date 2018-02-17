<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
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
        
        </div>
    </div>
    
</body>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
 <script>
        CKEDITOR.replace( 'txtsnote',{
            removePlugins : 'resize',
            extraPlugins : 'uicolor',
            height: 610,
        });
</script>
</html>