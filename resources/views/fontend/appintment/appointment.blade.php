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

<!--<div class="search_maindiv">
<div class="search_headingtxt">Select Center</div>
<div class="polyclinic_search_div">

  <select name="center"  id="center" class="polyclinic_dropdown">
    <option value="" selected="selected">Select Center</option>

        <option value="BARASAT">BARASAT</option>
        <option value="BARRACKPORE">BARRACKPORE</option>
        <option value="BHATPARA ">BHATPARA </option>
        <option value="BIRATI">BIRATI</option>
        <option value="CHINAR PARK ">CHINAR PARK </option>
        <option value="DIAMOND HARBOUR">DIAMOND HARBOUR</option>
        <option value="DUNLOP ">DUNLOP </option>
        <option value="ELGIN ROAD CENTRE">ELGIN ROAD CENTRE</option>
        <option value="GARIA ">GARIA </option>
        <option value="HABRA ">HABRA </option>
        <option value="HOWRAH ">HOWRAH </option>
        <option value="JODHPUR PARK">JODHPUR PARK</option>
        <option value="KASBA">KASBA</option>
        <option value="KESTOPUR">KESTOPUR</option>
        <option value="KHARDAH">KHARDAH</option>
        <option value="LAKE TOWN">LAKE TOWN</option>
        <option value="MALL ROAD CENTRE">MALL ROAD CENTRE</option>
        <option value="NEW BARRACKPORE">NEW BARRACKPORE</option>
        <option value="PHOOLBAGAN POLYCLINIC">PHOOLBAGAN POLYCLINIC</option>
        <option value="PRADHAN NAGAR">PRADHAN NAGAR</option>
        <option value="Serampore">Serampore</option>
        <option value="SL2 (JC21)">SL2 (JC21)</option>
        <option value="SODPUR">SODPUR</option>
      </select>
</div>
</div>

<div class="search_maindiv">
<div class="search_headingtxt">Select Department</div>
<div class="polyclinic_search_div">
<select name="speciality" id="speciality" class="polyclinic_dropdown">

<option value="" selected="selected">Select Department</option>
 <option value="CARDIOLOGY">CARDIOLOGY</option>

  <option value="CARDIOTHORACIC">CARDIOTHORACIC</option>

  <option value="CONSULTANT PHYSICIAN">CONSULTANT PHYSICIAN</option>

  <option value="DERMATOLOGY">DERMATOLOGY</option>

  <option value="DIABETOLOGY">DIABETOLOGY</option>

  <option value="DIABETOLOGY & ENDOCRINOLOGY">DIABETOLOGY & ENDOCRINOLOGY</option>

  <option value="DIETETICS">DIETETICS</option>

  <option value="ENT">ENT</option>

  <option value="EYE">EYE</option>

  <option value="GASTROENTEROLOGY">GASTROENTEROLOGY</option>

  <option value="GENARAL MEDICINE">GENARAL MEDICINE</option>

  <option value="GENERAL MEDICINE">GENERAL MEDICINE</option>

  <option value="GENERAL PHYSICIAN">GENERAL PHYSICIAN</option>

  <option value="GENERAL SURGERY">GENERAL SURGERY</option>

  <option value="GERIATRICS">GERIATRICS</option>

  <option value="GYNAECOLOGY & OBSTETRICS">GYNAECOLOGY & OBSTETRICS</option>

  <option value="HAEMATOLOGY">HAEMATOLOGY</option>

  <option value="HOMEOPATHY">HOMEOPATHY</option>

  <option value="INTERNAL MEDICINE">INTERNAL MEDICINE</option>

  <option value="LAPAROSCOPIC SURGERY">LAPAROSCOPIC SURGERY</option>

  <option value="NEPHROLOGY">NEPHROLOGY</option>

  <option value="NEURO PSYCHIATRY">NEURO PSYCHIATRY</option>

  <option value="NEURO SURGERY">NEURO SURGERY</option>

  <option value="NEURO-SURGERY">NEURO-SURGERY</option>

  <option value="NEUROLOGY">NEUROLOGY</option>

  <option value="NEUROPSYCHIATRY">NEUROPSYCHIATRY</option>

  <option value="ONCO SURGERY">ONCO SURGERY</option>

  <option value="ONCOLOGY">ONCOLOGY</option>

  <option value="OPHTHALMOLOGY">OPHTHALMOLOGY</option>

  <option value="ORTHOPAEDICS">ORTHOPAEDICS</option>

  <option value="PAEDIATICS">PAEDIATICS</option>

  <option value="PAEDIATRICS ">PAEDIATRICS </option>

  <option value="PHYSIOTHERAPY">PHYSIOTHERAPY</option>

  <option value="PSYCHIATRY">PSYCHIATRY</option>

  <option value="PSYCHOLOGY">PSYCHOLOGY</option>

  <option value="PULMONOLOGY">PULMONOLOGY</option>

  <option value="RHEUMATOLOGY">RHEUMATOLOGY</option>

  <option value="SPINE SURGERY">SPINE SURGERY</option>

  <option value="SURGERY">SURGERY</option>

  <option value="TROPICAL MEDICINE">TROPICAL MEDICINE</option>

  <option value="URO-SURGERY">URO-SURGERY</option>

  <option value="UROLOGY">UROLOGY</option>

 </select>
