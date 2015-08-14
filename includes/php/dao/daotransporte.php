<?php
require_once(dirname(__FILE__).'/../conexao/conexao.php');
require_once(dirname(__FILE__).'/../crialog.php');
require_once(dirname(__FILE__).'/../model/modeltransporte.php');

class daoTransporte {
    public static $instance;
    
    public static function getInstance() { 
	if (!isset(self::$instance)) {
            self::$instance = new daoTransporte();
        }
        return self::$instance; 
    }
    
    public function Inserir(modelTransporte $model) {
        try { 
            $sql = "INSERT INTO nfe_transporte (pedido, modFrete, transporta, CNPJ, CPF, 
                        xNome, IE, xEnder, xMun, UF, vServ, vBCRet, 
                        pICMSRet, vICMSRet, CFOP, cMunFG, veicTransp, 
                        veicTransp_placa, veicTransp_UF, veicTransp_RNTC, 
                        reboque, reboque_placa, reboque_UF, reboque_RNTC, 
                        reboque_vagao, reboque_balsa, vol, qVol, esp, 
                        marca, nVol, pesoL, pesoB, lacres, nLacre)
                  VALUES(:pedido, :modFrete, :transporta, :CNPJ, :CPF, 
                        :xNome, :IE, :xEnder, :xMun, :UF, :vServ, :vBCRet, 
                        :pICMSRet, :vICMSRet, :CFOP, :cMunFG, :veicTransp, 
                        :veicTransp_placa, :veicTransp_UF, :veicTransp_RNTC, 
                        :reboque, :reboque_placa, :reboque_UF, :reboque_RNTC, 
                        :reboque_vagao, :reboque_balsa, :vol, :qVol, :esp, 
                        :marca, :nVol, :pesoL, :pesoB, :lacres, :nLacre) ";
            
            $p_sql = Conexao::getInstance()->prepare($sql);
            
            $p_sql->bindValue(":pedido",$model->getPedido());
            $p_sql->bindValue(":modFrete",$model->getModFrete());
            $p_sql->bindValue(":transporta",$model->getTransporta());
            $p_sql->bindValue(":CNPJ",$model->getCNPJ());
            $p_sql->bindValue(":CPF",$model->getCPF());
            $p_sql->bindValue(":xNome",$model->getXNome());
            $p_sql->bindValue(":IE",$model->getIE());
            $p_sql->bindValue(":xEnder",$model->getXEnder());
            $p_sql->bindValue(":xMun",$model->getXMun());
            $p_sql->bindValue(":UF",$model->getUF());
            $p_sql->bindValue(":vServ",$model->getVServ());
            $p_sql->bindValue(":vBCRet",$model->getVBCRet());
            $p_sql->bindValue(":pICMSRet",$model->getPICMSRet());
            $p_sql->bindValue(":vICMSRet",$model->getVICMSRet());
            $p_sql->bindValue(":CFOP",$model->getCFOP());
            $p_sql->bindValue(":cMunFG",$model->getCMunFG());
            $p_sql->bindValue(":veicTransp",$model->getVeicTransp());
            $p_sql->bindValue(":veicTransp_placa",$model->getVeicTransp_placa());
            $p_sql->bindValue(":veicTransp_UF",$model->getVeicTransp_UF());
            $p_sql->bindValue(":veicTransp_RNTC",$model->getVeicTransp_RNTC());
            $p_sql->bindValue(":reboque",$model->getReboque());
            $p_sql->bindValue(":reboque_placa",$model->getReboque_placa());
            $p_sql->bindValue(":reboque_UF",$model->getReboque_UF());
            $p_sql->bindValue(":reboque_RNTC",$model->getVeicTransp_RNTC());
            $p_sql->bindValue(":reboque_vagao",$model->getReboque_vagao());
            $p_sql->bindValue(":reboque_balsa",$model->getReboque_balsa());
            $p_sql->bindValue(":vol",$model->getVol());
            $p_sql->bindValue(":qVol",$model->getQVol());
            $p_sql->bindValue(":esp",$model->getEsp());
            $p_sql->bindValue(":marca",$model->getMarca());
            $p_sql->bindValue(":nVol",$model->getNVol());
            $p_sql->bindValue(":pesoL",$model->getPesoL());
            $p_sql->bindValue(":pesoB",$model->getPesoB());
            $p_sql->bindValue(":lacres",$model->getLacres());
            $p_sql->bindValue(":nLacre",$model->getNLacre());
                        
            return $p_sql->execute();
            
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
    }
    
