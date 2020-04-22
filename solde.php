<?php
class Solde{
    private $Id_Solde;
    private $Prix_Red;
    private $Id_Prod;
    function construct($Id_Solde,$Prix_Red,$Id_Prod){
        $this->Id_Solde=$Id_Solde;
        $this->Prix_red=$Prix_Red;
        $this->Id_Prod=$Id_Prod;
    }
function getId_Solde(){
    $this->Id_Solde;
}
function getPrix_Red(){
    $this->Prix_Red;
}
function getId_Prod(){
    $this->Id_Prod;
}
function setId_Solde($Id_Solde){
    $this->Id_Solde=$Id_Solde;
}
function setPrix_Red($Prix_Red){
    $this->Prix_Red=$Prix_Red;
}
function setId_Prod($Id_Solde){
    $this->Id_Prod=$Id_Prod;
}
}
?>