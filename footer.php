<!-- footer-66 -->
	

<footer class="w3l-footer-66" >
		<section class="footer-inner-main">
			<div class="footer-hny-grids py-5">
				<div class="container py-lg-4">
					<div class="text-txt">
						<div class="row newsletter-grids-footer">
							<div class="col-lg-6 newsletter-text pr-lg-5">
								<h3 class="hny-title two">Newsletter</h3>
								<h4>Sign up for our monthly newsletter to get the latest news, Job/Internship opportunities.
								</h4>
							</div>
							<div class="col-lg-6 newsletter-right">
								<form action="index.php" method="post" class="footer-newsletter">

									<input type="email" name="email" class="form-input"
										placeholder="Enter your email..">

									<button type="submit" class="btn" style="background-color: #FFB805; border-color: #FFB805; color: #ffffff;">Subscribe</button>
								</form>
							</div>
						</div>
						<div class="right-side">
							<div class="row sub-columns">
								<div class="col-lg-4 col-md-6 sub-one-left pr-lg-4">
									<h2><a class="navbar-brand" href="index.php">
											<img src="assets/images/DSG.png" alt="Your logo" title="Your logo" style="height:155px; width: 200px" />
											
										</a></h2>
										<h2> <a href="index.php" ><span class="sub-logo"style="color: #FFB805;">D.S.G MANGO & CO. ADVOCATES</span></a></h2>


									<p class="pr-lg-4" >Welcome to D.S.G MANGO & CO. ADVOCATES one of the longest established law firms in Kakamega, Western Kenya. 
										The firm is a full-service law firm providing a comprehensive range of legal services to both private and corporate clients. 
										We pride ourselves in being a client-oriented law firm. 
									</p>
									
								</div>
								<div class="col-lg-4 col-md-6 sub-one-left">
									<h6>PRACTICE AREA</h6>
									<div class="mid-footer-gd sub-two-right">

										<ul>
											<li><a href="practice_area.php#PracticeArea1"  ><span class="fa fa-angle-double-right mr-2"></span>Criminal Law</a>
											</li>
											<li><a href="practice_area.php#PracticeArea2" ><span class="fa fa-angle-double-right mr-2"></span>Environment & Lands Law</a>
											</li>
											<li><a href="practice_area.php#PracticeArea3" ><span class="fa fa-angle-double-right mr-2"></span>Election Petitions Law</a>
											</li>
											<li><a href="practice_area.php#PracticeArea4" ><span class="fa fa-angle-double-right mr-2"></span> Employment & Labour Relations Law </a>
											</li>
										</ul>
										<ul>
											<li><a href="practice_area.php#PracticeArea5" ><span
														class="fa fa-angle-double-right mr-2"></span>Family Law</a>
											</li>
											<li><a href="practice_area.php#PracticeArea6" ><span class="fa fa-angle-double-right mr-2"></span>Human Rights Law </a>
											</li>
											<li><a href="practice_area.php#PracticeArea7" ><span
														class="fa fa-angle-double-right mr-2"></span>Conveyancing & Real Estate</a></li>

											<li><a href="practice_area.php#PracticeArea8" ><span
														class="fa fa-angle-double-right mr-2"></span>Divorce & Matrimonial Law</a></li>

											<li><a href="practice_area.php#PracticeArea9" ><span
														class="fa fa-angle-double-right mr-2"></span>Children's Law</a></li>
													</ul>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 sub-one-left">
    <h6>CONTACT US</h6>
    <div class="columns-2">
        <ul class="contact-info">
            <li>
                <a href="tel:+254722747704" style="color:white" class="fa fa-angle-double-right mr-2">
                    <span class="fa fa-phone" aria-hidden="true" style="color:white"></span>
                    +254 722 747 704
                </a>
            </li>
            <li>
                <a href="tel:+254733747704" style="color:white" class="fa fa-angle-double-right mr-2">
                    <span class="fa fa-phone" aria-hidden="true" style="color:white"></span>
                    +254 733 747 704
                </a>
            </li>
            <li>
                <a href="mailto:mangodsg@yahoo.com" style="color:white" class="fa fa-angle-double-right mr-2">
                    <span class="fa fa-envelope" aria-hidden="true" style="color:white"></span>
                    mangodsg@yahoo.com
                </a>
            </li>
        </ul>
    </div>
</div>

			
			
			<!-- move top -->
			<button onclick="topFunction()" id="movetop" title="Go to top">
				<span class="fa fa-long-arrow-up" aria-hidden="true"></span>
			</button>
			<script>
				// When the user scrolls down 20px from the top of the document, show the button
				window.onscroll = function () {
					scrollFunction()
				};

				function scrollFunction() {
					if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
						document.getElementById("movetop").style.display = "block";
					} else {
						document.getElementById("movetop").style.display = "none";
					}
				}

				// When the user clicks on the button, scroll to the top of the document
				function topFunction() {
					document.body.scrollTop = 0;
					document.documentElement.scrollTop = 0;
				}
			</script>
			<!-- /move top -->

		</section>
	</footer>	<!--//footer-66 -->

	<footer class="site-footer-bottom">
    <div class="container" style="text-align: center;">
        <strong>
            <p> Copyright © 2024 - D.S.G MANGO & CO. ADVOCATES - Developed By Daniel Munene</p>
        </strong>
    </div>
	</footer>

</body>

</html>

<script src="assets/js/jquery-3.3.1.min.js"></script>

<!-- disable body scroll which navbar is in active -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
	$(document).ready(function () {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

		$('.popup-with-move-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-slide-bottom'
		});
	});
</script>
<!--//-->
<!-- stats -->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
	$('.counter').countUp();
</script>
<!-- //stats -->
<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
	$(document).ready(function () {
		$('.owl-one').owlCarousel({
			loop: true,
			margin: 0,
			nav: false,
			responsiveClass: true,
			autoplay: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 1,
					nav: false
				},
				667: {
					items: 1,
					nav: true
				},
				1000: {
					items: 1,
					nav: true
				}
			}
		})
	})
</script>
<!-- //script -->
<!-- script for owlcarousel -->
<script>
	$(document).ready(function () {
		$('.owl-testimonial').owlCarousel({
			loop: true,
			margin: 0,
			nav: false,
			responsiveClass: true,
			autoplay: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 1,
					nav: false
				},
				667: {
					items: 1,
					nav: false
				},
				1000: {
					items: 1,
					nav: false
				}
			}
		})
	})
</script>
<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->
<script src="assets/js/bootstrap.min.js"></script>