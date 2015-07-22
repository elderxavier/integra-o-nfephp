<?php 
require_once('conexao.php');
require_once('crialog.php');
class InstalaDB { 

	private function __construct() { 
	
	
	}
	/* tabela nfe_emissor*/
	public function criaTabelaEmissor() {
		try {
		$sqlstring = "CREATE TABLE IF NOT EXISTS `nfe_emissor` (
		  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key.',
		  `CNPJ` varchar(14) NOT NULL DEFAULT '' COMMENT 'número do CNPJ da empresa emissora',
		  `xNome` varchar(60) NOT NULL DEFAULT '' COMMENT 'nome da empresa emissora',		  
		  `xFant` varchar(60)  '' COMMENT 'nome fantasia da empresa emissora',
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
		  PRIMARY KEY (`id`)		  
		) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='dados do emitente da NF-e';";

		$p_sql = Conexao::getInstance()->prepare($sqlstring);
		$p_sql->execute();
		}catch (Exception $e) {
			print 'Ocorreu um erro ao tentar executar esta ação, por favor entre em contato com o suporte.';
			CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
		}finally {
			$p_sql = null;
		}
	}
	/* tabela nfe_destinatario*/
	public function criaTabelaPedido() {
		try {
		$sqlstring = "CREATE TABLE IF NOT EXISTS `nfe_pedido` (
		  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key.',
		  `pedido` varchar(14) NOT NULL  COMMENT 'Número do pedido.',
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

		  UNIQUE (`pedido`),
		  PRIMARY KEY (`id`)		  
		) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Dados do destinatario da NF-e';";

		$p_sql = Conexao::getInstance()->prepare($sqlstring);
		$p_sql->execute();
		}catch (Exception $e) {
			print 'Ocorreu um erro ao tentar executar esta ação, por favor entre em contato com o suporte.';
			CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
		}finally {
			$p_sql = null;
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
				CONSTRAINT fk_pedido FOREIGN KEY (pedido),
				REFERENCES nfe_pedido(pedido),			
				PRIMARY KEY (`id`)		  
				) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Dados dos itens NF-e';";

			$p_sql = Conexao::getInstance()->prepare($sqlstring);
			$p_sql->execute();

		}catch (Exception $e) {
			print 'Ocorreu um erro ao tentar executar esta ação, por favor entre em contato com o suporte.';
			CriaLog::Logger('Erro: Código: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage()); 
		}finally {
			$p_sql = null;
		}	

} 
?>


