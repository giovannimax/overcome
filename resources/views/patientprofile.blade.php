@extends('layouts.pnavbar')

@section('content')

{!! Form::open(['url' => 'userprofile/submit']) !!}
<div class="container">
    

           <img class="propicdisplay rounded-circle mx-auto d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">

     <div class="containerforpatdetails d-flex justify-content-center">
         <table>
            <tr class="trpat">
            <td class="text-info">First Name</td>
            <td>Owen</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Middle Name</td>
            <td>Rama</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Last Name</td>
            <td>Saberon</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Gender</td>
            <td>Male</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Birthday</td>
            <td>October 1, 1992</td>
            </tr>
 
            <tr class="trpat">
            <td class="text-info">Birth Place</td>
            <td>Cebu</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Citizenship</td>
            <td>Filipino</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Religion</td>
            <td>Roman Catholic</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Educational Attainment</td>
            <td>College</td>
            </tr>

            <tr class="trpat">
            <td class="text-info">Occupation</td>
            <td>Student</td>
            </tr>



        </table>
     
     </div> <!-- End of containerforpatdetails -->
  
     
        
</div> <!-- end of container-->


@endsection

