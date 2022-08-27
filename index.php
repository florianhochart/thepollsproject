<?php 
require "./config/config.php";

require "./includes/header.php";

require "./library/class/class.sondage.php";

if (in_array($_GET['page'], $pages)) {
	if (file_exists('./library/class/class.'.$_GET['page'].'.php')) {
		require "./library/class/class.".$_GET['page'].".php";
	}
	require "./controllers/".$_GET['page'].".php";
	require "./views/".$_GET['page'].".php";
}
else{
	echo "Page non existante";
}

require "./includes/footer.php";
?>