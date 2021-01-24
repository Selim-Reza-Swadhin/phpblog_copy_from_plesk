<?php
    include"../lib/Session.php";
    Session::checkLogin();
?>

<?php include"../config/config.php"; ?>
<?php include"../lib/Database.php"; ?>
<?php include"../helpers/Format.php"; ?>

<?php
    $db = new Database();
    $fm = new Format();
?>



<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">

        <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $fm->validation($_POST['username']);
            $password = $fm->validation(sha1(md5($_POST['password'])));


            $username = mysqli_real_escape_string($db->link, $username);
            $password = mysqli_real_escape_string($db->link, $password);

            $query    = "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'";
            $result   = $db->select($query);

            if ($result != false) {
                // $value = mysqli_fetch_array($result);
                $value = $result->fetch_assoc();

                    //before no add status is active validation
                    //Session::set("login", true);
                    //Session::set("username", $value['username']);
                    //Session::set("userimage", $value['image']);
                    //Session::set("userId", $value['id']);
                    //Session::set("userRole", $value['role']);
                    //header("Location:index.php");

               //after add status is active validation
                if ($value['status'] === 'active'){
                    Session::set("login", true);
                    Session::set("username", $value['username']);
                    Session::set("userimage", $value['image']);
                    Session::set("userId", $value['id']);
                    Session::set("userRole", $value['role']);
                    //Session::set("userStatus", $value['status']);
                    header('location:index.php');
                }else{
                    echo "<span style='color:red; font-size: 18px;'><span style='color: green'>Hi </span>" .ucwords($value['username'])." <span style='color: green'>Are you applied </span>".ucwords($value['role'])." !. <br>Your status is not active. !!</span>";

                }



            }else{

                echo "<span style='color:red; font-size: 18px;'>Username or Password not matched !!</span>";
            }
         }

        ?>


		<form action="login.php" method="post">

			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="Username" required="" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>

		</form><!-- form -->

<div class="button">
    <a href="forgotpass.php">Forgot Password !</a>
</div>

		<div class="button">
			<a href="https://selimrezaswadhin.com">Selim Reza Swadhin</a>
		</div><!-- button -->

	</section><!-- content -->

</div><!-- container -->

</body>
</html>
