<?php
require_once(dirname(__FILE__).'/../conexao/conexao.php');
require_once(dirname(__FILE__).'/../crialog.php');
require_once(dirname(__FILE__).'/../model/modelinformacoesadicionais.php');

use modelInformacoesAdicionais;

class daoInformacoesAdicionais {
    public static $instance; 
    
    public static function getInstance() { 
	if (!isset(self::$instance)) {
            self::$instance = new daoInformacoesAdicionais();
        }
        return self::$instance; 
    }
    
    public function Inserir(modelInformacoesAdicionais $model) {
        try { 
            $sql = "INSERT INTO nfe_informacoesadicionais (pedido, infAdic, infAdFisco, infCpl, obsCont, obsCont_xCampo, obsCont_xTexto, 
		obsFisco, obsFisco_xCampo, obsFisco_xTexto, procRef, nProc, indProc)
		VALUES (:pedido, :infAdic, :infAdFisco, :infCpl, :obsCont, :obsCont_xCampo, :obsCont_xTexto, 
		:obsFisco, :obsFisco_xCampo, :obsFisco_xTexto, :procRef, :nProc, :indProc) ";
            
            $p_sql = Conexao::getInstance()->prepare($sql);
            
            $p_sql->bindValue(":pedido",$model->getPedido());            
            $p_sql->bindValue(":infAdic",$model->getInfAdic());
            $p_sql->bindValue(":infAdFisco",$model->getInfAdFisco());
            $p_sql->bindValue(":infCpl",$model->getInfCpl());
            $p_sql->bindValue(":obsCont",$model->getObsCont());
            $p_sql->bindValue(":obsCont_xCampo",$model->getObsCont_xCampo());
            $p_sql->bindValue(":obsCont_xTexto",$model->getObsCont_xTexto());
            $p_sql->bindValue(":obsFisco",$model->getObsFisco());
            $p_sql->bindValue(":obsFisco_xCampo",$model->getObsFisco_xCampo());
            $p_sql->bindValue(":obsFisco_xTexto",$model->getObsFisco_xTexto());
            $p_sql->bindValue(":procRef",$model->getProcRef());
            $p_sql->bindValue(":nProc",$model->getNProc());
            $p_sql->bindValue(":indProc",$model->getIndProc());
            
            return $p_sql->execute();
            
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
    }
    
    public function Editar(modelInformacoesAdicionais $model) {
        try { 
            $sql = "UPDATE FROM nfe_informacoesadicionais SET pedido = : pedido, infAdic = : infAdic, infAdFisco = :infAdFisco, 
		infCpl = :infCpl, obsCont = :obsCont, obsCont_xCampo = :obsCont_xCampo, obsCont_xTexto = :obsCont_xTexto,
		obsFisco = :obsFisco, obsFisco_xCampo = :obsFisco_xCampo, obsFisco_xTexto = :obsFisco_xTexto, procRef = :procRef, 
                nProc = :nProc, indProc = :indProc ";
            
            $p_sql = Conexao::getInstance()->prepare($sql);
            
            $p_sql->bindValue(":pedido",$model->getPedido());            
            $p_sql->bindValue(":infAdic",$model->getInfAdic());
            $p_sql->bindValue(":infAdFisco",$model->getInfAdFisco());
            $p_sql->bindValue(":infCpl",$model->getInfCpl());
            $p_sql->bindValue(":obsCont",$model->getObsCont());
            $p_sql->bindValue(":obsCont_xCampo",$model->getObsCont_xCampo());
            $p_sql->bindValue(":obsCont_xTexto",$model->getObsCont_xTexto());
            $p_sql->bindValue(":obsFisco",$model->getObsFisco());
            $p_sql->bindValue(":obsFisco_xCampo",$model->getObsFisco_xCampo());
            $p_sql->bindValue(":obsFisco_xTexto",$model->getObsFisco_xTexto());
            $p_sql->bindValue(":procRef",$model->getProcRef());
            $p_sql->bindValue(":nProc",$model->getNProc());
            $p_sql->bindValue(":indProc",$model->getIndProc());
            
            return $p_sql->execute();
            
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
    }
    
    public function Excluir($cod) { 
	try {  
            $sql = "DELETE FROM nfe_informacoesadicionais WHERE  pedido =:pedido"; 			
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
        $model = new modelInformacoesAdicionais();
        $model->setId($linha['id']);
        $model->setPedido($linha['pedido']);
        $model->setInfAdic($linha['infAdic']);
        $model->setInfAdFisco($linha['infAdFisco']);
        $model->setInfCpl($linha['infCpl']);
        $model->setObsCont($linha['obsCont']);
        $model->setObsCont_xCampo($linha['obsCont_xCampo']);
        $model->setObsCont_xTexto($linha['obsCont_xTexto']);
        $model->setObsFisco($linha['obsFisco']);
        $model->setObsFisco_xCampo($linha['obsFisco_xCampo']);
        $model->setObsFisco_xTexto($linha['obsFisco_xTexto']);
        $model->setProcRef($linha['procRef']);
        $model->setNProc($linha['nProc']);
        $model->setIndProc($linha['indProc']);
        return $model;
    }
}
