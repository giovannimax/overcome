@extends('layouts.navbar')

@section ('content')

    {!! Form::open(['url' => 'profileabout/submit']) !!}

    <div class="container">
       <div class="about form-group">
           {{Form::label('about', 'About')}}
           {{Form::textarea('about', '',['class' => 'form-control', 'disabled'])}}
              <button type="button"  class="savebtn btn btn-primary btn-sm">Save</button> 
           <button type="button" class="editlink btn btn-primary btn-sm" >Edit</button>
        </div> 
     {!! Form::close() !!}
        <hr id="line">
        {!! Form::open(['url' => 'profilelicense/submit']) !!}
        <div class="license form-group">
           {{Form::label('license', 'Licenses')}} 
            <div class="licenses">
                <ul class="licenseul">
                    <li>{{Form::label('license', 'PRC 12345678 May 05, 2015')}}</li>
                    <li>{{Form::label('license', 'PRC 12345678 May 05, 2015')}}</li>
                    </ul> 
                    <a  class="addlicense" data-toggle="collapse" href="#hiddenlicense" aria-expanded="false" aria-controls="hiddenlicense">Add License</a>
                    
                    <div class="collapse" id="hiddenlicense">
                        
                       <div class="form-group"> 
                           {{Form::label('title', 'License Title')}} 
                           {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'License Title'])}}
                     </div>
                    
                          <div class="form-group"> 
                           {{Form::label('titlenumber', 'Title No.')}} 
                           {{Form::text('titlenumber','',['class' => 'form-control', 'placeholder' => 'License Number'])}}
                     </div>
                        
                      <div class="form-group"> 
                           {{Form::label('titledate', 'License Date')}} 
                           {{Form::date('name', \Carbon\Carbon::now(),['class' => 'form-control'])}}
                     </div>
                        <div class="addbutton">
                        {{Form::submit('Add License', ['class' => 'btn btn-primary'])}}
                        </div>
                       
                     </div> <!-- End of Hidden Text -->
                    
                      
            </div> <!-- end of license div -->
            
            
        </div> <!-- end of form-group -->
         {!! Form::close() !!}
        <hr> 
         {!! Form::open(['url' => 'profileservice/submit']) !!}
             <div class="specialty form-group">
          <table class="table table-hover">
            <thead>
                <tr>
                    <th>Specialties</th>
                    <th>Service Length</th>
                    <th>Rate</th>
                </tr>
             </head>
              <tbody>
                  <tr>
                      <td class="specialtytd">Depression</td>
                      <td class="specialtytd">60 Minutes</td>
                      <td class="specialtytd">P 1,500</td>
                  </tr>
              </tbody>
         </table>
              <a class="addservice" data-toggle="collapse"  href="#hiddenservice" aria-expanded="false" aria-controls="hiddenservice">Add Service</a>
                      
                 
                 <div class="collapse" id="hiddenservice"> 
                      <div class="form-group"> 
                           {{Form::label('specialty', 'Specialty')}} 
                           {{Form::text('specialty','', ['class' => 'form-control', 'placeholder' => 'Ex: Anxiety, Depression'])}}
                     </div>
                     
                     <div class="form-group"> 
                           {{Form::label('serlength', 'Service Length')}} 
                           {{Form::text('serlength','', ['class' => 'form-control', 'placeholder' => 'Ex: 60 minutes, 90 minutes'])}}
                     </div>
                     
                     <div class="form-group"> 
                           {{Form::label('serrate', 'Rate')}} 
                           {{Form::text('serrate','', ['class' => 'form-control', 'placeholder' => 'Ex: P 1000'])}}
                     </div>
                     
                     <div class="addservicebutton">
                        {{Form::submit('Add Service', ['class' => 'btn btn-primary'])}}
                        </div>
                   
                 </div> <!-- end of hidden service -->
        </div> <!-- end of table div -->
    {!! Form::close() !!}
    </div> <!-- end of container -->

 {!! Form::close() !!}

<script>
$(document).ready(function() {
  $(".editlink").click(function () {
   $(".savebtn").show()
   $(".editlink").hide()
  });
  $(".savebtn").click(function () {
   $(".editlink").show()
   $(".savebtn").hide()
  });
 });
</script>

@endsection