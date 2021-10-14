
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Index</title>
</head>
<body>

	<?php
		if(!isset($_GET['module'])){
	    	$_GET['module'] = "ModJoueurs";
		}

		$module = $_GET["module"];

		switch ($module) {

				case "ModJoueurs":
					require_once('C:\Users\trom7\OneDrive\Bureau\Laragon\TP\modules\mod_joueurs\mod_joueurs.php');
					break;
				case "ModEquipes":
					require_once('C:\Users\trom7\OneDrive\Bureau\Laragon\TP\modules\mod_equipes\mod_equipes.php');
					break;
				default:
        			die ("Accès interdit");
    				break;
		}

		require_once('C:\Users\trom7\OneDrive\Bureau\Laragon\TP\Connexion.php');
		Connexion::initConnexion();
		new $module();

	?>

</body>
</html>