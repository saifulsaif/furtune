
@extends('fontend.app')
@section('content')


<!-----------------  Body Start  ------------------ -->


<div class="body_maindiv">




<!------------------  profile  ------------------->

<div class="profile_aboutmaindiv">

<div class="header_bandmaindiv">
<div class="header_banddiv">

<div class="static_page_heading">Home Collection Services</div>

<div class="breadcrum_div"><a href="../index.php" style="text-decoration:none; color:#333333;">Home</a> > Home Collections</div>

</div>

</div>

<div class="static_bodydiv">

<div class="static_mainbody_div">




<div class="static_pagetxt" style="margin-bottom:25px;">
FurtuneDiagnostics offers a wide network of home collection services to residents of West Bengal, Bihar, Delhi & NCR.  All home collection services are extended to patients residing within 10-30 km of our centers spread all over West Bengal, and those in Delhi & NCR and Bihar. We have thoroughly trained phlebotomists who ensure that your sample collection is hassle-free and effortless. Availing our home collection services is easy and affordable.





</div>


<div class="static_pagetxt">

<div class="static_pagetxt" ><span class="static_subheading" style="font-weight:500;">To book your home collection, call us at:  </span></div>

<div class="static_pagetxt" >
<span  style="font-weight:600;">

West Bengal : <a href="tel:03366191000" style="text-decoration:none; color:#000000; line-height:30px;">&nbsp;&nbsp;033-6619-1000</a><br />

<!--Delhi & NCR : <a href="tel:18001219541" style="text-decoration:none; color:#000000; line-height:30px;">&nbsp;&nbsp;1800-121-9541</a><br />-->

Bihar : <a href="tel:09523096399" style="text-decoration:none; color:#000000; line-height:30px;">&nbsp;&nbsp;0952-309-6399 </a><br />
Whatsapp: <a href="whatsapp://send?phone=+917044492525" style="text-decoration:none; color:#000000; line-height:30px;">&nbsp;&nbsp;7044492525</a></span>





</div>



<div class="static_pagetxt" style="margin-bottom:40px;"><span class="static_subheading" style="font-weight:500;">Main Benefits of Home Collection Services: </span></div>

<div class="static_pagetxt1" >

@foreach($home_collection as $home)
<div class="collection_benefitdiv">
<div class="benifiticon_maindiv"><div class="{{$home->icon}}"></div></div>
<div class="comfortiblediv_txt">{{$home->service}}</div>
</div>
@endforeach


</div>






</div>

</div>

</div>


</div>





<!------------------  profile ------------------->






</div>





<!-----------------  Body End  ------------------ -->

@endsection
