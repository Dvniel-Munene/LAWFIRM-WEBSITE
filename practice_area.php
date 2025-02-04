 <!-- Start Header -->
 <?php include "header.php"; ?>
  <!-- End of Header -->

	<!-- PRACTICE AREA-->
<section class="w3l-content-6">
    <div class="content-6-mian py-5">
        <div class="container py-lg-5">

            <?php
            // database connection established
            $db_host = "localhost";
            $db_user = "root";
            $db_pass = "";
            $db_name = "lawfirm_db";

            $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $result = $conn->query("SELECT * FROM practice_area");

           
            if ($result->num_rows > 0) {
                $count = 1;
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="content-info-in row practice-area">';
                    
                    if ($count % 2 == 1) {
                        // Odd count, image on the left
                        echo '<div class="col-lg-6">';
                        echo '<img src="assets/images/' . $row['file'] . '" class="img-fluid" alt="">';
                        echo '</div>';
                        echo '<div class="col-lg-6 mt-lg-0 mt-5 about-right-faq align-self  pl-lg-4">';
                    } else {
                        // Even count, image on the right
                        echo '<div class="col-lg-6 order-lg-2">';
                        echo '<img src="assets/images/' . $row['file'] . '" class="img-fluid" alt="">';
                        echo '</div>';
                        echo '<div class="col-lg-6 mt-lg-0 mt-5 about-right-faq align-self pl-lg-4 order-lg-1">';
                    }

                    echo '<div class="title-content text-left mb-2">';
                    echo '<h4 class="sub-title"></h4>';
                    echo '<h3 class="hny-title" id="PracticeArea' . $count . '">' . $row['title'] . '</h3>';
                    echo '</div>';
                    echo '<p class="mt-3">' . $row['details'] . '</p>';
                    echo '</div>';
                    echo '</div>';

                    // Increment the counter
                    $count++;
                }
            }

            $conn->close();
            ?>
        </div>
    </div>
</section>


	</div>
	<a href="our-team.php" class="btn btn-style btn-primary mt-3" style="background-color: #FFB805; border-color: #FFB805; color: #ffffff;">Our Team <<<</a>
	</div>	
  </div>
  

	<a href="services.php" class="btn btn-style btn-primary mt-3" style="float: right; background-color: #FFB805; border-color: #FFB805; color: #ffffff;">Services >>></a>
	</div>	
	<br>
	<br>
					</div>
    </div>
</section>





   <!-- Start Footer -->
 <?php include "footer.php"; ?>
  <!-- End of Footer -->