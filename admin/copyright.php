<?php include'inc/header.php'; ?>
<?php include'inc/sidebar.php'; ?>

        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update Copyright Text</h2>

            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $node = $fm->validation($_POST['node']);

                    $node = mysqli_real_escape_string($db->link, $node);

                    if ($node == "") {
                        echo "<span class='error'>Field must not be empty</span>";

                    } else {

                        $query = "UPDATE tbl_footer
                                      SET
                                      node = '$node'                                                                          
                                      WHERE id ='1'";

                        $inserted_row = $db->update($query);
                        if ($inserted_row) {
                            echo "<span class='success'>Copyright Updated Successfully.</span>";
                        } else {
                            echo "<span class='error'>Copyright Not Updated.</span>";
                        }
                    }
                }
            ?>

                <div class="block copyblock">

                <?php
                    $query = "SELECT * FROM tbl_footer WHERE id ='1'";
                    $footernote = $db->select($query);
                    if ($footernote) {
                        while ($result = $footernote->fetch_assoc()) {
                ?>

                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="node" value="<?= $result['node']?>"  class="large" />
                            </td>
                        </tr>
						
						 <tr> 
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