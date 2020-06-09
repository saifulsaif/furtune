

<div class="footer_maindiv">

<div class="footer_div">

<div class="copyright_mainBG">
<div class="copyright_txt">
{{$site_infos->footer_info}}
</div>

<div class="copyright_txt"><a href="{{$site_infos->app_link}}" target="_blank" rel="noopener"><img src="{!! asset($site_infos->app_icon) !!}"   alt="Google Play" /></a>

<div class="socialicon_mainBG">

<div class="icon_div"><div class="instagram_button"><a href="{{$site_infos->instagram}}" target="_blank" rel="noopener"><i class="fa fa-instagram fa-1x " style="color:#FFFFFF; " ></i></a></div></div>


<div class="icon_div"><div class="linkedin_button"><a href="#" target="_blank" rel="noopener"><i class="fa fa-linkedin fa-1x " style="color:#FFFFFF; " ></i></a></div></div>


<div class="icon_div"><div class="youtube_button"><a href="{{$site_infos->youtube}}" target="_blank" rel="noopener"><i class="fa fa-youtube-play fa-1x " style="color:#FFFFFF; " ></i></a></div></div>



<div class="icon_div"><div class="twitter_button"><a href="{{$site_infos->twitter}}" target="_blank" rel="noopener"><i class="fa fa-twitter  fa-1x " style="color:#FFFFFF; " ></i></a></div></div>


<div class="icon_div" style="margin-left:0px;"><div class="facebook_button"><a href="{{$site_infos->facebook}}" target="_blank" rel="noopener"><i class="fa fa-facebook fa-1x " style="color:#FFFFFF;  " ></i></a></div></div>


</div>


</div>

</div>

<div class="footermenu_maindiv">

<div class="footer_menudiv">

<a href="{{url('/')}}"><div class="footer_menutxt">Home</div></a>
<a href="#"><div class="footer_menutxt">Find a Test</div></a>
<a href="{{url('/getDoctor')}}"><div class="footer_menutxt">Book an Appointment</div></a>
<!--<a href="https://surakshadiagnostic.com/" target="_blank"><div class="footer_menutxt">Blog</div></a>-->
<a href="{{route('feedback')}}"><div class="footer_menutxt">Feedback</div></a>


</div>

<div class="footer_menudiv">

<a href="{{route('corporeate_partner')}}"><div class="footer_menutxt">Corporate Partners</div></a>
<a href="{{route('home_collection')}}"><div class="footer_menutxt">Home Collection </div></a>
<a href="{{route('customer_care')}}"><div class="footer_menutxt">Customer Care</div></a>
<a href="{{route('faq')}}"><div class="footer_menutxt">FAQ's</div></a>

</div>

<div class="footer_menudiv">

<!--<a href="franchisee.php"><div class="footer_menutxt">Franchisee</div></a>-->
<a href="{{route('event')}}"><div class="footer_menutxt">Media & Events</div></a>
<a href="{{route('blog')}}"><div class="footer_menutxt">Latest News</div></a>
<a href="{{route('career')}}"><div class="footer_menutxt">Career</div></a>
<a class="various2 fancybox.iframe" href="https://www.youtube.com/embed/hWmYfZmMWHI"><div class="footer_menutxt">Video Tour</div></a>

</div>

<div class="footer_menudiv">


<a href="{{route('get_in_touch')}}"><div class="footer_menutxt">Contact Us</div></a>
<a  href="{{route('policy')}}"><div class="footer_menutxt">Privacy Policy</div></a>
<a href="{{route('terms')}}"><div class="footer_menutxt">Terms and Conditions</div></a>
<a href="{{route('gallery')}}"><div class="footer_menutxt">Gallery</div></a>
<!--<a href="#"><div class="footer_menutxt">Polyclinic</div></a>-->

</div>


</div>

<div class="copyright_mainBG_responsive">

<div class="copyright_txt">{{$site_infos->footer_info}}p</div>

<div class="copyright_txt"><div class="app_imgdiv"><a href="{{$site_infos->app_link}}" target="_blank"><img src="{!! asset('public/images/badges-Apps.png') !!}" alt="Google Play" class="img_css" /></a></div></div>

<div class="copyright_txt"><div class="socialicon_mainBG_responsive">


