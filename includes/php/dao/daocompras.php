<?php
require_once(dirname(__FILE__).'/../conexao/conexao.php');
require_once(dirname(__FILE__).'/../model/modelcompras.php');
require_once(dirname(__FILE__).'/../crialog.php');

class daoCompras {
    public static $instance; 
    
    public static function getInstance() { 
	if (!isset(self::$instance)) 
		self::$instance = new daoCompras(); 
	return self::$instance; 
    }
    
    public function Inserir(modelCompras $model) {
        try { 
            $sql = "INSERT INTO nfe_compras (pedido, xNEmp, xCont) 
		VALUES (:pedido, :xNEmp, :xCont)"; 
            
            $p_sql = Conexao::getInstance()->prepare($sql);
            
            $p_sql->bindValue(":pedido",$model->getPedido());
            $p_sql->bindValue(":xNEmp",$model->getXNEmp());
            $p_sql->bindValue(":xCont",$model->getXCont());            
            
            return $p_sql->execute();
            
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
    }
    
    public function Editar(modelCompras $model) {
        try { 
            $sql = "UPDATE FROM nfe_compras SET pedido = :pedido, xNEmp = :xNEmp, xCont = :xCont"; 
            
            $p_sql = Conexao::getInstance()->prepare($sql);
            
            $p_sql->bindValue(":pedido",$model->getPedido());
            $p_sql->bindValue(":xNEmp",$model->getXNEmp());
            $p_sql->bindValue(":xCont",$model->getXCont());            
            
            return $p_sql->execute();
            
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
    }
    
    public function Excluir($cod) { 
	try {  
            $sql = "DELETE FROM nfe_compras WHERE  pedido =:pedido"; 			
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
            $sql = "SELECT *  FROM nfe_compras WHERE ". $atributo." = ".$valor;
		
            $p_sql = Conexao::getInstance()->prepare($sql); 			
            $p_sql->execute(); 
            return $this->getLinha($p_sql->fetch(PDO::FETCH_ASSOC));			
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
    }
    
    public function getLinha($linha) { 
        $model = new modelCompras();
        $model->setPedido($linha['pedio']);
        $model->setXNEmp($linha['xNEmp']);
        $model->setXCont($linha['xCont']);
        return $model;
    }
}

