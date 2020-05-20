<?php
include "../../core/couponscore.php";
$coupc=new coup_core();
if(isset($_POST["id_coup"])){
    $coupc->supprimer_coup($_POST["id_coup"]);
    header("location:aff-coupons.php");
}