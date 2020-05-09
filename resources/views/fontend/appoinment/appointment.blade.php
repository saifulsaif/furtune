@extends('fontend.app')
@section('content')

<div class="body_maindiv">

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

<div class="search_alphabet_heading" style="text-align:center; text-transform:uppercase; font-weight:600; margin-bottom:30px; line-height:34px;">FIND AND BOOK AN APPOINTMENT WITH DOCTORS</div>

<div class="find_textmaindiv_new">

<div class="polyclinic_search_div">

  <select name="center" id="center" class="polyclinic_dropdown">
      <option value="Doctor">Search By Doctor's Name</option>
    <option value="Location">Search By Location</option>
    <option value="Department">Search By Department</option>


  </select>
</div>
<div class="findtestbox_div"><input name="doctor_name" id="doctor_name" type="text" class="polyclinic_txtbox" value="" autocomplete="off" style="padding:0px 2%;" placeholder="Search by Doctor's Name / Location / Department" onkeyup="search_doctor()"><div id="suggesstion-box"></div></div>
<div class="find_testbtndiv"><input name="find" type="submit" value="SEARCH" class="find_btn"></div>


</div>




</div>

</div>

</form>

<!--###################  Desktop Version     ######################-->


<div class="appointment_mainBG">

<div class="box-container-table">
    <div class="container-table">

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
                            <td>C{{ $doctor->doctor_name }}</td>
                            <td>{{ $doctor->doctor_degree }}</td>
                            <td>{{ $doctor->times->start_days }}&nbsp;To&nbsp;{{ $doctor->times->end_days }}&nbsp;From&nbsp;{{ $doctor->times->strat_time }}&nbsp;To&nbsp;{{ $doctor->times->end_time }}</td>
                            <td class="text-center"><a type="button" onclick="appointment_modal({{ $doctor->id }})"><i class="fa fa-medkit" style="font-size:32px;color:red"></i></a></td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th colspan="5">No Record Found !!</th>
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

