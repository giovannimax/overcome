            <li class="sidebar-brand">
                  Manage Availability <a href="#" class="close">X</a>
            </li>
            <li class="text-info">
              Blocked Dates
            </li>
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
           <li>
               <a href="#" class="card-link">ADD</a>
            </li>
            <li class="sidebar-brand text-info">
              <br>
                   Time <a class="close" id="addtime">Add</a>


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
  var timeflag=false;
  var selectedtime= new Array();
   var _selectRange = false, _deselectQueue = [];
$(function() {
    $( "#selectable" ).selectable({
        selecting: function (event, ui) {
            if (event.detail == 0) {
                _selectRange = true;
                return true;
            }
            if ($(ui.selecting).hasClass('ui-selected')) {
                _deselectQueue.push(ui.selecting);
            }
        },
        unselecting: function (event, ui) {
            $(ui.unselecting).addClass('ui-selected');
        },
        stop: function () {
            if (!_selectRange) {
                $.each(_deselectQueue, function (ix, de) {
                    $(de)
                        .removeClass('ui-selecting')
                        .removeClass('ui-selected');
                });
            }
            _selectRange = false;
            _deselectQueue = [];
        },
    });
});

$('#addtime').click(function(e) {
    e.preventDefault();
    timeflag=true;
    $("#wrapper2").toggleClass("toggled");
});
</script>
