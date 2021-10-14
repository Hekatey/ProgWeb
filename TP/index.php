
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Index</title>
</head>
<body>

	<?php
		define("ROOT", dirname(__FILE__)."\\");
		if(!isset($_GET['module'])){
	    	$_GET['module'] = "ModJoueurs";
		}

		$module = $_GET["module"];

		switch ($module) {

				case "ModJoueurs":
					require_once ROOT."Modules\ModJoueurs\mod_joueurs.php";
					break;
				case "ModEquipes":
				  	require_once ROOT."Modules\ModJoueurs\mod_equipes.php";
					break;
				default:
        			die ("Accès interdit");
    				break;
		}

		require_once('Connexion\Connexion.php');
		Connexion::initConnexion();
		new $module();

	?>

</body>
</html>