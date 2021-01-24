<?php
    include "Registration/inc/header.php";
    include "Registration/libs/User.php";
?>

<?php
    $user = new User();

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {//button name="submit"
        $usrRegi = $user->userRegistration($_POST);//object
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup Form</title>
    <link rel="stylesheet" href="../font-awesome-4.5.0/css/font-awesome.min.css">
    <style>
        body{
            margin: 0;
            padding: 0;
            background: #efefef;
            font-size: 16px;
            color: #777;
            font-family: sans-serif;
            font-weight: 300;
            background:url(../images/r1.jpg);
            background-position:center;
            background-size:cover;

            /*margin:0;*/
            /*padding:0;*/
            /*height:100vh;*/
            /*background:url(../images/r2.jpg);*/
            /*background-position:center;*/
            /*background-size:cover;*/
            /*font-family:sans-serif;*/
        }

        #login-box{
            position: relative;
            margin: 5% auto;
            height: 400px;
            width: 600px;
            background: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.6);
        }

        .left-box{
            position: absolute;
            top: 0;
            left: 0;
            width: 300px;
            height: 400px;
            padding: 40px;
            box-sizing: border-box;
            background-image: url(../images/t3.jpg);
            background-position:center;
            background-size:cover;
        }

        h1{
            margin: 0 0 20px 0;
            font-weight: 300;
            font-size: 28px;
        }

        input[type="text"],
        input[type="password"]
        {
            display: block;
            box-sizing: border-box;
            margin-bottom: 20px;
            padding: 4px;
            width: 220px;
            height: 32px;
            border: none;
            outline: none;
            border-bottom: 1px solid #aaa;
            font-family: sans-serif;
            font-weight: 400;
            font-size: 15px;
            transition: 0.2s ease;
        }

        input[type="submit"]{
            margin-bottom: 28px;
            width: 120px;
            height: 32px;
            background: #f44336;
            border: none;
            border-radius: 2px;
            color: #fff;
            font-family: sans-serif;
            font-weight: 500;
            text-transform: uppercase;
            transform: 0.2s ease;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        input[type="submit"]:focus
        {
            background: #ff5722;
            transition: 0.2s ease;
        }

        .or{
            position: relative;
            top: 180px;
            left: 280px;
            width: 40px;
            height: 40px;
            background: #efefef;
            background-image: url(../images/b.jpg);
            color: #fff;
            border-radius: 50%;
            box-shadow: 0 2px 4px rgba(0,0,0,0.6);
            line-height: 40px;
            text-align: center;
        }

        .right-box{
            position: absolute;
            top: 0;
            right: 0;
            width: 300px;
            height: 400px;
            padding: 40px;
            box-sizing: border-box;
            background-image: url(../images/b.jpg);
            background-size: cover;
            background-position: center;
        }

        .right-box .signinwith{
            display: block;
            margin-bottom: 40px;
            font-size: 28px;
            color: #fff;
            text-align: center;
            text-shadow: 0 2px 4px rgba(0,0,0,0.6);
        }

        button.social,a{
            margin-bottom: 20px;
            width: 220px;
            height: 36px;
            border: none;
            border-radius: 2px;
            color: #fff;
            font-family: sans-serif;
            font-weight: 500;
            transition: 0.2s ease;
            cursor: pointer;
            font-size: 16px;
        }

        button.social a{
            text-decoration: none;
        }

        .facebook{
            background: #32508e;
        }

        .twitter{
            background: #55acee;
        }

        .google{
            background: #dd4b39;
        }

        .fa-facebook{
            padding: 10px;
            font-size: 16px;
        }

        .fa-twitter{
            padding: 10px;
            font-size: 16px;
        }

        .fa-google{
            padding: 10px;
            font-size: 16px;
        }

    </style>
</head>
<body>

<h2 style="margin-left: 50px;text-decoration: none;"><a style="text-decoration: none;" href="../index.php">Go Back</a></h2>

<div id="login-box">

    <div class="left-box">
        <h1>Sign Up</h1>

        <?php
            if(isset($usrRegi)){
                echo $usrRegi;
            }
        ?>

        <form action="#" method="post">

            <input type="text" name="name" placeholder="Name" id=""/>
            <input type="text" name="username" placeholder="Username" id=""/>
            <input type="text" name="email" placeholder="Email" id="">
            <input type="password" name="password" placeholder="Password" id=""/>
            <input type="text" name="details" placeholder="Details" id=""/>
<!--            <input type="text" name="role" placeholder="Role" id=""/>-->
            <select name="role" id="" style="width: 220px; height: 35px;">
                <option>Select User Role</option>
                <option value="admin">Admin</option>
                <option value="author">Author</option>
                <option value="editor">Editor</option>
            </select>
            <br>
            <br>
            <!-- <input type="password" name="password" placeholder="Retype password" id=""/> -->
            <input type="submit" name="submit" value="Sign Up">

        </form>
    </div>

    <div class="right-box">
        <span class="signinwith">Sign in with <br>Social Network</span>

        <form action="#" method="post">
            <button class="social facebook"><i class="fa fa-facebook"> <a href="www.facebook.com">Log in with Facebook</a></i></button>
            <button class="social twitter"><i class="fa fa-twitter"> <a href="www.twitter">Log in with Twitter</a></i></button>
            <button class="social google"><i class="fa fa-google"> <a href="www.google.com">Log in with Google</a></i></button>
        </form>

    </div>

    <div class="or">Or</div>

</div>
</body>
</html>
