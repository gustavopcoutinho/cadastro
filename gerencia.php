<?php
	$operacao = $_POST["operacao"];
	if (strcmp($operacao, "inclusao") == 0 ) {
		// realiza a inclusao do produto
		echo "Produto incluído";
	}
	
	if (strcmp($operacao, "exclusao") == 0 ) {
		// realiza a exclusao do produto
		echo "Produto excluído";
	}
?>