
@extends ('layouts.navbar')
@section ('content')

<?php 
    use Illuminate\Support\Facades\Session;
    $navbar='layouts.pnavbar';
    if(Session::get('usertype')=='psych'||Auth::user()->usertype=='psych')
        $navbar='layouts.navbar';

?>



    <div class="container">

           <img class="propicdisplay rounded-circle mx-auto d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">

     <div class="containerforpatdetails d-flex justify-content-center">
         <table>
             <table  style="margin-right: 50px;">
            <tr class="trpat">
            <td class="text-info">First Name</td>
            <td>Lizl</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Middle Name</td>
            <td>Canson</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Last Name</td>
            <td>Marquez</td>
            </tr>

             
            <tr class="trpat">
            <td class="text-info">Gender</td>
            <td>Female</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Email Address</td>
            <td>lizl@gmail.com</td>
            </tr>
         
          
            <tr class="trpat">
            <td class="text-info">Birthday</td>
            <td>July 5, 1994</td>
            </tr>
 
            <tr class="trpat">
            <td class="text-info">Mobile Number</td>
            <td>09164646465</td>
            </tr>
</table>
            <table style="margin-right: 50px;">
                
            <tr class="trpat">
            <td class="text-info">License Number</td>
            <td>123456</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">License Title</td>
            <td>PRC</td>
            </tr>

    
</table>
<table>
            <tr class="trpat">
            <td class="text-info">Clinic Name</td>
            <td>Mental Health Clinic</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Clinic Address</td>
            <td>1234 Jagubao Basak Pardo</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Province/City</td>
            <td>Cebu</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Clinic Email Address</td>
            <td>lmhc@gmail.com</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Clinic Number</td>
            <td>555-1234</td>
            </tr>
</table>


        </table>
     
     </div> <!-- End of containerforpatdetails -->

     {!! Form::open(['url' => 'profileabout/submit']) !!}
       <div class="about form-group">
           {{Form::label('about', 'About', ['class' => 'text-info'])}}
           <h6 class="txtprof text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
           {{Form::textarea('about', '',['class' => 'form-control'])}}
              <button type="button"  class="savebtn btn btn-info btn-sm">Save</button> 
           <a class="editlink" href="#">Edit</a>
        </div> 
     {!! Form::close() !!}
        <hr id="line">
        {!! Form::open(['url' => 'profilelicense/submit']) !!}
        <div class="license form-group">
           {{Form::label('license', 'Licenses', ['class' => 'text-info'])}}
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
                <tr class="text-info">
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
              <a class="addservice" data-toggle="collapse"  href="#hiddenservice" aria-expanded="false" aria-controls="hiddenservice"  style="margin-bottom: 50px;">Add Service</a>


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


@endsection

@section ('scripts')
<script>
      
  $(document).ready(function() {
  $(".editlink").click(function () {
   $(".savebtn").show()
   $(".editlink").hide()
   $(".txtprof").hide()
   $("#about").show()
  });
  $(".savebtn").click(function () {
   $(".editlink").show()
   $(".savebtn").hide()
 $(".txtprof").show()
   $("#about").hide()
  });
 });
        

</script>
@endsection