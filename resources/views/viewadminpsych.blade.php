@extends ('layouts.adminnavbar')

@section ('content')

<?php
    use App\Http\Controllers\PsychologistsController;
    $availl = PsychologistsController::viewpsych();
?>

<a class="btn btn-info" href="{{ url()->previous() }}">Back</a>

@foreach($availl as $av)
   @if($av->psych_status=='pending')
<form method="GET" action="approvepsych" >
    <input type="hidden" name="psychid" value="{{$av->psych_id}}"/>
    <input type="submit" value="Approve"/>
</form>
<form method="GET" action="declinepsych">
    <input type="hidden" name="psychid" value="{{$av->psych_id}}"/>
    <input type="submit" value="Decline"/>
</form>
@elseif($av->psych_status=='approved')
<form method="GET" action="declinepsych">
    <input type="hidden" name="psychid" value="{{$av->psych_id}}"/>
    <input type="submit" value="Decline"/>
</form>

@endif
<div class="viewpsychcont">

    <div class="psychadminimg"><img src="images/pp.jpg" width="200px"></div>
    <div class="psychadmininfo">
        <table>
            <tr>
                <td>Name</td>
                <td>{{ $av->psych_fname." ".$av->psych_mname."".$av->psych_lname }}</td>
            <tr>
            <tr>
                <td>Birthdate</td>
                <td>{{ date("F m, Y", strtotime($av->psych_dob)) }}</td>
            <tr>
            <tr>
                <td>Gender</td>
                <td>{{$av->psych_gndr }}</td>
            <tr>
            <tr>
                <td>Telephone/Mobile</td>
                <td>{{$av->psych_telphone }}</td>
            <tr>
            <tr>
                <td>Clinic</td>
                <td>{{$av->clinic_name }}</td>
            <tr>
            <tr>
                <td>Address</td>
                <td>{{$av->clinic_address }}</td>
            <tr>
            <tr>
                <td>Province</td>
                <td>{{$av->clinic_province }}</td>
            <tr>
            <tr>
                <td>Clinic Email</td>
                <td>{{$av->clinic_email }}</td>
            <tr>
            <tr>
                <td>Clinic Phone Number</td>
                <td>{{$av->clinic_phone }}</td>
            <tr>
            <tr>
                <td>License No.</td>
                <td>{{$av->license_no }}</td>
            <tr>
            <tr>
                <td>License Title</td>
                <td>{{$av->license_title }}</td>
            <tr>
        <table>
    </div>

</div>

@endforeach

@endsection
