<style>

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/

#footer {
    background: #234285;
    color: #fff;
    font-size: 14px;
    text-align: center;
    padding: 10px 0;
}

#footer h3 {
    font-size: 36px;
    font-weight: 700;
    text-align: center;
    color: #fff;
    position: relative;
    font-family: "Poppins", sans-serif;
    padding: 0;
    margin: 0 0 15px 0;
}

#footer p {
    font-size: 15;
    margin: 0 0 40px 0;
}

#footer .social-links {
    margin: 0 0 10px 0;
}

#footer img {
    width: auto;
    height: 150px;
    zoom: 30%;
    float: center;
    padding: 10;
}

#footer .social-links a {
    font-size: 18px;
    display: inline-block;
    color: #fff;
    line-height: 1;
    padding: 8px 0;
    margin-right: 4px;
    border-radius: 50%;
    text-align: center;
    width: 36px;
    height: 36px;
    transition: 0.3s;
}

#footer .social-links a:hover {
    color: #fff;
    text-decoration: none;
}

#footer .copyright {
    margin: 0 0 5px 0;
}

#footer .credits {
    font-size: 13px;
}

</style>
   <footer id="footer">
            <div class="container">
                <img src="{{ URL::to('/') }}/storage/photos/1/social media/Logohearder.png">
                <div class="social-links"> 
                    <a href="https://twitter.com/ThaiM29203"> <img src="{{ URL::to('/') }}/storage/photos/1/social media/twitter.png" style="width: 100px; height: 100px"> </a><span> &nbsp</span>
                    <a href="https://www.facebook.com/ThaiHuotMarket"> <img src="{{ URL::to('/') }}/storage/photos/1/social media/Facebook.png" style="width: 100px; height: 100px"></a><span> &nbsp </span>
                    <a href="https://www.instagram.com/thai_huot_supermarket/"> <img src="{{ URL::to('/') }}/storage/photos/1/social media/instagram.png" style="width: 100px; height: 100px"></a><span> &nbsp </span>
                    <a href="https://www.linkedin.com/in/thai-huot-market-a60350276/"> <img src="{{ URL::to('/') }}/storage/photos/1/social media/linkedinpng.png" style="width: 100px; height: 100px"></a>
                </div>
            </div>
            </div>
        </footer>
	<!-- /End Footer Area -->
 
	<!-- Jquery -->
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-migrate-3.0.0.js')}}"></script>
	<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
	<!-- Popper JS -->
	<script src="{{asset('frontend/js/popper.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<!-- Color JS -->
	<script src="{{asset('frontend/js/colors.js')}}"></script>
	<!-- Slicknav JS -->
	<script src="{{asset('frontend/js/slicknav.min.js')}}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{asset('frontend/js/owl-carousel.js')}}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{asset('frontend/js/magnific-popup.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
	<!-- Countdown JS -->
	<script src="{{asset('frontend/js/finalcountdown.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="{{asset('frontend/js/nicesellect.js')}}"></script>
	<!-- Flex Slider JS -->
	<script src="{{asset('frontend/js/flex-slider.js')}}"></script>
	<!-- ScrollUp JS -->
	<script src="{{asset('frontend/js/scrollup.js')}}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{asset('frontend/js/onepage-nav.min.js')}}"></script>
	{{-- Isotope --}}
	<script src="{{asset('frontend/js/isotope/isotope.pkgd.min.js')}}"></script>
	<!-- Easing JS -->
	<script src="{{asset('frontend/js/easing.js')}}"></script>

	<!-- Active JS -->
	<script src="{{asset('frontend/js/active.js')}}"></script>

	
	@stack('scripts')
	<script>
		setTimeout(function(){
		  $('.alert').slideUp();
		},5000);
		$(function() {
		// ------------------------------------------------------- //
		// Multi Level dropdowns
		// ------------------------------------------------------ //
			$("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
				event.preventDefault();
				event.stopPropagation();

				$(this).siblings().toggleClass("show");


				if (!$(this).next().hasClass('show')) {
				$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
				}
				$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
				$('.dropdown-submenu .show').removeClass("show");
				});

			});
		});
	  </script>