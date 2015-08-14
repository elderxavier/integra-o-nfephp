<?php
require_once(dirname(__FILE__).'/../conexao/conexao.php');
require_once(dirname(__FILE__).'/../crialog.php');
require_once(dirname(__FILE__).'/../model/modeltotalimpostos.php');

class daoTotalImpostos {
    public static $instance;
    
    public static function getInstance() { 
	if (!isset(self::$instance)) {
            self::$instance = new daoTotalImpostos();
        }
        return self::$instance; 
    }
    
    public function Inserir(modelTotalImpostos $model) {
        try { 
            $sql = "INSERT INTO nfe_totalimpostos (pedido, ICMSTot, ICMSTot_vBC, ICMSTot_vICMS, ICMSTot_vICMSDeson, 
                        ICMSTot_vBCST, ICMSTot_vST, ICMSTot_vProd, ICMSTot_vFrete, ICMSTot_vSeg, 
                        ICMSTot_vDesc, ICMSTot_vII, ICMSTot_vIPI, ICMSTot_vPIS, ICMSTot_vCOFINS, 
                        ICMSTot_vOutro, ICMSTot_vNF, ICMSTot_vTotTrib, ISSQNtot, ISSQN_vServ, 
                        ISSQN_vBC, ISSQN_vISS, ISSQN_vPIS, ISSQN_vCOFINS, ISSQN_dCompet, 
                        ISSQN_vDeducao, ISSQN_vOutro, ISSQN_vDescIncond, ISSQN_vDescCond, 
                        ISSQN_vISSRet, ISSQN_cRegTrib, retTrib, retTrib_vRetPIS, 
                        retTrib_vRetCOFINS, retTrib_vRetCSLL, retTrib_vBCIRRF, 
                        retTrib_vBCRetPrev, retTrib_vRetPrev)
                  VALUES(:pedido, :ICMSTot, :ICMSTot_vBC, :ICMSTot_vICMS, :ICMSTot_vICMSDeson, 
                        :ICMSTot_vBCST, :ICMSTot_vST, :ICMSTot_vProd, :ICMSTot_vFrete, :ICMSTot_vSeg, 
                        :ICMSTot_vDesc, :ICMSTot_vII, :ICMSTot_vIPI, :ICMSTot_vPIS, :ICMSTot_vCOFINS, 
                        :ICMSTot_vOutro, :ICMSTot_vNF, :ICMSTot_vTotTrib, :ISSQNtot, :ISSQN_vServ, 
                        :ISSQN_vBC, :ISSQN_vISS, :ISSQN_vPIS, :ISSQN_vCOFINS, :ISSQN_dCompet, 
                        :ISSQN_vDeducao, :ISSQN_vOutro, :ISSQN_vDescIncond, :ISSQN_vDescCond, 
                        :ISSQN_vISSRet, :ISSQN_cRegTrib, :retTrib, :retTrib_vRetPIS, 
                        :retTrib_vRetCOFINS, :retTrib_vRetCSLL, :retTrib_vBCIRRF, 
                        :retTrib_vBCRetPrev, :retTrib_vRetPrev) ";
            
            $p_sql = Conexao::getInstance()->prepare($sql);
            
            $p_sql->bindValue(":pedido",$model->getPedido());
            $p_sql->bindValue(":ICMSTot",$model->getICMSTot());
            $p_sql->bindValue(":ICMSTot_vBC",$model->getICMSTot_vBC());
            $p_sql->bindValue(":ICMSTot_vICMS",$model->getICMSTot_vICMS());
            $p_sql->bindValue(":ICMSTot_vICMSDeson",$model->getICMSTot_vICMSDeson());
            $p_sql->bindValue(":ICMSTot_vBCST",$model->getICMSTot_vBCST());
            $p_sql->bindValue(":ICMSTot_vST",$model->getICMSTot_vST());
            $p_sql->bindValue(":ICMSTot_vProd",$model->getICMSTot_vProd());
            $p_sql->bindValue(":ICMSTot_vFrete",$model->getICMSTot_vFrete());
            $p_sql->bindValue(":ICMSTot_vSeg",$model->getICMSTot_vSeg());
            $p_sql->bindValue(":ICMSTot_vDesc",$model->getICMSTot_vDesc());
            $p_sql->bindValue(":ICMSTot_vII",$model->getICMSTot_vII());
            $p_sql->bindValue(":ICMSTot_vIPI",$model->getICMSTot_vIPI());
            $p_sql->bindValue(":ICMSTot_vPIS",$model->getICMSTot_vPIS());

            $p_sql->bindValue(":ICMSTot_vCOFINS",$model->getICMSTot_vCOFINS());
            $p_sql->bindValue(":ICMSTot_vOutro",$model->getICMSTot_vOutro());
            $p_sql->bindValue(":ICMSTot_vNF",$model->getICMSTot_vNF());
            $p_sql->bindValue(":ICMSTot_vTotTrib",$model->getICMSTot_vTotTrib());
            $p_sql->bindValue(":ISSQNtot",$model->getISSQNtot());
            $p_sql->bindValue(":ISSQN_vServ",$model->getISSQN_vServ());
            $p_sql->bindValue(":ISSQN_vBC",$model->getISSQN_vBC());
            $p_sql->bindValue(":ISSQN_vISS",$model->getISSQN_vISS());
            $p_sql->bindValue(":ISSQN_vPIS",$model->getISSQN_vPIS());
            $p_sql->bindValue(":ISSQN_vCOFINS",$model->getISSQN_vCOFINS());
            $p_sql->bindValue(":ISSQN_dCompet",$model->getISSQN_dCompet());
            $p_sql->bindValue(":ISSQN_vDeducao",$model->getISSQN_vDeducao());
            $p_sql->bindValue(":ISSQN_vOutro",$model->getISSQN_vOutro());
            $p_sql->bindValue(":ISSQN_vDescIncond",$model->getISSQN_vDescIncond());
            $p_sql->bindValue(":ISSQN_vDescCond",$model->getISSQN_vDescCond());
            $p_sql->bindValue(":ISSQN_vISSRet",$model->getISSQN_vISSRet());
            $p_sql->bindValue(":ISSQN_cRegTrib",$model->getISSQN_cRegTrib());
            $p_sql->bindValue(":retTrib",$model->getRetTrib());
            $p_sql->bindValue(":retTrib_vRetPIS",$model->getRetTrib_vRetPIS());
            $p_sql->bindValue(":retTrib_vRetCOFINS",$model->getRetTrib_vRetCOFINS());
            $p_sql->bindValue(":retTrib_vRetCSLL",$model->getRetTrib_vRetCSLL());
            $p_sql->bindValue(":retTrib_vBCIRRF",$model->getRetTrib_vBCIRRF());
            $p_sql->bindValue(":retTrib_vBCRetPrev",$model->getRetTrib_vBCRetPrev());
            $p_sql->bindValue(":retTrib_vRetPrev",$model->getRetTrib_vRetPrev());
            
            return $p_sql->execute();
            
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
    }
    
