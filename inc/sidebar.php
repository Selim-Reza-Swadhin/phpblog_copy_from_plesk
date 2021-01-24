<div class="sidebar clear">


    <div class="samesidebar clear">

        <h2>Categories</h2>

        <ul>
            <?php
                $query = "SELECT * FROM tbl_category LIMIT 6";
                $category  = $db->select($query);

                if($category){
                while($result = $category->fetch_assoc()){
            ?>

            <li><a href="posts.php?category=<?= $result['id']; ?>"><?= $result['name']; ?></a></li>

            <?php }}else{ ?>

                <li>No Category Created</li>

            <?php } ?>

        </ul> 

    </div>



    <div class="samesidebar clear">

        <h2>Latest articles</h2>

        <?php

            //$query = "SELECT * FROM tbl_post ORDER BY rand() LIMIT 6";
            //$query = "SELECT * FROM tbl_post LIMIT 4";

            $query = "SELECT * FROM tbl_post ORDER BY id DESC LIMIT 5";
            $post  = $db->select($query);
            if($post){
            while($result = $post->fetch_assoc()){
        ?>

        <div class="popular clear">

            <h3><a href="post.php?id=<?= $result['id']; ?>"><?= $result['title']; ?></a></h3>

            <a href="post.php?id=<?= $result['id']; ?>"><img src="admin/<?= $result['image']; ?>" alt="post image"/></a>

            <?= $fm->textShorten($result['body'], 150); ?>

        </div>

        <?php }} else{"<script>window.location='404.php'</script>";} ?><!-- End if & while loop -->

    </div>

</div>
