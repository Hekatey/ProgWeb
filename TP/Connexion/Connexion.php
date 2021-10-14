
	<?php  

	class Connexion{

		//Username : dutinfopw201645
		//Password : veruvehy
		//DNS : database-etudiants.iut.univ-paris8.fr /phpmyadmin pour le site 

		protected static $bdd = NULL;

		public static function initConnexion(){

			if(self::$bdd == NULL){

				try{

					$dns = "mysql:host=localhost;dbname=tp_progweb";
					$user = "root";
					$password = "12345";

					self::$bdd = new PDO($dns, $user, $password);
					self::$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					self::$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
					echo "Connecté.";	

				} catch(PDOException $e){
					echo "La connexion a échoué.";
				}
			}

		}

	}

	?>
