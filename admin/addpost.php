<?php include'inc/header.php'; ?>
<?php include'inc/sidebar.php'; ?>


        <div class="grid_10">
        
            <div class="box round first grid">
                <h2>Add New Post</h2>

                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $cat         = mysqli_real_escape_string($db->link, $_POST['cat']);
                    $title       = mysqli_real_escape_string($db->link, $_POST['title']);
                    $body        = mysqli_real_escape_string($db->link, $_POST['body']);
                    $author      = mysqli_real_escape_string($db->link, $_POST['author']);
                    $tags        = mysqli_real_escape_string($db->link, $_POST['tags']);
                    $description = mysqli_real_escape_string($db->link, $_POST['description']);
                    $userid      = mysqli_real_escape_string($db->link, $_POST['userid']);


                    $permited  = array('jpg', 'jpeg', 'png', 'gif');
                    $file_name = $_FILES['image']['name'];
                    $file_size = $_FILES['image']['size'];
                    $file_temp = $_FILES['image']['tmp_name'];

                    $div            = explode('.', $file_name);
                    $file_ext       = strtolower(end($div));
                    $unique_image   = substr(md5(time()), 0, 10).'.'.$file_ext;
                    $uploaded_image = "upload/".$unique_image;

                    if ($title == "" || $cat == "" || $body == "" || $tags == "" || $author == "" || $description== "" || $file_name == "") {

                        echo "<span class='error'>Field must not be empty</span>";

                    }elseif($file_size > 1048567){

                        echo "<span class='error'>Image size should be less then 1MB</span>";

                    }elseif(in_array($file_ext, $permited) === false){

                        echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";

                    }else{
                        move_uploaded_file($file_temp, $uploaded_image);

                        $query = "INSERT INTO tbl_post(cat, title, body, image, author, tags, description, userid) VALUES ('$cat', '$title', '$body', '$uploaded_image', '$author', '$tags', '$description', '$userid')";

                        $inserted_rows = $db->insert($query);

                        if ($inserted_rows) {

                            echo "<span class='success'>Post Inserted Successfully.</span>";

                        }else{

                            echo "<span class='error'>Post Not Inserted Successfully.</span>";
                        }
                    }


                }
                ?>

                <div class="block">  

                 <form action="" method="post" enctype="multipart/form-data">
                    
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" name="title" placeholder="Enter Post Title..." class="medium" />
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
                                    <option value="<?= $result['id']; ?>"><?= $result['name']; ?></option>
                                  <?php  } } ?>

                                </select>
                            </td>
                        </tr>
                   

                        <tr>
                            <td>
                                <label>Upload Image</label>
                            </td>
                            <td>
                                <input name="image" type="file" />
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="body"></textarea>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Tags</label>
                            </td>
                            <td>
                                <input type="text" name="tags" placeholder="Enter Tags..." class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Description</label>
                            </td>
                            <td>
                                <input type="text" name="description" placeholder="Enter Description..." class="medium" />
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <label>Author</label>
                            </td>
                            <td>
                                <input type="text" name="author" value="<?= Session::get('username'); ?>" class="medium" />

                                <input type="hidden" name="userid" value="<?= Session::get('userId'); ?>" class="medium" />
                            </td>
                        </tr>


                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
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
