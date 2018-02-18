@extends ('layouts.adminnavbar')

@section ('content')
<div class="text-right" style="margin-right: 50px;margin-top: 25px;margin-bottom: -15px;">
    <button class="btn btn-info btn-lg btn-admin" data-toggle="modal" data-target="#addUser" >Add Admin</button>
</div>
<ul class="nav nav-tabs justify-content-end" role="tablist" style="margin-top:50px;" >
  <li class="nav-item">
    <a class="nav-link active" href="#active" role="tab" data-toggle="tab">Active Patients</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#deactivate" role="tab" data-toggle="tab" style="margin-right: 50px;">Deactivated Patients</a>
  </li>
  
</ul>


<!-- Tab panes -->
<div class="tab-content" style="margin-left: 270px;margin-top: 50px;">
  <div role="tabpanel" class="tab-pane fade show active" id="active">
  
  <table class="table table-bordered w-75 ">
            <thead class="theadadmin">
                <tr class="text-info">
                    <th></th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Registration Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr class="tradmin">
                    <td>
                    <div class="form-check text-center">
                      <input class="form-check-input" type="checkbox" value="">
                  </div>
                    </td>
                    <td>John </td>
                    <td>Lilki</td>
                    <td>john@gmail.com</td>
                    <td>September 14, 2013</td>
                    <td>Pending</td>
                </tr>
                <tr>
                <td>
                <div class="form-check text-center">
                  <input class="form-check-input" type="checkbox" value="">
              </div>
                </td>
                <td>John </td>
                <td>Lilki</td>
                <td>john@gmail.com</td>
                <td>September 14, 2013</td>
                <td>Pending</td>
                </tr>
                <tr>
                <td>
                <div class="form-check text-center">
                  <input class="form-check-input" type="checkbox" value="">
              </div>
                </td>
                <td>John </td>
                    <td>Lilki</td>
                    <td>john@gmail.com</td>
                    <td>September 14, 2013</td>
                    <td>Pending</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th colspan="6">
                    <button class="btn btn-success float-right">Deactivate</button>
                       
                        
                    </th>
                </tr>
            </tfoot>
        </table>

  </div><!-- End of Active -->
  <div role="tabpanel" class="tab-pane fade" id="deactivate">
  <table class="table table-bordered w-75 ">
            <thead class="theadadmin">
                <tr class="text-info">
                    <th></th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Registration Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr class="tradmin">
                    <td>
                    <div class="form-check text-center">
                      <input class="form-check-input" type="checkbox" value="">
                  </div>
                    </td>
                    <td>John </td>
                    <td>Lilki</td>
                    <td>john@gmail.com</td>
                    <td>September 14, 2013</td>
                    <td>Pending</td>
                </tr>
                <tr>
                <td>
                <div class="form-check text-center">
                  <input class="form-check-input" type="checkbox" value="">
              </div>
                </td>
                <td>John </td>
                <td>Lilki</td>
                <td>john@gmail.com</td>
                <td>September 14, 2013</td>
                <td>Pending</td>
                </tr>
                <tr>
                <td>
                <div class="form-check text-center">
                  <input class="form-check-input" type="checkbox" value="">
              </div>
                </td>
                <td>John </td>
                    <td>Lilki</td>
                    <td>john@gmail.com</td>
                    <td>September 14, 2013</td>
                    <td>Pending</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th colspan="6">
                    <button class="btn btn-info float-right">Activate</button>
                       
                        
                    </th>
                </tr>
            </tfoot>
        </table>

  </div> <!-- End of Deactivate -->
 
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
