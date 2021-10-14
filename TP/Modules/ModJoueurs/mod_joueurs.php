<?php
		require_once './Controleur/cont_joueurs.php';
		class ModJoueurs{

			private $controleur;
			private $vue;

			public function __construct(){

				$this->controleur = new ContJoueurs();
				$this->vue = new VueJoueurs();

				if(isset($_GET["action"]) == false){
					$action = "bienvenue";
				}

				else{

					$action = $_GET["action"];
					
				}

				switch ($action) {

					case "bienvenue":

						$this->controleur->bienvenue();	

						break;

					case "liste":

						$this->controleur->liste();
				
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
		}

	?>
