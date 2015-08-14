<?php
require_once(dirname(__FILE__).'/../conexao/conexao.php');
require_once(dirname(__FILE__).'/../model/modelaquisicaodecana.php');
require_once(dirname(__FILE__).'/../crialog.php');

class daoAquisicaoDeCana {
    public static $instance; 
    
    public static function getInstance() { 
	if (!isset(self::$instance)) 
		self::$instance = new daoAquisicaoDeCana(); 
	return self::$instance; 
    }
    
    public function Inserir(modelAquisicaodeCana $model) {
        try { 
            $sql = "INSERT INTO nfe_aquisicaodecana (pedido, safra, ref, forDia, dia, qtde, qTotMes, qTotAnt, qTotGer, 
                    deduc, xDed, vDed, vFor, vTotDed, vLiqFor ) 
		VALUES (:pedido, :safra, :ref, :forDia, :dia, :qtde, :qTotMes, :qTotAnt, :qTotGer, 
                        :deduc, :xDed, :vDed, :vFor, :vTotDed, :vLiqFor) "; 
            
            $p_sql = Conexao::getInstance()->prepare($sql);
            
            $p_sql->bindValue(":pedido",$model->getPedido());
            $p_sql->bindValue(":safra",$model->getSafra());
            $p_sql->bindValue(":ref",$model->getRef());
            $p_sql->bindValue(":forDia",$model->getForDia());
            $p_sql->bindValue(":dia",$model->getDia());
            $p_sql->bindValue(":qtde",$model->getQtde());
            $p_sql->bindValue(":qTotMes",$model->getQTotMes());
            $p_sql->bindValue(":qTotAnt",$model->getQTotAnt());
            $p_sql->bindValue(":qTotGer",$model->getQTotGer());
            $p_sql->bindValue(":deduc",$model->getDeduc());
            $p_sql->bindValue(":xDed",$model->getXDed());
            $p_sql->bindValue(":vDed",$model->getVDed());
            $p_sql->bindValue(":vFor",$model->getVFor());
            $p_sql->bindValue(":vTotDed",$model->getVTotDed());
            $p_sql->bindValue(":vLiqFor",$model->getVLiqFor());
            
            return $p_sql->execute();
            
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
        
    }
    
    
    public function Editar(modelAquisicaodeCana $model) {
        try { 
            $sql = "UPDATE  FROM nfe_aquisicaodecana SET 
            		pedido = :pedido, safra = :safra, ref = :ref, forDia = :forDia, dia = :dia, 
            		qtde = :qtde, qTotMes = :qTotMes, qTotAnt = :qTotAnt, qTotGer= :qTotGer, 
                    deduc = :deduc, xDed = :xDed, vDed = :vDed, vFor = :vFor, vTotDed = :vTotDed, vLiqFor = :vLiqFor"; 
            
            $p_sql = Conexao::getInstance()->prepare($sql);
            
            $p_sql->bindValue(":pedido",$model->getPedido());
            $p_sql->bindValue(":safra",$model->getSafra());
            $p_sql->bindValue(":ref",$model->getRef());
            $p_sql->bindValue(":forDia",$model->getForDia());
            $p_sql->bindValue(":dia",$model->getDia());
            $p_sql->bindValue(":qtde",$model->getQtde());
            $p_sql->bindValue(":qTotMes",$model->getQTotMes());
            $p_sql->bindValue(":qTotAnt",$model->getQTotAnt());
            $p_sql->bindValue(":qTotGer",$model->getQTotGer());
            $p_sql->bindValue(":deduc",$model->getDeduc());
            $p_sql->bindValue(":xDed",$model->getXDed());
            $p_sql->bindValue(":vDed",$model->getVDed());
            $p_sql->bindValue(":vFor",$model->getVFor());
            $p_sql->bindValue(":vTotDed",$model->getVTotDed());
            $p_sql->bindValue(":vLiqFor",$model->getVLiqFor());
            
            return $p_sql->execute();
            
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
        
    }
    
    public function Excluir($cod) { 
		try {  
			$sql = "DELETE FROM nfe_aquisicaodecana WHERE  pedido =:pedido"; 
			
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
			$sql = "SELECT *  FROM nfe_aquisicaodecana WHERE ". $atributo." = ".$valor;
			
			$p_sql = Conexao::getInstance()->prepare($sql); 			

			$p_sql->execute(); 
			return $this->getLinha($p_sql->fetch(PDO::FETCH_ASSOC));			
		} catch (Exception $e) { 
			print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
			CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
		}
	}
        
         public function getLinha($linha) { 
            $model = new modelAquisicaodeCana();
            $model->setId($linha['id']);
            $model->setPedido($linha['pedido']);
            $model->setSafra($linha['safra']);
            $model->setRef($linha['ref']);
            $model->setForDia($linha['forDia']);
            $model->setDia($linha['dia']);
            $model->setQtde($linha['qtde']);
            $model->setQTotMes($linha['qTotMes']);
            $model->setQTotAnt($linha['qTotAnt']);
            $model->setQTotGer($linha['qTotGer']);
            $model->setDeduc($linha['deduc']);
            $model->setXDed($linha['xDed']);
            $model->setVDed($linha['vDed']);
            $model->setVFor($linha['vFor']);
            $model->setVTotDed($linha['vTotDed']);
            $model->setVLiqFor($linha['vLiqFor']);
            return $model;
    }
    
    
}

