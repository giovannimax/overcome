@extends ('layouts.adminnavbar')
@push('css')
  <link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
  <link rel="stylesheet" href="{{ asset('css/datatable-button.css') }}">
@endpush
@section ('content')

<ul class="nav nav-tabs justify-content-end" role="tablist" style="margin-top:50px;" >
  <li class="nav-item">
    <a class="nav-link active" href="#pending" role="tab" data-toggle="tab">Pending Psychologists</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#verified" role="tab" data-toggle="tab">Verified Psychologists</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#declined" role="tab" data-toggle="tab" style="margin-right: 50px;">Declined/Deactivated Psychologists</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content" style="margin-left: 270px;margin-top: 50px;" >
  <div role="tabpanel" class="tab-pane fade show active" id="pending">
  <table class="table table-bordered w-75 ">
            <thead class="theadadmin">
                <tr class="text-info">
                    <th></th>
                    <th>Name</th>
                    <th>Registration Date</th>
                    <th>Information</th>
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
                    <td>John Lilki</td>
                    <td>September 14, 2013</td>
                    <td>About Me</td>
                    <td>Pending</td>
                </tr>
                <tr>
                <td>
                <div class="form-check text-center">
                  <input class="form-check-input" type="checkbox" value="">
              </div>
                </td>
                <td>John Lilki</td>
                <td>September 14, 2013</td>
                <td>About Me</td>
                <td>Pending</td>
                </tr>
                <tr>
                <td>
                <div class="form-check text-center">
                  <input class="form-check-input" type="checkbox" value="">
              </div>
                </td>
                <td>John Lilki</td>
                <td>September 14, 2013</td>
                <td>About Me</td>
                <td>Pending</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th colspan="4">
                    <button class="btn btn-danger float-right" style="margin-left:10px;">Decline</button>
                        <button class="btn btn-info float-right">Approve</button>
                        
                    </th>
                </tr>
            </tfoot>
        </table>
  </div> <!-- End of pending -->
 
 
 
 
 
 
  <div role="tabpanel" class="tab-pane fade" id="verified">
  <table class="table table-bordered w-75 ">
            <thead class="theadadmin">
                <tr class="text-info">
                    <th></th>
                    <th>Name</th>
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
                    <td>John Lilki</td>
                    <td>September 14, 2013</td>
                    <td>Pending</td>
                </tr>
                <tr>
                <td>
                <div class="form-check text-center">
                  <input class="form-check-input" type="checkbox" value="">
              </div>
                </td>
                <td>John Lilki</td>
                <td>September 14, 2013</td>
                <td>Pending</td>
                </tr>
                <tr>
                <td>
                <div class="form-check text-center">
                  <input class="form-check-input" type="checkbox" value="">
              </div>
                </td>
                <td>John Lilki</td>
                <td>September 14, 2013</td>
                <td>Pending</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th colspan="4">
                
                        <button class="btn btn-danger float-right">Deactivate</button>
                        
                    </th>
                </tr>
            </tfoot>
        </table>

  </div> <!-- End of Verified -->


  <div role="tabpanel" class="tab-pane fade" id="declined">
    <h4 class="text-danger">Declined Psychologists</h4>
  <table class="table table-bordered w-75 ">
            <thead class="theadadmin">
                <tr class="text-info">
                    <th></th>
                    <th>Name</th>
                    <th>Registration Date</th>
                    <th>Information</th>
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
                    <td>John Lilki</td>
                    <td>September 14, 2013</td>
                    <td>About Me</td>
                    <td>Pending</td>
                </tr>
                <tr>
                <td>
                <div class="form-check text-center">
                  <input class="form-check-input" type="checkbox" value="">
              </div>
                </td>
                <td>John Lilki</td>
                <td>September 14, 2013</td>
                <td>About Me</td>
                <td>Pending</td>
                </tr>
                <tr>
                <td>
                <div class="form-check text-center">
                  <input class="form-check-input" type="checkbox" value="">
              </div>
                </td>
                <td>John Lilki</td>
                <td>September 14, 2013</td>
                <td>About Me</td>
                <td>Pending</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th colspan="4">
                        <button class="btn btn-success  float-right">Approve</button>
                        
                    </th>
                </tr>
            </tfoot>
        </table>

<h4 class="text-danger">Deactivated Psychologists</h4>

<table class="table table-bordered w-75 ">
            <thead class="theadadmin">
                <tr class="text-info">
                    <th></th>
                    <th>Name</th>
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
                    <td>John Lilki</td>
                    <td>September 14, 2013</td>
                    <td>Pending</td>
                </tr>
                <tr>
                <td>
                <div class="form-check text-center">
                  <input class="form-check-input" type="checkbox" value="">
              </div>
                </td>
                <td>John Lilki</td>
                <td>September 14, 2013</td>
                <td>Pending</td>
                </tr>
                <tr>
                <td>
                <div class="form-check text-center">
                  <input class="form-check-input" type="checkbox" value="">
              </div>
                </td>
                <td>John Lilki</td>
                <td>September 14, 2013</td>
                <td>Pending</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th colspan="4">
                
                        <button class="btn btn-success float-right">Activate</button>
                        
                    </th>
                </tr>
            </tfoot>
        </table>


  </div> <!-- End of Declined/Deactivated -->
</div>  <!-- End of tab-content -->


@endsection
@section ('scripts')


@endsection