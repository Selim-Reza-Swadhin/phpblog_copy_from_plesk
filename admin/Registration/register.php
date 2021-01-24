<?php
    include "inc/header.php";
    include "libs/User.php";
?>

<?php
   $user = new User();
   if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {//button name="register"
    $usrRegi = $user->userRegistration($_POST);//object
   }
?>
        <!-- body part -->

        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>User Registration</h2>
            </div>
            <div class="panel-body">
            <div style="max-width:600px; margin:0 auto">

            <?php
                if(isset($usrRegi)){
                    echo $usrRegi;
                }
                ?>

               <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>

                    <button type="submit" name="register" class="btn btn-success">Submit</button>
                </form>
            </div>
            </div>
        </div>

            <!-- footer part -->
            
<?php
    include "inc/footer.php";
?>