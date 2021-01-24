
<div class="slidersection templete clear">
    <div id="slider">

    	   <?php
                $query = "SELECT * FROM tbl_slider ORDER BY id LIMIT 8";
                $slider  = $db->select($query);

	            if ($slider) {
	                
	                while ($result = $slider->fetch_assoc()) {
	               
            ?>

        <a href="#">
        	<img src="admin/<?= $result['image']; ?>" alt="<?= $result['title']; ?>" title="<?= $result['title']; ?>" />
        </a>

       <?php }} ?>

    </div>

</div>
