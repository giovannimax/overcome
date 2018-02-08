@extends ('layouts.adminnavbar')

@section ('content')


<div class="container">
  <h5>Psychologists</h5>
  <table class="table table-bordered adminpatient">
    <thead class="bg-info">
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Password</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>


  {!! Form::close() !!}
@endsection
