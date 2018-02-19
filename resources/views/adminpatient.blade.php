@extends ('layouts.adminnavbar')

@section ('content')
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
                    <button class="btn btn-danger float-right">Deactivate</button>
                       
                        
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
                    <button class="btn btn-success  float-right">Activate</button>
                       
                        
                    </th>
                </tr>
            </tfoot>
        </table>

  </div> <!-- End of Deactivate -->
 
</div>

@endsection
