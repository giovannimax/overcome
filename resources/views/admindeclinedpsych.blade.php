@extends ('layouts.adminnavbar')

@section ('content')

<?php
    use App\Http\Controllers\PsychologistsController;
    $availl = PsychologistsController::getdeclpsych();
?>
<ul class="nav nav-tabs nav-psych">
  <li class="nav-item">
    <a class="nav-link" href="admin">New Registration</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="adminverified">Verified Psychologists</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="admindeclined">Declined Psychologists</a>
  </li>
</ul>
<div class="container">
  <table class="table table-bordered">
    <thead class="bg-info">
      <tr>
        <th width='20%'>Date</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($availl as $av)
      <tr>
        <td>{{ date('F d, Y', strtotime($av->created_at)) }}</td>
        <td>{{ $av->psych_fname." ".$av->psych_lname  }}</td>
        <td>{{ $av->psych_gndr}}</td>
        <td>{{ $av->psych_status}}</td>
        <td><form method="GET" action="/viewadminpsych">
        <input type="hidden" name="psychid" value="{{$av->psych_id}}">
        <input type="submit" value="View"/>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
