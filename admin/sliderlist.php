<?php include'inc/header.php'; ?>
<?php include'inc/sidebar.php'; ?>


        <div class="grid_10">

            <div class="box round first grid">

                <h2>Slider List</h2>

                <div class="block"> 

                    <table class="data display datatable" id="example">

                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Slider Title</th>                            
                            <th>Slider Image</th>                            
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php
                            $query = "SELECT * FROM tbl_slider";
                            $slider  = $db->select($query);

                        if ($slider) {

                            $i = 0;
                            while ($result = $slider->fetch_assoc()) {
                            $i++;

                    ?>

                        <tr class="odd gradeX">
                            <td><?= $i; ?></td>
                            <td><?= $result['title']; ?></td>                            
                            <td>
                                <img style="margin-top: 6px" src="<?= $result['image']; ?>" alt="" height="35px" width="35px">
                            </td>
                            
                            <td>

                               

                       <?php if(Session::get('userRole') == '0'){ ?>

                                <a href="editslider.php?sliderid=<?php echo $result['id']; ?>">Edit</a> ||

                                <a onclick="return confirm('Are you sure to Delete?');" href="delslider.php?sliderid=<?= $result['id']; ?>">Delete</a></td>

                        <?php }?>
                                
                        </tr>

                    <?php }} ?>

                    </tbody>

                </table>
    
               </div>
            </div>
        </div>

        <div class="clear">
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