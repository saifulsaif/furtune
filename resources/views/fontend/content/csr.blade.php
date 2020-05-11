
@extends('fontend.app')
@section('content')






<!-----------------  Body Start  ------------------ -->


<div class="body_maindiv">




<!------------------  profile  ------------------->

<div class="profile_aboutmaindiv">

<div class="header_bandmaindiv">
<div class="header_banddiv">

<div class="static_page_heading">Corporate Social Responsibility</div>

<div class="breadcrum_div"><a href="../../index.php" style="text-decoration:none; color:#333333;">Home</a> >About Us > CSR</div>

</div>

</div>

<div class="static_bodydiv">

<div class="static_mainbody_div">



<div class="static_pagetxt" style="margin-bottom:25px;">



<Span style="font-size:18px; font-weight:600; line-height:26px;">As a part of CSR initiative taken by Suraksha Diagnostics Private Limited, Saraswati Sishu mandir school buildings have been gifted to the children of Raipur & Dhanara in Bankura (West Bengal)</Span><br />
<br />
@foreach($csrs as $csr)
<strong>School Name :</strong>{{$csr->school_name}}<br />


<strong>Location :</strong> {{$csr->location}}<br />


<strong>Distance from Kolkata :</strong> {{$csr->distance}}<br />


<strong>Number of Students :</strong> {{$csr->students}}<br />


<strong>Number of Teachers :</strong>{{$csr->teachers}}





</div>


<div class="media_image_maindiv" style="margin-bottom:20px;">


<div class="csr_inner_imgbg">
<div class="inner_imgbg_new mg-image">

<div class="single-effect">
          <figure class="wpf-demo-1">
           <img src="{{$csr->before}}" class="img_css" alt="Before Construction" />
            <figcaption class="view-caption">
             <a  href="{{$csr->before}}" data-lightbox="raipur" data-title="" class=" example-image-link" style="text-decoration:none;">	 View</a>
            </figcaption>
          </figure>
        </div>


</div>

<div class="csr_name">Before Construction</div>

</div>

<div class="csr_inner_imgbg">

<div class="inner_imgbg_new mg-image">

<div class="single-effect">
          <figure class="wpf-demo-1">
           <img src="{{$csr->during}}" class="img_css" alt="During Construction" />
            <figcaption class="view-caption">
             <a  href="{{$csr->during}}" data-lightbox="raipur" data-title="" class=" example-image-link" style="text-decoration:none;">	 View</a>
            </figcaption>
          </figure>
        </div>


</div>

<div class="csr_name">During Construction</div>
</div>

<div class="csr_inner_imgbg">

<div class="inner_imgbg_new mg-image">

<div class="single-effect">
          <figure class="wpf-demo-1">
           <img src="{{$csr->after}}" class="img_css" alt="After Construction" />
            <figcaption class="view-caption">
             <a  href="{{$csr->after}}" data-lightbox="raipur" data-title="" class=" example-image-link" style="text-decoration:none;">	 View</a>
            </figcaption>
          </figure>
        </div>


</div>

<div class="csr_name">After Construction</div>
</div>





</div>

@endforeach





<div class="static_pagetxt" style="margin-bottom:25px;">

<span style="font-size:15px; font-weight:500;">Total Investment for Building Construction : Rs. 50 Lacs.</span><br /><br />
<!-- <span class="static_subheading">Inaugural Programme :</span><br />

<ul style="list-style:decimal; margin-left:22px;">
<li>Eye camp organized by Shankar Nethralaya at Dhanara</li>
<li>Blanket distribution to underprivileged villagers</li>
<li>Cultural programme by school students</li>
<li>Participation of teachers from schools of Raspal, Mandalkuli, Pirorgari More, Fulkushma, Madhavpur & Jhilimili</li>
</ul> -->




</div>


</div>

</div>
</div>





<!------------------  profile ------------------->






</div>





<!-----------------  Body End  ------------------ -->@endsection
