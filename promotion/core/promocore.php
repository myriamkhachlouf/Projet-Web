<?php
include "C:\\wamp\\www\\promotion\\entities\\promo.php";
include "C:\\wamp\\www\\promotion\\dbconfig.php";
class promo_core{
    function ajouter_promo($promo){
        $sql ="INSERT INTO promotion values (null,:prix_red,:id_produit,CURDATE(),:date_fin)";
        $db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $prix_red=$promo->getprix_red();
        $id_produit=$promo->getid_produit();
        $date_fin=$promo->getdate_fin();
        $req->bindValue(':prix_red',$prix_red);
        $req->bindValue(':id_produit',$id_produit);
        $req->bindValue(':date_fin',$date_fin);
        $req->execute();
           
          }
     catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
            }
    
    }
    function afficher_promo(){
        $sql ="SELECT * from promotion";
        $db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    function supprimer_promo($id_promo){
        $sql="DELETE FROM promotion where Id_Solde= :id_promo";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_promo',$id_promo);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifier_promo($id_promo,$prix_red,$date_fin){
        $sql="update promotion set Prix_Red=:prix_red,date_fin=:date_fin where Id_Solde=:id_promo";
        $db = config::getConnexion();
		
    try{		
        $req=$db->prepare($sql);
        $req->bindvalue("id_promo",$id_promo);
        $req->bindValue(":prix_red",$prix_red);
        $req->bindValue("date_fin",$date_fin);
        $req->execute();
           
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
    

} 
}

?>