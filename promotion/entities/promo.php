<?php
class promo{
    private $id_promo;
    private $prix_red;
    private $id_produit;
    private $date_fin;
 function _construct($id_promo,$prix_red,$id_produit,$date_debut,$date_fin){
      $this->id_promo=$id_promo;
      $this->prix_red=$prix_red;
      $this->id_produit=$id_produit;
      $this->date_debut=$date_debut;
      $this->date_fin=$date_fin;
}       
function getid_promo(){
   return $this->id_promo;
}
function getprix_red(){
    return $this->prix_red;
 }
function getid_produit(){
    return $this->id_produit;
 }
function getdate_debut()
{return $this->date_debut;}
 function getdate_fin(){
    return $this->date_fin;
 }
function setid_promo($id_promo){
    return $this->id_promo;
 }
function setprix_red($prix_red){
    return $this->prix_red;
 }    

function setid_produit($id_produit){
    return $this->id_produit;
 }
function setdate_fin($date_fin){
    return $this->date_fin;
 }


} ?>