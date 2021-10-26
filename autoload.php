<?php
	/*
	* Definição de autoloader para carregamento automatico de classes perante aplicação
	* diante seus supostos diretorios(namespaces) registrando instancias ocorridas
	*/
	spl_autoload_register(function($classe){
		$dir_base = __DIR__."/".str_replace("\\", "/", $classe.".php");
		if(file_exists($dir_base)):
			require $dir_base;
		else:
			return false;
		endif;
	});
?>