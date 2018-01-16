            <li class="sidebar-brand">
                  Manage Availability <a href="#" class="close">X</a>
            </li>
            <li class="text-info">
              Blocked Dates
            </li>

           <li>
               <a href="#" class="card-link">ADD</a>

               <div class='tab table'>  
                  <div class='tablerow'>
                    <div class='tablecell'>
                      {!! Form::open(['action' => 'EcounselingsController@addapp', 'method' => 'POST']) !!}
                      {{Form::label('bookingdate', 'Week:')}}
			  	          </div>
                   <div class="tablecell">
                      {!! Form::text('Week','',['id'=>'weekpicker', 'class'=>'form-control'])!!}
                   </div>
                  </div>
                  <div class='tablerow'>
                    <div class='tablecell'>
                      {!! Form::checkbox('Week','')!!}
                      Sun
                      {!! Form::checkbox('Week','')!!}
                      Mon
                      {!! Form::checkbox('Week','')!!}
                      Tue
                      {!! Form::checkbox('Week','')!!}
                      Wed
                      {!! Form::checkbox('Week','')!!}
                      Thu
                      {!! Form::checkbox('Week','')!!}
                      Fri
                      {!! Form::checkbox('Week','')!!}
                      Sat
			  	          </div>
                  </div>
              </div>
            </li>
            <li class="sidebar-brand text-info">
              <br>
              <br>
                   Availability <a class="close">Show all</a>
            </li>


            
<script src="js/weekPicker.js"></script>
<script>var startDate,
        endDate;
        
      $('#weekpicker').datepicker({
        autoclose: true,
        format :'mm/dd/yyyy',
        forceParse :false
    }).on("changeDate", function(e) {
        //console.log(e.date);
        var date = e.date;
        startDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay());
        endDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay()+6);
        //$('#weekpicker').datepicker("setDate", startDate);
        $('#weekpicker').datepicker('update', startDate);
        $('#weekpicker').val((startDate.getMonth() + 1) + '/' + startDate.getDate() + '/' +  startDate.getFullYear() + ' - ' + (endDate.getMonth() + 1) + '/' + endDate.getDate() + '/' +  endDate.getFullYear());
    });
        
        
        //new
        $('#prevWeek').click(function(e){
          var date = $('#weekpicker').datepicker('getDate');
          //dateFormat = "mm/dd/yy"; //$.datepicker._defaults.dateFormat;
          startDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay()- 7);
          endDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay() - 1);
          $('#weekpicker').datepicker("setDate", new Date(startDate));
          $('#weekpicker').val((startDate.getMonth() + 1) + '/' + startDate.getDate() + '/' +  startDate.getFullYear() + ' - ' + (endDate.getMonth() + 1) + '/' + endDate.getDate() + '/' +  endDate.getFullYear());
                 
          return false;
        });
        $('#nextWeek').click(function(){
          var date = $('#weekpicker').datepicker('getDate');
          //dateFormat = "mm/dd/yy"; // $.datepicker._defaults.dateFormat;
          startDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay()+ 7);
          endDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay() + 13);
          $('#weekpicker').datepicker("setDate", new Date(startDate));
          $('#weekpicker').val((startDate.getMonth() + 1) + '/' + startDate.getDate() + '/' +  startDate.getFullYear() + ' - ' + (endDate.getMonth() + 1) + '/' + endDate.getDate() + '/' +  endDate.getFullYear());
            
          return false;
        });
//# sourceURL=pen.js
</script>
