<?php
include "../../core/couponscore.php";
if (isset($_POST['prix_red']) and isset($_POST['id_client']) and isset($_POST['date_fin']))
{ $coup1=new coupons($_POST['prix_red'],$_POST['Id_client'],$_POST['date_fin']);
$coupC= new coup_core();
$coupC->ajouter_coup($coup1);
echo "<script> alert('ajout faite');window.location='forms.php' </script>";
}else{echo "verifier les champs";}
?>