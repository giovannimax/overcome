@extends ('layouts.pnavbar')
@section ('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <div class="container">
        <span class="charchar"><button class="btnPrint btn btn-outline-info btn-md"><i class="material-icons">print</i></button></span>
        <span class="charchar"><button class="btnDownload btn btn-outline-info btn-md"><i class="material-icons">file_download</i></button></span>
        <div class="sumrow row">
          <h4 id="summary">Payment Summary</h4>
          {!! Form::open(['url' => 'paymentsummary/submit']) !!}
                  
            {{Form::select('sortby',[ 'T' => 'Today', 'W' => 'This Week' , 'M' => 'This Month', 'Y' => 'This Year', 'LY' =>'Last Year', 'A' =>'Show All'], 'T')}}
            
         {!! Form::close() !!}
        </div> <!-- End of row -->
        
        
     <table class="sumtable table table-hover" id="printsumTable">
        <thead class="summarythead text-center">
             <th>Date</th>
             <th>Psychologist</th>
             <th>Service</th>
             <th>Total Amount</th>
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

    <nav aria-label="Page navigation example">
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
</nav>
 
    </div> <!-- End of container -->
@endsection

@section ('scripts')
<script>
    function printData()
{
  var dataToPrint = document.getElementById("printsumTable");
  newWin = window.open("");
  newWin.document.write(dataToPrint.outerHTML);
  newWin.print();
  newWin.close();
}

$('.btnPrint').on('click',function(){
	printData();
})  


$(document).ready(function(){
  $('#printsumTable').DataTable();
});
</script>
@endsection