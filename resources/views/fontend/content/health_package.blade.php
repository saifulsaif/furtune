
@extends('fontend.app')
@section('content')



<!-----------------  Body Start  ------------------ -->


<div class="body_maindiv">




<!------------------  profile  ------------------->

<div class="profile_aboutmaindiv">

<div class="header_bandmaindiv">
<div class="header_banddiv">

<div class="static_page_heading">Health Package</div>

<div class="breadcrum_div"><a href="../index.php" style="text-decoration:none; color:#333333;">Home</a> > Home Package</div>

</div>

</div>

<div class="static_bodydiv">

<div class="static_mainbody_div">




<div class="static_pagetxt" style="margin-bottom:30px;">

Furtunehas unique health packages meant for all categories of people, age and discipline. These packages are tailor made to match with every individual’s needs. There are special packages for corporates and also for people with wedding bells ringing at their doorsteps.


</div>

<div class="static_pagetxt" >
  @foreach($health_package as $pack)
<a href="{{url('package-details/'.$pack->id)}}" title="FurtuneExecutive Health Checkup Gold Package">
<!--<a  href="images/health_package/Executive_Gold_Package_text1.jpg" data-lightbox="Executive_Gold_Package" data-title="FurtuneExecutive Gold Package" class=" example-image-link" style="text-decoration:none;">-->

<div class="package_BG">

<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
		<div class="flipper">
			<div class="front" style="height: 500px;background: url({{asset($pack->image)}}) 0 0 no-repeat; background-size:100% 100%; " alt="FurtuneExecutive Health Checkup Gold Package">
			</div>
			<div class="back" style="background: url({{asset($pack->hover_image)}}) 0 0 no-repeat;  " alt="FurtuneExecutive Health Checkup Gold Package">

			</div>
		</div>
</div>

</div> </a>
@endforeach



</div>

</div>

</div>
</div>





<!------------------  profile ------------------->






</div>





<!-----------------  Body End  ------------------ -->



@endsection
