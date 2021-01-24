<?php include"inc/header.php"; ?>
<?php include"inc/slider.php"; ?>

<?php
if (!isset($_GET['category']) || $_GET['category'] == NULL){
    header("Location:404.php");
}else{
    $id = $_GET['category'];
}

?>


<div class="contentsection contemplete clear">
    <div class="maincontent clear">

    <?php

    $query = "SELECT * FROM tbl_post WHERE cat=$id";//join query tbl_post & tbl_category(sidebar.php)
    $post  = $db->select($query);
    if($post){
        while($result = $post->fetch_assoc()){

    ?>


        <div class="samepost clear">

            <h2><a href="post.php?id=<?= $result['id']; ?>"><?= $result['title']; ?></a></h2>

            <h4><?= $fm->formatDate($result['date']); ?>, By <a href="#"><?= $result['author']; ?></a></h4>

            <a href="#"><img src="admin/<?= $result['image']; ?>" alt="post image"/></a>

            <?= $fm->textShorten($result['body'], 230); ?>

            <div class="readmore clear">
                <a href="post.php?id=<?= $result['id']; ?>">Read More</a>
            </div>

        </div>


        <?php }} else{echo "<script>window.location='404.php'</script>";} ?><!-- End if loop -->

    </div>



<?php include"inc/sidebar.php"; ?>
<?php include"inc/footer.php"; ?>