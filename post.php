<?php include"inc/header.php"; ?>

<?php
    if (!isset($_GET['id']) || $_GET['id'] == NULL){
        header("Location:404.php");
    }else{
        $id = $_GET['id'];
    }

?>

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">

            <div class="about">

            <?php
                $query = "SELECT * FROM tbl_post WHERE id=$id";
                $post  = $db->select($query);
                if($post){
                    while($result = $post->fetch_assoc()){
            ?>



				<h2><?= $result['title']; ?></h2>

                <h4><?= $fm->formatDate($result['date']); ?>, By <a href="#"><?= $result['author']; ?></a></h4>

                <img src="admin/<?= $result['image']; ?>" alt="post image"/>

                <?= $result['body']; ?>



				<div class="relatedpost clear">
					<h2>Related articles</h2>

                    <?php

                        $catid = $result['cat'];

                      //$queryrelated = "SELECT * FROM tbl_post WHERE cat= '$catid' LIMIT 6";
                    //$queryrelated = "SELECT * FROM tbl_post WHERE cat= '$catid' ORDER BY rand() LIMIT 6";

                    $queryrelated = "SELECT * FROM tbl_post WHERE cat= '$catid' ORDER BY id DESC LIMIT 6";
                    $relatedpost  = $db->select($queryrelated);
                        if($relatedpost){
                            while($rresult = $relatedpost->fetch_assoc()){
                    ?>

					<a href="post.php?id=<?= $rresult['id']; ?>">
                        <img src="admin/<?= $rresult['image']; ?>" alt="post image"/>
                    </a>


					<?php }}else{ echo "No Related Post Available";} ?><!-- End if & while -->

				</div>

                <?php } ?><!-- End while -->

                <?php } else{header("Location:404.php");} ?>
	</div>



</div>

<?php include"inc/sidebar.php"; ?>
<?php include"inc/footer.php"; ?>