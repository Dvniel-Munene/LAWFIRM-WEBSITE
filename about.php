 <!-- Start Header -->
 <?php include "header.php"; ?>
  <!-- End of Header -->

	
<!-- ABOUT -->
<section class="w3l-content-6">
    <div class="content-6-mian py-5">
        <div class="container py-lg-5">
            <?php
            //  database connection 
            $db_host = "localhost";
            $db_user = "root";
            $db_pass = "";
            $db_name = "lawfirm_db";

            $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $result = $conn->query("SELECT * FROM about");

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="content-info-in row">';
                    
                    if ($row['id'] == 1) {
                        // Mission
                        echo '<div class="col-lg-6">';
                        echo '<img src="assets/images/' . $row['file'] . '" alt="" class="img-fluid">';
                        echo '</div>';
                        echo '<div class="col-lg-6 mt-lg-0 mt-5 about-right-faq align-self pl-lg-4">';
                    } else {
                        // Vision
                        echo '<div class="col-lg-6 order-lg-2">';
                        echo '<img src="assets/images/' . $row['file'] . '" alt="" class="img-fluid">';
                        echo '</div>';
                        echo '<div class="col-lg-6 mt-lg-0 mt-5 about-right-faq align-self pl-lg-4 order-lg-1">';
                    }

                    echo '<div class="title-content text-left mb-2">';
                    echo '<h6 class="sub-title">' . $row['title'] . '</h6>';
                    echo '<h3 class="hny-title">' . $row['title_description'] . '</h3>';
                    echo '</div>';
                    echo '<p class="mt-3">' . $row['details'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
            }

            $conn->close();
            ?>
        </div>
    </div>
</section>

