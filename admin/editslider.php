<?php include'inc/header.php'; ?>
<?php include'inc/sidebar.php'; ?>


<?php
    if (!isset($_GET['sliderid']) || $_GET['sliderid'] == NULL) {
        echo "<script>window.location='sliderlist.php';</script>";
    //    header("Location:postlist.php");
    }else{
        $sliderid=$_GET['sliderid'];
    }
?>

        <div class="grid_10">
        
            <div class="box round first grid">
                <h2>Update Image</h2>

             <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                   
                    $title = mysqli_real_escape_string($db->link, $_POST['title']);

                    $permited = array('jpg', 'jpeg', 'png', 'gif');
                    $file_name = $_FILES['image']['name'];
                    $file_size = $_FILES['image']['size'];
                    $file_temp = $_FILES['image']['tmp_name'];

                    $div = explode('.', $file_name);
                    $file_ext = strtolower(end($div));
                    $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
                    $uploaded_image = "upload/slider/".$unique_image;

                if ($title == "") {
                    echo "<span class='error'>Field must not be empty</span>";

                }else {
                    if (!empty($file_name)) {


                        if ($file_size > 1048567) {
                            echo "<span class='error'>Image size should be less then 1MB</span>";

                        } elseif (in_array($file_ext, $permited) === false) {
                            echo "<span class='error'>You can upload only:-" . implode(', ', $permited) . "</span>";

                        } else {
                            //remove image file from directory start
                            $getquery = "select * from tbl_slider where id= '$sliderid'";
                            $getImg = $db->select($getquery);
                            //$link = mysqli_connect('localhost', 'root', '', 'blog_data');
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
                            $query = "UPDATE tbl_slider
                                      SET                                      
                                      title       = '$title',
                                      image       = '$uploaded_image'                                     
                                      WHERE id    ='$sliderid'";

                            $inserted_row = $db->update($query);

                            if ($inserted_row) {

                                echo "<span class='success'>Slider Updated Successfully.</span>";

                            } else {

                                echo "<span class='error'>Slider Not Updated Successfully.</span>";
                            }
                        }

                    } else {
                        $query = "UPDATE tbl_slider
                                      SET                                      
                                      title       = '$title'                               
                                      WHERE    id = '$sliderid'";

                        $inserted_row = $db->update($query);

                        if ($inserted_row) {

                            echo "<span class='success'>Slider Title Updated Successfully.</span>";

                        } else {

                            echo "<span class='error'>Slider Title Not Updated Successfully.</span>";
                        }
                      }
                   }
                 }

                ?>

                <div class="block">

                    <?php
                        $query = "SELECT * FROM tbl_slider WHERE id= '$sliderid' ORDER BY id DESC";
                        $getslider = $db->select($query);

                        if ($getslider) {
                        while ($sliderresult = $getslider->fetch_assoc()) {
                    ?>

                 <form action="" method="post" enctype="multipart/form-data">

                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" name="title" value="<?= $sliderresult['title']; ?>" class="medium" />                               
                            </td>
                        </tr>                   
                
                   

                        <tr>
                            <td>
                                <label>New Image</label>
                            </td>
                            <td>
                                <img src="<?= $sliderresult['image']; ?>" alt="" height="100px" width="250px"><br>
                                <input name="image" type="file" />
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