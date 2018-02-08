@extends ('layouts.pnavbar')
@push('css')
  <link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
  <link rel="stylesheet" href="{{ asset('css/datatable-button.css') }}">
@endpush
@section ('content')
    <div class="container">
      
        <div class="sumrow row"></div>
         
        
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
             <td>Dr. Psych</td>
             <td>E-Counseling</td>
             <td>P 1500</td>
        
        </tr>
            
        <tr>
             <td>12/25/17</td>
             <td>Dr. Psych</td>
             <td>E-Counseling</td>
             <td>P 1500</td>
        
        </tr>
        
    </tbody>
    </table>
<div id="editor"></div>

    <!-- <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav> -->
 
    </div> <!-- End of container -->
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