<?php
include "../../core/couponscore.php";
$coupc=new coup_core();
if(isset($_POST["id_coup"]) and isset ($_POST["prix_red"]) and isset($_POST["date_fin"])){
    $coupc->modifier_coup($_POST["id_coup"],$_POST["prix_red"],$_POST["date_fin"]);
    header("location:aff-coupons.php");

}
?>