@extends ('layouts.adminnavbar')
@section ('content')
<?php
use App\Http\Controllers\DiariesController;
    $result = DiariesController::countpsych();
    $resultt = DiariesController::countpat();

?>
<div class="containerforpsych" style="margin-top: 25px;">
   <div class="row" style="margin-bottom: 50px;">
    <div class="col-md-6 text-center"><h5>Total Psychologists Registered</h5></div>
    <div class="col-md-6  text-center"><h5>Total Patients Registered</h5></div>
    <div class="col-md-6 text-center">
    <h5 class="text-info">
<?php echo $result?></h5>
    </div>
    <div class="col-md-6  text-center"><h5 class="text-info">
    <?php echo $resultt?></h5></h5>
    </div>
   </div> <!-- end of row -->

   <div class="statistics" style=" margin-left: 25px;">
   <canvas id="bar-chart-grouped" height="100px"></canvas>
   <?php date('Y') ?>
   
   </div> <!-- End of statisticts -->
</div> <!-- End of containerforreports -->
@endsection


@section ('scripts')

<script>

// <?php
//     $dataa="[";
//     for($i=1;$i<=12;$i++){
//         $resulttt = DiariesController::statpsych($i);
//            $dataa=$dataa.$resulttt.",";
//     }
//     $dataa=$dataa."]";
//     echo "var datapsych = ".$dataa;
// ?>

new Chart(document.getElementById("bar-chart-grouped"), {
    type: 'bar',
    data: {
      labels: ["Jan", "Feb", "March", "April","May","June","July","Aug","Sept","Oct","Nov","Dec"],
      datasets: [
        {
          label: "Psychologists",
          backgroundColor: "#3e95cd",
          data: [0,2,0,0,0,0,0,0,0,0,0,0]
        }, {
          label: "Patients",
          backgroundColor: "#f58c37",
          data: [0,1,0,0,0,0,0,0,0,0,0,0]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Users (hundreds)'
      }
    }
});
</script>

@endsection



