<?php
require_once(dirname(__FILE__).'/../conexao/conexao.php');
require_once(dirname(__FILE__).'/../model/modelassinaturadigital.php');
require_once(dirname(__FILE__).'/../crialog.php');

class daoAssinaturaDigital {
    
    public static $instance; 
    
    public static function getInstance() { 
	if (!isset(self::$instance)) 
		self::$instance = new daoAssinaturaDigital(); 
	return self::$instance; 
    }
    
    public function Inserir(modelAssinaturaDigital $model) {
        try { 
            $sql = "INSERT INTO nfe_assinaturadigital (pedido, signature) 
		VALUES (:pedido, :signature) "; 
            
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":pedido",$model->getPedido());
            $p_sql->bindValue(":signature",getSignature());
            
            return $p_sql->execute();
            
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
    }
    
    public function Editar(modelAssinaturaDigital $model) {
        try { 
            $sql = "UPDATE FROM nfe_assinaturadigital SET pedido = :pedido, signature = :signature";		
            
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":pedido",$model->getPedido());
            $p_sql->bindValue(":signature",getSignature());
            
            return $p_sql->execute();
            
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
    }
    
    public function Excluir($cod) { 
	try {  
            $sql = "DELETE FROM nfe_assinaturadigital WHERE  pedido =:pedido"; 			
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
            $sql = "SELECT *  FROM nfe_assinaturadigital WHERE ". $atributo." = ".$valor;
		
            $p_sql = Conexao::getInstance()->prepare($sql); 			
            $p_sql->execute(); 
            return $this->getLinha($p_sql->fetch(PDO::FETCH_ASSOC));			
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
    }
    
    public function getLinha($linha) { 
        $model = new modelAssinaturaDigital();
        $model->setId($linha['id']);
        $model->setPedido($linha['pedio']);
        $model->setSignature($linha['signature']);
    }
}
