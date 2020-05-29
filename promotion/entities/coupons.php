<?php
class coupons{
    private $id_coupons;
    private $prix_red;
    private $id_client;
    private $date_fin;
 function __construct($prix_red,$id_client,$date_fin){
      $this->prix_red=$prix_red;
      $this->id_client=$id_client;
      $this->date_fin=$date_fin;
}       
function getid_coupons(){
   return $this->id_coupons;
}
function getprix_red(){
    return $this->prix_red;
 }
function getid_client(){
    return $this->id_client;
 }
function getdate_fin(){
    return $this->date_fin;
 }
function setid_coupons($id_coupons){
    return $this->id_coupons;
 }
function setprix_red($prix_red){
    return $this->prix_red;
 }    

function setid_client($id_client){
    return $this->id_client;
 }
function setdate_fin($date_fin){
    return $this->date_fin;
 }


} ?>