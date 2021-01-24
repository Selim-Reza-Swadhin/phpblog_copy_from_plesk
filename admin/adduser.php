<?php include'inc/header.php'; ?>
<?php include'inc/sidebar.php'; ?>

<?php

    if (!Session::get('userRole') == '0') {
        echo "<script>window.location='index.php';</script>";
    }
?>

<div class="grid_10">

    <div class="box round first grid">

        <h2>Add New User</h2>

        <div class="block copyblock">

            <?php

             if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $name     = $fm->validation($_POST['name']);
                $username = $fm->validation($_POST['username']);
                $password = $fm->validation(md5($_POST['password']));
                $details  = $fm->validation($_POST['details']);
                $email    = $fm->validation($_POST['email']);
                $role     = $fm->validation($_POST['role']);

                $name     = mysqli_real_escape_string($db->link, $name);
                $username = mysqli_real_escape_string($db->link, $username);
                $password = mysqli_real_escape_string($db->link, $password);
                $details  = mysqli_real_escape_string($db->link, $details);
                $email    = mysqli_real_escape_string($db->link, $email);
                $role     = mysqli_real_escape_string($db->link, $role);

                    if (empty($name) || empty($username) || empty($password) || empty($email) || empty($role)) {

                        echo "<span  class='error'>Field must not be empty !</span>";

                    }else{

                    $mailquery = "SELECT * FROM tbl_user WHERE email='$email' LIMIT 1";
                    $mailcheck = $db->select($mailquery);

                        if ($mailcheck != false) {
                            echo "<span  class='error'>Email Already Exist !</span>";

                        }else{

                            $query     = "INSERT INTO tbl_user(name, username, password, email, details, role, status) VALUES ('$name', '$username', '$password', '$email', '$details', '$role', 'inactive')";
                            $catinsert = $db->insert($query);

                                if ($catinsert) {

                                    echo "<span  class='success'>User Created Successfully</span>";
                                }else{

                                    echo "<span  class='error'>User Not Created ! </span>";
                                }
                        }
                    }
              }

            ?>

            <form action="" method="post">

                <table class="form">

                    <tr>
                        <td>
                            <label>Name</label>
                        </td>
                        <td>
                            <input type="text" name="name" placeholder="Enter Name..." class="medium" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Username</label>
                        </td>
                        <td>
                            <input type="text" name="username" placeholder="Enter Username..." class="medium" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Password</label>
                        </td>
                        <td>
                            <input type="text" name="password" placeholder="Enter Password..." class="medium" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Email</label>
                        </td>
                        <td>
                            <input type="text" name="email" placeholder="Enter Valid Email..." class="medium" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Details</label>
                        </td>
                        <td>
                            <input type="text" name="details" placeholder="Enter Details..." class="medium" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>User Role</label>
                        </td>
<!--                        <td>-->
<!--                            <select name="role" id="select">-->
<!--                                <option>Select User Role</option>-->
<!--                                <option value="0">Admin</option>-->
<!--                                <option value="1">Author</option>-->
<!--                                <option value="2">Editor</option>-->
<!--                            </select>-->
<!--                        </td>-->
                        <td>
                            <select name="role" id="select">
                                <option>Select User Role</option>
                                <option value="admin">Admin</option>
                                <option value="author">Author</option>
                                <option value="editor">Editor</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" Value="Create" />
                        </td>
                    </tr>
                </table>
                
            </form>

        </div>
    </div>
</div>

<?php include'inc/footer.php'; ?>
