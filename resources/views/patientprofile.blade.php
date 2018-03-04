@extends('layouts.pnavbar')

@section('content')
<?php
     use App\Http\Controllers\DiariesController;;
     
     $result = DiariesController::retpatprof(Auth::user()->id);

    
?>

<div class="container">
    

           <img class="propicdisplay rounded-circle mx-auto d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">
@foreach($result as $res)
     <div class="containerforpatdetails d-flex justify-content-center">
         <table>
            <tr class="trpat">
            <td class="text-info">First Name</td>
            <td>{{$res->pat_fname}}</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Middle Name</td>
            <td>{{$res->pat_mname}}</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Last Name</td>
            <td>{{$res->pat_lname}}</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Gender</td>
            <td>{{$res->pat_gndr}}</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Birthday</td>
            <td>{{$res->pat_bdate}}</td>
            </tr>
 
            <tr class="trpat">
            <td class="text-info">Birth Place</td>
            <td>{{$res->birth_place}}</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Citizenship</td>
            <td>{{$res->ctznshp}}</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Religion</td>
            <td>{{$res->religion}}</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Educational Attainment</td>
            <td>{{$res->educ_attain}}</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Occupation</td>
            <td>{{$res->occupation}}</td>
            </tr>



        </table>
     
     </div> <!-- End of containerforpatdetails -->
  @endforeach
     
        
</div> <!-- end of container-->


@endsection

