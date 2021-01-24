<?php include'inc/header.php'; ?>
<?php include'inc/sidebar.php'; ?>

<?php

$pageid = mysqli_real_escape_string($db->link, $_GET['pageid']);//alternate system

    if (!isset($pageid) || $pageid == NULL) {
        echo "<script>window.location='index.php';</script>";
    //    header("Location:index.php");
    }else{
        $id = $pageid;
    }
?>


<?php
   /* if (!isset($_GET['pageid']) || $_GET['pageid'] == NULL) {
        echo "<script>window.location='index.php';</script>";
    //    header("Location:index.php");
    }else{
        $id=$_GET['pageid'];
    }*/
?>


<style>
    .actiondel{margin-left: 10px;}
    .actiondel a{
        border: 1px solid #ddd;
        padding: 2px 10px;
        color: #444;
        cursor: pointer;
        font-size: 20px;
        font-weight: normal;
        background: #DDDDDD none repeat scroll 0 0;
    }
</style>

<div class="grid_10">

    <div class="box round first grid">
        <h2>Edit Page</h2>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = mysqli_real_escape_string($db->link, $_POST['name']);
            $body = mysqli_real_escape_string($db->link, $_POST['body']);

            if ($name == "" || $body == "") {
                echo "<span class='error'>Field must not be empty</span>";

            }else{

                $query = "UPDATE tbl_page
                              SET
                              name = '$name',
                              body = '$body'
                              WHERE id='$id'
                              ";
                $updated_rows = $db->update($query);
                if ($updated_rows) {
                    echo "<span class='success'>Page Updated Successfully.</span>";
                }else{
                    echo "<span class='error'>Page Not Updated.</span>";
                }
            }




        }
        ?>

        <div class="block">

            <?php
            $query = "SELECT * FROM tbl_page WHERE id='$id'";
            $pages = $db->select($query);
            if ($pages) {
            while ($result = $pages->fetch_assoc()) {
            ?>

            <form action="" method="post">
                <table class="form">

                    <tr>
                        <td>
                            <label>Name</label>
                        </td>
                        <td>
                            <input type="text" name="name" value="<?= $result['name']; ?>" class="medium" />
                        </td>
                    </tr>


                    <tr>
                        <td style="vertical-align: top; padding-top: 9px;">
                            <label>Content</label>
                        </td>
                        <td>
                            <textarea class="tinymce" name="body">
                                <?= $result['body']; ?>
                            </textarea>
                        </td>
                    </tr>



                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" Value="Update" />

                            <?php if (Session::get('userRole') == '0') { ?>
                            <span class="actiondel"><a onclick="return confirm('Are you  admin? Sure to deleted the page !!');" href="deletepage.php?delpage=<?= $result['id']; ?>">Delete</a></span>
                        <?php } ?>
                        </td>
                    </tr>
                </table>
            </form>
            <?php }} ?>

        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>

<!-- /TinyMCE -->
<!--<style type="text/css">
    #tinymce{font-size:15px !important;}
</style>-->

<?php include'inc/footer.php'; ?>


