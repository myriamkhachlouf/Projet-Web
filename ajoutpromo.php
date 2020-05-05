<?php
include "C:\\wamp\\www\\promotion\\core\\promocore.php";
if (isset($_POST['Prix_Red']) and isset($_POST['Id_Prod']) and isset($_POST['date_debut']) and isset($_POST['date_fin']))
{$promo1=new promo($_POST['Prix_Red'],$_POST['Id_Prod'],$_POST['date_debut'],$_POST['date_fin']);
$promoC= new promo_core();
$promoC->ajouter_promo($promo1);
}else{echo "verifier les champs";}
?>