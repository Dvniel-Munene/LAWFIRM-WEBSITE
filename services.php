<!-- Start Header -->
 <?php include "header.php"; ?>
  <!-- End of Header -->

<body>

	
	<!--/inner-banner-->
	<div class="inner-banner">
	</div>
	<!--//inner-banner-->


	<!--SERVICES-->
	<div class="w3-services py-5">
		<div class="container py-lg-4">
			<div class="title-content text-left mb-lg-5 mb-4">
				<h6 class="sub-title">OUR SERVICES</h6>
			</div>

			<div class="row w3-services-grids">

				<div class="col-lg-4 col-md-6 causes-grid">
					<div class="causes-grid-info">
						<a href="blog-single.html"><img src="assets/images/ab1.jpg" class="img-fuild" alt=""></a>
						<a href="#" class="cause-title-wrap">
							<h4 class="cause-title">Mediation Services
							</h4>
						</a>
						<p class="card-text mb-0">Alternative Dispute Resolution methods are highly encouraged. We therefore offer our clients the option of pursuing mediation services at our offices before filing suit in court.  
						</p>
						
						
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 causes-grid">
					<div class="causes-grid-info">
						<a href="blog-single.html"><img src="assets/images/ab2.jpg" class="img-fuild" alt=""></a>
						<a href="#" class="cause-title-wrap">
							<h4 class="cause-title">Pro Bono Services
							</h4>
						</a>
						<p class="card-text mb-0">We also offer pro bono services to deserving clients who cannot afford legal and court fees. This is one of our biggest ways of giving back to the community.  
						</p>
						
					</div>
				</div>


	</div>
						
					</div>
				</div>



			</div>
		</div>
	</div>
	<!--SERVICES-->
		 
	</div class = "text-right">
	<a href="practice_area.php" class="btn btn-style btn-primary mt-3" style="background-color: #FFB805; border-color: #FFB805; color: #ffffff;"> Practice Area <<<</a>
	</div>	

</div>
	<a href="contact.php" class="btn btn-style btn-primary mt-3" style="float: right; background-color: #FFB805; border-color: #FFB805; color: #ffffff;">Inquiry >>></a>
	</div>	


<br>
<br>
<br>
<br>

	<!-- Start Footer -->
		 <?php include "footer.php"; ?>
  <!-- End of Footer -->

</body>

</html>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->
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