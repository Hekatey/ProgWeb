<?php 

	class VueEquipes{

		public function __construct(){
			
		}

		function menu(){
			echo "<a href=\"index.php?action=bienvenue\">Bienvenue\n</a>";
			echo "<a href=\"index.php?action=liste\">List\n</a>";
			echo "<a href=\"index.php?action=details\">Details\n</a>";
		}
		

		function affiche_liste($tableau){	

			foreach ($tableau as $key => $value) {
				//echo $tableau[$key];
				//echo "Cle : $key, valeur : $value<br/>\n"
				echo 'Id : ', $value->id ,'<br/>';
				echo 'Nom : ', $value->nom ,'<br/>';
				echo "<a href='index.php?action=details&id=$value->id'>$value->nom</a>";

			}

		}

		function error404(){
			echo "Id non existant";
		}

		function afficherDetails($value){

			if(isset($value) && !empty($value)){

            echo "<h1>Nom: $value->nom</h1>";
            echo "<br>";
            echo "<h4>Age: $value->age</h4>";

            echo "<br>";
            echo "<p>Details: $value->details</p>";
      		}
		}

		
	}

?>