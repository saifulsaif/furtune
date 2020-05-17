
@extends('fontend.app')
@section('content')



<!-----------------  Body Start  ------------------ -->


<div class="body_maindiv">




<!------------------  profile  ------------------->

<div class="profile_aboutmaindiv" >

<div class="header_bandmaindiv">
<div class="header_banddiv">

<div class="static_page_heading">Gallery Images</div>

<div class="breadcrum_div"><a href="index-2.html" style="text-decoration:none; color:#333333;">Home</a> > Media and Events</div>

</div>

</div>

<div class="static_bodydiv">

  <div class="static_pagetxt" style="margin-bottom:25px;">

  <span class="static_subheading">Latest Gallery Images Here  :</span>

  </div>



  <div class="media_image_maindiv">
  @foreach($galleries as $pic)
  <div class="inner_imgbg mg-image">
    <div class="single-effect">
            <figure class="wpf-demo-1">
             <img src="{{asset($pic->image)}}" class="img_css" />
              <figcaption class="view-caption">

               <a  href="{{asset($pic->image)}}" data-lightbox="example-5" data-title="Free Health Chackup, Sonarpur" class=" example-image-link" style="text-decoration:none;">	 More</a>

               <a  href="{{asset($pic->image)}}" data-lightbox="example-5" data-title="Free Health Chackup, Sonarpur" class=" example-image-link" style="text-decoration:none;"></a>
              </figcaption>
            </figure>
        </div>
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
