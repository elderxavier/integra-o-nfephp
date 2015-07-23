<?php 
//require_once('conexao.php');
require_once('instaladb.php');
$criadbs = new InstalaDB();
$criadbs->criaTabelaEmissor();
$criadbs->criaTabelaPedido();
$criadbs->criaTabelaItens();
/*
	try { 	
		$p_sql = Conexao::getInstance();
		echo "Conectado ao Banco de dados";
		sleep(60);
	} catch (Exception $e) { 
		print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
	GeraLog::getInstance()->inserirLog("Erro: Código: " . $e->getCode() . " Mensagem: " . $e->getMessage()); 
	}finally {
			$p_sql = null;
			echo "Banco de dados banco de dados desconectado";
	}

*/

?>