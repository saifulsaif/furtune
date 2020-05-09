
@extends('fontend.app')
@section('content')





<!-----------------  Body Start  ------------------ -->


<div class="body_maindiv">




<!------------------  profile  ------------------->

<div class="profile_aboutmaindiv" style="margin-top:200px;">

<div class="header_bandmaindiv">
<div class="header_banddiv">

<div class="static_page_heading">Health Package</div>

<div class="breadcrum_div"><a href="../index.php" style="text-decoration:none; color:#333333;">Home</a>  >  Health Package  >  Executive Health  Package</div>

</div>

</div>

<div class="static_bodydiv">

<div class="static_mainbody_div">




<div class="static_pagetxt">

<span class="static_subheading" style="font-weight:600; font-size:23px; line-height:28px;">{{$packages->package_name}}</span><br /><br />



<div class="healthpackage_new_maindiv">
<div class="healthpackage_imgdivmain"><div class="healthpackage_imgdiv"><img src="{{asset($packages->image)}}" style="width:100%;" alt="Executive Health  Package" /></div>

<div class="book_packagediv"><a class="various5" href="book-package.php?i=Executive Health Package" data-fancybox-type="iframe"><div class="feedback_submit_btn packagebooking1" style="float:left; width:100%; margin-top:10px;">BOOK PACKAGE</div></a></div>


</div>

<div class="healthpackage_details_maindiv">
<div class="healthpackage_detail">


<table width="100%" border="0" cellspacing="0" cellpadding="0">
  @foreach($package_details as $pack)
  <tr>
    <td width="20%" class="table_txt" style="border-right:2px solid #99cf4e; font-weight:600;" valign="top">{{$pack->service}}</td>
    <td width="80%" class="table_txt" style="padding-left:15px; border-bottom:2px solid #99cf4e; padding-bottom:10px;">{{$pack->description}}</td>
  </tr>
  @endforeach
  
</table>






</div>

<div class="book_packagediv"><a class="various5" href="book-package.php?i=Executive Health Package" data-fancybox-type="iframe"><div class="feedback_submit_btn packagebooking2" style="float:left; width:100%; margin-top:10px;">BOOK PACKAGE</div></a></div>


</div>


</div>


</div>




</div>

</div>
</div>





<!------------------  profile ------------------->






</div>





<!-----------------  Body End  ------------------ -->


@endsection
