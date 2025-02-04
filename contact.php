 <!-- Start Header -->
 <?php include "header.php"; ?>
  <!-- End of Header -->

	<!-- /contact-form -->
<section class="w3l-contact-11">
    <div class="form-41-mian py-5">
        <div class="container py-lg-4">
            <div class="row align-form-map">
                <div class="col-md-4 col-lg-4 col-xl-4"><br><br><br>
                    <img src="assets/images/DSG.png" class="img-fluid" style="height: 400px; width: 800px">
                </div>
                <div class="col-lg-8 form-inner-cont">
                    <div class="title-content text-left">
                        <h3 class="hny-title mb-lg-5 mb-4">Send Us A Message</h3>
                    </div>
                    <?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Database connection
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "lawfirm_db";

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO contact (name, email, contact, message, date) VALUES (?, ?, ?, ?, NOW())");
    $stmt->bind_param("ssss", $name, $email, $contact, $message);

    // Set parameters and execute
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $message = $_POST['message'];

    // Check if the database insertion is successful
    if ($stmt->execute()) {
        // Database insertion successful, proceed to send email

        // Law firm's email address
        $lawFirmEmail = "danielmunene845@gmail.com";

        // Email subject
        $subject = "WEBSITE INQUIRY";

        // Email message body
        $emailMessage = "Name: $name\nEmail: $email\nContact: $contact\nMessage: $message";

        // Additional headers
        $headers = "From: $email\r\n";

        // Send the email
        mail($lawFirmEmail, $subject, $emailMessage, $headers);

        // Display success message
        echo '<div class="alert alert-success" role="alert">Message sent successfully!</div>';
    } else {
        // Display error message
        echo '<div class="alert alert-danger" role="alert">Error: ' . $stmt->error . '</div>';
    }

    $stmt->close();
    $conn->close();
}
?>
<form method="post" class="signin-form">
    <div class="form-input">
        <input type="text" name="name" id="name" placeholder="Name" />
    </div>
    <div class="row con-two">
        <div class="col-lg-6 form-input">
            <input type="email" name="email" id="email" placeholder="Email" required="" />
        </div>
        <div class="col-lg-6 form-input">
            <input type="text" name="contact" id="contact" placeholder="Contact" class="contact-input" />
        </div>
    </div>
    <div class="form-input">
        <textarea placeholder="Message" name="message" id="msg" required=""></textarea>
    </div>
    <div class="submit-button text-lg-center">
        <button type="submit" class="btn btn-style" name="submit" id="submit" style="background-color: #FFB805; border-color: #FFB805; color: #ffffff;">Submit</button>
    </div>
</form>
</section>

	<!-- //contact-form -->
	<div class="text-right">
    <a href="services.php" class="btn btn-style btn-primary mt-3" style="background-color: #FFB805; border-color: #FFB805; color: #ffffff; float: left">Services<<<</a>
</div>
<br>
<br>
<br>
<br>




		 <!-- Start Footer -->
		 <?php include "footer.php"; ?>
  <!-- End of Footer -->