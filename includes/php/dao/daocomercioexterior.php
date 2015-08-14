<?php
require_once(dirname(__FILE__).'/../conexao/conexao.php');
require_once(dirname(__FILE__).'/../model/modelcomercioexterior.php');
require_once(dirname(__FILE__).'/../crialog.php');
//
class daoComercioExterior {
    public static $instance; 
    
    public static function getInstance() { 
	if (!isset(self::$instance)) 
		self::$instance = new daoComercioExterior(); 
	return self::$instance; 
    }
   
    public function Inserir(modelComercioExterior $model) {
        try { 
            $sql = "INSERT INTO nfe_comercioexterior (pedido, exporta, UFSaidaPais, xLocExporta, xLocDespacho) 
		VALUES (:pedido, :exporta, :UFSaidaPais, :xLocExporta, :xLocDespacho)"; 
            
            $p_sql = Conexao::getInstance()->prepare($sql);
            
            $p_sql->bindValue(":pedido",$model->getPedido());
            $p_sql->bindValue(":exporta",$model->getExporta());
            $p_sql->bindValue(":UFSaidaPais",$model->getUFSaidaPais());
            $p_sql->bindValue(":xLocExporta",$model->getXLocExporta());
            $p_sql->bindValue(":xLocDespacho",$model->getXLocDespacho());
            
            return $p_sql->execute();
            
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
    }
    
    public function Editar(modelComercioExterior $model) {
        try { 
            $sql = "UPDATE FROM nfe_comercioexterior  SET pedido = :pedido, exporta = :exporta, 
                    UFSaidaPais = :UFSaidaPais, xLocExporta = :xLocExporta, xLocDespacho = :xLocDespacho"; 
            
            $p_sql = Conexao::getInstance()->prepare($sql);
            
            $p_sql->bindValue(":pedido",$model->getPedido());
            $p_sql->bindValue(":exporta",$model->getExporta());
            $p_sql->bindValue(":UFSaidaPais",$model->getUFSaidaPais());
            $p_sql->bindValue(":xLocExporta",$model->getXLocExporta());
            $p_sql->bindValue(":xLocDespacho",$model->getXLocDespacho());
            
            return $p_sql->execute();
            
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
    }
    
    public function Excluir($cod) { 
	try {  
            $sql = "DELETE FROM nfe_comercioexterior WHERE  pedido =:pedido"; 			
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
            $sql = "SELECT *  FROM nfe_comercioexterior WHERE ". $atributo." = ".$valor;
		
            $p_sql = Conexao::getInstance()->prepare($sql); 			
            $p_sql->execute(); 
            return $this->getLinha($p_sql->fetch(PDO::FETCH_ASSOC));			
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
    }
    public function getLinha($linha) { 
        $model = new modelComercioExterior();
        $model->setId($linha['id']);
        $model->setPedido($linha['pedio']);
        $model->setExporta($linha['exporta']);
        $model->setUFSaidaPais($linha['UFSaidaPais']);
        $model->setXLocExporta($linha['xLocExporta']);
        $model->setXLocDespacho($linha['xLocDespacho']);        
    }
    
}