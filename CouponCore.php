<?php
class CouponsCore{
    function ajouter_Coup($Coupons){
    $sql="insert into Coup(Id_Coup,Prix_Redc,Id_Client) values (:Id_Coup,:Prix_Redc,:Id_Client) ";
        $db=config::getConnexion();
		try{
        $req=$db->prepare($sql);  
    $Id_Coup=$Coup->getId_Coup;
    $Prix_Redc=$Coup->getPrix_Redc;
    $Id_Client=$Coup->getId_Client;
    $req->bindValue(':Id_Coup',$Id_Coup);
    $req->bindValue('Prix_Redc',$Prix_Redc);
    $req->bindValue(':Id_Client',$Id_Client);

    $req->execute();
     }
catch (Exception $e){
    echo 'Erreur: '.$e->getMessage();
     }  
    }
function afficher_Coup(){
    $sql="SElECT * From Coupons";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

function supprimer_Coup($Id_Coup){
    $sql="delete from Coup where Id_Coup= :Id_Coup";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Id_Coup',$Id_Coup);
		try{
            $req->execute();
           
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

    }
function modifier_Coup($Coup,$Id_Coup){
    $sql="update Coup set Prix_Redc=:Prix_Redc,Id_Client=:Id_Client where Id_Coup=:Id_Coup ";
        $db = config::getConnexion(); 
        try{		
            $req=$db->prepare($sql);
            $Id_Client=$Coup->getId_Coup;
            $Prix_Redc=$Coup->getPrix_Redc;
            $Id_Client=$Coup->getIdProd;
            $req->bindValue(':Id_Coup',$Id_Coup);
            $req->bindValue(':Prix_Redc',$Prix_Redc);
            $req->bindValue(':Id_Client',$Id_Client);
            $s=$req->execute();
			
            
         } 
         catch (Exception $e){
             echo " Erreur ! ".$e->getMessage();
            }
}
}
?>




