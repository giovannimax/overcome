@extends ('layouts.adminnavbar')

@section ('content')

<?php
    use App\Http\Controllers\PsychologistsController;
    $availl = PsychologistsController::viewpsych();
?>

<a class="btn btn-info" href="{{ url()->previous() }}" style="float:right; margin-top:25px;margin-right: 25px;">Back</a>

@foreach($availl as $av)
   @if($av->psych_status=='pending')
<form method="GET" action="approvepsych" >
    <input type="hidden" name="psychid" value="{{$av->psych_id}}"/>
    <input type="submit" value="Approve" class="btn btn-success btn-md" style="float:right; margin-top:25px;margin-right: 25px;"/>
</form>
<form method="GET" action="declinepsych">
    <input type="hidden" name="psychid" value="{{$av->psych_id}}"/>
    <input type="submit" value="Decline" class="btn btn-danger btn-md" style="float:right; margin-top: 10px;margin-right: 25px;"/>
</form>
@elseif($av->psych_status=='approved')
<form method="GET" action="declinepsych">
    <input type="hidden" name="psychid" value="{{$av->psych_id}}"/>
    <input type="submit" value="Decline" class="btn btn-danger btn-md" style="float:right;margin-top: 25px;margin-right: 25px;"/>
</form>

@endif
<div class="viewpsychcont d-flex justify-content-center" style="margin-top: 180px;">

  
    <div class="psychadmininfo">
    <img src="images/pp.jpg" width="300px" height="200px" class="float-left" style="margin-right: 50px;">
        <table>
            <tr class="space">
                <td><b class="text-info" style="margin-right: 25px;">Name</b></td>
                <td>{{ $av->psych_fname." ".$av->psych_mname."".$av->psych_lname }}</td>
            </tr>
            <tr class="space">
                <td><b class="text-info" style="margin-right: 25px;">Birthdate</b></td>
                <td>{{ date("F m, Y", strtotime($av->psych_dob)) }}</td>
            </tr>
            <tr class="space">
                <td><b class="text-info"style="margin-right: 25px;">Gender</b></td>
                <td>{{$av->psych_gndr }}</td>
            </tr>
            <tr class="space">
                <td><b class="text-info" style="margin-right: 25px;">Telephone/Mobile</b></td>
                <td>{{$av->psych_telphone }}</td>
            </tr>
            <tr class="space">
                <td><b class="text-info" style="margin-right: 25px;">Clinic</b></td>
                <td>{{$av->clinic_name }}</td>
            </tr>
            <tr class="space">
                <td><b class="text-info" style="margin-right: 25px;">Address</b></td>
                <td>{{$av->clinic_address }}</td>
            </tr>
            <tr class="space">
                <td><b class="text-info" style="margin-right: 25px;">Province</b></td>
                <td>{{$av->clinic_province }}</td>
            </tr>
            <tr class="space">
                <td><b class="text-info" style="margin-right: 25px;">Clinic Email</b></td>
                <td>{{$av->clinic_email }}</td>
            </tr>
            <tr class="space">
                <td><b class="text-info" style="margin-right: 25px;">Clinic Phone Number</b></td>
                <td>{{$av->clinic_phone }}</td>
            </tr>
            <tr class="space">
                <td><b class="text-info" style="margin-right: 25px;">License No.</b></td>
                <td>{{$av->license_no }}</td>
            </tr>
            <tr class="space">
                <td><b class="text-info" style="margin-right: 25px;">License Title</b></td>
                <td><label c{{$av->license_title }}</td>
            </tr>

        <table>
    </div>

</div>

@endforeach

@endsection

<style>
    #imghov:hover{  -webkit-transform: scale(2,2);
        margin-top: 50px;
     
}tr.space>td {
  padding-bottom: .8em;
}

</style>

