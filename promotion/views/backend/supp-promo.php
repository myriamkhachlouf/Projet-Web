<?php
include "../../core/promocore.php";
$promoc=new promo_core();
if(isset($_POST["id_promo"])){
    $promoc->supprimer_promo($_POST["id_promo"]);
    header("location:aff-promo.php");

}
?>