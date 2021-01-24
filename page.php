<?php include"inc/header.php"; ?>

<?php

$pageid = mysqli_real_escape_string($db->link, $_GET['pageid']);//alternate system

    if (!isset($pageid) || $pageid == NULL) {
      echo "<script>window.location='404.php';</script>";
    //    header("Location:404.php");
    }else{
        $id = $pageid;
    }
?>

<?php
/*if (!isset($_GET['pageid']) || $_GET['pageid'] == NULL) {
    echo "<script>window.location='404.php';</script>";
    //    header("Location:404.php");
}else{
    $id=$_GET['pageid'];
}*/
?>


<?php
    $pagequery = "SELECT * FROM tbl_page WHERE id='$id'";
    $pagedetails = $db->select($pagequery);
    if ($pagedetails) {
        while ($result = $pagedetails->fetch_assoc()) {
?>

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">

				<h2><?= $result['name']; ?></h2>
	
				<?= $result['body']; ?>

	</div>

</div>

<?php }} else{echo "<script>window.location='404.php';</script>";} ?>



<?php include"inc/sidebar.php"; ?>
<?php include"inc/footer.php"; ?>