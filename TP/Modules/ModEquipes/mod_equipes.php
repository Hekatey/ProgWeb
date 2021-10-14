<?php
		require_once './Controleur/cont_equipes.php';

		class ModEquipes{

			private $controleur;
			private $vue;

			public function __construct(){

				$this->controleur = new ContEquipes();
				$this->vue = new VueEquipes();

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
							self::$vue->afficherDetails($this->modele->getDetails($_GET['id']));
						}

						else{
							self::$vue->error404();
						}
				}
			
			}
		}

	?>
