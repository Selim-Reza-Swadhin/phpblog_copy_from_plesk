<?php include'inc/header.php'; ?>
<?php include'inc/sidebar.php'; ?>

<div class="grid_10">
    <!--Start Seen Box-->
    <div class="box round first grid">
        <h2>Seen Message</h2>

        <?php

        if (isset($_GET['delid'])) {

            $delid = $_GET['delid'];
            $delquery = "DELETE FROM tbl_contact WHERE id='$delid' ";
            $deldata = $db->delete($delquery);

            if ($deldata) {
                echo "<span  class='success'>Deleted Message</span>";
            }else{
                echo "<span  class='error'>Not Deleted ! </span>";
            }
        }

        ?>


        <div class="block">
            <table class="data display datatable" id="example">
                <thead>
                <tr>
                    <th>Serial No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <?php
                $query = "SELECT * FROM tbl_contact WHERE status='1' ORDER BY id DESC";
                $msg = $db->select($query);
                if ($msg) {
                    $i = 0;
                    while ($result = $msg->fetch_assoc()) {
                        $i++;
                        ?>
                        <tr class="odd gradeX">
                            <td><?= $i; ?></td>
                            <td><?= $result['firstname'].' '.$result['lastname']; ?></td>
                            <td><?= $result['email']; ?></td>
                            <td><?= $fm->textShorten($result['body'], 30); ?></td>
                            <td><?= $fm->formatDate($result['date']); ?></td>
                            <td>
                                <a href="viewmsg.php?msgid=<?= $result['id']; ?>" >View</a>

                                <?php if (Session::get('userRole') == '0') { ?>
                                   ||<a onclick="return confirm('Are you sure to delete message');" href="?delid=<?= $result['id']; ?>">Delete</a>
                                <?php } ?>

                            </td>
                        </tr>
                    <?php }} ?>

                </tbody>
            </table>
        </div>
    </div><!-- End Seen Box-->

</div>

<script type="text/javascript">

    $(document).ready(function () {
        setupLeftMenu();

        $('.datatable').dataTable();
        setSidebarHeight();


    });
</script>

<?php include'inc/footer.php'; ?>

