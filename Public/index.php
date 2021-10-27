<?php
	declare(strict_types=1);

	session_start();

	//autoload
	require __DIR__."/../autoload.php";

	//reference namespace(dir)
	use App\Core\Core;

	$core = new Core();
?>