<?php
include "C:\\wamp\\www\\promotion\\entities\\coupons.php";
include "C:\\wamp\\www\\promotion\\dbconfig.php";
class coup_core{
    function ajouter_coup($coupons){
        $sql ="INSERT INTO  coupons values ( null,:prix_red,:id_client,CURDATE(),:date_fin)";
        $db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $prix_red=$coupons->getprix_red();
        $id_client=$coupons->getid_client();
        $date_fin=$coupons->getdate_fin();
        $req->bindValue(":prix_red",$prix_red);
        $req->bindValue(":id_client",$id_client);
        $req->bindValue("date_fin",$date_fin);
        $req->execute();
           
         }
     catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
        }
    }
    function afficher_coup(){
        $sql ="select *from coupons";
        $db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		   }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
            }	
    }
    function supprimer_coup($id_coup){
        $sql="DELETE FROM coupons where Id_Coup=:id_coup";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_coup',$id_coup);
		try{
            $req->execute();
          
           }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
            }
    }
    function modifier_coup($id_coup,$prix_red,$date_fin){
        $sql="UPDATE coupons set Prix_Redc=:prix_red,date_fin=:date_fin where Id_Coup=:id_coup";
        $db = config::getConnexion();
		
     try{		
        $req=$db->prepare($sql);
        $req->bindvalue(":id_coup",$id_coup);
        $req->bindValue(":prix_red",$prix_red);
        $req->bindValue(":date_fin",$date_fin);
        $req->execute();
           
        }
      catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
        }
    
}
}
?>