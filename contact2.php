<?php include"inc/header.php"; ?>

<div class="contentsection contemplete clear">
    <div class="maincontent clear">
        <div class="about">
            <h2>Contact us</h2>

 <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $fname = $fm->validation($_POST['firstname']);
            $lname = $fm->validation($_POST['lastname']);
            $email = $fm->validation($_POST['email']);
            $body = $fm->validation($_POST['body']);



            $fname = mysqli_real_escape_string($db->link, $fname);
            $lname = mysqli_real_escape_string($db->link, $lname);
            $email = mysqli_real_escape_string($db->link, $email);
            $body = mysqli_real_escape_string($db->link, $body);


                if (empty($fname)) {

                    echo "<span style='color: red;'>First name must not be empty</span>";

                }elseif(empty($lname)) {

                    echo "<span style='color: red;'>Last name must not be empty</span>";

                }elseif(empty($email)){

                    echo "<span style='color: red;'>Email field must not be empty</span>";

                }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){

                    echo "<span style='color: red;'>Invalid email address</span>";

                }elseif(empty($body)){

                    echo "<span style='color: red;'>Message field must not be empty</span>";

                }else{
                    echo "<span style='color: green;'>Data Successfully Send</span>";
                }


            }
        ?>

			<form action="" method="post">
				<table>
				<tr>
					<td>Your First Name:</td>
					<td>
					<input type="text" name="firstname" placeholder="Enter first name"/>
					</td>
				</tr>
				<tr>
					<td>Your Last Name:</td>
					<td>
					<input type="text" name="lastname" placeholder="Enter Last name"/>
					</td>
				</tr>
				
				<tr>
					<td>Your Email Address:</td>
					<td>
					<input type="text" name="email" placeholder="Enter Email Address"/>
					</td>
				</tr>
				<tr>
					<td>Your Message:</td>
					<td>
					<textarea name="body"></textarea>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
					<input type="submit" name="submit" value="Send"/>
					</td>
				</tr>
		</table>
	<form>

 </div>

</div>

<?php include"inc/sidebar.php"; ?>
<?php include"inc/footer.php"; ?>
