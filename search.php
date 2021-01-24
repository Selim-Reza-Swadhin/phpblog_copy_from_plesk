<?php include"inc/header.php"; ?>
<?php include"inc/slider.php"; ?>

<?php
if (!isset($_GET['search']) || $_GET['search'] == NULL){
    header("Location:404.php");
}else{
    $search = $_GET['search'];
}

?>


<div class="contentsection contemplete clear">
    <div class="maincontent clear">

        <?php

        $query = "SELECT * FROM tbl_post WHERE title LIKE '%$search%' || body LIKE '%$search%' || author LIKE '%$search%'";
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


        <?php }} else{ ?>
        <h3 style="color: red; text-align: center">Your Search Query Not Found !!</h3>
        <?php } ?><!-- End if loop -->

    </div>



    <?php include"inc/sidebar.php"; ?>
    <?php include"inc/footer.php"; ?>
