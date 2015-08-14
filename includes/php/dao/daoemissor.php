<?php
require_once(dirname(__FILE__).'/../conexao/conexao.php');
require_once(dirname(__FILE__).'/../model/modelemissor.php');
require_once(dirname(__FILE__).'/../crialog.php');

	
class daoEmissor {

	public static $instance; 

	/*private function __construct() { 
	
	}*/
	

	public static function getInstance() { 
		if (!isset(self::$instance)) 
			self::$instance = new daoEmissor(); 
		return self::$instance; 
	}

	public function Inserir(modelEmissor $emissor) { 
		try { 
			$sql = "INSERT INTO nfe_emissor (CNPJ, xNome, xFant, xLgr, nro, xCpl, xBairro, cMun, xMun, UF, CEP, cPais, xPais, fone, IE, IEST, IM, CNAE, CRT ) 
			VALUES ( :CNPJ, :xNome, :xFant, :xLgr, :nro, :xCpl, :xBairro, :cMun, :xMun, :UF, :CEP, :cPais, :xPais, :fone, :IE, :IEST, :IM, :CNAE, :CRT)"; 
			
			$p_sql = Conexao::getInstance()->prepare($sql); 

			$p_sql->bindValue(":CNPJ", $emissor->getCNPJ()); 
			$p_sql->bindValue(":xNome", $emissor->getxNome()); 
			$p_sql->bindValue(":xFant", $emissor->getxFant()); 
			$p_sql->bindValue(":xLgr", $emissor->getxLgr()); 
			$p_sql->bindValue(":nro", $emissor->getnro()); 
			$p_sql->bindValue(":xCpl", $emissor->getxCpl()); 
			$p_sql->bindValue(":xBairro", $emissor->getxBairro());
			$p_sql->bindValue(":cMun", $emissor->getcMun());
			$p_sql->bindValue(":xMun", $emissor->getxMun()); 
			$p_sql->bindValue(":UF", $emissor->getUF());
			$p_sql->bindValue(":CEP", $emissor->getCEP());
			$p_sql->bindValue(":cPais", $emissor->getcPais());
			$p_sql->bindValue(":xPais", $emissor->getxPais());
			$p_sql->bindValue(":fone", $emissor->getfone());
			$p_sql->bindValue(":IE", $emissor->getIE());
			$p_sql->bindValue(":IEST", $emissor->getIEST());
			$p_sql->bindValue(":IM", $emissor->getIM());
			$p_sql->bindValue(":CNAE", $emissor->getCNAE());
			$p_sql->bindValue(":CRT", $emissor->getCRT());			
			 
			return $p_sql->execute(); 

		} catch (Exception $e) { 
			print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
			CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
		}
	}

	public function Editar(modelEmissor $emissor) { 
		try { 
			$sql = "UPDATE nfe_emissor set 
				CNPJ =:CNPJ, xNome =:xNome, xFant =:xFant, xLgr =:xLgr, nro =:nro, xCpl =:xCpl, 
				xBairro =:xBairro, cMun =:cMun, xMun =:xMun, UF =:UF, CEP =:CEP, cPais =:cPais, 
				xPais =:xPais, fone =:fone, IE =:IE, IEST =:IEST, IM =:IM, CNAE =:CNAE, CRT =:CRT "; 
			
			$p_sql = Conexao::getInstance()->prepare($sql); 

			$p_sql->bindValue(":CNPJ", $emissor->getCNPJ()); 
			$p_sql->bindValue(":xNome", $emissor->getxNome()); 
			$p_sql->bindValue(":xFant", $emissor->getxFant()); 
			$p_sql->bindValue(":xLgr", $emissor->getxLgr()); 
			$p_sql->bindValue(":nro", $emissor->getnro()); 
			$p_sql->bindValue(":xCpl", $emissor->getxCpl()); 
			$p_sql->bindValue(":xBairro", $emissor->getxBairro());
			$p_sql->bindValue(":cMun", $emissor->getcMun());
			$p_sql->bindValue(":xMun", $emissor->getxMun()); 
			$p_sql->bindValue(":UF", $emissor->getUF());
			$p_sql->bindValue(":CEP", $emissor->getCEP());
			$p_sql->bindValue(":cPais", $emissor->getcPais());
			$p_sql->bindValue(":xPais", $emissor->getxPais());
			$p_sql->bindValue(":fone", $emissor->getfone());
			$p_sql->bindValue(":IE", $emissor->getIE());
			$p_sql->bindValue(":IEST", $emissor->getIEST());
			$p_sql->bindValue(":IM", $emissor->getIM());
			$p_sql->bindValue(":CNAE", $emissor->getCNAE());
			$p_sql->bindValue(":CRT", $emissor->getCRT());					

			return $p_sql->execute(); 

		} catch (Exception $e) { 
			print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
			CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
		}
	}

	public function Excluir($cnpj) { 
		try {  
			$sql = "DELETE FROM nfe_emissor WHERE  CNPJ =:CNPJ"; 
			
			$p_sql = Conexao::getInstance()->prepare($sql); 

			$p_sql->bindValue(":CNPJ", $cnpj); 			

			return $p_sql->execute(); 
			
		} catch (Exception $e) { 
			print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
			CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
		}
	}

	public function getEmissorDao($atributo, $valor) { 
		try {  
			$sql = "SELECT *  FROM nfe_emissor WHERE ". $atributo." = ".$valor;
			
			$p_sql = Conexao::getInstance()->prepare($sql); 			

			$p_sql->execute(); 
			return $this->getLinha($p_sql->fetch(PDO::FETCH_ASSOC));
			//return $p_sql->fetch(PDO::FETCH_ASSOC);
		} catch (Exception $e) { 
			print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
			CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
		}
	}

	public function getLinha($linha) { 
			$emissor = new modelEmissor();		
			$emissor->setId($linha['id']);
			$emissor->setCNPJ($linha['CNPJ']); 
			$emissor->setxNome($linha['xNome']); 
			$emissor->setxFant($linha['xFant']); 
			$emissor->setxLgr($linha['xLgr']); 
			$emissor->setnro($linha['nro']); 
			$emissor->setxCpl($linha['xCpl']); 
			$emissor->setxBairro($linha['xBairro']);
			$emissor->setcMun($linha['cMun']);
			$emissor->setxMun($linha['xMun']);
			$emissor->setUF($linha['UF']);
			$emissor->setCEP($linha['CEP']);
			$emissor->setcPais($linha['cPais']);
			$emissor->setxPais($linha['xPais']);
			$emissor->setfone($linha['fone']);
			$emissor->setIE($linha['IE']);
			$emissor->setIEST($linha['IEST']);
			$emissor->setIM($linha['IM']);
			$emissor->setCNAE($linha['CNAE']);
			$emissor->setCRT($linha['CRT']);
		


		return $emissor; 
	}	



}

?>