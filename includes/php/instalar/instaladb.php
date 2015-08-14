<?php 
require_once('conexao/conexao.php');
require_once('crialog.php');
class InstalaDB { 

	/*private function __construct() { // 
	
	}*/
	/* tabela nfe_emissor*/
	public function criaTabelaEmissor() {
		try {
		$sqlstring = "CREATE TABLE IF NOT EXISTS `nfe_emissor` (
		  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key.',
		  `CNPJ` varchar(14) NOT NULL DEFAULT '' COMMENT 'número do CNPJ da empresa emissora',
		  `xNome` varchar(60) NOT NULL DEFAULT '' COMMENT 'nome da empresa emissora',		  
		  `xFant` varchar(60)  DEFAULT '' COMMENT 'nome fantasia da empresa emissora',
		  `xLgr` varchar(60) NOT NULL DEFAULT '' COMMENT 'logradouro da empresa emissora',		  
		  `nro` varchar(60) NOT NULL DEFAULT '' COMMENT 'número da empresa emissora',
		  `xCpl` varchar(60)  DEFAULT '' COMMENT 'complemento do endereco da empresa emissora',
		  `xBairro` varchar(60) NOT NULL DEFAULT '' COMMENT 'bairro da empresa emissora',
		  `cMun` varchar(7) NOT NULL DEFAULT '' COMMENT 'codigo IBGE do municipio da empresa emissora',
		  `xMun` varchar(60) NOT NULL DEFAULT '' COMMENT 'Nome do municipio da empresa emissora',
		  `UF` varchar(2) NOT NULL DEFAULT '' COMMENT 'sigla UF da empresa emissora',
		  `CEP` varchar(8) NOT NULL DEFAULT '' COMMENT 'CEP da empresa emissora',
		  `cPais` varchar(8) NOT NULL DEFAULT '' COMMENT 'código do país da empresa emissora (1058 Brasil)',
		  `xPais` varchar(60) NOT NULL DEFAULT '' COMMENT 'nome do país da empresa emissora (Brasil ou BRASIL)',
		  `fone` varchar(14) NOT NULL DEFAULT '' COMMENT 'telefone da empresa emissora ',
		  `IE` varchar(14) NOT NULL DEFAULT '' COMMENT 'Incrição estadual da empresa emissora',
		  `IEST` varchar(14) DEFAULT '' COMMENT 'IE do Substituto Tributário da empresa emissora',
		  `IM` varchar(15)  DEFAULT '' COMMENT 'Inscrição Municipal do Prestador de Serviço  da empresa emissora',
		  `CNAE` varchar(7)  DEFAULT '' COMMENT 'CNAE fiscal',
		  `CRT` varchar(1)  DEFAULT '' COMMENT 'Código de Regime Tributário da empresa emissora',
		  UNIQUE (`CNPJ`),
		  PRIMARY KEY (`id`)		  
		) ENGINE=InnoDB AUTO_INCREMENT=1 CHARSET=utf8 COMMENT='dados do emitente da NF-e';";

		$p_sql = Conexao::getInstance()->prepare($sqlstring);
		$p_sql->execute();
		}catch (Exception $e) {
			print 'Ocorreu um erro ao tentar executar esta ação, por favor entre em contato com o suporte.';
			CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
		}
	}
	/* tabela nfe_destinatario*/
	public function criaTabelaPedido() {
		try {
		$sqlstring = "CREATE TABLE IF NOT EXISTS `nfe_pedido` (
		  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key.',
		  `pedido` varchar(14) NOT NULL  COMMENT 'Número do pedido.',
		  `emitente_cnpj` varchar(3) NOT NULL  DEFAULT '' COMMENT 'CNPJ do emitente do pedido.',
		  `CNPJ` varchar(14) NOT NULL DEFAULT '' COMMENT 'número do CNPJ do destinátario',
		  `CPF` varchar(11) NOT NULL DEFAULT '' COMMENT 'número do CPF do destinátario',
		  `idEstrangeiro` varchar(20) NOT NULL DEFAULT '' COMMENT 'dentificação do destinatário no caso de comprador estrangeiro',
		  `xNome` varchar(60) NOT NULL DEFAULT '' COMMENT 'nome do destinátario',
		  `xLgr` varchar(60) NOT NULL DEFAULT '' COMMENT 'logradouro',		  
		  `xCpl` varchar(60)  DEFAULT '' COMMENT 'complemento do endereco do destinatário',
		  `nro` varchar(60) NOT NULL DEFAULT '' COMMENT 'número do destinatário',
		  `xBairro` varchar(60) NOT NULL DEFAULT '' COMMENT 'bairro do destinatário',		   
		  `cMun` varchar(7) NOT NULL DEFAULT '' COMMENT 'codigo IBGE do municipio do destinatário',
		  `xMun` varchar(60) NOT NULL DEFAULT '' COMMENT 'Nome do municipio do destinatário',
		  `UF` varchar(2) NOT NULL DEFAULT '' COMMENT 'sigla UF do destinatário',
		  `CEP` varchar(8) NOT NULL DEFAULT '' COMMENT 'CEP do destinatário',
		  `cPais` varchar(8) NOT NULL DEFAULT '' COMMENT 'código do país do destinatário (1058 Brasil)',
		  `xPais` varchar(60) NOT NULL DEFAULT '' COMMENT 'nome do país do destinatário (Brasil ou BRASIL)',
		  `fone` varchar(14)  DEFAULT '' COMMENT 'telefone do destinatário ',
		  `indIEDest` varchar(1) NOT NULL DEFAULT '' COMMENT 'Indicador da IE do Destinatário',
		  `IE` varchar(14) DEFAULT '' COMMENT 'Incrição estadual do destinatário',
		  `ISUF` varchar(9)  DEFAULT '' COMMENT 'Inscrição na SUFRAMA ',
		  `IM` varchar(15)  DEFAULT '' COMMENT 'Inscrição Municipal do Prestador de Serviço  do destinatário',
		  `email` varchar(15)  DEFAULT '' COMMENT 'email do destinátario',
		  /*preencher em caso de retirada no local*/
		  `retirada` varchar(1) NOT NULL DEFAULT '' COMMENT '1 para retirada no local',
		  `retirada_CNPJ` varchar(14)  DEFAULT '' COMMENT 'número do CNPJ do local de retirada',
		  `retirada_CPF` varchar(11)  DEFAULT '' COMMENT 'número do CPF do local de retirada',
		  `retirada_xLgr` varchar(60)  DEFAULT '' COMMENT 'logradouro local de retirada',		  
		  `retirada_nro` varchar(60)  DEFAULT '' COMMENT 'número do local de retirada',
		  `retirada_xCpl` varchar(60)  DEFAULT '' COMMENT 'complemento do endereco do local de retirada',
		  `retirada_xBairro` varchar(60)  DEFAULT '' COMMENT 'bairro do destinatário',		   
		  `retirada_cMun` varchar(7)  DEFAULT '' COMMENT 'codigo IBGE do municipio do local de retirada',
		  `retirada_xMun` varchar(60)  DEFAULT '' COMMENT 'Nome do municipio do local de retirada',
		  `retirada_UF` varchar(2)  DEFAULT '' COMMENT 'sigla UF do local de retirada',
		  /*preencher em caso de entrega no local*/
		  `entrega` varchar(1) NOT NULL DEFAULT '' COMMENT '1 para entrega no local',
		  `entrega_CNPJ` varchar(14)  DEFAULT '' COMMENT 'número do CNPJ do local de entrega',
		  `entrega_CPF` varchar(11)  DEFAULT '' COMMENT 'número do CPF do local de entrega',
		  `entrega_xLgr` varchar(60)  DEFAULT '' COMMENT 'logradouro local de entrega',		  
		  `entrega_nro` varchar(60)  DEFAULT '' COMMENT 'número do local de entrega',
		  `entrega_xCpl` varchar(60)  DEFAULT '' COMMENT 'complemento do endereco do local de entrega',
		  `entrega_xBairro` varchar(60)  DEFAULT '' COMMENT 'bairro do destinatário',		   
		  `entrega_cMun` varchar(7)  DEFAULT '' COMMENT 'codigo IBGE do municipio do local de entrega',
		  `entrega_xMun` varchar(60)  DEFAULT '' COMMENT 'Nome do municipio do local de entrega',
		  `entrega_UF` varchar(2)  DEFAULT '' COMMENT 'sigla UF do local de entrega',
		  `total_itens` varchar(3)  DEFAULT '' COMMENT 'total de itens do pedido',
		  	CONSTRAINT fk_emitente_cnpj FOREIGN KEY (`emitente_cnpj`)
			REFERENCES nfe_emissor(`CNPJ`),
		  UNIQUE (`pedido`),
		  PRIMARY KEY (`id`)		  
		) ENGINE=InnoDB CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='Dados do destinatario da NF-e';";

		$p_sql = Conexao::getInstance()->prepare($sqlstring);
		$p_sql->execute();
		}catch (Exception $e) {
			print 'Ocorreu um erro ao tentar executar esta ação, por favor entre em contato com o suporte.';
			CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
		}
	}

	public function criaTabelaItens() {
		try {
			
			$sqlstring = "CREATE TABLE IF NOT EXISTS `nfe_itens` (
				`id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key.',
				`pedido` varchar(14) NOT NULL  DEFAULT '' COMMENT 'Número do pedido (xPed).',				
				`nItem` varchar(3) NOT NULL  DEFAULT '' COMMENT 'Número do item - de 1 até 990 por NF-e.',				
				/*<det nItem=nItem><prod>*/
				`cProd` varchar(60) NOT NULL  DEFAULT '' COMMENT 'código  do produto.',
				`cEAN` varchar(14) NOT NULL  DEFAULT '' COMMENT 'código  de barras.',
				`xProd` varchar(120) NOT NULL  DEFAULT '' COMMENT 'descrição do produto.',
				`NCM` varchar(8) NOT NULL DEFAULT '' COMMENT 'Código NCM com 8 dígitos ou 2 dígitos (gênero).',				
				`CFOP` varchar(4) NOT NULL DEFAULT '' COMMENT 'Código Fiscal de Operações e Prestações.',
				`uCom` varchar(6) NOT NULL DEFAULT '' COMMENT 'Unidade Comercial.',
				`qCom` varchar(4) NOT NULL DEFAULT '' COMMENT 'Quantidade Comercial.',
				`vUnCom` varchar(21) NOT NULL DEFAULT '' COMMENT 'Valor Unitário de Comercialização.',
				`vProd` varchar(60) NOT NULL DEFAULT '' COMMENT 'Valor Total Bruto dos Produtos ou Serviços.',
				`cEANTrib` varchar(14) NOT NULL DEFAULT '' COMMENT 'GTIN (Global Trade Item Number) da unidade tributável, antigo código EAN ou código de barras.',
				`uTrib` varchar(6) NOT NULL DEFAULT '' COMMENT 'Unidade Tributável.',
				`qTrib` varchar(15) NOT NULL DEFAULT '' COMMENT 'Unidade Tributável.',
				`vUnTrib` varchar(21) NOT NULL  COMMENT 'Valor Unitário de tributação.',
				/*Dados do pedido - não obrigatorio mais recomendado*/
				`indTot` varchar(1)  DEFAULT '1' COMMENT 'Indica se valor do Item (vProd) entra no valor total da NF-e (vProd) 1=entra 0= não entra.',
				`nItemPed` varchar(6)  DEFAULT '1' COMMENT 'Item do Pedido de Compra.',
				
				/*</*prod>/
				/*IMPOSTOS <imposto>*/
				`vTotTrib` varchar(15)  COMMENT 'Valor aproximado total de tributos federais, estaduais e municipais.',
				/*<imposto>*/
				/*<ICMS><ICMSSN101> INSERIDO ICMS APENAS PARA SIMPLES NACIONAL*/
				`orig` varchar(1) NOT NULL DEFAULT '0' COMMENT 'Origem da mercadoria.',
				`CSOSN` varchar(3) NOT NULL DEFAULT '101' COMMENT 'Código de Situação da Operação – Simples Nacional.',
				`pCredSN` varchar(7) NOT NULL DEFAULT '0.00' COMMENT 'Alíquota aplicável de cálculo do crédito(Simples Nacional).',
				`vCredICMSSN` varchar(15) NOT NULL DEFAULT '0.00' COMMENT 'Alíquota aplicável de cálculo do crédito(Simples Nacional).',
				/*</ICMS></ICMSSN101>*/
				/*<IPI> IPI*/
				`cEnq` varchar(3) NOT NULL DEFAULT '999' COMMENT 'Código de Enquadramento Legal do IPI- 999 para tabela não criada.',
				/*<IPI><IPITrib>*/
				`IPI_CST` varchar(2) NOT NULL DEFAULT '99' COMMENT 'Código de Situação Tributária -Grupo do CST 00, 49, 50 e 99.',				
				`IPI_vBC` varchar(15) NOT NULL DEFAULT '0.00' COMMENT 'Valor da BC do IPI.',
				`pIPI` varchar(7) NOT NULL DEFAULT '0.00' COMMENT 'Alíquota do IPI.',
				`vIPI` varchar(15) NOT NULL DEFAULT '0.00' COMMENT 'Valor do IPI.',
				/*</IPI></IPITrib>*/
				/*<PIS> PIS*/				
				/*<PIS><PISOutr> */
				`PIS_CST` varchar(2) NOT NULL DEFAULT '99' COMMENT 'Código de Situação Tributária do PIS.',
				`PIS_vBC` varchar(15) NOT NULL DEFAULT '0.00' COMMENT 'Valor da Base de Cálculo do PIS.',
				`pPIS` varchar(7) NOT NULL DEFAULT '0.00' COMMENT 'Alíquota do PIS (em percentual).',
				`vPIS` varchar(15) NOT NULL DEFAULT '0.00' COMMENT 'Valor do PIS.',
				/*</PIS></PISOutr> */
				/*<COFINS> <COFINSOutr>*/
				`COFINS_CST` varchar(2) NOT NULL DEFAULT '99' COMMENT 'Código de Situação Tributária da COFINS.',
				`COFINS_vBC` varchar(15) NOT NULL DEFAULT '0.00' COMMENT 'Valor da Base de Cálculo da COFINS.',
				`pCOFINS` varchar(7) NOT NULL DEFAULT '0.00' COMMENT 'Alíquota da COFINS (em percentual).',
				`vCOFINS` varchar(15) NOT NULL DEFAULT '0.00' COMMENT 'Valor da COFINS.',
				/*</COFINS></COFINSOutr>*/
				/*</imposto>*/
				/*</det>*/
				/*OUTROS DADOS*/
				/*outros - não obrigatorio*/
				`vFrete` varchar(15) DEFAULT '' COMMENT 'Valor Total do Frete.',
				`vSeg` varchar(15) DEFAULT '' COMMENT 'Valor Total do Seguro.',
				`vDesc` varchar(15) DEFAULT '' COMMENT 'Valor do Desconto.',
				`vOutro` varchar(15) DEFAULT '' COMMENT 'Outras despesas acessórias.',
				/*Declaração de Importação - obrigatorio caso DI=1 */
				`DI` varchar(1) DEFAULT '' COMMENT 'Declaração de Importação 1=verdadeiro.',
				`nDI` varchar(12) DEFAULT '' COMMENT 'Número do Documento de Importação (DI, DSI, DIRE, ...).',
				`dDI` varchar(10) DEFAULT '' COMMENT 'Data de Registro do documento Formato: AAAA-MM-DD.',				
				`xLocDesemb` varchar(60) DEFAULT '' COMMENT 'Local de desembaraço.',
				`UFDesemb` varchar(2) DEFAULT '' COMMENT 'Sigla da UF onde ocorreu o Desembaraço Aduaneiro.',
				`tpViaTransp` varchar(2) DEFAULT '' COMMENT 'Via de transporte internacional informada na Declaração de Importação (DI).',
				`vAFRMM` varchar(15) DEFAULT '' COMMENT 'Valor da AFRMM - Adicional ao Frete para Renovação da Marinha Mercante.',
				`tpIntermedio` varchar(1) DEFAULT '' COMMENT 'Forma de impo.',
				`importacao_CNPJ` varchar(14) DEFAULT '' COMMENT 'CNPJ do adquirente ou do encomendante.',
				`UFTerceiro` varchar(2) DEFAULT '' COMMENT 'Sigla da UF do adquirente ou do encomendante.',
				`cExportador` varchar(8) DEFAULT '' COMMENT 'Código do Exportador.',
				`adi` varchar(1) DEFAULT '' COMMENT 'Adições 1=verdadeiro.',
				/*Declaração de Importação -> Adições - obrigatorio caso adi=1 */
				`nAdicao` varchar(3) DEFAULT '0' COMMENT 'Numero da Adição.',
				`nSeqAdic` varchar(3) DEFAULT '' COMMENT 'Numero sequencial do item dentro da Adição.',
				`cFabricante` varchar(60) DEFAULT '' COMMENT 'Código do fabricante estrangeiro.',
				`vDescDI` varchar(15) DEFAULT '' COMMENT 'Valor do desconto do item da DI – Adição.',
				`nDraw` varchar(11) DEFAULT '' COMMENT 'Número do ato concessório de Drawback.',
				/*Grupo de Exportação - obrigatorio caso detExport=1 */
				`detExport` varchar(1) DEFAULT '' COMMENT 'Grupo de informações de exportação para o item 1=verdadeiro.',
				`detExport_nDraw` varchar(11) DEFAULT '' COMMENT 'Número do ato concessório de Drawback.',
				/*Grupo de Exportação ->Grupo sobre exportação indireta - obrigatorio caso exportInd=1 */
				`exportInd` varchar(1) DEFAULT '0' COMMENT 'Grupo sobre exportação indireta 1=verdadeiro.',
				`nRE` varchar(12) DEFAULT '' COMMENT 'Número do Registro de Exportação.',
				`chNFe` varchar(44) DEFAULT '' COMMENT 'Chave de Acesso da NF-e recebida para exportação.',
				`qExport` varchar(15) DEFAULT '' COMMENT 'Quantidade do item realmente exportado.',	
				/**/
				CONSTRAINT fk_pedido FOREIGN KEY (`pedido`)
				REFERENCES nfe_pedido(`pedido`) ON DELETE CASCADE ON UPDATE CASCADE,
				PRIMARY KEY (`id`)		  
				) ENGINE=InnoDB CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='Dados dos itens NF-e';";

			$p_sql = Conexao::getInstance()->prepare($sqlstring);
			$p_sql->execute();

		}catch (Exception $e) {
			print 'Ocorreu um erro ao tentar executar esta ação, por favor entre em contato com o suporte.';
			CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
		}
	}

	public function criaTabelaTotalImpostos() {
		try {			
			$sqlstring = "CREATE TABLE IF NOT EXISTS `nfe_totalimpostos` (
				`id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key.',
				`pedido` varchar(14) NOT NULL  DEFAULT '' COMMENT 'Número do pedido (xPed).',
				/*Total de impostos <total>*/
				/*Total de ICMS <ICMSTot>*/
				`ICMSTot` varchar(1) NOT NULL  DEFAULT '1' COMMENT 'usar ICMSTot, 1=verdadeiro.',
				`ICMSTot_vBC` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Base de Cálculo do ICMS.',
				`ICMSTot_vICMS` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor Total do ICMS.',
				`ICMSTot_vICMSDeson` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor Total do ICMS desonerado.',
				`ICMSTot_vBCST` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Base de Cálculo do ICMS ST.',
				`ICMSTot_vST` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor Total do ICMS ST.',
				`ICMSTot_vProd` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor Total dos produtos e serviço.',
				`ICMSTot_vFrete` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor Total do frete.',
				`ICMSTot_vSeg` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor Total do seguro.',
				`ICMSTot_vDesc` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor Total do desconto.',
				`ICMSTot_vII` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor Total do II.',
				`ICMSTot_vIPI` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor Total do IPI.',
				`ICMSTot_vPIS` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor Total do PIS.',
				`ICMSTot_vCOFINS` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor da COFINS.',
				`ICMSTot_vOutro` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Outras Despesas acessórias.',
				`ICMSTot_vNF` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor Total da NF-e.',
				`ICMSTot_vTotTrib` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor aproximado total de tributos.',
				/*</ICMSTot>*/
				/* Total de ISSQN (nao utilizar)<ISSQNtot>*/
				`ISSQNtot` varchar(1) NOT NULL  DEFAULT '0' COMMENT 'usar ISSQNtot, 1=verdadeiro.',				
				`ISSQN_vServ` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor total dos Serviços sob não-incidência ou não tributados pelo ICMS.',
				`ISSQN_vBC` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor total Base de Cálculo do ISS.',
				`ISSQN_vISS` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor total do ISS.',
				`ISSQN_vPIS` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor total do PIS sobre serviços.',
				`ISSQN_vCOFINS` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor total da COFINS sobre serviços.',
				`ISSQN_dCompet` varchar(8)  DEFAULT '0.00' COMMENT 'Data da prestação do serviço AAAA-MM-DD sem caracteres especiais.',
				`ISSQN_vDeducao` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor total dedução para redução da Base de Cálculo.',
				`ISSQN_vOutro` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor total outras retenções.',
				`ISSQN_vDescIncond` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor total desconto incondicionado.',				
				`ISSQN_vDescCond` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor total desconto condicionado.',
				`ISSQN_vISSRet` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor total retenção ISS.',
				`ISSQN_cRegTrib` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Código do Regime Especial de Tributação.',
				/*</ISSQNtot>*/
				/*Retenções de Tributos <retTrib>*/
				`retTrib` varchar(1) NOT NULL  DEFAULT '0' COMMENT 'usar retTrib, 1=verdadeiro.',
				`retTrib_vRetPIS` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor Retido de PIS.',
				`retTrib_vRetCOFINS` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor Retido de COFINS.',
				`retTrib_vRetCSLL` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor Retido de CSLL.',
				`retTrib_vBCIRRF` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Base de Cálculo do IRRF.',
				`retTrib_vBCRetPrev` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Base de Cálculo da Retenção da Previdência Social.',
				`retTrib_vRetPrev` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor da Retenção da Previdência Social.',
				/*</retTrib>*/
				/*</total>*/
				CONSTRAINT fk_pedido_totalimpostos FOREIGN KEY (`pedido`)
				REFERENCES nfe_pedido(`pedido`) ON DELETE CASCADE ON UPDATE CASCADE,
				PRIMARY KEY (`id`)		  
				) ENGINE=InnoDB  CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='Dados dos itens NF-e';";
			$p_sql = Conexao::getInstance()->prepare($sqlstring);
			$p_sql->execute();

		}catch (Exception $e) {
			print 'Ocorreu um erro ao tentar executar esta ação, por favor entre em contato com o suporte.';
			CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
		}		
	}

	
	public function criaTabelaTransporte() {
			try {			
			$sqlstring = "CREATE TABLE IF NOT EXISTS `nfe_transporte` (
				`id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key.',
				`pedido` varchar(14) NOT NULL  DEFAULT '' COMMENT 'Número do pedido (xPed).',
				/*<transp> Grupo Informações do Transporte */
				`modFrete` varchar(1) NOT NULL  DEFAULT '' COMMENT 'Número do pedido (xPed).',
				/*<transporta> Grupo Transportador*/
				`transporta` varchar(1) NOT NULL  DEFAULT '1' COMMENT 'Grupo transporta, 1=verdadeiro.',
				`CNPJ` varchar(14) DEFAULT '' COMMENT 'CNPJ do Transportador.',
				`CPF` varchar(11)  DEFAULT '' COMMENT 'CPF do Transportador.',
				`xNome` varchar(60)  DEFAULT '' COMMENT 'Nome ou razão social do Transportador.',
				`IE` varchar(60)  DEFAULT '' COMMENT 'Inscrição estadual do Transportador.',	
				`xEnder` varchar(60)  DEFAULT '' COMMENT 'Endereço do Transportador.',	
				`xMun` varchar(60)  DEFAULT '' COMMENT 'Nome do município do Transportador.',
				`UF` varchar(2)  DEFAULT '' COMMENT 'Sigla UF do Transportador.',
				/*</transporta>*/
				/*<retTransp> Grupo Retenção ICMS transporte */
				`vServ` varchar(15)  DEFAULT '0.00' COMMENT 'Valor do Serviço do Transportador.',	
				`vBCRet` varchar(15)  DEFAULT '0.00' COMMENT 'BC da Retenção do ICMS.',	
				`pICMSRet` varchar(7)  DEFAULT '0.00' COMMENT 'Alíquota da Retenção.',	
				`vICMSRet` varchar(15)  DEFAULT '0.00' COMMENT 'Valor do ICMS Retido.',	
				`CFOP` varchar(15)  DEFAULT '0.00' COMMENT 'CFOP.',	
				`cMunFG` varchar(7)  DEFAULT '0.00' COMMENT 'Código do município de ocorrência do fato gerador do ICMS do transporte.',
				/*</retTransp>
				/*Sequência XML*/
				/*<veicTransp> Grupo Veículo Transporte*/				
				`veicTransp` varchar(1) NOT NULL  DEFAULT '0' COMMENT 'Grupo veicTransp, 1=verdadeiro.',
				`veicTransp_placa` varchar(7)  DEFAULT '' COMMENT 'Placa do veículo.',
				`veicTransp_UF` varchar(2) DEFAULT '' COMMENT 'Sigla UF.',	
				`veicTransp_RNTC` varchar(20) DEFAULT '' COMMENT 'Registro Nacional de Transportador de Carga (ANTT).',
				/*</veicTransp> */
				/*<reboque> Grupo Reboque*/
				`reboque` varchar(1) NOT NULL  DEFAULT '0' COMMENT 'Grupo reboque, 1=verdadeiro.',				
				`reboque_placa` varchar(7)  DEFAULT '' COMMENT 'Placa do veículo.',
				`reboque_UF` varchar(2) DEFAULT '' COMMENT 'Sigla UF.',	
				`reboque_RNTC` varchar(20) DEFAULT '' COMMENT 'Registro Nacional de Transportador de Carga (ANTT).',
				`reboque_vagao` varchar(20) DEFAULT '' COMMENT 'Identificação do vagão.',
				`reboque_balsa` varchar(20) DEFAULT '' COMMENT 'Identificação da balsa.',
				/*</reboque>*/
				/*<vol> Grupo Volumes*/
				`vol` varchar(1) NOT NULL  DEFAULT '0' COMMENT 'Grupo volume, 1=verdadeiro.',
				`qVol` varchar(15) DEFAULT '' COMMENT 'Quantidade de volumes transportados.',
				`esp` varchar(60)  DEFAULT '' COMMENT 'Espécie dos volumes transportados.',
				`marca` varchar(60) DEFAULT '' COMMENT 'Marca dos volumes transportados.',
				`nVol` varchar(60)  DEFAULT '' COMMENT 'Numeração dos volumes transportados.',
				`pesoL` varchar(60) DEFAULT '' COMMENT 'Peso Líquido (em kg).',
				`pesoB` varchar(60) DEFAULT '' COMMENT 'Peso Bruto (em kg).',
				/*</vol>*/
				/*<lacres> Grupo de lacres*/
				`lacres` varchar(1) NOT NULL  DEFAULT '0' COMMENT 'Grupo lacres, 1=verdadeiro.',
				`nLacre` varchar(60) NOT NULL  DEFAULT '' COMMENT 'Número dos lacres.',
				/*</lacres>*/
				 /*</transp>*/
				CONSTRAINT fk_pedido_transporte FOREIGN KEY (`pedido`)
				REFERENCES nfe_pedido(`pedido`) ON DELETE CASCADE ON UPDATE CASCADE,
				PRIMARY KEY (`id`)		  
				) ENGINE=InnoDB CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='Dados do transporte NF-e';";
			$p_sql = Conexao::getInstance()->prepare($sqlstring);
			$p_sql->execute();

		}catch (Exception $e) {
			print 'Ocorreu um erro ao tentar executar esta ação, por favor entre em contato com o suporte.';
			CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
		}


	}	
		
	public function criaTabelaCobranca() {
		try {			
			$sqlstring = "CREATE TABLE IF NOT EXISTS `nfe_cobranca` (
				`id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key.',
				`pedido` varchar(14) NOT NULL  DEFAULT '' COMMENT 'Número do pedido (xPed).',
				/*Grupo Cobrança <cobr>*/
				`cobr` varchar(1) NOT NULL  DEFAULT '1' COMMENT 'Grupo cobrança, 1=verdadeiro.',
				/*Grupo fatura <fat>*/
				`fat` varchar(1) NOT NULL  DEFAULT '1' COMMENT 'Grupo fatura, 1=verdadeiro.',
				`nFat` varchar(60) NOT NULL  DEFAULT '' COMMENT 'Número da Fatura.',
				`vOrig` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Número da Fatura.',
				`vDesc` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor do desconto.',
				`vLiq` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor Líquido da Fatura.',
				/*</fat>*/
				/*Grupo Duplicata <dup>*/
				`dup` varchar(1) NOT NULL  DEFAULT '1' COMMENT 'Grupo cobrança, 1=verdadeiro.',
				`nDup` varchar(60) NOT NULL  DEFAULT '' COMMENT 'Número da Duplicata.',
				`dVenc` varchar(10) NOT NULL  DEFAULT '2015-07-23' COMMENT 'Data de vencimento Formato:AAAA-MM-DD.',
				`vDup` varchar(15) NOT NULL  DEFAULT '0.00' COMMENT 'Valor da duplicata.',
				/*</dup>*/
				/*</cobr>*/
				CONSTRAINT fk_pedido_cobranca FOREIGN KEY (`pedido`)
				REFERENCES nfe_pedido(`pedido`) ON DELETE CASCADE ON UPDATE CASCADE,
				PRIMARY KEY (`id`)		  
				) ENGINE=InnoDB CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='Dados da cobrança da  NF-e';";
			$p_sql = Conexao::getInstance()->prepare($sqlstring);
			$p_sql->execute();

		}catch (Exception $e) {
			print 'Ocorreu um erro ao tentar executar esta ação, por favor entre em contato com o suporte.';
			CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
		}
	}			

	public function criaTabelaPagamento() {
		try {			
			$sqlstring = "CREATE TABLE IF NOT EXISTS `nfe_pagamento` (
				`id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key.',
				`pedido` varchar(14) NOT NULL  DEFAULT '' COMMENT 'Número do pedido (xPed).',
				/*Grupo de Formas de Pagamento <pag>*/
				`pag` varchar(1) NOT NULL  DEFAULT '0' COMMENT 'Grupo de Formas de Pagamento, 1=verdadeiro.',
				`tPag` varchar(2) NOT NULL  DEFAULT '0' COMMENT 'Forma de pagamento',
				`vPag` varchar(15) NOT NULL  DEFAULT '0' COMMENT 'Valor do pagamento',
				/*Grupo de Cartões <card>*/
				`card` varchar(1) NOT NULL  DEFAULT '0' COMMENT 'Grupo de Cartões, 1=verdadeiro se tPag=03 ou 04.',
				`CNPJ` varchar(14) NOT NULL  DEFAULT '' COMMENT 'CNPJ da Credenciadora de cartão de crédito e/ou débito Bandeira da operad.',
				`tBand` varchar(2) NOT NULL  DEFAULT '' COMMENT 'Bandeira da operadora de cartão de crédito e/ou débito 01=Visa 02=Mastercard.',
				`cAut` varchar(20) NOT NULL  DEFAULT '' COMMENT 'Número de autorização da operação cartão de crédito e/ou débito.',
				/*</card>*/
				/*</pag>*/
				CONSTRAINT fk_pedido_pagamento FOREIGN KEY (`pedido`)
				REFERENCES nfe_pedido(`pedido`) ON DELETE CASCADE ON UPDATE CASCADE,
				PRIMARY KEY (`id`)		  
				) ENGINE=InnoDB CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='Dados do pagamento NF-e';";
			$p_sql = Conexao::getInstance()->prepare($sqlstring);
			$p_sql->execute();

		}catch (Exception $e) {
			print 'Ocorreu um erro ao tentar executar esta ação, por favor entre em contato com o suporte.';
			CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
		}
	}

	public function criaTabelaInformacoesAdicionais() {
		try {			
			$sqlstring = "CREATE TABLE IF NOT EXISTS `nfe_informacoesadicionais` (
				`id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key.',
				`pedido` varchar(14) NOT NULL  DEFAULT '' COMMENT 'Número do pedido (xPed).',
				/*Grupo de Informações Adicionais <infAdic>*/
				`infAdic` varchar(1) NOT NULL  DEFAULT '1' COMMENT 'Grupo de Informações Adicionais, 1=verdadeiro.',	
				`infAdFisco` text COMMENT 'Informações Adicionais de Interesse do Fisco até 2000 caracteres.',
				`infCpl` text COMMENT 'Informações Complementares de interesse do Contribuinte até 5000 caracteres.',
				/*Grupo Campo de uso livre do contribuinte <obsCont>*/		
				`obsCont` varchar(1) NOT NULL  DEFAULT '0' COMMENT 'Grupo Campo de uso livre do contribuinte, 1=verdadeiro.',
				`obsCont_xCampo` varchar(20) NOT NULL  DEFAULT '' COMMENT 'dentificação do campo.',
				`obsCont_xTexto` varchar(60) NOT NULL  DEFAULT '' COMMENT 'Conteúdo do campo.',
				/*</obsCont>*/
				/*Grupo Campo de uso livre do Fisco <obsFisco>*/
				`obsFisco` varchar(1) NOT NULL  DEFAULT '0' COMMENT 'Grupo Campo de uso livre do Fisco, 1=verdadeiro.',
				`obsFisco_xCampo` varchar(20) NOT NULL  DEFAULT '' COMMENT 'dentificação do campo.',
				`obsFisco_xTexto` varchar(60) NOT NULL  DEFAULT '' COMMENT 'Conteúdo do campo.',
				/*</obsFisco>*/
				/*Grupo Processo referenciado<procRef>*/
				`procRef` varchar(1) NOT NULL  DEFAULT '0' COMMENT 'Grupo Processo referenciado, 1=verdadeiro.',
				`nProc`varchar(60) NOT NULL  DEFAULT '0' COMMENT 'Identificador do processo ou ato concessório.',
				`indProc`varchar(1) NOT NULL  DEFAULT '0' COMMENT 'Indicador da origem do processo.', 
				/*</procRef>*/
				/*</infAdic>*/
				CONSTRAINT fk_pedido_informacoesadicionais FOREIGN KEY (`pedido`)
				REFERENCES nfe_pedido(`pedido`) ON DELETE CASCADE ON UPDATE CASCADE,
				PRIMARY KEY (`id`)		  
				) ENGINE=InnoDB CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='Informações adcionais NF-e';";
			$p_sql = Conexao::getInstance()->prepare($sqlstring);
			$p_sql->execute();

		}catch (Exception $e) {
			print 'Ocorreu um erro ao tentar executar esta ação, por favor entre em contato com o suporte.';
			CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
		}
	}

	/*ZA. Informações de Comércio Exterior*/
	public function criaTabelaComercioExterior() {
		try {			
			$sqlstring = "CREATE TABLE IF NOT EXISTS `nfe_comercioexterior` (
				`id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key.',
				`pedido` varchar(14) NOT NULL  DEFAULT '' COMMENT 'Número do pedido (xPed).',
				/*Grupo Exportação  <exporta>*/
				`exporta` varchar(1) NOT NULL  DEFAULT '1' COMMENT 'Grupo Exportação, 1=verdadeiro.',
				`UFSaidaPais` varchar(2) NOT NULL  DEFAULT 'RS' COMMENT 'Sigla da UF de Embarque ou de transposição de fronteira.',
				`xLocExporta` varchar(60) NOT NULL  DEFAULT '' COMMENT 'Descrição do Local de Embarque ou de transposição de fronteira.',
				`xLocDespacho` varchar(60) NOT NULL  DEFAULT '' COMMENT 'Descrição do local de despacho.',
				/*</exporta>*/
				CONSTRAINT fk_pedido_comercioexterior FOREIGN KEY (`pedido`)
				REFERENCES nfe_pedido(`pedido`) ON DELETE CASCADE ON UPDATE CASCADE,
				PRIMARY KEY (`id`)		  
				) ENGINE=InnoDB CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='Dados dos itens comercializados no exterior NF-e';";
			$p_sql = Conexao::getInstance()->prepare($sqlstring);
			$p_sql->execute();

		}catch (Exception $e) {
			print 'Ocorreu um erro ao tentar executar esta ação, por favor entre em contato com o suporte.';
			CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
		}
	}	

	/*ZA. Informações de Comércio Exterior*/
	public function criaTabelaCompras() {
		try {			
			$sqlstring = "CREATE TABLE IF NOT EXISTS `nfe_compras` (
				`id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key.',
				`pedido` varchar(14) NOT NULL  DEFAULT '' COMMENT 'Número do pedido (xPed).',
				/*<compra> Grupo Compra*/
				`xNEmp` varchar(22) DEFAULT '' COMMENT 'Nota de Empenho.',
				/*xPed mesmo que pedido*/
				`xCont` varchar(22) DEFAULT '' COMMENT 'Contrato.',
				/*</compra>*/				
				CONSTRAINT fk_pedido_compras FOREIGN KEY (`pedido`)
				REFERENCES nfe_pedido(`pedido`) ON DELETE CASCADE ON UPDATE CASCADE,
				PRIMARY KEY (`id`)		  
				) ENGINE=InnoDB CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='Dados das compras itens NF-e';";
			$p_sql = Conexao::getInstance()->prepare($sqlstring);
			$p_sql->execute();

		}catch (Exception $e) {
			print 'Ocorreu um erro ao tentar executar esta ação, por favor entre em contato com o suporte.';
			CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
		}
	}	

	public function criaTabelaAquisicaodeCana() {
		try {			
			$sqlstring = "CREATE TABLE IF NOT EXISTS `nfe_aquisicaodecana` (
				`id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key.',
				`pedido` varchar(14) NOT NULL  DEFAULT '' COMMENT 'Número do pedido (xPed).',
				/*<cana> Grupo de cana*/	
				`safra` varchar(9) DEFAULT '' COMMENT 'Identificação da safra.',				
				`ref` varchar(7) DEFAULT '' COMMENT 'Mês e ano de referência MM/AAAA.',
				/*<forDia> Fornecimento diário de cana*/
				`forDia` varchar(1) DEFAULT '0' COMMENT 'Fornecimento diário de cana, 1=verdadeiro',
				`dia` varchar(2) DEFAULT '' COMMENT 'dia.',
				`qtde` varchar(21) DEFAULT '' COMMENT 'Quabtidade.',
				/*</forDia>*/
				`qTotMes` varchar(21) DEFAULT '' COMMENT 'Quabtidade total mês.',
				`qTotAnt` varchar(21) DEFAULT '' COMMENT 'Quabtidade total anterior.',
				`qTotGer` varchar(21) DEFAULT '' COMMENT 'Quabtidade total geral.',				
				/*<deduc> Grupo Deduções – Taxas e Contribuições*/				 
				`deduc` varchar(1) DEFAULT '0' COMMENT 'Grupo Deduções – Taxas e Contribuições, 1=verdadeiro.',
				`xDed` varchar(60) DEFAULT '' COMMENT 'Descrição da Dedução.',
				`vDed` varchar(15) DEFAULT '0.00' COMMENT 'Valor da Dedução.',
				`vFor` varchar(15) DEFAULT '0.00' COMMENT 'Valor dos Fornecimentos.',
				`vTotDed` varchar(15) DEFAULT '0.00' COMMENT 'Valor Total da Dedução.',
				`vLiqFor` varchar(15) DEFAULT '0.00' COMMENT 'Valor Líquido dos Fornecimentos .',
				/*</deduc>*/
				/*</cana> */		
				CONSTRAINT fk_pedido_aquisicaodecana FOREIGN KEY (`pedido`)
				REFERENCES nfe_pedido(`pedido`) ON DELETE CASCADE ON UPDATE CASCADE,
				PRIMARY KEY (`id`)		  
				) ENGINE=InnoDB CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='aquisição de cana NF-e';";
			$p_sql = Conexao::getInstance()->prepare($sqlstring);
			$p_sql->execute();

		}catch (Exception $e) {
			print 'Ocorreu um erro ao tentar executar esta ação, por favor entre em contato com o suporte.';
			CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
		}
	}	

	public function criaTabelaAssinaturaDigital() {
		try {			
			$sqlstring = "CREATE TABLE IF NOT EXISTS `nfe_assinaturadigital` (
				`id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key.',
				`pedido` varchar(14) NOT NULL  DEFAULT '' COMMENT 'Número do pedido (xPed).',
				/*<Signature> Assinatura XML da NF-e Segundo o Padrão XML Digital Signature*/	
				`signature` varchar(70) NOT NULL  DEFAULT '' COMMENT 'Assinatura Digital.',				
				/*</Signature> */		
				CONSTRAINT fk_pedido_assinaturadigital FOREIGN KEY (`pedido`)
				REFERENCES nfe_pedido(`pedido`) ON DELETE CASCADE ON UPDATE CASCADE,
				PRIMARY KEY (`id`)		  
				) ENGINE=InnoDB  CHARSET=utf8 AUTO_INCREMENT=1 COMMENT='Assinatura digiral da NF-e';";
			$p_sql = Conexao::getInstance()->prepare($sqlstring);
			$p_sql->execute();

		}catch (Exception $e) {
			print 'Ocorreu um erro ao tentar executar esta ação, por favor entre em contato com o suporte.';
			CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
		}
	}		
	

	public function instalarTabelas() {
		$this->criaTabelaEmissor();	
		$this->criaTabelaPedido();
		$this->criaTabelaItens();
		$this->criaTabelaTotalImpostos();
		$this->criaTabelaTransporte();
		$this->criaTabelaCobranca();
		$this->criaTabelaPagamento();
		$this->criaTabelaInformacoesAdicionais();
		$this->criaTabelaComercioExterior();
		$this->criaTabelaCompras();
		$this->criaTabelaAquisicaodeCana();
		$this->criaTabelaAssinaturaDigital();	
	}


}



?>




