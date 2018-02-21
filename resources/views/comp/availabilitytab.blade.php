            <li class="sidebar-brand">
                  Manage Availability <a href="#" class="close">X</a>
            </li>
            <li class="text-info">
              Blocked Dates
            </li>
            <p style="margin-left: 25px;font-size: 14px;   ">
           @if(!empty($_POST))
              <?php
                  $dates=$_POST['dates'];

                  function date_sort($a, $b) {
                    return strtotime($a) - strtotime($b);
                }
                
                usort($dates, "date_sort");

                  foreach($dates as $d){
                    echo date('F d, Y',strtotime($d)).'</br>';
                    echo '<input type="hidden" name="dates[]" value="'.$d.'">';
                  }
              ?>
            @else
                  No selected date.
           @endif
                </p>
           <li>
               <a href="#" class="card-link">ADD</a>
            </li>
            <li class="sidebar-brand text-info" style="margin-left: 8px;margin-right: 25px;">
              <table>
                   <tr>
                      <td style="padding-top: 20px;padding-right:5px;"><big> Time  </big></td>
                      <td class="text-center"><a class="close btn btn-info btn-sm" id="addtime" style="color:#fff;text-align:center;">Add Time</a></td>
                   </tr>     
                </table>
            

                


                <!--<ol id="selectable">
                  <li class="ui-widget-content">Item 1</li>
                  <li class="ui-widget-content">Item 2</li>
                  <li class="ui-widget-content">Item 3</li>
                  <li class="ui-widget-content">Item 4</li>
                  <li class="ui-widget-content">Item 5</li>
                  <li class="ui-widget-content">Item 6</li>
                  <li class="ui-widget-content">Item 7</li>
                </ol>-->

            </li>
            

<script>

$('#addtime').click(function(e) {
    e.preventDefault();
    timeflag=true;
    $("#wrapper2").toggleClass("toggled");
});
</script>
