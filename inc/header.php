<?php include"config/config.php"; ?>
<?php include"lib/Database.php"; ?>
<?php include"helpers/Format.php"; ?>

<?php
    $db = new Database();
    $fm = new Format();
?>

<!DOCTYPE html>
<html>
<head>



   <?php include 'scripts/meta.php'; ?>
   <?php include 'scripts/css.php'; ?>
   <?php include 'scripts/js.php'; ?>

</head>

<body>
<div class="headersection templete clear">
    <a href="index.php">
        <div class="logo">

            <?php
                $query = "SELECT * FROM tbl_slogan WHERE id ='1'";
                $blog_title = $db->select($query);

                if ($blog_title) {
                while ($result = $blog_title->fetch_assoc()) {
            ?>


            <img src="admin/<?= $result['logo']; ?>" alt="Logo"/>
            <h2><?= $result['title']; ?></h2>
            <p><?= $result['slogan']; ?></p>

            <?php }} ?>

        </div>
    </a>
    <div class="social clear">
        <div class="icon clear">

            <?php
                $query = "SELECT * FROM tbl_social WHERE id ='1'";
                $social_media = $db->select($query);
                if ($social_media) {
                while ($result = $social_media->fetch_assoc()) {
            ?>

                <a href="<?= $result['fb']; ?>" target="_blank"><i class="fa fa-facebook facebook"></i></a>
                <a href="<?= $result['ins']; ?>" target="_blank"><i class="fa fa-instagram instagram"></i></a>
                <a href="<?= $result['tw']; ?>" target="_blank"><i class="fa fa-twitter twitter"></i></a>
                <a href="<?= $result['ln']; ?>" target="_blank"><i class="fa fa-linkedin linkedin"></i></a>
                <a href="<?= $result['gp']; ?>" target="_blank"><i class="fa fa-wordpress google-plus"></i></a>
                <a href="<?= $result['git']; ?>" target="_blank"><i class="fa fa-github github"></i></a>
                <a href="<?= $result['upwork']; ?>" target="_blank"><i class="fa fa-wheelchair  github"></i></a>

           <?php }} ?>

        </div>

        <div class="searchbtn clear">
            <form action="search.php" method="get">
                <input type="text" name="search" placeholder="Search keyword..."/>
                <input type="submit" name="submit" value="Search"/>
            </form>
        </div>
    </div>
</div>
<div class="navsection templete">

    <?php
        $path = $_SERVER['SCRIPT_FILENAME'];
        $current_page = basename($path, '.php');
    ?>

    <ul>

        <li><a
        <?php if ($current_page == 'index') { echo 'id="active"'; /*active menu bar*/}?>

                    href="index.php">Home</a></li>



        <?php
            $query = "SELECT * FROM tbl_page";
            $pages = $db->select($query);
            if ($pages) {
                while ($result = $pages->fetch_assoc()) {
        ?>

                <li><a
                        <?php
                            if (isset($_GET['pageid']) && $_GET['pageid'] == $result['id']) {
                                echo 'id="active"'; /*active menu bar*/
                            }
                        ?>

                            href="page.php?pageid=<?= $result['id']; ?>"><?= $result['name']; ?></a></li>

        <?php }} ?>

        <li><a
                <?php if ($current_page == 'contact') { echo 'id="active"'; /*active menu bar*/}?>
                    href="contact.php">Contact</a></li>
    </ul>
</div>
