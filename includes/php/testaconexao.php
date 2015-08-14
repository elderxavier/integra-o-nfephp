<?php 
require_once('conexao/conexao.php');
require_once('instalar/instaladb.php');
//$criadbs = new InstalaDB();
/*$criadbs->criaTabelaEmissor();
$criadbs->criaTabelaPedido();
$criadbs->criaTabelaItens();*/

	try { 	
		$p_sql = Conexao::getInstance();
		echo "Conectado ao Banco de dados";
		$instalar = new InstalaDB(); 
		$instalar->instalarTabelas();
		//$instalar->criaTabelaItens();
		//$instalar->criaTabelaTotalImpostos();
		//$instalar->criaTabelaEmissor();
		//sleep(60);
		//echo "<br>Banco de dados banco de dados desconectado";
		//$p_sql = null;
	} catch (Exception $e) { 
		print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
	GeraLog::getInstance()->inserirLog("Erro: Código: " . $e->getCode() . " Mensagem: " . $e->getMessage()); 
	}

	
	



?>