<table class="footable phone breakpoint footable-loaded" style="border-collapse:collapse;" cellspacing="0" cellpadding="0" bordercolor="#333333" border="1">
      <thead>

        <tr>
          <th data-class="expand"> Center Location </th>
          <th> Department </th>
          <th data-hide="phone,tablet" style="display: none;">
          Doctor's Name          </th>
          <th data-hide="phone,tablet" style="display: none;">
           <!-- DOB-->          </th>
          <th data-hide="phone" style="display: none;">
            Doctor's Degree          </th>
          <th data-hide="phone" style="display: none;">
            Timings          </th>
           <th data-hide="phone" style="display: none;">
            Book An Appointment          </th>
        </tr>
      </thead>
      <tbody>


        <tr>
        <td class="expand">DIAMOND HARBOUR</td>
        <td>CARDIOLOGY</td>
        <td style="display: none;">DR. SUNANDA JANA</td>
        <td style="display: none;"></td>
        <td style="display: none;">MBBS, PGDCC</td>
         <td style="display: none;">Tuesday @ 08:30 am. - 10:30 am. &amp; Friday @ 09:00 am. - 11:00 am.</td>
          <td data-value="1" class="book_appointment_btn_responsive" style="display: none;"><a class="various4" data-fancybox-type="iframe" href="doctor_appointment_responsive.php?doctor_id=19&amp;loc=DIAMOND HARBOUR" style="text-decoration:none; color:#0066CC;">Book an Appointment </a></td>

          <!-- <td data-value="1" class="book_appointment_btn_responsive"><a class="various4" data-fancybox-type="iframe" href="doctor_details_responsive.php" style="text-decoration:none; color:#0066CC;">Kniow More </a></td>-->
        </tr>



        <tr>
        <td class="expand">DIAMOND HARBOUR</td>
        <td>CARDIOLOGY</td>
        <td style="display: none;">DR. S. K. GHOSH</td>
        <td style="display: none;"></td>
        <td style="display: none;">MBBS, MD (MEDICINE), DM (CARDIOLOGY)</td>
         <td style="display: none;">Saturday @ 03:30 pm. - 05:00 pm.</td>
          <td data-value="1" class="book_appointment_btn_responsive" style="display: none;"><a class="various4" data-fancybox-type="iframe" href="doctor_appointment_responsive.php?doctor_id=20&amp;loc=DIAMOND HARBOUR" style="text-decoration:none; color:#0066CC;">Book an Appointment </a></td>

          <!-- <td data-value="1" class="book_appointment_btn_responsive"><a class="various4" data-fancybox-type="iframe" href="doctor_details_responsive.php" style="text-decoration:none; color:#0066CC;">Kniow More </a></td>-->
        </tr>



        <tr>
        <td class="expand">MALL ROAD CENTRE</td>
        <td>CARDIOLOGY</td>
        <td style="display: none;">DR. KUMAR SANKAR PODDER</td>
        <td style="display: none;"></td>
        <td style="display: none;">MD(MEDICINE), DM (CARDIOLOGY)</td>
         <td style="display: none;">Monday to Friday @ 08:00 am. - 09:00 am. &amp; Saturday @ 02:30 pm.</td>
          <td data-value="1" class="book_appointment_btn_responsive" style="display: none;"><a class="various4" data-fancybox-type="iframe" href="doctor_appointment_responsive.php?doctor_id=21&amp;loc=MALL ROAD CENTRE" style="text-decoration:none; color:#0066CC;">Book an Appointment </a></td>

          <!-- <td data-value="1" class="book_appointment_btn_responsive"><a class="various4" data-fancybox-type="iframe" href="doctor_details_responsive.php" style="text-decoration:none; color:#0066CC;">Kniow More </a></td>-->
        </tr>



        <tr>
        <td class="expand">HABRA </td>
        <td>CARDIOLOGY</td>
        <td style="display: none;">DR. SUDIP KR. GHOSH</td>
        <td style="display: none;"></td>
        <td style="display: none;">MBBS, MD (MEDICINE) (CAL), DM (CARDIOLOGY)</td>
         <td style="display: none;">Sunday @ 02:00 pm.</td>
          <td data-value="1" class="book_appointment_btn_responsive" style="display: none;"><a class="various4" data-fancybox-type="iframe" href="doctor_appointment_responsive.php?doctor_id=41&amp;loc=HABRA " style="text-decoration:none; color:#0066CC;">Book an Appointment </a></td>

          <!-- <td data-value="1" class="book_appointment_btn_responsive"><a class="various4" data-fancybox-type="iframe" href="doctor_details_responsive.php" style="text-decoration:none; color:#0066CC;">Kniow More </a></td>-->
        </tr>



        <tr>
        <td class="expand">JODHPUR PARK</td>
        <td>CARDIOLOGY</td>
        <td style="display: none;">DR. SUMANTA CHATTERJEE</td>
        <td style="display: none;"></td>
        <td style="display: none;">MBBS, MD, DM (CARDIOLOGY)</td>
         <td style="display: none;">Everyday except Sunday @ 05:00 pm. - 06:00 pm.</td>
          <td data-value="1" class="book_appointment_btn_responsive" style="display: none;"><a class="various4" data-fancybox-type="iframe" href="doctor_appointment_responsive.php?doctor_id=42&amp;loc=JODHPUR PARK" style="text-decoration:none; color:#0066CC;">Book an Appointment </a></td>

          <!-- <td data-value="1" class="book_appointment_btn_responsive"><a class="various4" data-fancybox-type="iframe" href="doctor_details_responsive.php" style="text-decoration:none; color:#0066CC;">Kniow More </a></td>-->
        </tr>



        <tr>
        <td class="expand">GARIA </td>
        <td>CARDIOLOGY</td>
        <td style="display: none;">DR. SUDIPTA ROY</td>
        <td style="display: none;"></td>
        <td style="display: none;">MBBS, MD (CAL) (GOLD MEDALIST)</td>
         <td style="display: none;">Monday - Saturday @ 05:00 pm. - 06:00 pm. </td>
          <td data-value="1" class="book_appointment_btn_responsive" style="display: none;"><a class="various4" data-fancybox-type="iframe" href="doctor_appointment_responsive.php?doctor_id=63&amp;loc=GARIA " style="text-decoration:none; color:#0066CC;">Book an Appointment </a></td>

          <!-- <td data-value="1" class="book_appointment_btn_responsive"><a class="various4" data-fancybox-type="iframe" href="doctor_details_responsive.php" style="text-decoration:none; color:#0066CC;">Kniow More </a></td>-->
        </tr>



        <tr>
        <td class="expand">LAKE TOWN</td>
        <td>CARDIOLOGY</td>
        <td style="display: none;">DR. SUPRIYO SAHA</td>
        <td style="display: none;"></td>
        <td style="display: none;">MBBS, MD, DGM, FCCM, PGC</td>
         <td style="display: none;">Wednesday @ 06:00 pm. Onwards By Appointment </td>
          <td data-value="1" class="book_appointment_btn_responsive" style="display: none;"><a class="various4" data-fancybox-type="iframe" href="doctor_appointment_responsive.php?doctor_id=78&amp;loc=LAKE TOWN" style="text-decoration:none; color:#0066CC;">Book an Appointment </a></td>

          <!-- <td data-value="1" class="book_appointment_btn_responsive"><a class="various4" data-fancybox-type="iframe" href="doctor_details_responsive.php" style="text-decoration:none; color:#0066CC;">Kniow More </a></td>-->
        </tr>



        <tr>
        <td class="expand">BARASAT</td>
        <td>CARDIOLOGY</td>
        <td style="display: none;">DR. PARTHA PRATIM DEY</td>
        <td style="display: none;"></td>
        <td style="display: none;">MBBS, DTMH, PGDCC (D. CLINICAL CARDIOLOGY), FCCS, CCMTD (THYROID DISORDER), CCGDM, CCEBDM (BY INT. D</td>
         <td style="display: none;">Tuesday @ 12:00 noon (by Appoinment)</td>
          <td data-value="1" class="book_appointment_btn_responsive" style="display: none;"><a class="various4" data-fancybox-type="iframe" href="doctor_appointment_responsive.php?doctor_id=111&amp;loc=BARASAT" style="text-decoration:none; color:#0066CC;">Book an Appointment </a></td>

          <!-- <td data-value="1" class="book_appointment_btn_responsive"><a class="various4" data-fancybox-type="iframe" href="doctor_details_responsive.php" style="text-decoration:none; color:#0066CC;">Kniow More </a></td>-->
        </tr>



        <tr>
        <td class="expand">SL2 (JC21)</td>
        <td>CARDIOLOGY</td>
        <td style="display: none;">DR. ARINDAM PANDAY</td>
        <td style="display: none;"></td>
        <td style="display: none;">MBBS, MD (MEDICINE), DM (CARDIOLOGY), FESC, FECC (USA)</td>
         <td style="display: none;">Monday @ 09:00 am. </td>
          <td data-value="1" class="book_appointment_btn_responsive" style="display: none;"><a class="various4" data-fancybox-type="iframe" href="doctor_appointment_responsive.php?doctor_id=120&amp;loc=SL2 (JC21)" style="text-decoration:none; color:#0066CC;">Book an Appointment </a></td>

          <!-- <td data-value="1" class="book_appointment_btn_responsive"><a class="various4" data-fancybox-type="iframe" href="doctor_details_responsive.php" style="text-decoration:none; color:#0066CC;">Kniow More </a></td>-->
        </tr>



        <tr>
        <td class="expand">SL2 (JC21)</td>
        <td>CARDIOLOGY</td>
        <td style="display: none;">DR. SANDIP CHAKRABORTY</td>
        <td style="display: none;"></td>
        <td style="display: none;">MBBS (CAL), DIP (CARDIOLOGY) (DELHI), FCCP (DELHI)</td>
         <td style="display: none;">Wednesday &amp; Friday by Appointment</td>
          <td data-value="1" class="book_appointment_btn_responsive" style="display: none;"><a class="various4" data-fancybox-type="iframe" href="doctor_appointment_responsive.php?doctor_id=139&amp;loc=SL2 (JC21)" style="text-decoration:none; color:#0066CC;">Book an Appointment </a></td>

          <!-- <td data-value="1" class="book_appointment_btn_responsive"><a class="various4" data-fancybox-type="iframe" href="doctor_details_responsive.php" style="text-decoration:none; color:#0066CC;">Kniow More </a></td>-->
        </tr>



        <tr>
        <td class="expand">HOWRAH </td>
        <td>CARDIOLOGY</td>
        <td style="display: none;">DR. SUDIP CHAKRABORTY</td>
        <td style="display: none;"></td>
        <td style="display: none;">MBBS, FCCS (USA), CCDM (DIABETES), FELLOWSHIP IN CLINICAL CARDIOLOGY</td>
         <td style="display: none;">Tuesday, Thursday &amp; Saturday by Appointment</td>
          <td data-value="1" class="book_appointment_btn_responsive" style="display: none;"><a class="various4" data-fancybox-type="iframe" href="doctor_appointment_responsive.php?doctor_id=147&amp;loc=HOWRAH " style="text-decoration:none; color:#0066CC;">Book an Appointment </a></td>

          <!-- <td data-value="1" class="book_appointment_btn_responsive"><a class="various4" data-fancybox-type="iframe" href="doctor_details_responsive.php" style="text-decoration:none; color:#0066CC;">Kniow More </a></td>-->
        </tr>



        <tr>
        <td class="expand">BARRACKPORE</td>
        <td>CARDIOLOGY</td>
        <td style="display: none;">DR. SAMARESH CHANDRA SARKAR</td>
        <td style="display: none;"></td>
        <td style="display: none;">MBBS, PGDCC</td>
         <td style="display: none;">Monday, Wednesday &amp; Friday @ 01:30 pm. by Appointment</td>
          <td data-value="1" class="book_appointment_btn_responsive" style="display: none;"><a class="various4" data-fancybox-type="iframe" href="doctor_appointment_responsive.php?doctor_id=164&amp;loc=BARRACKPORE" style="text-decoration:none; color:#0066CC;">Book an Appointment </a></td>

          <!-- <td data-value="1" class="book_appointment_btn_responsive"><a class="various4" data-fancybox-type="iframe" href="doctor_details_responsive.php" style="text-decoration:none; color:#0066CC;">Kniow More </a></td>-->
        </tr>



        <tr>
        <td class="expand">BIRATI</td>
        <td>CARDIOLOGY</td>
        <td style="display: none;">DR. JAYANTA DUTTA</td>
        <td style="display: none;"></td>
        <td style="display: none;">MD, DNB</td>
         <td style="display: none;">Tuesday &amp; Saturday @ 01:30 pm. - 03:00 pm.</td>
          <td data-value="1" class="book_appointment_btn_responsive" style="display: none;"><a class="various4" data-fancybox-type="iframe" href="doctor_appointment_responsive.php?doctor_id=172&amp;loc=BIRATI" style="text-decoration:none; color:#0066CC;">Book an Appointment </a></td>

          <!-- <td data-value="1" class="book_appointment_btn_responsive"><a class="various4" data-fancybox-type="iframe" href="doctor_details_responsive.php" style="text-decoration:none; color:#0066CC;">Kniow More </a></td>-->
        </tr>



        <tr>
        <td class="expand">BIRATI</td>
        <td>CARDIOLOGY</td>
        <td style="display: none;">DR. SOUMEN MAJUMDER</td>
        <td style="display: none;"></td>
        <td style="display: none;">MBBS (CAL), DIP (CARDIOLOGY)</td>
         <td style="display: none;">Monday - Friday @ 04:00 pm. &amp; Saturday @ 03:00 pm. onwards by Appointment</td>
          <td data-value="1" class="book_appointment_btn_responsive" style="display: none;"><a class="various4" data-fancybox-type="iframe" href="doctor_appointment_responsive.php?doctor_id=173&amp;loc=BIRATI" style="text-decoration:none; color:#0066CC;">Book an Appointment </a></td>

          <!-- <td data-value="1" class="book_appointment_btn_responsive"><a class="various4" data-fancybox-type="iframe" href="doctor_details_responsive.php" style="text-decoration:none; color:#0066CC;">Kniow More </a></td>-->
        </tr>



        <tr>
        <td class="expand">CHINAR PARK </td>
        <td>CARDIOLOGY</td>
        <td style="display: none;">DR. ANIRUDDHA DE</td>
        <td style="display: none;"></td>
        <td style="display: none;">MBBS (CAL), MD (PGI CHANDIGAR), DNB</td>
         <td style="display: none;">Monday - Saturday @ 09.30 am. - 10:30 am.</td>
          <td data-value="1" class="book_appointment_btn_responsive" style="display: none;"><a class="various4" data-fancybox-type="iframe" href="doctor_appointment_responsive.php?doctor_id=197&amp;loc=CHINAR PARK " style="text-decoration:none; color:#0066CC;">Book an Appointment </a></td>

          <!-- <td data-value="1" class="book_appointment_btn_responsive"><a class="various4" data-fancybox-type="iframe" href="doctor_details_responsive.php" style="text-decoration:none; color:#0066CC;">Kniow More </a></td>-->
        </tr>



        <tr>
        <td class="expand">DUNLOP </td>
        <td>CARDIOLOGY</td>
        <td style="display: none;">DR. SOUMIK BASU</td>
        <td style="display: none;"></td>
        <td style="display: none;">MD, DM (CARDIOLOGY)</td>
         <td style="display: none;">Monday &amp; Tuesday @ 06:00 pm.</td>
          <td data-value="1" class="book_appointment_btn_responsive" style="display: none;"><a class="various4" data-fancybox-type="iframe" href="doctor_appointment_responsive.php?doctor_id=239&amp;loc=DUNLOP " style="text-decoration:none; color:#0066CC;">Book an Appointment </a></td>

          <!-- <td data-value="1" class="book_appointment_btn_responsive"><a class="various4" data-fancybox-type="iframe" href="doctor_details_responsive.php" style="text-decoration:none; color:#0066CC;">Kniow More </a></td>-->
        </tr>



        <tr>
        <td class="expand">DUNLOP </td>
        <td>CARDIOLOGY</td>
        <td style="display: none;">DR. SANDIP CHAKRABORTY</td>
        <td style="display: none;"></td>
        <td style="display: none;">MBBS, DIP CARD, FCCP (DELHI), ACLS &amp; BLS TRAINED, CCBDM (PHFI -DELHI), PGD (DELHI)</td>
         <td style="display: none;">Monday @ 05:00 pm. - 07:00 pm. &amp; Saturday @ 01:00 pm. - 03:00 pm.</td>
          <td data-value="1" class="book_appointment_btn_responsive" style="display: none;"><a class="various4" data-fancybox-type="iframe" href="doctor_appointment_responsive.php?doctor_id=240&amp;loc=DUNLOP " style="text-decoration:none; color:#0066CC;">Book an Appointment </a></td>

          <!-- <td data-value="1" class="book_appointment_btn_responsive"><a class="various4" data-fancybox-type="iframe" href="doctor_details_responsive.php" style="text-decoration:none; color:#0066CC;">Kniow More </a></td>-->
        </tr>



        <tr>
        <td class="expand">DUNLOP </td>
        <td>CARDIOLOGY</td>
        <td style="display: none;">DR.PRAJJWAL KUMAR SINHA</td>
        <td style="display: none;"></td>
        <td style="display: none;">MD, DM (CARDIOLOGY)</td>
         <td style="display: none;">Thursday @ 03:00 pm. &amp; Friday @ 05:30 pm. </td>
          <td data-value="1" class="book_appointment_btn_responsive" style="display: none;"><a class="various4" data-fancybox-type="iframe" href="doctor_appointment_responsive.php?doctor_id=743&amp;loc=DUNLOP " style="text-decoration:none; color:#0066CC;">Book an Appointment </a></td>

          <!-- <td data-value="1" class="book_appointment_btn_responsive"><a class="various4" data-fancybox-type="iframe" href="doctor_details_responsive.php" style="text-decoration:none; color:#0066CC;">Kniow More </a></td>-->
        </tr>



        <tr>
        <td class="expand">DUNLOP </td>
        <td>CARDIOLOGY</td>
        <td style="display: none;">DR. MOUSUMI KUNDU</td>
        <td style="display: none;"></td>
        <td style="display: none;">MBBS (CAL), MD (MEDICINE), DM (CARDIOLOGY)</td>
         <td style="display: none;">Saturday @ 05:30 pm.</td>
          <td data-value="1" class="book_appointment_btn_responsive" style="display: none;"><a class="various4" data-fancybox-type="iframe" href="doctor_appointment_responsive.php?doctor_id=243&amp;loc=DUNLOP " style="text-decoration:none; color:#0066CC;">Book an Appointment </a></td>

          <!-- <td data-value="1" class="book_appointment_btn_responsive"><a class="various4" data-fancybox-type="iframe" href="doctor_details_responsive.php" style="text-decoration:none; color:#0066CC;">Kniow More </a></td>-->
        </tr>



        <tr>
        <td class="expand">ELGIN ROAD CENTRE</td>
        <td>CARDIOLOGY</td>
        <td style="display: none;">DR. MALAY ACHARYYA</td>
        <td style="display: none;"></td>
        <td style="display: none;">MBBS (CAL), MD (MED), DM (CARDIOLOGY)</td>
         <td style="display: none;"> Friday @ 11:00 am. - 02:00 pm. </td>
          <td data-value="1" class="book_appointment_btn_responsive" style="display: none;"><a class="various4" data-fancybox-type="iframe" href="doctor_appointment_responsive.php?doctor_id=276&amp;loc=ELGIN ROAD CENTRE" style="text-decoration:none; color:#0066CC;">Book an Appointment </a></td>

          <!-- <td data-value="1" class="book_appointment_btn_responsive"><a class="various4" data-fancybox-type="iframe" href="doctor_details_responsive.php" style="text-decoration:none; color:#0066CC;">Kniow More </a></td>-->
        </tr>



      </tbody>
    </table>
</div>


<div class="pagination_responsive"><ul class="pagination"><li class="details">Page 1 of 35</li><li><a class="current">Prev</a></li><li><a class="current">1</a></li><li><a href="?page=2">Next</a></li></ul></div>



<!--###################  Responsive Version     ######################-->
</div>
</div>
</div>
</div>





<!------------------  profile ------------------->
</div>


@endsection
