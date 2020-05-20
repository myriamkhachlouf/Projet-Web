<?php
include "../../core/promocore.php";
$promoc=new promo_core();
if(isset($_POST["id_promo"]) and isset ($_POST["prix_red"]) and isset($_POST["date_fin"])){
    $promoc->modifier_promo($_POST["id_promo"],$_POST["prix_red"],$_POST["date_fin"]);
    header("location:aff-promo.php");

}
?>