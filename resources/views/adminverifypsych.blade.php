@extends ('layouts.adminnavbar')

@section ('content')

<ul class="nav nav-tabs nav-psych">
  <li class="nav-item">
    <a class="nav-link active" href="#">New Registration</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Verified Psychologists</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Declined Psychologists</a>
  </li>
</ul>
<div class="container">
  <table class="table table-bordered">
    <thead class="bg-info">
      <tr>
        <th>Date</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td>John</td>
        <td>Doe</td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td>John</td>
        <td>Doe</td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td>John</td>
        <td>Doe</td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>
@endsection
