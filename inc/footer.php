</div>

<div class="footersection templete clear">
    <div class="footermenu clear">
        <style>
            ul>li>a{text-decoration: none;}

            ul>li>a:hover{
                /*text-decoration: underline;*/
                color: #fff;
            }
        </style>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Privacy</a></li>
        </ul>
        <ul style="float: right;margin-top: -20px;">
            <li><a href="admin/registration.php" title="Click For Registration Me">Register</a></li>
            <li><a href="admin/login.php" title="Click For login Me">Login</a></li>
        </ul>
    </div>

    <?php
    $query = "SELECT * FROM tbl_footer WHERE id ='1'";
    $footernote = $db->select($query);
    if ($footernote) {
    while ($fresult = $footernote->fetch_assoc()) {
    ?>

    <h3 style="color:#fff;">&copy; <?= $fresult['node']; ?> <?= date('Y'); ?></h3>

    <?php }} ?>

</div>
<div class="fixedicon clear">

    <?php
        $query = "SELECT * FROM tbl_social WHERE id ='1'";
        $social_media = $db->select($query);
        if ($social_media) {
        while ($result = $social_media->fetch_assoc()) {
    ?>

    <a href="<?= $result['fb']; ?>" target="_blank"><img src="images/fb.png" alt="Facebook"/></a>
    <a href="<?= $result['tw']; ?>" target="_blank"><img src="images/social/twitter.png" alt="Twitter"/></a>
    <a href="<?= $result['ln']; ?>" target="_blank"><img src="images/social/linkedin.png" alt="LinkedIn"/></a>
    <a href="<?= $result['gp']; ?>" target="_blank"><img src="images/social/google.png" alt="GooglePlus"/></a>

<?php }} ?>

</div>
<script type="text/javascript" src="js/scrolltop.js"></script>
</body>
</html>
