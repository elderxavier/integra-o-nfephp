<?php
require_once(dirname(__FILE__).'/../conexao/conexao.php');
require_once(dirname(__FILE__).'/../crialog.php');
require_once(dirname(__FILE__).'/../model/modelcobranca.php');

class daoCobranca {
    public static $instance;
    
    public static function getInstance() { 
	if (!isset(self::$instance)) {
            self::$instance = new daoCobranca();
        }
        return self::$instance; 
    }
    
    public function Inserir(modelCobranca $model) {
        try { 
            $sql = "INSERT INTO nfe_cobranca (pedido, cobr, fat, nFat, vOrig, vDesc, 
                        vLiq, dup, nDup, dVenc, vDup)
                    VALUES(:pedido, :cobr, :fat, :nFat, :vOrig, :vDesc, 
                        :vLiq, :dup, :nDup, :dVenc, :vDup) ";
            
            $p_sql = Conexao::getInstance()->prepare($sql);
            
            $p_sql->bindValue(":pedido",$model->getPedido());
            $p_sql->bindValue(":cobr",$model->getCobr());
            $p_sql->bindValue(":fat",$model->getFat());
            $p_sql->bindValue(":nFat",$model->getNFat());
            $p_sql->bindValue(":vOrig",$model->getVOrig());
            $p_sql->bindValue(":vDesc",$model->getVDesc());
            $p_sql->bindValue(":vLiq",$model->getVLiq());
            $p_sql->bindValue(":dup",$model->getDup());
            $p_sql->bindValue(":nDup",$model->getNDup());
            $p_sql->bindValue(":dVenc",$model->getDVenc());
            $p_sql->bindValue(":vDup",$model->getVDup());            
                        
            return $p_sql->execute();
            
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
    }
    
    public function Editar(modelCobranca $model) {
        try { 
            $sql = "UPDATE FROM nfe_cobranca SET pedido = :pedido, cobr = :cobr, fat = :fat, nFat = :nFat, vOrig = :vOrig, 
                vDesc = :vDesc, vLiq = :vLiq, dup = :dup, nDup = :nDup, dVenc = :dVenc, vDup = :vDup";
            
            $p_sql = Conexao::getInstance()->prepare($sql);
            
            $p_sql->bindValue(":pedido",$model->getPedido());
            $p_sql->bindValue(":cobr",$model->getCobr());
            $p_sql->bindValue(":fat",$model->getFat());
            $p_sql->bindValue(":nFat",$model->getNFat());
            $p_sql->bindValue(":vOrig",$model->getVOrig());
            $p_sql->bindValue(":vDesc",$model->getVDesc());
            $p_sql->bindValue(":vLiq",$model->getVLiq());
            $p_sql->bindValue(":dup",$model->getDup());
            $p_sql->bindValue(":nDup",$model->getNDup());
            $p_sql->bindValue(":dVenc",$model->getDVenc());
            $p_sql->bindValue(":vDup",$model->getVDup());            
                        
            return $p_sql->execute();
            
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
    }
    
    public function Excluir($cod) { 
	try {  
            $sql = "DELETE FROM nfe_cobranca WHERE  pedido =:pedido"; 

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
            $sql = "SELECT *  FROM nfe_cobranca WHERE ". $atributo." = ".$valor;
			
            $p_sql = Conexao::getInstance()->prepare($sql); 			

            $p_sql->execute(); 
            return $this->getLinha($p_sql->fetch(PDO::FETCH_ASSOC));
	
	} catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
    }
    
    public function getLinha($linha) {
        $model = new modelPedido();	
        $model->setId($linha['id']);
        $model->setpedido($linha['pedido']);
        $model->setCobr($linha['cobr']);
        $model->setFat($linha['fat']);
        $model->setNFat($linha['nFat']);
        $model->setVOrig($linha['vOrig']);
        $model->setVDesc($linha['vDesc']);
        $model->setVLiq($linha['vLiq']);
        $model->setDup($linha['dup']);
        $model->setNDup($linha['nDup']);
        $model->setDVenc($linha['dVenc']);
        $model->setVDup($linha['vDup']);
        
        return $model; 
    }
}