<div class="icon_div"><div class="instagram_button"><a href="{{$site_infos->instagram}}" target="_blank"><i class="fa fa-instagram fa-1x " style="color:#FFFFFF; " ></i></a></div></div>


<div class="icon_div"><div class="linkedin_button"><a href="#" target="_blank"><i class="fa fa-linkedin fa-1x " style="color:#FFFFFF; " ></i></a></div></div>


<div class="icon_div"><div class="youtube_button"><a href="{{$site_infos->youtube}}" target="_blank"><i class="fa fa-youtube-play fa-1x " style="color:#FFFFFF; " ></i></a></div></div>



<div class="icon_div"><div class="twitter_button"><a href="{{$site_infos->twitter}}" ><i class="fa fa-twitter  fa-1x " style="color:#FFFFFF; " ></i></a></div></div>



<div class="icon_div" style="margin-left:0px;"><div class="facebook_button"><a href="{{$site_infos->facebookpppppppp}}" target="_blank"><i class="fa fa-facebook fa-1x " style="color:#FFFFFF;  " ></i></a></div></div>





</div></div>

</div>


</div>



</div>

<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left" aria-label="Go to Top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>

<!--  Footer End   -->


</div>


<script src='{!! asset('public/js/jquery-1.9.1.min.js') !!}'></script>

<script src='{!! asset('public/js/bootstrap.min.js') !!}'></script>
<script>
	$(document).ready(function(){
		// $("#pop_mod_onl_con").modal('show');
        $(".searchDoctor").keyup(function () {
            var searchTerm = $(".searchDoctor").val();

            var listItem = $('.results tbody').children('tr');
            var searchSplit = searchTerm.replace(/ /g, "'):containsi('")

            $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
                    return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
                }
            });
            if (searchTerm == '') return;
            $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
                $(this).attr('visible','false');
            });

            $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
                $(this).attr('visible','true');
            });

            var jobCount = $('.results tbody tr[visible="true"]').length;
                $('.counter').text(jobCount + ' Doctor');

            if(jobCount == '0') {
                $('.no-result').show();
            }
            else {
                $('.no-result').hide();
            }

        });

        $('#doctable').after('<div id="nav"></div>');
        var rowsShown = 4;
        var rowsTotal = $('#doctable tbody tr').length;
        var numPages = rowsTotal/rowsShown;
        for(i = 0;i < numPages;i++) {
            var pageNum = i + 1;
            $('#nav').append('<a href="#" rel="'+i+'">'+pageNum+'</a> ');
        }
        $('#doctable tbody tr').hide();
        $('#doctable tbody tr').slice(0, rowsShown).show();
        $('#nav a:first').addClass('active');
        $('#nav a').bind('click', function(){

            $('#nav a').removeClass('active');
            $(this).addClass('active');
            var currPage = $(this).attr('rel');
            var startItem = currPage * rowsShown;
            var endItem = startItem + rowsShown;
            $('#doctable tbody tr').css('opacity','0.0').hide().slice(startItem, endItem).
            css('display','table-row').animate({opacity:1}, 300);
        });


	});

    // Modal SHOW
        function appointment_modal(id,name,center){
            document.getElementById('doctor_id').value=id;
            document.getElementById('doctor_nameShow').innerText  = "Doctor Name : "+name ;
            document.getElementById('centerShow').innerText  = "Center : "+center ;
            $('#appointment_model').modal('show');
        }

