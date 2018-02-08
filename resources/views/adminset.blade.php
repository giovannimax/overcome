@extends ('layouts.adminnavbar')

@section ('content')

<div class="container">
  <span class="float-right">
    <button class="btn btn-info btn-lg btn-admin" data-toggle="modal" data-target="#addUser" >Add Admin</button>
  </span>
  <table class="table table-bordered">
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

<!-- Modal for Add Admin User-->

<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Admin User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="adduser">

        <div class="form-group">
            {!! Form::label('First Name'); !!}
            {!! Form::text('adminfname','', ['class' => 'form-control']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('Last Name'); !!}
            {!! Form::text('adminlname','', ['class' => 'form-control']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('Email Address'); !!}
            {!! Form::text('adminemail','', ['class' => 'form-control']); !!}
        </div>
        <div class="form-group">
            {!! Form::label('Password'); !!}
            {!! Form::text('adminpw','', ['class' => 'form-control']); !!}
        </div>

      </div> <!-- End of Modal-body -->
      <div class="modal-footer">
                <span><button class="btn btn-primary btn-md" id="btn-addUser">Add</button></span>
                <span><button class="btn btn-primary btn-md" id="btn-cancel">Cancel</button></span>
      </div> <!-- End of modal-footer -->

  </div>
  </div> <!-- End of modal-content -->
 </div> <!-- End of modal-dialog -->
</div> <!-- End of modal fade -->
  {!! Form::close() !!}
@endsection
