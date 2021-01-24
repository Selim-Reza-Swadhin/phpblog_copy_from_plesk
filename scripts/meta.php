  <?php
    if (isset($_GET['pageid'])) {

        $pagetitleid = $_GET['pageid'];

        $query = "SELECT * FROM tbl_page WHERE id ='$pagetitleid'";
        $page_title = $db->select($query);

            if ($page_title) {
            while ($result = $page_title->fetch_assoc()) {?>

                <title><?= $result['name']; ?> - <?= TITLE; ?></title>

        <?php  }}} elseif(isset($_GET['id'])) {

                $postid = $_GET['id'];

                $query = "SELECT * FROM tbl_post WHERE id ='$postid'";
                $post_id = $db->select($query);
                if ($post_id) {
                    while ($result = $post_id->fetch_assoc()) {?>

                        <title><?= $result['title']; ?> - <?= TITLE; ?></title>

         <?php  }}} else{ ?>

           <title><?= $fm->title(); ?> - <?= TITLE; ?></title>

         <?php  } ?>



    <meta name="language" content="English">

    <!-- description meta start -->
    <?php
        if (isset($_GET['id'])) {
            $keywordid = $_GET['id'];
            $query = "SELECT * FROM tbl_post WHERE id ='$keywordid'";
            $keywords = $db->select($query);
            if ($keywords) {
                while ($result = $keywords->fetch_assoc()) { ?>
                    <meta name="description" content="<?= $result['description']; ?>">  <!-- //tbl_post-> description-->

                <?php }}}else{ ?>

            <meta name="description" content="<?= DESCRIPTION; ?>"> <!--// config.php-->

    <?php } ?> <!-- description meta end -->


    <!-- keywords meta start -->
    <?php
        if (isset($_GET['id'])) {
            $keywordid = $_GET['id'];
            $query = "SELECT * FROM tbl_post WHERE id ='$keywordid'";
            $keywords = $db->select($query);
            if ($keywords) {
                while ($result = $keywords->fetch_assoc()) { ?>
        <meta name="keywords" content="<?= $result['tags']; ?>">  <!-- //tbl_post-> tags-->

    <?php }}}else{ ?>

    <meta name="keywords" content="<?= KEYWORDS; ?>"> <!--// config.php-->

    <?php } ?> <!-- keywords meta end -->

    <!-- author meta start -->
    <?php
        if (isset($_GET['id'])) {
            $authorid = $_GET['id'];
            $query = "SELECT * FROM tbl_post WHERE id ='$authorid'";
            $keywords = $db->select($query);
            if ($keywords) {
                while ($result = $keywords->fetch_assoc()) { ?>
        <meta name="author" content="<?= $result['author']; ?>">  <!-- //tbl_post-> author-->

    <?php }}}else{ ?>

    <meta name="author" content="<?= AUTHORS; ?>"> <!--// config.php-->

    <?php } ?><!-- author meta end -->