@extends ('layouts.navbar')
@section ('content')


    <div class="nt card text-white bg-secondary mb-3 w-75 h-75 " >
        <div class="newtext2 card">
        <a href="messages_openmessage">
        <div class="cont1">
            <img class="sender rounded-circle d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">
            
            <div class="row">
            <div class="rowcol col-md-8"><strong class="strong">John Snow</strong><br>
                <p class="newpar">Lorem ipsum dolor sit amet, munere eligendi percipit in ius, vim dolorem probatus ex.</p></div>
                
             <div class="rowcol col-md-4"> <strong class="txtd">08/16/17</strong><br><p class="txtdd">8:15PM</p></div>
             </div>
          
    </div> <!-- end of cont1 -->
        </div>
</a>

<hr>
 <div class="newtext2 card">
 <a href="messages_openmessage">
        <div class="cont1">
            <img class="sender rounded-circle d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">
            
            <div class="row">
                <div class="rowcol col-md-8"><h6 class="h6str">John Snow</h6>
                <p class="txtp">Lorem ipsum dolor sit amet, munere eligendi percipit in ius, vim dolorem probatus ex.</p></[></div>
             <div class="rowcol -md-4"><h6 class="txtd">08/16/17</h6><p class="txtdd" style="font-size:12px;">8:15PM</p></div>
             </div>
          
    </div> <!-- end of cont1 -->
</div>
</a>
<hr>

</div>  

    </div> <!-- end of card -->


@endsection