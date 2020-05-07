



<!--  Banner Start   -->




 <script>
	function banner()
	{
	window.location.href='https://surakshanet.com/about-us/company-profile';

	}

</script>


<div class="banner_div" style="max-height:450px;height:400px;">
    <div class="owl-carousel owl-theme" id="banner_slider">
      @foreach( $dashboard_array['sliders'] as $slider)
        <div class="item">
           <a href="covid19/index.html"> <img src="{{asset($slider->image_link)}}"  style="width:100%; height:100%;" alt="Banner"></a>
        </div>
     @endforeach
    </div>
</div>







<!--  Banner End   -->
