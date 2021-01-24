<?php include'inc/header.php'; ?>
<?php include'inc/sidebar.php'; ?>


<?php
    if (!isset($_GET['editpostid']) || $_GET['editpostid'] == NULL) {
        echo "<script>window.location='postlist.php';</script>";
    //    header("Location:postlist.php");
    }else{
        $postid=$_GET['editpostid'];
    }
?>

        <div class="grid_10">
        
            <div class="box round first grid">
                <h2>Update Post</h2>

             <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $cat = mysqli_real_escape_string($db->link, $_POST['cat']);
                    $title = mysqli_real_escape_string($db->link, $_POST['title']);
                    $body = mysqli_real_escape_string($db->link, $_POST['body']);
                    $author = mysqli_real_escape_string($db->link, $_POST['author']);
                    $tags = mysqli_real_escape_string($db->link, $_POST['tags']);
                    $description = mysqli_real_escape_string($db->link, $_POST['description']);
                    $userid = mysqli_real_escape_string($db->link, $_POST['userid']);


                    $permited = array('jpg', 'jpeg', 'png', 'gif');
                    $file_name = $_FILES['image']['name'];
                    $file_size = $_FILES['image']['size'];
                    $file_temp = $_FILES['image']['tmp_name'];

                    $div = explode('.', $file_name);
                    $file_ext = strtolower(end($div));
                    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
                    $uploaded_image = "upload/".$unique_image;

                if ($title == "" || $cat == "" || $body == "" || $tags == "" || $author == "" || $description == "") {
                    echo "<span class='error'>Field must not be empty</span>";

                }else {
                    if (!empty($file_name)) {


                        if ($file_size > 1048567) {
                            echo "<span class='error'>Image size should be less then 1MB</span>";

                        } elseif (in_array($file_ext, $permited) === false) {
                            echo "<span class='error'>You can upload only:-" . implode(', ', $permited) . "</span>";

                        } else {
                            //remove image file from directory start
                            $getquery = "select * from tbl_post where id= '$postid'";
                            $getImg = $db->select($getquery);
                            //$link = mysqli_connect('localhost', 'root', '', 'image_fileupload');
                            //$getImg = mysqli_query($link, $getquery);
                            //image delete from folder
                            if ($getImg) {
                                while ($imgdata = $getImg->fetch_assoc()) {
                                    $updateimg = $imgdata['image'];
                                    //unlink($updateimg);
                                    @unlink($updateimg);//@ is error control operator
                                }
                            }
                            //remove image file from directory end

                            move_uploaded_file($file_temp, $uploaded_image);
                            $query = "UPDATE tbl_post
                                      SET
                                      cat         = '$cat',
                                      title       = '$title',
                                      body        = '$body',
                                      image       = '$uploaded_image',
                                      author      = '$author',
                                      tags        = '$tags',
                                      description = '$description',
                                      userid      = '$userid'
                                      WHERE id    ='$postid'";

                            $inserted_row = $db->update($query);

                            if ($inserted_row) {

                                echo "<span class='success'>Post Updated Successfully.</span>";

                            } else {

                                echo "<span class='error'>Post Not Updated Successfully.</span>";
                            }
                        }

                    } else {
                        $query = "UPDATE tbl_post
                                      SET
                                      cat         = '$cat',
                                      title       = '$title',
                                      body        = '$body',                                      
                                      author      = '$author',
                                      tags        = '$tags',
                                      description = '$description',
                                      userid      = '$userid'
                                      WHERE    id = '$postid'";

                        $inserted_row = $db->update($query);

                        if ($inserted_row) {

                            echo "<span class='success'>Post Updated Successfully.</span>";

                        } else {

                            echo "<span class='error'>Post Not Updated Successfully.</span>";
                        }
                      }
                   }
                 }

                ?>

                <div class="block">

                    <?php
                        $query = "SELECT * FROM tbl_post WHERE id= '$postid'";
                        $getpost = $db->select($query);

                        if ($getpost) {
                        while ($postresult = $getpost->fetch_assoc()) {
                    ?>

                 <form action="" method="post" enctype="multipart/form-data">

                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" name="title" value="<?= $postresult['title']; ?>" class="medium" />                               
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                            <td>
                                <select id="select" name="cat">
                                    <option>Select Category</option>

                                    <?php
                                        $query = "SELECT * FROM tbl_category";
                                        $category = $db->select($query);
                                        if ($category) {
                                            while ($result=$category->fetch_assoc()) {
                                    ?>
                                    <option
                                            <?php
                                            if ($postresult['cat'] == $result['id']) { ?>

                                                selected = "selected";

                                           <?php } ?>value="<?= $result['id']; ?>"><?= $result['name']; ?></option>

                                  <?php  } } ?><!-- End if and while loop -->

                                </select>

                            </td>
                        </tr>
                   

                        <tr>
                            <td>
                                <label>Upload Image</label>
                            </td>
                            <td>
                                <img src="<?= $postresult['image']; ?>" alt="" height="50px" width="100px"><br>
                                <input name="image" type="file" />
                            </td>
                        </tr>

                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="body">
                                    <?= $postresult['body']; ?>
                                </textarea>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Tags</label>
                            </td>
                            <td>
                                <input type="text" name="tags" value="<?= $postresult['tags']; ?>" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Description</label>
                            </td>
                            <td>
                                <input type="text" name="description" value="<?= $postresult['description']; ?>" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Author</label>
                            </td>
                            <td>
                                <input type="text" name="author" value="<?= $postresult['author']; ?>" class="medium" />
                                 <input type="hidden" name="userid" value="<?= Session::get('userId'); ?>" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Update" />
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