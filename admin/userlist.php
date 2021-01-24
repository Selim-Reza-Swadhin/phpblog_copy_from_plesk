<?php include'inc/header.php'; ?>
<?php include'inc/sidebar.php'; ?>

        <div class="grid_10">
            <div class="box round first grid">
                <h2>User List</h2>

                <?php

                if (isset($_GET['deluser'])) {

                    $delid = $_GET['deluser'];
                    $delquery = "DELETE FROM tbl_user WHERE id='$delid' ";
                    $deldata = $db->delete($delquery);

                    if ($deldata) {
                        echo "<span  class='success'>User Deleted Successfully</span>";
                    }else{
                        echo "<span  class='error'>User Not Deleted ! </span>";
                    }
                }

                ?>

                <div class="block">        
                    <table class="data display datatable" id="example">


                        <thead>
						<tr>
							<th>SN.</th>
							<th>Name</th>
							<th>Username</th>
							<th>Email</th>
							<th>Image Path</th>
							<th>Pic</th>
							<th>Details</th>
							<th>Role</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>

                    <?php
                        $query = "SELECT * FROM tbl_user ORDER BY id DESC";
                        $alluser = $db->select($query);
                    if ($alluser) {
                        $i = 0;
                        while ($result = $alluser->fetch_assoc()) {
                            $i++;
                    ?>

						<tr class="odd gradeX">
							<td><?= $i; ?></td>
							<td><?= $result['name']; ?></td>
							<td><?= $result['username']; ?></td>
							<td><?= $result['email']; ?></td>
							<td><?= $result['image']; ?></td>
							<td>
                                <img src="<?= $result['image']; ?>" width="35" height="30" alt="no image">
                            </td>
							<td><?= $fm->textShorten($result['details'], 40); ?></td>
							<td>

								<?php
									/*if ($result['role'] == '0') {
										echo "Admin";
									}elseif ($result['role'] == '1') {
										echo "Author";
									}elseif ($result['role'] == '2') {
										echo "Editor";
									}*/

									if ($result['role'] == 'admin') {
										echo "Admin";
									}elseif ($result['role'] == 'author') {
										echo "Author";
									}elseif ($result['role'] == 'editor') {
										echo "Editor";
									}
								?>

							</td>

							<td>
                                <a href="viewuser.php?userid=<?= $result['id']; ?>">View</a>

                                <?php
                                  if (Session::get('userRole') == '0') {?>

                               || <a onclick="return confirm('Are you sure to Delete');" href="?deluser=<?= $result['id']; ?>">Delete</a>
                               <?php } ?>
                            </td>
						</tr>
                    <?php }} ?>

					</tbody>
				</table>
               </div>
            </div>
        </div>


        <script type="text/javascript">

            $(document).ready(function () {
                setupLeftMenu();

                $('.datatable').dataTable();
                setSidebarHeight();
            });
        </script>

<?php include'inc/footer.php'; ?>
