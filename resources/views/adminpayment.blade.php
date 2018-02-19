@extends ('layouts.adminnavbar')
@push('css')
  <link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
  <link rel="stylesheet" href="{{ asset('css/datatable-button.css') }}">
@endpush
@section ('content')
    <div class="container">
      
        <div class="sumrow row"></div>
        <div class="row" style="margin-bottom: 70px;">
        <div class="col-md-3"><h4>Payment Summary</h4></div>
        <div class="col-md-6"><select class="form-control">
   <option>Sort By: Today</option>
   <option>This Week</option>
   <option>This Month</option>
   <option>This Year</option>
   <option>Last Year</option>
    </select></div>
        </div>
     <table class="" id="printsumTable">
        <thead class="summarythead text-center" >
          <tr>
             <th class="text-info">Transaction No.</th>
             <th class="text-info">Date</th>
             <th class="text-info">Psychologist Name</th>
             <th class="text-info">Service</th>
             <th class="text-info">Amount</th>
             </tr>
            </thead>
        <tbody class="text-center summarytbody">
        <tr>
             <td>1</td>
             <td>12/28/17</td>
             <td>Dr. Psych</td>
             <td>E-Counseling</td>
             <td>P 1500</td>
        
        </tr>
            
        <tr>
             <td>2</td>
             <td>12/31/17</td>
             <td>Dr. Psych</td>
             <td>E-Counseling</td>
             <td>P 1500</td>
        
        </tr>
        
    </tbody>
    </table>

  
@endsection

@section ('scripts')
<script src="{{ asset('js/datatable.js') }}"></script>
<script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
<!-- <script src="{{ asset('js/buttons.flash.min.js') }}"></script> -->
<script src="{{ asset('js/jszip.min.js') }}"></script>
<script src="{{ asset('js/pdfmake.min.js') }}"></script>
<script src="{{ asset('js/vfs_fonts.js') }}"></script>
<script src="{{ asset('js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('js/buttons.print.min.js') }}"></script>
<script>
 
$('#printsumTable').DataTable({
  dom: 'Blfrtip',
  buttons: [
     'pdf', 'print'
  ]
});




</script>
@endsection