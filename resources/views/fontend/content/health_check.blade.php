@extends('fontend.app')
@section('content')
<style media="screen">
    #appointment_model{
          z-index: 9999;
    }
    .modal{
        z-index: 9999 !important;
        display: fixed !important;
    }

</style>
<div class="body_maindiv" >

<!------------------  profile  ------------------->

<div class="profile_aboutmaindiv">

<div class="header_bandmaindiv">
<div class="header_banddiv">

<div class="static_page_heading">Doctor’s Appointment</div>

<div class="breadcrum_div"><a href="../index.php" style="text-decoration:none; color:#333333;">Home</a> &gt;  Book an Appointment</div>
</div>
</div>

<div class="static_bodydiv">

<div class="static_mainbody_div">



<div class="static_pagetxt">
<form action="" method="get" name="search" id="search">
<div class="polyclinic_searchmaindiv">

<div class="search_alphabet">

<div class="search_alphabet_heading" style="text-align:center; text-transform:uppercase; font-weight:600; margin-bottom:30px; line-height:34px;">Health Check up Package</div>





</div>

</div>

</form>

<!--###################  Desktop Version     ######################-->


<div class="appointment_mainBG">

<div class="box-container-table">
    <div class="container-table">

        <table id="" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Service Head</th>
                    <th> Service Type</th>
                    <th>Test Name</th>
                    <th>Test Rate</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($health_checks))
                    @foreach ($health_checks as $key => $doctor)
                        <tr>
                            <td>{{ $doctor->doctor_fee }}</td>
                            <td>{{ $doctor->package_rate }}</td>
                            <td>{{ $doctor->package_name }}</td>
                            <td>{{ $doctor->rate }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th colspan="4"><a class="bg-danger">No Record Found !!</a></th>
                    </tr>
                @endif

            </tbody>
        </table>
    </div>
</div>



</div>


<!--###################  Desktop Version     ######################-->


<!--###################  Responsive Version     ######################-->


<div class="appointment_mainBG_responsive">

</div>


<div class="pagination_responsive">

    <ul class="pagination">
        <div class="section-title" id="section-title">

            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Center</th>
                        <th> Department</th>
                        <th>Doctor's Name</th>
                        <th>Doctor's Degree</th>
                        <th>Timings</th>
                        <th>Booking</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($doctors))
                        @foreach ($doctors as $key => $doctor)
                            <tr>
                                <td>{{ $doctor->center }}</td>
                                <td>{{ $doctor->department }}</td>
                                <td>{{ $doctor->doctor_name }}</td>
                                <td>{{ $doctor->doctor_degree }}</td>
                                @if(!empty($doctor->times->start_days))
                                    <td>{{ $doctor->times->start_days }}&nbsp;To&nbsp;{{ $doctor->times->end_days }}&nbsp;From&nbsp;{{ $doctor->times->strat_time }}&nbsp;To&nbsp;{{ $doctor->times->end_time }}</td>
                                @else
                                    <td>NO Time</td>
                                @endif
                               <td class="text-center"><a type="button" href="{{ route('fortune.getAppoinmet',[$doctor->id]) }}"><i class="fa fa-medkit" style="font-size:32px;color:red"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <th colspan="4"><a class="bg-danger">No Record Found !!</a></th>
                        </tr>
                    @endif

                </tbody>
            </table>
        </div>

    </ul>
</div>



<!--###################  Responsive Version     ######################-->
</div>
</div>
</div>
</div>




<!------------------  profile ------------------->
</div>

@endsection
