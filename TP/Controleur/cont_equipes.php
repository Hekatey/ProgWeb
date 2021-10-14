<?php 

	require_once('Modele/modele_equipes.php');
	require_once('Vue/VueJoueur/vue_equipes.php');

	class ContEquipes {

		private $vue;
		private $modele;

		public function __construct(){

			$this->vue = new VueEquipes();
			$this->modele = new ModeleEquipes();
			$this->vue->menu();

			if(isset($_GET["action"]) == false){
				$action = "bienvenue";
			}

			else{

				$action = $_GET["action"];
				
			}

			switch ($action) {

				case "bienvenue":

					$this->bienvenue();

					break;

				case "liste":

					$this->liste();
			
					break;

				case "details":
					if(isset($_GET['id'])){
						$this->vue->afficherDetails($this->modele->getDetails($_GET['id']));
					}

					else{
						$this->vue->error404();
					}
			}	
			
		}

		function bienvenue(){
			echo "bienvenue";
		}

		function liste(){

			$tab = $this->modele->getListe();
			$this->vue->affiche_liste($tab);

		}
	}

?>