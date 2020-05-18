<?php
include "C:\\wamp\\www\\promotion\\core\\promocore.php";
if (isset($_POST['prix_red']) and isset($_POST['id_produit']) and isset($_POST['date_fin']))
{$promo1=new promo($_POST['prix_red'],$_POST['id_produit'],$_POST['date_fin']);
$promoC= new promo_core();
$promoC->ajouter_promo($promo1);
header('location:forms.php');
}else{echo "verifier les champs";}
?>