    public function Editar(modelTransporte $model) {
        try { 
            $sql = "UPDATE FROM nfe_transporte SET pedido = :pedido, modFrete = :modFrete, transporta = :transporta, CNPJ = :CNPJ, CPF = :CPF, 
                        xNome = :xNome, IE = :IE, xEnder = :xEnder, xMun = :xMun, UF = :UF, vServ = :vServ, vBCRet = :vBCRet, 
                        pICMSRet = :pICMSRet, vICMSRet = :vICMSRet, CFOP = :CFOP, cMunFG = :cMunFG, veicTransp = :veicTransp, 
                        veicTransp_placa = :veicTransp_placa, veicTransp_UF = :veicTransp_UF, veicTransp_RNTC = :veicTransp_RNTC, 
                        reboque = :reboque, reboque_placa = :reboque_placa, reboque_UF = :reboque_UF, reboque_RNTC = :reboque_RNTC, 
                        reboque_vagao = :reboque_vagao, reboque_balsa = :reboque_balsa, vol = :vol, qVol = :qVol, esp = :esp, 
                        marca = :marca, nVol = :nVol, pesoL = :pesoL, pesoB = :pesoB, lacres = :lacres, nLacre = :nLacre ";
            
            $p_sql = Conexao::getInstance()->prepare($sql);
            
            $p_sql->bindValue(":pedido",$model->getPedido());
            $p_sql->bindValue(":modFrete",$model->getModFrete());
            $p_sql->bindValue(":transporta",$model->getTransporta());
            $p_sql->bindValue(":CNPJ",$model->getCNPJ());
            $p_sql->bindValue(":CPF",$model->getCPF());
            $p_sql->bindValue(":xNome",$model->getXNome());
            $p_sql->bindValue(":IE",$model->getIE());
            $p_sql->bindValue(":xEnder",$model->getXEnder());
            $p_sql->bindValue(":xMun",$model->getXMun());
            $p_sql->bindValue(":UF",$model->getUF());
            $p_sql->bindValue(":vServ",$model->getVServ());
            $p_sql->bindValue(":vBCRet",$model->getVBCRet());
            $p_sql->bindValue(":pICMSRet",$model->getPICMSRet());
            $p_sql->bindValue(":vICMSRet",$model->getVICMSRet());
            $p_sql->bindValue(":CFOP",$model->getCFOP());
            $p_sql->bindValue(":cMunFG",$model->getCMunFG());
            $p_sql->bindValue(":veicTransp",$model->getVeicTransp());
            $p_sql->bindValue(":veicTransp_placa",$model->getVeicTransp_placa());
            $p_sql->bindValue(":veicTransp_UF",$model->getVeicTransp_UF());
            $p_sql->bindValue(":veicTransp_RNTC",$model->getVeicTransp_RNTC());
            $p_sql->bindValue(":reboque",$model->getReboque());
            $p_sql->bindValue(":reboque_placa",$model->getReboque_placa());
            $p_sql->bindValue(":reboque_UF",$model->getReboque_UF());
            $p_sql->bindValue(":reboque_RNTC",$model->getVeicTransp_RNTC());
            $p_sql->bindValue(":reboque_vagao",$model->getReboque_vagao());
            $p_sql->bindValue(":reboque_balsa",$model->getReboque_balsa());
            $p_sql->bindValue(":vol",$model->getVol());
            $p_sql->bindValue(":qVol",$model->getQVol());
            $p_sql->bindValue(":esp",$model->getEsp());
            $p_sql->bindValue(":marca",$model->getMarca());
            $p_sql->bindValue(":nVol",$model->getNVol());
            $p_sql->bindValue(":pesoL",$model->getPesoL());
            $p_sql->bindValue(":pesoB",$model->getPesoB());
            $p_sql->bindValue(":lacres",$model->getLacres());
            $p_sql->bindValue(":nLacre",$model->getNLacre());
                        
            return $p_sql->execute();
            
        } catch (Exception $e) { 
            print "Ocorreu um erro ao tentar executar esta ação tente novamente mais tarde."; 
            CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
	}
    }
    
    public function Excluir($cod) { 
	try {  
            $sql = "DELETE FROM nfe_transporte WHERE  pedido =:pedido"; 

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
			$sql = "SELECT *  FROM nfe_transporte WHERE ". $atributo." = ".$valor;
			
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
            $model->SetModFrete($linha['modFrete']);
            $model->SetTransporta($linha['transporta']);
            $model->SetCNPJ($linha['CNPJ']);
            $model->SetCPF($linha['CPF']);
            $model->SetXNome($linha['xNome']);
            $model->SetIE($linha['IE']);
            $model->SetXEnder($linha['xEnder']);
            $model->SetXMun($linha['xMun']);
            $model->SetUF($linha['UF']);
            $model->SetVServ($linha['vServ']);
            $model->SetVBCRet($linha['vBCRet']);
            $model->SetPICMSRet($linha['pICMSRet']);
            $model->SetVICMSRet($linha['vICMSRet']);
            $model->SetCFOP($linha['CFOP']);
            $model->SetCMunFG($linha['cMunFG']);
            $model->SetVeicTransp($linha['veicTransp']);
            $model->SetVeicTransp_placa($linha['veicTransp_placa']);
            $model->SetVeicTransp_UF($linha['veicTransp_UF']);
            $model->SetVeicTransp_RNTC($linha['veicTransp_RNTC']);
            $model->SetReboque($linha['reboque']);
            $model->SetReboque_placa($linha['reboque_placa']);
            $model->SetReboque_UF($linha['reboque_UF']);
            $model->SetVeicTransp_RNTC($linha['reboque_RNTC']);
            $model->SetReboque_vagao($linha['reboque_vagao']);
            $model->SetReboque_balsa($linha['reboque_balsa']);
            $model->SetVol($linha['vol']);
            $model->SetQVol($linha['qVol']);
            $model->SetEsp($linha['esp']);
            $model->SetMarca($linha['marca']);
            $model->SetNVol($linha['nVol']);
            $model->SetPesoL($linha['pesoL']);
            $model->SetPesoB($linha['pesoB']);
            $model->SetLacres($linha['lacres']);
            $model->SetNLacre($linha['nLacre']);            
            
            return $model; 
    }
}
