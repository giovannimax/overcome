<?php
     use App\Http\Controllers\AdminsController;;
     
     $result = AdminsController::retmsg();

    
?>

@extends ('layouts.adminnavbar')

@section ('content')



<!-- Tab panes -->
<div class="tab-content" style="margin-left: 270px;margin-top: 50px;">
  <div role="tabpanel" class="tab-pane fade show active" id="active">
  
  <table class="table table-bordered w-75 ">
            <thead class="theadadmin">
                <tr class="text-info">
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
            @foreach($result as $res)
                <tr class="tradmin">
                    <td>{{$res->name}}</td>
                    <td>{{$res->email}}</td>
                    <td>{{$res->msgcontent}}</td>
                </tr>
            @endforeach
        </table>

    </div>
</div>
@endsection