<!--OUR VALUES-->
<div class="w3l-content-5 py-5">
		<div class="container py-lg-4">
		<div class="content-left col-lg-6  pl-lg-4">
						<h6 class="sub-title">
							OUR CORE VALUES</h6>
			</div>
			<br>
			<br>
			<div class="row content-5-grids">
				<div class="col-lg-4 col-md-6 content-5-one">
					<div class="content5-gd-ingf">
						<div class="icon-holder mb-3">
							<span class="fa fa-users service-icon" aria-hidden="true"></span>
						</div>
						<h4>Accessibility</h4>
						<p>We will always be accessible to our clients and stakeholders. </p>
						
					</div>
				</div>
				<div class="col-lg-4 col-md-6 content-5-one">
					<div class="content5-gd-ingf">
						<div class="icon-holder mb-3">
							<span class="fa fa-heart-o service-icon" aria-hidden="true"></span>
						</div>
						<h4>Reliability</h4>
						<p>We will be ready and willing to serve. You can rely on us.</p>
					
					</div>
				</div>
				<div class="col-lg-4 col-md-6 content-5-one">
					<div class="content5-gd-ingf">
						<div class="icon-holder mb-3">
							<span class="fa fa-handshake-o service-icon" aria-hidden="true"></span>
						</div>
						<h4>Empathy</h4>
						<p>We will always seek to listen, empathize and understand our clients. We care about you.</p><br>
						
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- OUR VALUES -->
 



	<!-- //PRACTICE AREA-->
	<section class="w3l-team-main py-5 d-none d-lg-block">
		<div class="container py-lg-4">
			<div class="content-left col-lg-6  pl-lg-4">
						<h6 class="sub-title">
							PRACTICE AREA</h6>
			</div>
			<br>
			<br>

				<div class="row inner-sec-w3layouts-w3pvt-lauinfo">
				<div class="col-md-3 col-4">
					<div class="team-grids text-center">
					<a href="practice_area.php#PracticeArea1"><img src="assets/images/criminal-law.jpg" class="img-fluid" alt=""></a>
						<div class="team-info">
							<div class="caption">
							<a href="practice_area.php#PracticeArea1"><h3 style="color:white">Criminal Law</h3></a>
								<h6></h6>
							</div>
						</div>
					</div>
					<div class="social-icons-section text-center">
						
					</div>
				</div>

				<div class="col-md-3 col-4">
					<div class="team-grids text-center">
					<a href="practice_area.php#PracticeArea2"><img src="assets/images/ELC.jpg" class="img-fluid" alt=""></a>
						<div class="team-info">
							<div class="caption">
                            <a href="practice_area.php#PracticeArea2"><h3 style="color:white">Environment & Lands Law</h3></a>
								
							</div>
						</div>
					</div>
					<div class="social-icons-section text-center">
					</div>
				</div>

				<div class="col-md-3 col-4 mt-md-0 mt-4">
					<div class="team-grids text-center">
					<a href="practice_area.php#PracticeArea3"><img src="assets/images/electionpetition.jpg" class="img-fluid" alt=""></a>
						<div class="team-info">
							<div class="caption">
                            <a href="practice_area.php#PracticeArea3"><h3 style="color:white">Election Petitions</h3></a>
								
							</div>
						</div>
					</div>
					<div class="social-icons-section text-center">
						
					</div>
				</div>

				<div class="col-md-3 col-7 mt-md-0 mt-4">
					<div class="team-grids text-center">
					<a href="practice_area.php#PracticeArea4"><img src="assets/images/ELRC.jpg" class="img-fluid" alt=""></a>
						<div class="team-info">
							<div class="caption">
                            <a href="practice_area.php#PracticeArea4"><h3 style="color:white">Employment & Labour Relations</h3></a>
								
							</div>
						</div>
					</div>
					<div class="social-icons-section text-center">
						
					</div>
				</div>

				<div class="col-md-3 col-4 mt-md-0 mt-4">
					<div class="team-grids text-center">
					<a href="practice_area.php#PracticeArea5"><img src="assets/images/familylaw.jpg" class="img-fluid" alt=""></a>
						<div class="team-info">
							<div class="caption">
                            <a href="practice_area.php#PracticeArea5"><h3 style="color:white">Family Law</h3></a>
								
							</div>
						</div>
					</div>
					<div class="social-icons-section text-center">
						
					</div>
				</div>

				<div class="col-md-3 col-4 mt-md-0 mt-4">
					<div class="team-grids text-center">
					<a href="practice_area.php#PracticeArea6"><img src="assets/images/Humanrights.jpg" class="img-fluid" alt=""></a>
						<div class="team-info">
							<div class="caption">
                            <a href="practice_area.php#PracticeArea6"><h3 style="color:white">Human Rights Law</h3></a>
								
							</div>
						</div>
					</div>
					<div class="social-icons-section text-center">
						
					</div>
				</div>

				<div class="col-md-3 col-4 mt-md-0 mt-4">
					<div class="team-grids text-center">
					<a href="practice_area.php#PracticeArea7"><img src="assets/images/C&R.jpg" class="img-fluid" alt=""></a>
						<div class="team-info">
							<div class="caption">
							<a href="practice_area.php#PracticeArea7"> <h3 style="color:white">Conveyancing & Real Estate</h3></a>
								
							</div>
						</div>
					</div>
					<div class="social-icons-section text-center">
						
					</div>
				</div>

				<div class="col-md-3 col-4 mt-md-0 mt-4">
					<div class="team-grids text-center">
					<a href="practice_area.php#PracticeArea8"><img src="assets/images/D&M.jpg" class="img-fluid" alt=""></a>
						<div class="team-info">
							<div class="caption">
                            <a href="practice_area.php#PracticeArea8"><h3 style="color:white">Divorce & Matrimonial Law</h3></a>
								
							</div>
						</div>
					</div>
					<div class="social-icons-section text-center">
						
					</div>
				</div>
			

				<div class="col-md-3 col-4 mt-md-0 mt-4">
					<div class="team-grids text-center">
					<a href="practice_area.php#PracticeArea9"><img src="assets/images/Childrenlaw.jpg" class="img-fluid" alt=""></a>
						<div class="team-info">
							<div class="caption">
							<a href="practice_area.php#PracticeArea9"> <h3 style="color:white">Children's Law</h3></a>
								
							</div>
						</div>
					</div>
					<div class="social-icons-section text-center">
						
					</div>
				</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- PRACTICE AREAS -->






	</div>
	<a href="index.php" class="btn btn-style btn-primary mt-3" style="background-color: #FFB805; border-color: #FFB805; color: #ffffff;">home <<<</a>
	</div>	
 

	</div>
	<a href="our-team.php" class="btn btn-style btn-primary mt-3" style="float: right; background-color: #FFB805; border-color: #FFB805; color: #ffffff;">Our Team>>></a>
	</div>	
<br>
<br>
<br>
<br>

	
	

	 <!-- Start Footer -->
 <?php include "footer.php"; ?>
  <!-- End of Footer -->