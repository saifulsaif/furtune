
@extends('fontend.app')
@section('content')


<!-----------------  Body Start  ------------------ -->


<div class="body_maindiv">




<!------------------  profile  ------------------->

<div class="profile_aboutmaindiv">

<div class="header_bandmaindiv">
<div class="header_banddiv">

<div class="static_page_heading">Team of Experts</div>

<div class="breadcrum_div"><a href="../../index.php" style="text-decoration:none; color:#333333;">Home</a> > About Us > Team of Experts</div>

</div>

</div>

<div class="static_bodydiv">

<div class="static_mainbody_div">




<div class="static_pagetxt">
<strong>FortuneDiagnostics</strong> has its own super speciality laboratory for exclusive patient care. It consists of the disciplines of Molecular Biology, Cytogenetics,  Histopathology, Cytopathology, Immunohistochemistry, Flow Cytometry, Microbiology, Biochemistry, Haematology, Clinical Pathology. Each departmental lab provides qualitative and quantitative analysis of biological fluids such as blood, serum or plasma, tissue, urine and stool for specific constituents.<br />
<br />
The laboratories have state-of-the-art equipments operated by a team of efficient technicians and highly qualified doctors who provide world-class results with quality assurance. The Department of Pathology provides daily routine services with interpretations by competent pathologists as enlisted herein: <br />
<br />


@foreach($experts as $expert)
<div class="expartBG_main">

<div class="expart_maindiv">

<div class="expartsimage"><img src="{{$expert->image}}" class="img_css" alt="Suparba Chakrabarti" /></div>
<div class="teamtxt_mainBG">
<span class="team_name">{{$expert->name}}</span><br />
<strong>{{$expert->specialization}} </strong><br />
<br />
<strong>From :</strong> {{$expert->from}}
<br />
<br />


<strong>Specialization :</strong>{{$expert->specialization}} <br />
<br />


<strong>Area of Interest :</strong>{{$expert->intertest}}



</div>

</div>

<div class="view_fullprofile"><div class="fullprofile_div"><a class="various" data-fancybox-type="iframe" href="../../suparba-chakrabarti.php"><button class="button" style="float:right; width:100%;"><span>View Full Profile </span></button> </a></div></div>


</div>
@endforeach


</div>

</div>

</div>


</div>





<!------------------  profile ------------------->






</div>





<!-----------------  Body End  ------------------ -->
@endsection
