<?php include"inc/header.php"; ?>
<?php include"inc/slider.php"; ?>



<div class="contentsection contemplete clear">
    <div class="maincontent clear">

        <!-- Pagination -->
        <?php
            $per_page= 4;
            if(isset($_GET['page'])){
                $page = $_GET['page'];
            }else{
                $page = 1;
            }
            $start_form = ($page - 1) * $per_page;
        ?>
        <!-- Pagination -->

<?php

    $query = "SELECT * FROM tbl_post ORDER BY id DESC LIMIT $start_form, $per_page";
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


        <?php } ?><!-- End while loop -->



        <!-- Pagination Start -->
        <?php
        $query = "SELECT * FROM tbl_post";
        $result= $db->select($query);
        $total_rows = mysqli_num_rows($result);
        $total_pages = ceil($total_rows / $per_page);

        echo "<span class='pagination'><a href='index.php?page=1'>".'First Page'."</a>";

for($i = 1; $i <= $total_pages; $i++){
    echo "<a href='index.php?page=".$i."'>".$i."</a>";
}

        echo"<a href='index.php?page=$total_pages'>".'Last Page'."</a></span>"?>
        <!-- Pagination End -->



        <?php } else{header("Location:404.php");} ?><!-- End if loop -->


    </div>


<?php include"inc/sidebar.php"; ?>
<?php include"inc/footer.php"; ?>