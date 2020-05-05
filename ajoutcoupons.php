<?php
include "C:\\wamp\\www\\promotion\\core\\couponscore.php";
if (isset($_POST['Prix_Red']) and isset($_POST['Id_Client']) and isset($_POST['date_debutC']) and isset($_POST['date_finC']))
{$coup1=new coupons($_POST['Prix_Red'],$_POST['Id_Prod'],$_POST['date_debut'],$_POST['date_fin']);
$coupC= new coupons_core();
$coupC->ajouter_coup($coup1);
}else{echo "verifier les champs";}
?>