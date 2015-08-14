<?php
require_once(dirname(__FILE__).'/../conexao/conexao.php');
require_once(dirname(__FILE__).'/../crialog.php');
require_once(dirname(__FILE__).'/../model/modelpagamento.php');
use modelPagamento;

class daoPagamento {
    
    public static $instance; 
    
    public static function getInstance() { 
	if (!isset(self::$instance)) {
            self::$instance = new daoPagamento();
        }
        return self::$instance; 
    }
    
    public function Inserir(modelPagamento $model) {
        try { 
            $sql = "INSERT INTO nfe_pagamento (pedido, pag, tPag, vPag, card, CNPJ, tBand, cAut)
                    VALUES (:pedido, :pag, :tPag, :vPag, :card, :CNPJ, :tBand, :cAut)";
            
            $p_sql = Conexao::getInstance()->prepare($sql);
            
            $p_sql->bindValue(":pedido",$model->getPedido());
            $p_sql->bindValue(":pag",$model->getPag());
            $p_sql->bindValue(":tPag",$model->getTPag());
            $p_sql->bindValue(":vPag",$model->getVPag());
            $p_sql->bindValue(":card",$model->getCard());
            $p_sql->bindValue(":CNPJ",$model->getCNPJ());
            $p_sql->bindValue(":tBand",$model->getTBand());
            $p_sql->bindValue(":cAut",$model->getCAut());
            
            return $p_sql->execute();
            
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
    }
    
    public function Editar(modelPagamento $model) {
        try { 
            $sql = "IPDATE FROM nfe_pagamento SET pedido = :pedido, pag = :pag, tPag = :tPag, vPag = :vPag, 
                    card = :card, CNPJ = :CNPJ, tBand = :tBand, cAut = :cAut";
            
            $p_sql = Conexao::getInstance()->prepare($sql);
            
            $p_sql->bindValue(":pedido",$model->getPedido());
            $p_sql->bindValue(":pag",$model->getPag());
            $p_sql->bindValue(":tPag",$model->getTPag());
            $p_sql->bindValue(":vPag",$model->getVPag());
            $p_sql->bindValue(":card",$model->getCard());
            $p_sql->bindValue(":CNPJ",$model->getCNPJ());
            $p_sql->bindValue(":tBand",$model->getTBand());
            $p_sql->bindValue(":cAut",$model->getCAut());
            
            return $p_sql->execute();
            
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
    }
    
    public function Excluir($cod) { 
	try {  
            $sql = "DELETE FROM nfe_pagamento WHERE  pedido =:pedido"; 			
            $p_sql = Conexao::getInstance()->prepare($sql); 
            
            $p_sql->bindValue(":pedido", $cod); 			

            return $p_sql->execute(); 
			
	} catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
    }
    
    public function Remove($cod) { 
	try {  
            $sql = "DELETE FROM nfe_pagamento WHERE  id =:id"; 			
            $p_sql = Conexao::getInstance()->prepare($sql); 
            
            $p_sql->bindValue(":id", $cod); 			

            return $p_sql->execute(); 
			
	} catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
    }   
    
    public function getItens($atributo, $valor) { 
	try {  
            $sql = "SELECT * FROM nfe_pagamento WHERE ". $atributo." = ".$valor;
		
            $p_sql = Conexao::getInstance()->prepare($sql); 			
            $p_sql->execute(); 
            return $this->getLinha($p_sql->fetchAll());			
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
    }
    
    public function getLinha($linhas) { 
        $arraymodels = array();
        foreach ($linhas as $linha){
            $model->setId($linha['id']);
            $model->setPedido($linha['pedido']);
            $model->setPag($linha['pag']);
            $model->setTPag($linha['tPag']);
            $model->setVPag($linha['vPag']);
            $model->setCard($linha['card']);
            $model->setCNPJ($linha['CNPJ']);
            $model->setTBand($linha['tBand']);
            $model->setCAut($linha['cAut']);
            
            array_push($arraymodels, $model);
        }
        return $arraymodels;
    }
}