    public function Editar(modelTotalImpostos $model) {
        try { 
            $sql = "UPDATE FROM nfe_totalimpostos SET pedido = :pedido, ICMSTot = :ICMSTot, ICMSTot_vBC = :ICMSTot_vBC, ICMSTot_vICMS = :ICMSTot_vICMS, ICMSTot_vICMSDeson = :ICMSTot_vICMSDeson, 
                        ICMSTot_vBCST = :ICMSTot_vBCST, ICMSTot_vST = :ICMSTot_vST, ICMSTot_vProd = :ICMSTot_vProd, ICMSTot_vFrete = :ICMSTot_vFrete, ICMSTot_vSeg = :ICMSTot_vSeg, 
                        ICMSTot_vDesc = :ICMSTot_vDesc, ICMSTot_vII = :ICMSTot_vII, ICMSTot_vIPI = :ICMSTot_vIPI, ICMSTot_vPIS = :ICMSTot_vPIS, ICMSTot_vCOFINS = :ICMSTot_vCOFINS, 
                        ICMSTot_vOutro = :ICMSTot_vOutro, ICMSTot_vNF = :ICMSTot_vNF, ICMSTot_vTotTrib = :ICMSTot_vTotTrib, ISSQNtot = :ISSQNtot, ISSQN_vServ = :ISSQN_vServ, 
                        ISSQN_vBC = :ISSQN_vBC, ISSQN_vISS = :ISSQN_vISS, ISSQN_vPIS = :ISSQN_vPIS, ISSQN_vCOFINS = :ISSQN_vCOFINS, ISSQN_dCompet = :ISSQN_dCompet, 
                        ISSQN_vDeducao = :ISSQN_vDeducao, ISSQN_vOutro = :ISSQN_vOutro, ISSQN_vDescIncond = :ISSQN_vDescIncond, ISSQN_vDescCond = :ISSQN_vDescCond, 
                        ISSQN_vISSRet = :ISSQN_vISSRet, ISSQN_cRegTrib = :ISSQN_cRegTrib, retTrib = :retTrib, retTrib_vRetPIS = :retTrib_vRetPIS, 
                        retTrib_vRetCOFINS = :retTrib_vRetCOFINS, retTrib_vRetCSLL = :retTrib_vRetCSLL, retTrib_vBCIRRF = :retTrib_vBCIRRF, 
                        retTrib_vBCRetPrev = :retTrib_vBCRetPrev, retTrib_vRetPrev = :retTrib_vRetPrev ";
            
            $p_sql = Conexao::getInstance()->prepare($sql);
            
            $p_sql->bindValue(":pedido",$model->getPedido());
            $p_sql->bindValue(":ICMSTot",$model->getICMSTot());
            $p_sql->bindValue(":ICMSTot_vBC",$model->getICMSTot_vBC());
            $p_sql->bindValue(":ICMSTot_vICMS",$model->getICMSTot_vICMS());
            $p_sql->bindValue(":ICMSTot_vICMSDeson",$model->getICMSTot_vICMSDeson());
            $p_sql->bindValue(":ICMSTot_vBCST",$model->getICMSTot_vBCST());
            $p_sql->bindValue(":ICMSTot_vST",$model->getICMSTot_vST());
            $p_sql->bindValue(":ICMSTot_vProd",$model->getICMSTot_vProd());
            $p_sql->bindValue(":ICMSTot_vFrete",$model->getICMSTot_vFrete());
            $p_sql->bindValue(":ICMSTot_vSeg",$model->getICMSTot_vSeg());
            $p_sql->bindValue(":ICMSTot_vDesc",$model->getICMSTot_vDesc());
            $p_sql->bindValue(":ICMSTot_vII",$model->getICMSTot_vII());
            $p_sql->bindValue(":ICMSTot_vIPI",$model->getICMSTot_vIPI());
            $p_sql->bindValue(":ICMSTot_vPIS",$model->getICMSTot_vPIS());

            $p_sql->bindValue(":ICMSTot_vCOFINS",$model->getICMSTot_vCOFINS());
            $p_sql->bindValue(":ICMSTot_vOutro",$model->getICMSTot_vOutro());
            $p_sql->bindValue(":ICMSTot_vNF",$model->getICMSTot_vNF());
            $p_sql->bindValue(":ICMSTot_vTotTrib",$model->getICMSTot_vTotTrib());
            $p_sql->bindValue(":ISSQNtot",$model->getISSQNtot());
            $p_sql->bindValue(":ISSQN_vServ",$model->getISSQN_vServ());
            $p_sql->bindValue(":ISSQN_vBC",$model->getISSQN_vBC());
            $p_sql->bindValue(":ISSQN_vISS",$model->getISSQN_vISS());
            $p_sql->bindValue(":ISSQN_vPIS",$model->getISSQN_vPIS());
            $p_sql->bindValue(":ISSQN_vCOFINS",$model->getISSQN_vCOFINS());
            $p_sql->bindValue(":ISSQN_dCompet",$model->getISSQN_dCompet());
            $p_sql->bindValue(":ISSQN_vDeducao",$model->getISSQN_vDeducao());
            $p_sql->bindValue(":ISSQN_vOutro",$model->getISSQN_vOutro());
            $p_sql->bindValue(":ISSQN_vDescIncond",$model->getISSQN_vDescIncond());
            $p_sql->bindValue(":ISSQN_vDescCond",$model->getISSQN_vDescCond());
            $p_sql->bindValue(":ISSQN_vISSRet",$model->getISSQN_vISSRet());
            $p_sql->bindValue(":ISSQN_cRegTrib",$model->getISSQN_cRegTrib());
            $p_sql->bindValue(":retTrib",$model->getRetTrib());
            $p_sql->bindValue(":retTrib_vRetPIS",$model->getRetTrib_vRetPIS());
            $p_sql->bindValue(":retTrib_vRetCOFINS",$model->getRetTrib_vRetCOFINS());
            $p_sql->bindValue(":retTrib_vRetCSLL",$model->getRetTrib_vRetCSLL());
            $p_sql->bindValue(":retTrib_vBCIRRF",$model->getRetTrib_vBCIRRF());
            $p_sql->bindValue(":retTrib_vBCRetPrev",$model->getRetTrib_vBCRetPrev());
            $p_sql->bindValue(":retTrib_vRetPrev",$model->getRetTrib_vRetPrev());
            
            return $p_sql->execute();
            
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
    }
    public function Excluir($cod) { 
		try {  
			$sql = "DELETE FROM nfe_totalimpostos WHERE  pedido =:pedido"; 
			
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
			$sql = "SELECT *  FROM nfe_totalimpostos WHERE ". $atributo." = ".$valor;
			
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
            $model->setICMSTot($linha['ICMSTot']);
            $model->setICMSTot_vBC($linha['ICMSTot_vBC']);
            $model->setICMSTot_vICMS($linha['ICMSTot_vICMS']);
            $model->setICMSTot_vICMSDeson($linha['ICMSTot_vICMSDeson']);
            $model->setICMSTot_vBCST($linha['ICMSTot_vBCST']);
            $model->setICMSTot_vST($linha['ICMSTot_vST']);
            $model->setICMSTot_vProd($linha['ICMSTot_vProd']);
            $model->setICMSTot_vFrete($linha['ICMSTot_vFrete']);
            $model->setICMSTot_vSeg($linha['ICMSTot_vSeg']);
            $model->setICMSTot_vDesc($linha['ICMSTot_vDesc']);
            $model->setICMSTot_vII($linha['ICMSTot_vII']);
            $model->setICMSTot_vIPI($linha['ICMSTot_vIPI']);
            $model->setICMSTot_vPIS($linha['ICMSTot_vPIS']);

            $model->setICMSTot_vCOFINS($linha['ICMSTot_vCOFINS']);
            $model->setICMSTot_vOutro($linha['ICMSTot_vOutro']);
            $model->setICMSTot_vNF($linha['ICMSTot_vNF']);
            $model->setICMSTot_vTotTrib($linha['ICMSTot_vTotTrib']);
            $model->setISSQNtot($linha['ISSQNtot']);
            $model->setISSQN_vServ($linha['ISSQN_vServ']);
            $model->setISSQN_vBC($linha['ISSQN_vBC']);
            $model->setISSQN_vISS($linha['ISSQN_vISS']);
            $model->setISSQN_vPIS($linha['ISSQN_vPIS']);
            $model->setISSQN_vCOFINS($linha['ISSQN_vCOFINS']);
            $model->setISSQN_dCompet($linha['ISSQN_dCompet']);
            $model->setISSQN_vDeducao($linha['ISSQN_vDeducao']);
            $model->setISSQN_vOutro($linha['ISSQN_vOutro']);
            $model->setISSQN_vDescIncond($linha['ISSQN_vDescIncond']);
            $model->setISSQN_vDescCond($linha['ISSQN_vDescCond']);
            $model->setISSQN_vISSRet($linha['ISSQN_vISSRet']);
            $model->setISSQN_cRegTrib($linha['ISSQN_cRegTrib']);
            $model->setRetTrib($linha['retTrib']);
            $model->setRetTrib_vRetPIS($linha['retTrib_vRetPIS']);
            $model->setRetTrib_vRetCOFINS($linha['retTrib_vRetCOFINS']);
            $model->setRetTrib_vRetCSLL($linha['retTrib_vRetCSLL']);
            $model->setRetTrib_vBCIRRF($linha['retTrib_vBCIRRF']);
            $model->setRetTrib_vBCRetPrev($linha['retTrib_vBCRetPrev']);
            $model->setRetTrib_vRetPrev($linha['retTrib_vRetPrev']);
            
            return $model; 
    }
}
