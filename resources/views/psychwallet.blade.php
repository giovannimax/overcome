@extends ('layouts.pnavbar')
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
   <option>Sort By: This Month</option>
   <option>Sort By: This Year</option>
   <option>Sort By: Last Year</option>
    </select></div>
        </div>
     <table class="" id="printsumTable">
        <thead class="summarythead text-center">
          <tr>
             <th>Date</th>
             <th>Psychologist</th>
             <th>Service</th>
             <th>Total Amount</th>
             </tr>
            </thead>
        <tbody class="text-center summarytbody">
        <tr>
             <td>12/28/17</td>
             <td>John Snow</td>
             <td>E-Counseling</td>
             <td>P 1500</td>
        
        </tr>
            
        <tr>
             <td>12/25/17</td>
             <td>John Doe</td>
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