</script>


	<script src="{!! asset('public/js/modernizr.custom.js') !!}" ></script>
		<script src="{!! asset('public/js/jquery.dlmenu.js') !!}" ></script>
		<script>
			$(function() {
				$( '#dl-menu' ).dlmenu({
					animationClasses : { classin : 'dl-animate-in-4', classout : 'dl-animate-out-4' }
				});
			});
		</script>


     <script src="{!! asset('public/owlcarousel/owl.carousel.js') !!}" ></script>
      <script src="{!! asset('public/js/jquery.mCustomScrollbar.concat.min.js') !!}" ></script>

      <script src="{!! asset('public/source/jquery.fancybox.pack8cbb.js?v=2.1.5') !!}" ></script>

      <script>


 $(document).ready(function() {
	$(".various").fancybox({
		fitToView	: true,

		autoWidth		: true,

		autoheight		: true,

		autoSize	: true,

		closeClick	: false,

		openEffect	: 'elastic',

		closeEffect	: 'elastic',

		padding: 10,


	});


	$(".various1").fancybox({

		maxWidth	: 550,

		maxHeight	: 350,

		fitToView	: false,

		width		: '70%',

		height		: '70%',

		autoSize	: false,

		closeClick	: false,

		openEffect	: 'none',

		closeEffect	: 'none'



	});

	$(".various2").fancybox({

		maxWidth	: 800,

		maxHeight	: 600,

		fitToView	: false,

		width		: '70%',

		height		: '70%',

		autoSize	: false,

		closeClick	: false,

		openEffect	: 'none',

		closeEffect	: 'none'

	});


	$(".various3").fancybox({

		maxWidth	: 450,

		maxHeight	: 650,

		fitToView	: false,

		width		: '100%',

		height		: '100%',

		autoSize	: false,

		closeClick	: false,

		openEffect	: 'none',

		closeEffect	: 'none'



	});

	$(".various4").fancybox({

		maxWidth	: 450,

		maxHeight	: 580,

		fitToView	: false,

		width		: '100%',

		height		: '100%',

		autoSize	: false,

		closeClick	: false,

		openEffect	: 'none',

		closeEffect	: 'none'



	});





});


 </script>

    <script>
$(window).scroll(function() {

    if ($(window).scrollTop() > 100) {
        $('.main_h').addClass('sticky');
    } else {
        $('.main_h').removeClass('sticky');
    }
});

// Mobile Navigation
$('.mobile-toggle').click(function() {
    if ($('.main_h').hasClass('open-nav')) {
        $('.main_h').removeClass('open-nav');
    } else {
        $('.main_h').addClass('open-nav');
    }
});

$('.main_h li a').click(function() {
    if ($('.main_h').hasClass('open-nav')) {
        $('.navigation').removeClass('open-nav');
        $('.main_h').removeClass('open-nav');
    }
});

// navigation scroll lijepo radi materem
$('nav a').click(function(event) {
    var id = $(this).attr("href");
    var offset = 70;
    var target = $(id).offset().top - offset;
    $('html, body').animate({
        scrollTop: target
    }, 500);
    event.preventDefault();
});

</script>



<script>

	$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });

        $('#back-to-top').tooltip('show');

});
	</script>


  <script>
		(function($){
			$(window).load(function(){

				$("#content-3").mCustomScrollbar({
					scrollButtons:{enable:true},
					theme:"light-thick",
					scrollbarPosition:"outside"
				});

				$("#content-4").mCustomScrollbar({
					theme:"rounded-dots",
					scrollInertia:400
				});

				$("#content-5").mCustomScrollbar({
					axis:"x",
					theme:"dark-thin",
					autoExpandScrollbar:true,
					advanced:{autoExpandHorizontalScroll:true}
				});

				$("#content-6").mCustomScrollbar({
					axis:"x",
					theme:"light-3",
					advanced:{autoExpandHorizontalScroll:true}
				});

				$("#content-7").mCustomScrollbar({
					scrollButtons:{enable:true},
					theme:"3d-thick"
				});

				$("#content-8").mCustomScrollbar({
					axis:"yx",
					scrollButtons:{enable:true},
					theme:"3d",
					scrollbarPosition:"outside"
				});

				$("#content-9").mCustomScrollbar({
					scrollButtons:{enable:true,scrollType:"stepped"},
					keyboard:{scrollType:"stepped"},
					mouseWheel:{scrollAmount:188,normalizeDelta:true},
					theme:"rounded-dark",
					autoExpandScrollbar:true,
					snapAmount:188,
					snapOffset:65
				});

			});
		})(jQuery);
	</script>


<script >
$(document).ready(function() {
	var owl = $('.owl-carousel1');
	owl.owlCarousel({
		// items: 4,
		loop: true,
		margin: 10,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 5
			}
		}
	});

})

$(document).ready(function() {
	var owl = $('#banner_slider');
	owl.owlCarousel({
		// items: 4,
		loop: true,
		margin: 0,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});

})
</script>



</div>
</div>
</body>
</html>
