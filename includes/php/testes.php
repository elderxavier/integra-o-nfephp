<?php
//require_once('conexao/conexao.php');
//require_once('instalar/instaladb.php');
require_once('dao/daoemissor.php');
require_once('model/modelemissor.php');

//$daoemissor = new daoEmissor();



/*$emissor = new modelEmissor();		
			$emissor->setId("linha['id']");
			$emissor->setCNPJ("linha['CNPJ']2"); 
			$emissor->setxNome("linha['xNome']"); 
			$emissor->setxFant("linha['xFant']"); 
			$emissor->setxLgr("linha['xLgr']"); 
			$emissor->setnro("linha['nro']"); 
			$emissor->setxCpl("linha['xCpl']"); 
			$emissor->setxBairro("linha['xBairro']");
			$emissor->setcMun("linha['cMun']");
			$emissor->setxMun("linha['xMun']");
			$emissor->setUF("linha['UF']");
			$emissor->setCEP("linha['CEP']");
			$emissor->setcPais("linha['cPais']");
			$emissor->setxPais("linha['xPais']");
			$emissor->setfone("linha['fone']");
			$emissor->setIE("linha['IE']");
			$emissor->setIEST("linha['IEST']");
			$emissor->setIM("linha['IM']");
			$emissor->setCNAE("linha['CNAE']");
			$emissor->setCRT("linha['CRT']");


			echo "<br>".$emissor->getId();
			echo "<br>".$emissor->getCNPJ(); 
			echo "<br>".$emissor->getxNome(); 
			echo "<br>".$emissor->getxFant(); 
			echo "<br>".$emissor->getxLgr(); 
			echo "<br>".$emissor->getnro(); 
			echo "<br>".$emissor->getxCpl(); 
			echo "<br>".$emissor->getxBairro();
			echo "<br>".$emissor->getcMun();
			echo "<br>".$emissor->getxMun(); 
			echo "<br>".$emissor->getUF();
			echo "<br>".$emissor->getCEP();
			echo "<br>".$emissor->getcPais();
			echo "<br>".$emissor->getxPais();
			echo "<br>".$emissor->getfone();
			echo "<br>".$emissor->getIE();
			echo "<br>".$emissor->getIEST();
			echo "<br>".$emissor->getIM();
			echo "<br>".$emissor->getCNAE();
			echo "<br>".$emissor->getCRT();	
*/

$dao = daoEmissor::getInstance();
	//$dao->Inserir($emissor);
//$dao->Editar($emissor);
//$dao->Excluir($emissor->getCNPJ());
$emissorn=$dao->getEmissorDao('id', '12');

//$emissorn->getUF();
//var_dump($emissorn);
echo "<pre>", print_r($emissorn);

?>