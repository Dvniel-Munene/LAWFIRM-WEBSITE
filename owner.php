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

            $result = $conn->query("SELECT * FROM owner");

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

</div>
	<a href="practice_area.php" class="btn btn-style btn-primary mt-3" style="float: right; background-color: #FFB805; border-color: #FFB805; color: #ffffff;">Our Practice Area >>></a>
	</div>	
    <br>
    <br>
    <br>
    <br>

	 <!-- Start Footer -->
     <?php include "footer.php"; ?>
  <!-- End of Footer -->