<?php 

	require_once('Modele/modele_joueurs.php');
	require_once('Vue/VueJoueur/vue_joueurs.php');

	class ContJoueurs {

		private $vue;
		private $modele;

		public function __construct(){

			$this->vue = new VueJoueurs();
			$this->modele = new ModeleJoueurs();
		}

	    public function details(){
	        $this->vue->details($this->modele->detailsById($_GET['id']));
	    }

	    public function error404(){
	        $this->vueJoueur->err404();
	    }


		public function bienvenue(){
			echo "bienvenue";
		}

		public function liste(){
			$tab = $this->modele->getListe();
			$this->vue->affiche_liste($tab);
		}
	}
?>