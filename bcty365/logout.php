<?php
session_start();
//session_unregister("unc");
$_SESSION["unc"]=null;
echo "<script>window.location.href='index.php';</script>";
?>
