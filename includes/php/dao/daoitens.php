<?php
require_once(dirname(__FILE__).'/../conexao/conexao.php');
require_once(dirname(__FILE__).'/../crialog.php');
require_once(dirname(__FILE__).'/../model/modelitens.php');
use modelItens;

class daoItens {
    public static $instance; 
    
    public static function getInstance() { 
	if (!isset(self::$instance)) {
            self::$instance = new daoItens();
        }
        return self::$instance; 
    }
    
    public function Inserir(modelItens $model) {
        try { 
            $sql = "INSERT INTO nfe_itens (pedido, nItem, cProd, cEAN, xProd, NCM, CFOP, uCom, 
                        qCom, vUnCom, vProd, cEANTrib, uTrib, qTrib, vUnTrib, indTot, 
                        nItemPed, vTotTrib, orig, CSOSN, pCredSN, vCredICMSSN, cEnq, 
                        IPI_CST, IPI_vBC, pIPI, vIPI, PIS_CST, PIS_vBC, pPIS, vPIS, 
                        COFINS_CST, COFINS_vBC, pCOFINS, vCOFINS, vFrete, vSeg, vDesc, 
                        vOutro, DI, nDI, dDI, xLocDesemb, UFDesemb, tpViaTransp, 
                        vAFRMM, tpIntermedio, importacao_CNPJ, UFTerceiro, cExportador, 
                        adi, nAdicao, nSeqAdic, cFabricante, vDescDI, nDraw, detExport, 
                        detExport_nDraw, exportInd, nRE, chNFe, qExport)
		VALUES (:pedido, :nItem, :cProd, :cEAN, :xProd, :NCM, :CFOP, :uCom, 
                        :qCom, :vUnCom, :vProd, :cEANTrib, :uTrib, :qTrib, :vUnTrib, :indTot, 
                        :nItemPed, :vTotTrib, :orig, :CSOSN, :pCredSN, :vCredICMSSN, :cEnq, 
                        :IPI_CST, :IPI_vBC, :pIPI, :vIPI, :PIS_CST, :PIS_vBC, :pPIS, :vPIS, 
                        :COFINS_CST, :COFINS_vBC, :pCOFINS, :vCOFINS, :vFrete, :vSeg, :vDesc, 
                        :vOutro, :DI, :nDI, :dDI, :xLocDesemb, :UFDesemb, :tpViaTransp, :
                        :vAFRMM, :tpIntermedio, :importacao_CNPJ, :UFTerceiro, :cExportador, 
                        :adi, :nAdicao, :nSeqAdic, :cFabricante, :vDescDI, :nDraw, :detExport, 
                        :detExport_nDraw, :exportInd, :nRE, :chNFe, :qExport) ";
            
            $p_sql = Conexao::getInstance()->prepare($sql);
            
            $p_sql->bindValue(":pedido",$model->getPedido());
            $p_sql->bindValue(":nItem",$model->getNItem());
            $p_sql->bindValue(":cProd",$model->getCProd());
            $p_sql->bindValue(":cEAN",$model->getCEAN());
            $p_sql->bindValue(":xProd",$model->getXProd());
            $p_sql->bindValue(":NCM",$model->getNCM());
            $p_sql->bindValue(":CFOP",$model->getCFOP());
            $p_sql->bindValue(":uCom",$model->getUCom());
            
            $p_sql->bindValue(":qCom",$model->getQCom());
            $p_sql->bindValue(":vUnCom",$model->getVUnCom());
            $p_sql->bindValue(":vProd",$model->getVProd());
            $p_sql->bindValue(":cEANTrib",$model->getCEAN());
            $p_sql->bindValue(":uTrib",$model->getUTrib());
            $p_sql->bindValue(":qTrib",$model->getQTrib());
            $p_sql->bindValue(":vUnTrib",$model->getVUnTrib());
            $p_sql->bindValue(":indTot",$model->getIndTot());

            $p_sql->bindValue(":nItemPed",$model->getNItemPed());
            $p_sql->bindValue(":vTotTrib",$model->getVTotTrib());
            $p_sql->bindValue(":orig",$model->getOrig());
            $p_sql->bindValue(":CSOSN",$model->getCSOSN());
            $p_sql->bindValue(":pCredSN",$model->getPCredSN());
            $p_sql->bindValue(":vCredICMSSN",$model->getVCredICMSSN());
            $p_sql->bindValue(":cEnq",$model->getCEnq());
            
            $p_sql->bindValue(":IPI_CST",$model->getIPI_CST());
            $p_sql->bindValue(":IPI_vBC",$model->getIPI_vBC());
            $p_sql->bindValue(":pIPI",$model->getPIPI());
            $p_sql->bindValue(":vIPI",$model->getVIPI());
            $p_sql->bindValue(":PIS_CST",$model->getPIS_CST());
            $p_sql->bindValue(":PIS_vBC",$model->getPIS_vBC());
            $p_sql->bindValue(":pPIS",$model->getPPIS());
            $p_sql->bindValue(":vPIS",$model->getVPIS());

            $p_sql->bindValue(":COFINS_CST",$model->getCOFINS_CST());
            $p_sql->bindValue(":COFINS_vBC",$model->getCOFINS_vBC());
            $p_sql->bindValue(":pCOFINS",$model->getPCOFINS());
            $p_sql->bindValue(":vCOFINS",$model->getVCOFINS());
            $p_sql->bindValue(":vFrete",$model->getVFrete());
            $p_sql->bindValue(":vSeg",$model->getVSeg());
            $p_sql->bindValue(":vDesc",$model->getVDesc());

            $p_sql->bindValue(":vOutro",$model->getVOutro());
            $p_sql->bindValue(":DI",$model->getDI());
            $p_sql->bindValue(":nDI",$model->getNDI());
            $p_sql->bindValue(":dDI",$model->getDDI());
            $p_sql->bindValue(":xLocDesemb",$model->getXLocDesemb());
            $p_sql->bindValue(":UFDesemb",$model->getUFDesemb());
            $p_sql->bindValue(":tpViaTransp",$model->getTpViaTransp());
            
            $p_sql->bindValue(":vAFRMM",$model->getVAFRMM());
            $p_sql->bindValue(":tpIntermedio",$model->getTpIntermedio());
            $p_sql->bindValue(":importacao_CNPJ",$model->getImportacao_CNPJ());
            $p_sql->bindValue(":UFTerceiro",$model->getUFTerceiro());
            $p_sql->bindValue(":cExportador",$model->getCExportador());

            $p_sql->bindValue(":adi",$model->getAdi());
            $p_sql->bindValue(":nAdicao",$model->getNAdicao());
            $p_sql->bindValue(":nSeqAdic",$model->getNSeqAdic());
            $p_sql->bindValue(":cFabricante",$model->getCFabricante());
            $p_sql->bindValue(":vDescDI",$model->getVDescDI());
            $p_sql->bindValue(":nDraw",$model->getNDraw());
            $p_sql->bindValue(":detExport",$model->getDetExport());

            $p_sql->bindValue(":detExport_nDraw",$model->getDetExport_nDraw());
            $p_sql->bindValue(":exportInd",$model->getExportInd());
            $p_sql->bindValue(":nRE",$model->getNRE());
            $p_sql->bindValue(":chNFe",$model->getChNFe());
            $p_sql->bindValue(":qExport",$model->getQExport());
            
            return $p_sql->execute();
            
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
    }
    
