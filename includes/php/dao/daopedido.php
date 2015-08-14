<?php
require_once(dirname(__FILE__).'/../conexao/conexao.php');
require_once(dirname(__FILE__).'/../model/modelpedido.php');
require_once(dirname(__FILE__).'/../crialog.php');

class daoPedido {
    
    public static $instance; 

	/*private function __construct() { 
	
	}*/
	

	public static function getInstance() { 
		if (!isset(self::$instance)) 
			self::$instance = new daoPedido(); 
		return self::$instance; 
	}

	public function Inserir(modelPedido $model) { 
		try { 
			$sql = "INSERT INTO nfe_pedido (pedido,	emitente_cnpj, CNPJ, CPF, idEstrangeiro, xNome, xLgr, xCpl,	nro, xBairro,
				cMun, xMun, UF, CEP, cPais, xPais, fone, indIEDest, IE, ISUF, IM, email, retirada, retirada_CNPJ, 
				retirada_CPF, retirada_xLgr, retirada_nro, retirada_xCpl, retirada_xBairro, retirada_cMun, retirada_xMun, 
				retirada_UF, entrega, entrega_CNPJ, entrega_CPF, entrega_xLgr, entrega_nro, entrega_xCpl, entrega_xBairro, 
				entrega_cMun, entrega_xMun,	entrega_UF,	total_itens ) 
			VALUES (:pedido, :emitente_cnpj, :CNPJ, :CPF, :idEstrangeiro, :xNome, :xLgr, :xCpl, :nro, :xBairro,
				:cMun, :xMun, :UF, :CEP, :cPais, :xPais, :fone, :indIEDest, :IE, :ISUF, :IM, :email, :retirada, :retirada_CNPJ, 
				:retirada_CPF, :retirada_xLgr, :retirada_nro, :retirada_xCpl, :retirada_xBairro, :retirada_cMun, :retirada_xMun, 
				:retirada_UF, :entrega, :entrega_CNPJ, :entrega_CPF, :entrega_xLgr, :entrega_nro, :entrega_xCpl, :entrega_xBairro, 
				:entrega_cMun, :entrega_xMun, :entrega_UF, :total_itens ) "; 
			
			$p_sql = Conexao::getInstance()->prepare($sql);

			$p_sql->bindValue(":pedido",$model->getpedido()); 
                        $p_sql->bindValue(":emitente_cnpj",$model->getemitente_cnpj()); 
                        $p_sql->bindValue(":CNPJ",$model->getCNPJ()); 
                        $p_sql->bindValue(":CPF",$model->getCPF()); 
                        $p_sql->bindValue(":idEstrangeiro",$model->getidEstrangeiro()); 
                        $p_sql->bindValue(":xNome",$model->getxNome()); 
                        $p_sql->bindValue(":xLgr",$model->getxLgr()); 
                        $p_sql->bindValue(":xCpl",$model->getxCpl()); 
                        $p_sql->bindValue(":nro",$model->getnro()); 
                        $p_sql->bindValue(":xBairro",$model->getxBairro()); 
                        $p_sql->bindValue(":cMun",$model->getcMun()); 
                        $p_sql->bindValue(":xMun",$model->getxMun()); 
                        $p_sql->bindValue(":UF",$model->getUF()); 
                        $p_sql->bindValue(":CEP",$model->getCEP()); 
                        $p_sql->bindValue(":cPais",$model->getcPais()); 
                        $p_sql->bindValue(":xPais",$model->getxPais()); 
                        $p_sql->bindValue(":fone",$model->getfone()); 
                        $p_sql->bindValue(":indIEDest",$model->getindIEDest()); 
                        $p_sql->bindValue(":IE",$model->getIE()); 
                        $p_sql->bindValue(":ISUF",$model->getISIE()); 
                        $p_sql->bindValue(":IM",$model->getIM()); 
                        $p_sql->bindValue(":email",$model->getemail()); 
                        $p_sql->bindValue(":retirada",$model->getretirada()); 
                        $p_sql->bindValue(":retirada_CNPJ",$model->getretirada_CNPJ()); 
                        $p_sql->bindValue(":retirada_CPF",$model->getretirada_CPF()); 
                        $p_sql->bindValue(":retirada_xLgr",$model->getretirada_xLgr()); 
                        $p_sql->bindValue(":retirada_nro",$model->getretirada_nro()); 
                        $p_sql->bindValue(":retirada_xCpl",$model->getretirada_xCpl()); 
                        $p_sql->bindValue(":retirada_xBairro",$model->getretirada_xBairro()); 
                        $p_sql->bindValue(":retirada_cMun",$model->getretirada_cMun()); 
                        $p_sql->bindValue(":retirada_xMun",$model->getretirada_xMun()); 
                        $p_sql->bindValue(":retirada_UF",$model->getretirada_UF()); 
                        $p_sql->bindValue(":entrega",$model->getentrega()); 
                        $p_sql->bindValue(":entrega_CNPJ",$model->getentrega_CNPJ()); 
                        $p_sql->bindValue(":entrega_CPF",$model->getentrega_CPF()); 
                        $p_sql->bindValue(":entrega_xLgr",$model->getentrega_xLgr()); 
                        $p_sql->bindValue(":entrega_nro",$model->getentrega_nro()); 
                        $p_sql->bindValue(":entrega_xCpl",$model->getentrega_xCpl()); 
                        $p_sql->bindValue(":entrega_xBairro",$model->getentrega_xBairro()); 
                        $p_sql->bindValue(":entrega_cMun",$model->getentrega_cMun()); 
                        $p_sql->bindValue(":entrega_xMun",$model->getentrega_xMun()); 
                        $p_sql->bindValue(":entrega_UF",$model->getentrega_UF()); 
                        $p_sql->bindValue(":total_itens",$model->getentrega_total_itens()); 
			 
			return $p_sql->execute(); 

		} catch (Exception $e) { 
			print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
			CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
		}
	}

	public function Editar(modelEmissor $model) { 
		try { 
			$sql = "UPDATE nfe_pedido SET pedido =:pedido, emitente_cnpj =: emitente_cnpj, CNPJ =:CNPJ, CPF =:CPF, 
				idEstrangeiro =:idEstrangeiro, xNome =:xNome, xLgr =:xLgr, xCpl =:xCpl,	nro =:nro, xBairro =:xBairro,
				cMun =:cMun, xMun =:xMun, UF =:UF, CEP =:CEP, cPais =:cPais, xPais =:xPais, fone =:fone, 
				indIEDest =:indIEDest, IE =:IE, ISUF =:ISUF, IM =:IM, email =:email, retirada =:retirada, 
				retirada_CNPJ =:retirada_CNPJ, retirada_CPF =:retirada_CPF, retirada_xLgr =:retirada_xLgr, retirada_nro =:retirada_nro, 
				retirada_xCpl =:retirada_xCpl, retirada_xBairro =:retirada_xBairro, retirada_cMun =:retirada_cMun, retirada_xMun =:retirada_xMun, 
				retirada_UF =:retirada_UF, entrega =:entrega, entrega_CNPJ =:entrega_CNPJ, entrega_CPF =:entrega_CPF, 
				entrega_xLgr =:entrega_xLgr, entrega_nro =:entrega_nro, entrega_xCpl =:entrega_xCpl, entrega_xBairro =:entrega_xBairro, 
				entrega_cMun =:entrega_cMun, entrega_xMun =:entrega_xMun, entrega_UF =:entrega_UF, total_itens =:total_itens ";
			
			$p_sql = Conexao::getInstance()->prepare($sql); 

			$p_sql->bindValue(":pedido",$model->getpedido()); 
                        $p_sql->bindValue(":emitente_cnpj",$model->getemitente_cnpj()); 
                        $p_sql->bindValue(":CNPJ",$model->getCNPJ()); 
                        $p_sql->bindValue(":CPF",$model->getCPF()); 
                        $p_sql->bindValue(":idEstrangeiro",$model->getidEstrangeiro()); 
                        $p_sql->bindValue(":xNome",$model->getxNome()); 
                        $p_sql->bindValue(":xLgr",$model->getxLgr()); 
                        $p_sql->bindValue(":xCpl",$model->getxCpl()); 
                        $p_sql->bindValue(":nro",$model->getnro()); 
                        $p_sql->bindValue(":xBairro",$model->getxBairro()); 
                        $p_sql->bindValue(":cMun",$model->getcMun()); 
                        $p_sql->bindValue(":xMun",$model->getxMun()); 
                        $p_sql->bindValue(":UF",$model->getUF()); 
                        $p_sql->bindValue(":CEP",$model->getCEP()); 
                        $p_sql->bindValue(":cPais",$model->getcPais()); 
                        $p_sql->bindValue(":xPais",$model->getxPais()); 
                        $p_sql->bindValue(":fone",$model->getfone()); 
                        $p_sql->bindValue(":indIEDest",$model->getindIEDest()); 
                        $p_sql->bindValue(":IE",$model->getIE()); 
                        $p_sql->bindValue(":ISUF",$model->getISIE()); 
                        $p_sql->bindValue(":IM",$model->getIM()); 
                        $p_sql->bindValue(":email",$model->getemail()); 
                        $p_sql->bindValue(":retirada",$model->getretirada()); 
                        $p_sql->bindValue(":retirada_CNPJ",$model->getretirada_CNPJ()); 
                        $p_sql->bindValue(":retirada_CPF",$model->getretirada_CPF()); 
                        $p_sql->bindValue(":retirada_xLgr",$model->getretirada_xLgr()); 
                        $p_sql->bindValue(":retirada_nro",$model->getretirada_nro()); 
                        $p_sql->bindValue(":retirada_xCpl",$model->getretirada_xCpl()); 
                        $p_sql->bindValue(":retirada_xBairro",$model->getretirada_xBairro()); 
                        $p_sql->bindValue(":retirada_cMun",$model->getretirada_cMun()); 
                        $p_sql->bindValue(":retirada_xMun",$model->getretirada_xMun()); 
                        $p_sql->bindValue(":retirada_UF",$model->getretirada_UF()); 
                        $p_sql->bindValue(":entrega",$model->getentrega()); 
                        $p_sql->bindValue(":entrega_CNPJ",$model->getentrega_CNPJ()); 
                        $p_sql->bindValue(":entrega_CPF",$model->getentrega_CPF()); 
                        $p_sql->bindValue(":entrega_xLgr",$model->getentrega_xLgr()); 
                        $p_sql->bindValue(":entrega_nro",$model->getentrega_nro()); 
                        $p_sql->bindValue(":entrega_xCpl",$model->getentrega_xCpl()); 
                        $p_sql->bindValue(":entrega_xBairro",$model->getentrega_xBairro()); 
                        $p_sql->bindValue(":entrega_cMun",$model->getentrega_cMun()); 
                        $p_sql->bindValue(":entrega_xMun",$model->getentrega_xMun()); 
                        $p_sql->bindValue(":entrega_UF",$model->getentrega_UF()); 
                        $p_sql->bindValue(":total_itens",$model->getentrega_total_itens()); 					

			return $p_sql->execute(); 

		} catch (Exception $e) { 
			print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
			CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
		}
	}

	public function Excluir($cod) { 
		try {  
			$sql = "DELETE FROM nfe_pedido WHERE  pedido =:pedido"; 
			
			$p_sql = Conexao::getInstance()->prepare($sql); 

			$p_sql->bindValue(":pedido", $cod); 			

			return $p_sql->execute(); 
			
		} catch (Exception $e) { 
			print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
			CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
		}
	}

	public function getItem($atributo, $valor) { 
		try {  
			$sql = "SELECT *  FROM nfe_pedido WHERE ". $atributo." = ".$valor;
			
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
            $model = new modelPedido();	
            $model->setId($linha['id']);
            $model->setpedido($linha['pedido']);
            $model->setemitente_cnpj($linha['emitente_cnpj']);
            $model->setCNPJ($linha['CNPJ']);
            $model->setCPF($linha['CPF']);
            $model->setidEstrangeiro($linha['idEstrangeiro']);
            $model->setxNome($linha['xNome']);
            $model->setxLgr($linha['xLgr']);
            $model->setxCpl($linha['xCpl']);
            $model->setnro($linha['nro']);
            $model->setxBairro($linha['xBairro']);
            $model->setcMun($linha['cMun']);
            $model->setxMun($linha['xMun']);
            $model->setUF($linha['UF']);
            $model->setCEP($linha['CEP']);
            $model->setcPais($linha['cPais']);
            $model->setxPais($linha['xPais']);
            $model->setfone($linha['fone']);
            $model->setindIEDest($linha['indIEDest']);
            $model->setIE($linha['IE']);
            $model->setISIE($linha['ISIE']);
            $model->setIM($linha['IM']);
            $model->setemail($linha['email']);
            $model->setretirada($linha['retirada']);
            $model->setretirada_CNPJ($linha['retirada_CNPJ']);
            $model->setretirada_CPF($linha['retirada_CPF']);
            $model->setretirada_xLgr($linha['retirada_xLgr']);
            $model->setretirada_nro($linha['retirada_nro']);
            $model->setretirada_xCpl($linha['retirada_xCpl']);
            $model->setretirada_xBairro($linha['retirada_xBairro']);
            $model->setretirada_cMun($linha['retirada_cMun']);
            $model->setretirada_xMun($linha['retirada_xMun']);
            $model->setretirada_UF($linha['retirada_UF']);
            $model->setentrega($linha['entrega']);
            $model->setentrega_CNPJ($linha['entrega_CNPJ']);
            $model->setentrega_CPF($linha['entrega_CPF']);
            $model->setentrega_xLgr($linha['entrega_xLgr']);
            $model->setentrega_nro($linha['entrega_nro']);
            $model->setentrega_xCpl($linha['entrega_xCpl']);
            $model->setentrega_xBairro($linha['entrega_xBairro']);
            $model->setentrega_cMun($linha['entrega_cMun']);
            $model->setentrega_xMun($linha['entrega_xMun']);
            $model->setentrega_UF($linha['entrega_UF']);
            $model->setentrega_total_itens($linha['total_itens']);

            return $model; 
	}
        
       

}