<?php include'inc/header.php'; ?>
<?php include'inc/sidebar.php'; ?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Social Media</h2>

            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $fb = $fm->validation($_POST['fb']);
                    $ins = $fm->validation($_POST['ins']);
                    $tw = $fm->validation($_POST['tw']);
                    $ln = $fm->validation($_POST['ln']);
                    $gp = $fm->validation($_POST['gp']);
                    $git = $fm->validation($_POST['git']);
                    $upwork = $fm->validation($_POST['upwork']);

                    $fb = mysqli_real_escape_string($db->link, $fb);
                    $ins = mysqli_real_escape_string($db->link, $ins);
                    $tw = mysqli_real_escape_string($db->link, $tw);
                    $ln = mysqli_real_escape_string($db->link, $ln);
                    $gp = mysqli_real_escape_string($db->link, $gp);
                    $git = mysqli_real_escape_string($db->link, $git);
                    $upwork = mysqli_real_escape_string($db->link, $upwork);

                    if ($fb == "" || $tw == "" || $ln == "" || $gp == "") {
                        echo "<span class='error'>Field must not be empty</span>";

                    } else {

                        $query = "UPDATE tbl_social
                                      SET
                                      fb = '$fb',
                                      ins = '$ins',
                                      tw = '$tw',                                     
                                      ln = '$ln',                                     
                                      gp = '$gp',                                     
                                      git = '$git' ,									                                      
                                      upwork = '$upwork' 
                                      WHERE id ='1'";

                        $inserted_row = $db->update($query);
                        if ($inserted_row) {
                            echo "<span class='success'>Social Media Updated Successfully.</span>";
                        } else {
                            echo "<span class='error'>Social Media Not Updated.</span>";
                        }
                    }
                }
            ?>

                <div class="block">

                <?php
                    $query = "SELECT * FROM tbl_social WHERE id ='1'";
                    $social_media = $db->select($query);
                    if ($social_media) {
                    while ($result = $social_media->fetch_assoc()) {
                ?>

                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <label>Facebook</label>
                            </td>
                            <td>
                                <input type="text" name="fb" value="<?= $result['fb']; ?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Instagram</label>
                            </td>
                            <td>
                                <input type="text" name="ins" value="<?= $result['ins']; ?>" class="medium" />
                            </td>
                        </tr>
						 <tr>
                            <td>
                                <label>Twitter</label>
                            </td>
                            <td>
                                <input type="text" name="tw" value="<?= $result['tw']; ?>" class="medium" />
                            </td>
                        </tr>
						
						 <tr>
                            <td>
                                <label>LinkedIn</label>
                            </td>
                            <td>
                                <input type="text" name="ln" value="<?= $result['ln']; ?>" class="medium" />
                            </td>
                        </tr>
						
						 <tr>
                            <td>
                                <label>Wordpress</label>
                            </td>
                            <td>
                                <input type="text" name="gp" value="<?= $result['gp']; ?>" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Github</label>
                            </td>
                            <td>
                                <input type="text" name="git" value="<?= $result['git']; ?>" class="medium" />
                            </td>
                        </tr>
						
						
                        <tr>
                            <td>
                                <label>Upwork</label>
                            </td>
                            <td>
                                <input type="text" name="upwork" value="<?= $result['upwork']; ?>" class="medium" />
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

<?php include'inc/footer.php'; ?>