    public function Editar(modelItens $model) {
        try { 
            $sql  = "UPDATE FROM nfe_itens SET pedido = :pedido, nItem = :nItem, cProd = :cProd, cEAN  = :cEAN, xProd = :xProd, NCM = :NCM, CFOP = :CFOP, uCom = :uCom, 
                        qCom = :qCom, vUnCom = :vUnCom, vProd = :vProd, cEANTrib = :cEANTrib, uTrib = :uTrib, qTrib = :qTrib, vUnTrib = :vUnTrib, indTot = :indTot, 
                        nItemPed = :nItemPed, vTotTrib = :vTotTrib, orig = :orig, CSOSN = :CSOSN, pCredSN = :pCredSN, vCredICMSSN = :vCredICMSSN, cEnq = :cEnq, 
                        IPI_CST = :IPI_CST, IPI_vBC = :IPI_vBC, pIPI = :pIPI, vIPI = :vIPI, PIS_CST = :PIS_CST, PIS_vBC = :PIS_vBC, pPIS = :pPIS, vPIS = :vPIS, 
                        COFINS_CST = :COFINS_CST, COFINS_vBC = :COFINS_vBC, pCOFINS = :pCOFINS, vCOFINS = :vCOFINS, vFrete = :vFrete, vSeg = :vSeg, vDesc = :vDesc, 
                        vOutro = :vOutro, DI = :DI, nDI = :nDI, dDI = :dDI, xLocDesemb = :xLocDesemb, UFDesemb = :UFDesemb, tpViaTransp = :tpViaTransp, 
                        vAFRMM = :vAFRMM, tpIntermedio = :tpIntermedio, importacao_CNPJ = :importacao_CNPJ, UFTerceiro = :UFTerceiro, cExportador = :cExportador, 
                        adi = :adi, nAdicao = :nAdicao, nSeqAdic = :nSeqAdic, cFabricante = :cFabricante, vDescDI = :vDescDI, nDraw = :nDraw, detExport = :detExport, 
                        detExport_nDraw = :detExport_nDraw, exportInd = :exportInd, nRE = :nRE, chNFe = :chNFe, qExport = :qExport";
            
            $p_sql = Conexao::getInstance()->prepare($sql);
            
            $p_sql->bindValue(":pedido",$model->getPedido());
            $p_sql->bindValue(":nItem",$model->getNItem());
            $p_sql->bindValue(":cProd",$model->getCProd());
            $p_sql->bindValue(":cEAN",$model->getCEAN());
            $p_sql->bindValue(":xProd",$model->getXProd());
            $p_sql->bindValue(":NCM",$model->getNCM());
            $p_sql->bindValue(":CFOP",$model->getCFOP());
            $p_sql->bindValue(":uCom",$model->getUCom());
            
            $p_sql->bindValue(":qCom",$model->getQCom());
            $p_sql->bindValue(":vUnCom",$model->getVUnCom());
            $p_sql->bindValue(":vProd",$model->getVProd());
            $p_sql->bindValue(":cEANTrib",$model->getCEAN());
            $p_sql->bindValue(":uTrib",$model->getUTrib());
            $p_sql->bindValue(":qTrib",$model->getQTrib());
            $p_sql->bindValue(":vUnTrib",$model->getVUnTrib());
            $p_sql->bindValue(":indTot",$model->getIndTot());

            $p_sql->bindValue(":nItemPed",$model->getNItemPed());
            $p_sql->bindValue(":vTotTrib",$model->getVTotTrib());
            $p_sql->bindValue(":orig",$model->getOrig());
            $p_sql->bindValue(":CSOSN",$model->getCSOSN());
            $p_sql->bindValue(":pCredSN",$model->getPCredSN());
            $p_sql->bindValue(":vCredICMSSN",$model->getVCredICMSSN());
            $p_sql->bindValue(":cEnq",$model->getCEnq());
            
            $p_sql->bindValue(":IPI_CST",$model->getIPI_CST());
            $p_sql->bindValue(":IPI_vBC",$model->getIPI_vBC());
            $p_sql->bindValue(":pIPI",$model->getPIPI());
            $p_sql->bindValue(":vIPI",$model->getVIPI());
            $p_sql->bindValue(":PIS_CST",$model->getPIS_CST());
            $p_sql->bindValue(":PIS_vBC",$model->getPIS_vBC());
            $p_sql->bindValue(":pPIS",$model->getPPIS());
            $p_sql->bindValue(":vPIS",$model->getVPIS());

            $p_sql->bindValue(":COFINS_CST",$model->getCOFINS_CST());
            $p_sql->bindValue(":COFINS_vBC",$model->getCOFINS_vBC());
            $p_sql->bindValue(":pCOFINS",$model->getPCOFINS());
            $p_sql->bindValue(":vCOFINS",$model->getVCOFINS());
            $p_sql->bindValue(":vFrete",$model->getVFrete());
            $p_sql->bindValue(":vSeg",$model->getVSeg());
            $p_sql->bindValue(":vDesc",$model->getVDesc());

            $p_sql->bindValue(":vOutro",$model->getVOutro());
            $p_sql->bindValue(":DI",$model->getDI());
            $p_sql->bindValue(":nDI",$model->getNDI());
            $p_sql->bindValue(":dDI",$model->getDDI());
            $p_sql->bindValue(":xLocDesemb",$model->getXLocDesemb());
            $p_sql->bindValue(":UFDesemb",$model->getUFDesemb());
            $p_sql->bindValue(":tpViaTransp",$model->getTpViaTransp());
            
            $p_sql->bindValue(":vAFRMM",$model->getVAFRMM());
            $p_sql->bindValue(":tpIntermedio",$model->getTpIntermedio());
            $p_sql->bindValue(":importacao_CNPJ",$model->getImportacao_CNPJ());
            $p_sql->bindValue(":UFTerceiro",$model->getUFTerceiro());
            $p_sql->bindValue(":cExportador",$model->getCExportador());

            $p_sql->bindValue(":adi",$model->getAdi());
            $p_sql->bindValue(":nAdicao",$model->getNAdicao());
            $p_sql->bindValue(":nSeqAdic",$model->getNSeqAdic());
            $p_sql->bindValue(":cFabricante",$model->getCFabricante());
            $p_sql->bindValue(":vDescDI",$model->getVDescDI());
            $p_sql->bindValue(":nDraw",$model->getNDraw());
            $p_sql->bindValue(":detExport",$model->getDetExport());

            $p_sql->bindValue(":detExport_nDraw",$model->getDetExport_nDraw());
            $p_sql->bindValue(":exportInd",$model->getExportInd());
            $p_sql->bindValue(":nRE",$model->getNRE());
            $p_sql->bindValue(":chNFe",$model->getChNFe());
            $p_sql->bindValue(":qExport",$model->getQExport());
            
            return $p_sql->execute();
            
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
    }
    
    public function Excluir($cod) { 
	try {  
            $sql = "DELETE FROM nfe_itens WHERE  pedido =:pedido"; 			
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
            $sql = "DELETE FROM nfe_itens WHERE  id =:id"; 			
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
            $sql = "SELECT * FROM nfe_itens WHERE ". $atributo." = ".$valor;
		
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
            $model = new modelInformacoesAdicionais();
            
            $model->setId($linha['id']);
            $model->setPedido($linha['pedido']);
            $model->setNItem($linha['nItem']);
            $model->setCProd($linha['cProd']);
            $model->setCEAN($linha['cEAN']);
            $model->setXProd($linha['xProd']);
            $model->setNCM($linha['NCM']);
            $model->setCFOP($linha['CFOP']);
            $model->setUCom($linha['uCom']);

            $model->setQCom($linha['qCom']);
            $model->setVUnCom($linha['vUnCom']);
            $model->setVProd($linha['vProd']);
            $model->setCEAN($linha['cEANTrib']);
            $model->setUTrib($linha['uTrib']);
            $model->setQTrib($linha['qTrib']);
            $model->setVUnTrib($linha['vUnTrib']);
            $model->setIndTot($linha['indTot']);

            $model->setNItemPed($linha['nItemPed']);
            $model->setVTotTrib($linha['vTotTrib']);
            $model->setOrig($linha['orig']);
            $model->setCSOSN($linha['CSOSN']);
            $model->setPCredSN($linha['pCredSN']);
            $model->setVCredICMSSN($linha['vCredICMSSN']);
            $model->setCEnq($linha['cEnq']);

            $model->setIPI_CST($linha['IPI_CST']);
            $model->setIPI_vBC($linha['IPI_vBC']);
            $model->setPIPI($linha['pIPI']);
            $model->setVIPI($linha['vIPI']);
            $model->setPIS_CST($linha['PIS_CST']);
            $model->setPIS_vBC($linha['PIS_vBC']);
            $model->setPPIS($linha['pPIS']);
            $model->setVPIS($linha['vPIS']);

            $model->setCOFINS_CST($linha['COFINS_CST']);
            $model->setCOFINS_vBC($linha['COFINS_vBC']);
            $model->setPCOFINS($linha['pCOFINS']);
            $model->setVCOFINS($linha['vCOFINS']);
            $model->setVFrete($linha['vFrete']);
            $model->setVSeg($linha['vSeg']);
            $model->setVDesc($linha['vDesc']);

            $model->setVOutro($linha['vOutro']);
            $model->setDI($linha['DI']);
            $model->setNDI($linha['nDI']);
            $model->setDDI($linha['dDI']);
            $model->setXLocDesemb($linha['xLocDesemb']);
            $model->setUFDesemb($linha['UFDesemb']);
            $model->setTpViaTransp($linha['tpViaTransp']);

            $model->setVAFRMM($linha['vAFRMM']);
            $model->setTpIntermedio($linha['tpIntermedio']);
            $model->setImportacao_CNPJ($linha['importacao_CNPJ']);
            $model->setUFTerceiro($linha['UFTerceiro']);
            $model->setCExportador($linha['cExportador']);

            $model->setAdi($linha['adi']);
            $model->setNAdicao($linha['nAdicao']);
            $model->setNSeqAdic($linha['nSeqAdic']);
            $model->setCFabricante($linha['cFabricante']);
            $model->setVDescDI($linha['vDescDI']);
            $model->setNDraw($linha['nDraw']);
            $model->setDetExport($linha['detExport']);

            $model->setDetExport_nDraw($linha['detExport_nDraw']);
            $model->setExportInd($linha['exportInd']);
            $model->setNRE($linha['nRE']);
            $model->setChNFe($linha['chNFe']);
            $model->setQExport($linha['qExport']);            
            
            array_push($arraymodels, $model);
        }
        return $arraymodels;
    }
    
}