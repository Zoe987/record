<?php
session_start();
//session_unregister("admin_nc");
$_SESSION["admin_nc"]=null;
echo "<script>window.location.href='../index.php';</script>";

?>