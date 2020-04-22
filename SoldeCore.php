<?php
class SoldeCore{
    function ajouter_Solde($Solde){
    $sql="insert into Solde(Id_Solde,Prix_Red,Id_Prod) values (:Id_Solde,:Prix_Red,:Id_Prod) ";
        $db=config::getConnexion();
		try{
        $req=$db->prepare($sql);  
    $Id_Solde=$Solde->getId_Solde;
    $Prix_Red=$Solde->getPrix_Red;
    $Id_Prod=$Solde->getId_Prod;
    $req->bindValue(':Id_Solde',$Id_Solde);
    $req->bindValue(':Prix_Red',$Prix_Red);
    $req->bindValue(':Id_Prod',$Id_Prod);

    $req->execute();
     }
catch (Exception $e){
    echo 'Erreur: '.$e->getMessage();
     }  
    }
function afficher_Solde(){
    $sql="SElECT * From Solde";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

function supprimer_Solde($Id_Solde){
    $sql="delete from Solde where Id_Solde= :Id_Solde";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Id_Solde',$Id_Solde);
		try{
            $req->execute();
           
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

    }
function modifier_Solde($Solde,$Id_Solde){
    $sql="update Solde set Prix_Red=:Prix_Red,Id_Prod=:Id_Prod where Id_Solde=:Id_Solde ";
        $db = config::getConnexion(); 
        try{		
            $req=$db->prepare($sql);
            $Id_Prod=$Solde->getId_Solde;
            $Prix_Red=$Solde->getPrix_Red;
            $Id_Prod=$Solde->getIdProd;
            $req->bindValue(':Id_Solde',$Id_Solde);
            $req->bindValue(':Prix_Red',$Prix_Red);
            $req->bindValue(':Id_Prod',$Id_Prod);
            $s=$req->execute();
			
            
         } 
         catch (Exception $e){
             echo " Erreur ! ".$e->getMessage();
            }
}
}
?>


