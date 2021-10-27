<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="description" content="Projeto Páginacao de Registros em MVC"/>
	<meta name="author" content="Roger Panosso"/>
	<title>Páginação em MVC</title>
	<link rel="stylesheet" type="text/css" href="<?=BASE_URL;?>Public/Bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?=BASE_URL;?>Public/Bootstrap/css/bootstrap-reboot.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?=BASE_URL;?>Public/Assets/css/style.css"/>
</head>
<body>
	<article>
		<header>
		</header>
		<!-----Views(dinâmicas)------>
		<?=$this->loadViewInTemplate($nomeView, $dados);?>
		<!--------------------------->
		<footer>
		</footer>
	</article>
	<script type="text/javascript">var BASE_URL = '<?=BASE_URL;?>'</script>
	<script src="<?=BASE_URL;?>Public/jQuery/jquery.min.js"></script>
	<script src="<?=BASE_URL;?>Public/Bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?=BASE_URL;?>Public/Assets/js/script.js"></script>
</body>
</html>