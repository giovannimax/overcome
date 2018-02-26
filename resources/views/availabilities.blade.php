@extends('layouts.anothernavbar')
@section('content')

<?php 
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\AvailabilityController;
  //$id = Input::get('id');
$result=AvailabilityController::retpsychavaila(Auth::user()->id);
?>

<style type="text/css">
    table{
        width: 100%;
    }

    td,th{
        text-align: center;
    }

</style>
<div class="containerforreg" style="width: 100% !important">
    
    <div class="container1" style="padding: 20px;">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mymodal">
  Add
</button>
        <table>
            <tr>
                <th>Time</th>
                <th>Days</th>
                <th>Action</th>
            </tr>
            @foreach($result as $res)
            <tr>
                <td> {{date("h:i A", strtotime($res->start_time))." - ".date("h:i A", strtotime($res->end_time))}}</td>
                <td> {{$res->day}}</td>
                <td><a href="deleteavaila?id={{$res->avail_id}}" class="btn btn-info">Delete</a></td>
            </td>
            @endforeach
        </table>

    <a href="calendar" class="btn btn-info">next</a>
    </div> <!-- End of container1 -->

</div> <!-- End of Contaier for reg -->

<div class="modal fade" id="mymodal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Availability</h4>
      </div>
      <div class="modal-body">
        <form method="GET" action="/addpsychavaila">
            <table>
                <tr>
                    <td>
                         Day/s
                    </td>
                    <td>
                         <input type='checkbox' name="days[]" value="Sunday"> Sunday &nbsp;&nbsp;
                         <input type='checkbox' name="days[]" value="Monday"> Monday &nbsp;&nbsp;
                         <input type='checkbox' name="days[]" value="Tuesday"> Tuesday &nbsp;&nbsp;
                         <input type='checkbox' name="days[]" value="Wednesday"> Wednesday &nbsp;&nbsp;<br/>
                         <input type='checkbox' name="days[]" value="Thursday"> Thurday &nbsp;&nbsp;
                         <input type='checkbox' name="days[]" value="Friday"> Friday &nbsp;&nbsp;
                         <input type='checkbox' name="days[]" value="Saturday"> Saturday<br/><br/>
                    </td>
                </tr>
                <tr>
                    <td>
                         Time
                    </td>
                    <td>
                        <select name='start_time'>
                         <?php 
      $time;
      for($i=1;$i<=24;$i++){
        $time[date('H:i:s', strtotime('00:00:00')+60*60*$i)] = date('h:i A', strtotime('00:00:00')+60*60*$i);
      }
      foreach($time as $t){
        echo "<option value='".date("H:i",strtotime($t))."'>".$t."</option>";
      }
    ?>
        </select> &nbsp; to &nbsp; <select name='end_time'>
                         <?php 
      $time;
      for($i=1;$i<=24;$i++){
        $time[date('H:i:s', strtotime('00:00:00')+60*60*$i)] = date('h:i A', strtotime('00:00:00')+60*60*$i);
      }
      foreach($time as $t){
        echo "<option value='".date("H:i",strtotime($t))."'>".$t."</option>";
      }
    ?>
        </select>
                    </td>
                </tr>
            </table>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Save changes">
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</form>
@endsection