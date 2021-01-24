<?php
$value = "<p>Swadhin</p>";
//$data = htmlspecialchars($value);
$data = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
echo $data;
