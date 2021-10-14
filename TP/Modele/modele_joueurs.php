<?php 

	require_once('C:\Users\trom7\OneDrive\Bureau\Laragon\TP\Connexion.php');

	class ModeleJoueurs extends Connexion{

		function getListe(){
			$requete = self::$bdd->prepare("SELECT * FROM `Liste_de_joueurs`");
			$requete->execute();
			$resultat = $requete->fetchAll();
			return $resultat;
		}

		function getDetails($id){
			$requete = self::$bdd->prepare("SELECT * FROM `Liste_de_joueurs`
				where id = :id");
			$requete->bindParam("id", $id);
			$requete->execute();
			$resultat = $requete->fetch();
			return $resultat;
		}
		
	}

?>