<?php 

	require_once('C:\Users\trom7\OneDrive\Bureau\Laragon\TP\Connexion.php');

	class ModeleEquipes extends Connexion{

		function getListeEquipe(){
			$requete = self::$bdd->prepare("SELECT * FROM `liste_des_equipes`");
			$requete->execute();
			$resultat = $requete->fetchAll();
			return $resultat;
		}

		function getDetailsEquipe($id){
			$requete = self::$bdd->prepare("SELECT * FROM `liste_des_equipes`
				where id = :id");
			$requete->bindParam("id", $id);
			$requete->execute();
			$resultat = $requete->fetch();
			return $resultat;
		}
		
	}

?>