</div>
</div>

<div class="search_maindiv">
<div class="search_headingtxt"> Doctor's Name</div>
<div class="polyclinic_search_div">
<input name="doctor_name" type="text" class="polyclinic_txtbox" placeholder="Enter Doctor's Name" value="" autocomplete="off" />
</div>
</div>


<div class="search_maindiv">
<div class="search_headingtxt1">&nbsp;</div>
<div class="polyclinic_search_div">
<input name="find" type="submit" value="FIND" class="find_btn" />
</div>
</div>-->

<!--<div class="tab_div_main">

<div class="tab_btn_main">Search By Doctor Name</div>
<a href="polyclinic-location.php"><div class="tab_btn_hover">Search By Location</div></a>
<a href="polyclinic-department.php"><div class="tab_btn_hover">Search By Department</div></a>


</div>-->

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







        <table class="table-scroll footable-loaded default">
            <thead>


                <tr>
                  <th class="footable-first-column" width="15%">
                      <div> Center</div>
                  </th>
                  <th width="15%">
                      <div>Department</div>
                  </th>
                  <th width="17%">
                      <div>Doctor's Name</div>
                  </th>
                  <th width="25%">
                      <div>Doctor's Degree</div>
                  </th>
                  <th width="20%">
                      <div>Timings</div>
                  </th>

                  <th class="footable-last-column" width="8%">
                      <div style="padding-left:10px;"> Booking</div>
                  </th>
                </tr>
            </thead>
            <tbody>








                <tr>
                    <td class="footable-first-column">DIAMOND HARBOUR</td>
                    <td>CARDIOLOGY</td>
                    <td>DR. SUNANDA JANA</td>
                    <td style="text-transform:uppercase;">Mbbs, Pgdcc</td>
                    <td>Tuesday @ 08:30 am. - 10:30 am. &amp; Friday @ 09:00 am. - 11:00 am.</td>
                    <td class="footable-last-column"><a class="various3" data-fancybox-type="iframe" href="doctor_appointment.php?doctor_id=19&amp;loc=DIAMOND HARBOUR" style="text-decoration:none;"><i class="lni-first-aid" style="font-size:30px; color:#FF0000;" title="Book an Appointment"></i></a></td>
                </tr>









                <tr>
                    <td class="footable-first-column">DIAMOND HARBOUR</td>
                    <td>CARDIOLOGY</td>
                    <td>DR. S. K. GHOSH</td>
                    <td style="text-transform:uppercase;">Mbbs, Md (medicine), Dm (cardiology)</td>
                    <td>Saturday @ 03:30 pm. - 05:00 pm.</td>
                    <td class="footable-last-column"><a class="various3" data-fancybox-type="iframe" href="doctor_appointment.php?doctor_id=20&amp;loc=DIAMOND HARBOUR" style="text-decoration:none;"><i class="lni-first-aid" style="font-size:30px; color:#FF0000;" title="Book an Appointment"></i></a></td>
                </tr>









                <tr>
                    <td class="footable-first-column">MALL ROAD CENTRE</td>
                    <td>CARDIOLOGY</td>
                    <td>DR. KUMAR SANKAR PODDER</td>
                    <td style="text-transform:uppercase;">Md(medicine), Dm (cardiology)</td>
                    <td>Monday to Friday @ 08:00 am. - 09:00 am. &amp; Saturday @ 02:30 pm.</td>
                    <td class="footable-last-column"><a class="various3" data-fancybox-type="iframe" href="doctor_appointment.php?doctor_id=21&amp;loc=MALL ROAD CENTRE" style="text-decoration:none;"><i class="lni-first-aid" style="font-size:30px; color:#FF0000;" title="Book an Appointment"></i></a></td>
                </tr>









                <tr>
                    <td class="footable-first-column">HABRA </td>
                    <td>CARDIOLOGY</td>
                    <td>DR. SUDIP KR. GHOSH</td>
                    <td style="text-transform:uppercase;">Mbbs, Md (medicine) (cal), Dm (cardiology)</td>
                    <td>Sunday @ 02:00 pm.</td>
                    <td class="footable-last-column"><a class="various3" data-fancybox-type="iframe" href="doctor_appointment.php?doctor_id=41&amp;loc=HABRA " style="text-decoration:none;"><i class="lni-first-aid" style="font-size:30px; color:#FF0000;" title="Book an Appointment"></i></a></td>
                </tr>









                <tr>
                    <td class="footable-first-column">JODHPUR PARK</td>
                    <td>CARDIOLOGY</td>
                    <td>DR. SUMANTA CHATTERJEE</td>
                    <td style="text-transform:uppercase;">Mbbs, Md, Dm (cardiology)</td>
                    <td>Everyday except Sunday @ 05:00 pm. - 06:00 pm.</td>
                    <td class="footable-last-column"><a class="various3" data-fancybox-type="iframe" href="doctor_appointment.php?doctor_id=42&amp;loc=JODHPUR PARK" style="text-decoration:none;"><i class="lni-first-aid" style="font-size:30px; color:#FF0000;" title="Book an Appointment"></i></a></td>
                </tr>









                <tr>
                    <td class="footable-first-column">GARIA </td>
                    <td>CARDIOLOGY</td>
                    <td>DR. SUDIPTA ROY</td>
                    <td style="text-transform:uppercase;">Mbbs, Md (cal) (gold Medalist)</td>
                    <td>Monday - Saturday @ 05:00 pm. - 06:00 pm. </td>
                    <td class="footable-last-column"><a class="various3" data-fancybox-type="iframe" href="doctor_appointment.php?doctor_id=63&amp;loc=GARIA " style="text-decoration:none;"><i class="lni-first-aid" style="font-size:30px; color:#FF0000;" title="Book an Appointment"></i></a></td>
                </tr>









                <tr>
                    <td class="footable-first-column">LAKE TOWN</td>
                    <td>CARDIOLOGY</td>
                    <td>DR. SUPRIYO SAHA</td>
                    <td style="text-transform:uppercase;">Mbbs, Md, Dgm, Fccm, Pgc</td>
                    <td>Wednesday @ 06:00 pm. Onwards By Appointment </td>
                    <td class="footable-last-column"><a class="various3" data-fancybox-type="iframe" href="doctor_appointment.php?doctor_id=78&amp;loc=LAKE TOWN" style="text-decoration:none;"><i class="lni-first-aid" style="font-size:30px; color:#FF0000;" title="Book an Appointment"></i></a></td>
                </tr>









                <tr>
                    <td class="footable-first-column">BARASAT</td>
                    <td>CARDIOLOGY</td>
                    <td>DR. PARTHA PRATIM DEY</td>
                    <td style="text-transform:uppercase;">Mbbs, Dtmh, Pgdcc (d. Clinical Cardiology), Fccs, Ccmtd (thyroid Disorder), Ccgdm, Ccebdm (by Int. D</td>
                    <td>Tuesday @ 12:00 noon (by Appoinment)</td>
                    <td class="footable-last-column"><a class="various3" data-fancybox-type="iframe" href="doctor_appointment.php?doctor_id=111&amp;loc=BARASAT" style="text-decoration:none;"><i class="lni-first-aid" style="font-size:30px; color:#FF0000;" title="Book an Appointment"></i></a></td>
                </tr>









                <tr>
                    <td class="footable-first-column">SL2 (JC21)</td>
                    <td>CARDIOLOGY</td>
                    <td>DR. ARINDAM PANDAY</td>
                    <td style="text-transform:uppercase;">Mbbs, Md (medicine), Dm (cardiology), Fesc, Fecc (usa)</td>
                    <td>Monday @ 09:00 am. </td>
                    <td class="footable-last-column"><a class="various3" data-fancybox-type="iframe" href="doctor_appointment.php?doctor_id=120&amp;loc=SL2 (JC21)" style="text-decoration:none;"><i class="lni-first-aid" style="font-size:30px; color:#FF0000;" title="Book an Appointment"></i></a></td>
                </tr>









                <tr>
                    <td class="footable-first-column">SL2 (JC21)</td>
                    <td>CARDIOLOGY</td>
                    <td>DR. SANDIP CHAKRABORTY</td>
                    <td style="text-transform:uppercase;">Mbbs (cal), Dip (cardiology) (delhi), Fccp (delhi)</td>
                    <td>Wednesday &amp; Friday by Appointment</td>
                    <td class="footable-last-column"><a class="various3" data-fancybox-type="iframe" href="doctor_appointment.php?doctor_id=139&amp;loc=SL2 (JC21)" style="text-decoration:none;"><i class="lni-first-aid" style="font-size:30px; color:#FF0000;" title="Book an Appointment"></i></a></td>
                </tr>









                <tr>
                    <td class="footable-first-column">HOWRAH </td>
                    <td>CARDIOLOGY</td>
                    <td>DR. SUDIP CHAKRABORTY</td>
                    <td style="text-transform:uppercase;">Mbbs, Fccs (usa), Ccdm (diabetes), Fellowship In Clinical Cardiology</td>
                    <td>Tuesday, Thursday &amp; Saturday by Appointment</td>
                    <td class="footable-last-column"><a class="various3" data-fancybox-type="iframe" href="doctor_appointment.php?doctor_id=147&amp;loc=HOWRAH " style="text-decoration:none;"><i class="lni-first-aid" style="font-size:30px; color:#FF0000;" title="Book an Appointment"></i></a></td>
                </tr>









                <tr>
                    <td class="footable-first-column">BARRACKPORE</td>
                    <td>CARDIOLOGY</td>
                    <td>DR. SAMARESH CHANDRA SARKAR</td>
                    <td style="text-transform:uppercase;">Mbbs, Pgdcc</td>
                    <td>Monday, Wednesday &amp; Friday @ 01:30 pm. by Appointment</td>
                    <td class="footable-last-column"><a class="various3" data-fancybox-type="iframe" href="doctor_appointment.php?doctor_id=164&amp;loc=BARRACKPORE" style="text-decoration:none;"><i class="lni-first-aid" style="font-size:30px; color:#FF0000;" title="Book an Appointment"></i></a></td>
                </tr>









                <tr>
                    <td class="footable-first-column">BIRATI</td>
                    <td>CARDIOLOGY</td>
                    <td>DR. JAYANTA DUTTA</td>
                    <td style="text-transform:uppercase;">Md, Dnb</td>
                    <td>Tuesday &amp; Saturday @ 01:30 pm. - 03:00 pm.</td>
                    <td class="footable-last-column"><a class="various3" data-fancybox-type="iframe" href="doctor_appointment.php?doctor_id=172&amp;loc=BIRATI" style="text-decoration:none;"><i class="lni-first-aid" style="font-size:30px; color:#FF0000;" title="Book an Appointment"></i></a></td>
                </tr>









                <tr>
                    <td class="footable-first-column">BIRATI</td>
                    <td>CARDIOLOGY</td>
                    <td>DR. SOUMEN MAJUMDER</td>
                    <td style="text-transform:uppercase;">Mbbs (cal), Dip (cardiology)</td>
                    <td>Monday - Friday @ 04:00 pm. &amp; Saturday @ 03:00 pm. onwards by Appointment</td>
                    <td class="footable-last-column"><a class="various3" data-fancybox-type="iframe" href="doctor_appointment.php?doctor_id=173&amp;loc=BIRATI" style="text-decoration:none;"><i class="lni-first-aid" style="font-size:30px; color:#FF0000;" title="Book an Appointment"></i></a></td>
                </tr>









                <tr>
                    <td class="footable-first-column">CHINAR PARK </td>
                    <td>CARDIOLOGY</td>
                    <td>DR. ANIRUDDHA DE</td>
                    <td style="text-transform:uppercase;">Mbbs (cal), Md (pgi Chandigar), Dnb</td>
                    <td>Monday - Saturday @ 09.30 am. - 10:30 am.</td>
                    <td class="footable-last-column"><a class="various3" data-fancybox-type="iframe" href="doctor_appointment.php?doctor_id=197&amp;loc=CHINAR PARK " style="text-decoration:none;"><i class="lni-first-aid" style="font-size:30px; color:#FF0000;" title="Book an Appointment"></i></a></td>
                </tr>









                <tr>
                    <td class="footable-first-column">DUNLOP </td>
                    <td>CARDIOLOGY</td>
                    <td>DR. SOUMIK BASU</td>
                    <td style="text-transform:uppercase;">Md, Dm (cardiology)</td>
                    <td>Monday &amp; Tuesday @ 06:00 pm.</td>
                    <td class="footable-last-column"><a class="various3" data-fancybox-type="iframe" href="doctor_appointment.php?doctor_id=239&amp;loc=DUNLOP " style="text-decoration:none;"><i class="lni-first-aid" style="font-size:30px; color:#FF0000;" title="Book an Appointment"></i></a></td>
                </tr>









                <tr>
                    <td class="footable-first-column">DUNLOP </td>
                    <td>CARDIOLOGY</td>
                    <td>DR. SANDIP CHAKRABORTY</td>
                    <td style="text-transform:uppercase;">Mbbs, Dip Card, Fccp (delhi), Acls &amp; Bls Trained, Ccbdm (phfi -delhi), Pgd (delhi)</td>
                    <td>Monday @ 05:00 pm. - 07:00 pm. &amp; Saturday @ 01:00 pm. - 03:00 pm.</td>
                    <td class="footable-last-column"><a class="various3" data-fancybox-type="iframe" href="doctor_appointment.php?doctor_id=240&amp;loc=DUNLOP " style="text-decoration:none;"><i class="lni-first-aid" style="font-size:30px; color:#FF0000;" title="Book an Appointment"></i></a></td>
                </tr>









                <tr>
                    <td class="footable-first-column">DUNLOP </td>
                    <td>CARDIOLOGY</td>
                    <td>DR.PRAJJWAL KUMAR SINHA</td>
                    <td style="text-transform:uppercase;">Md, Dm (cardiology)</td>
                    <td>Thursday @ 03:00 pm. &amp; Friday @ 05:30 pm. </td>
                    <td class="footable-last-column"><a class="various3" data-fancybox-type="iframe" href="doctor_appointment.php?doctor_id=743&amp;loc=DUNLOP " style="text-decoration:none;"><i class="lni-first-aid" style="font-size:30px; color:#FF0000;" title="Book an Appointment"></i></a></td>
                </tr>









                <tr>
                    <td class="footable-first-column">DUNLOP </td>
                    <td>CARDIOLOGY</td>
                    <td>DR. MOUSUMI KUNDU</td>
                    <td style="text-transform:uppercase;">Mbbs (cal), Md (medicine), Dm (cardiology)</td>
                    <td>Saturday @ 05:30 pm.</td>
                    <td class="footable-last-column"><a class="various3" data-fancybox-type="iframe" href="doctor_appointment.php?doctor_id=243&amp;loc=DUNLOP " style="text-decoration:none;"><i class="lni-first-aid" style="font-size:30px; color:#FF0000;" title="Book an Appointment"></i></a></td>
                </tr>









                <tr>
                    <td class="footable-first-column">ELGIN ROAD CENTRE</td>
                    <td>CARDIOLOGY</td>
                    <td>DR. MALAY ACHARYYA</td>
                    <td style="text-transform:uppercase;">Mbbs (cal), Md (med), Dm (cardiology)</td>
                    <td> Friday @ 11:00 am. - 02:00 pm. </td>
                    <td class="footable-last-column"><a class="various3" data-fancybox-type="iframe" href="doctor_appointment.php?doctor_id=276&amp;loc=ELGIN ROAD CENTRE" style="text-decoration:none;"><i class="lni-first-aid" style="font-size:30px; color:#FF0000;" title="Book an Appointment"></i></a></td>
                </tr>




            </tbody>
        </table>
    </div>
</div>







</div>

<div class="pagination_desktop"><ul class="pagination"><li class="details">Page 1 of 35</li><li><a class="current">1</a></li><li><a href="?page=2">2</a></li><li><a href="?page=3">3</a></li><li><a href="?page=4">4</a></li><li><a href="?page=5">5</a></li><li><a href="?page=6">6</a></li><li><a href="?page=7">7</a></li><li class="dot">...</li><li><a href="?page=34">34</a></li><li><a href="?page=35">35</a></li><li><a href="?page=2">Next</a></li><li><a href="?page=35">Last</a></li></ul>

          </div>

<!--###################  Desktop Version     ######################-->


<!--###################  Responsive Version     ######################-->


<div class="appointment_mainBG_responsive">

<table class="footable phone breakpoint footable-loaded" style="border-collapse:collapse;" cellspacing="0" cellpadding="0" bordercolor="#333333" border="1">
      <thead>

        <tr>
          <th data-class="expand">
            Center Location          </th>
          <th>
             Department          </th>
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
