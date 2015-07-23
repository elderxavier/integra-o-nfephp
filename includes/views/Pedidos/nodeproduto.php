	<?php //echo $_REQUEST['nitem']?>	
	<h3>ITEM <?php echo $_REQUEST['nitem']?></h3>
	<div class="nodepedidos-<?php echo $_REQUEST['nitem']?> qtdnodes">
		<div>
			 <label>Descrição</label>
            <input type="text" name="prodDesc-<?php echo $_REQUEST['nitem']?>" id="prodDesc" size="30"> 
            <label>Código</label>
            <input type="text" name="prodCod" id="prodCod" size="30"> 
            <label>Tipo</label>
            <input type="text" name="prodCod" id="prodCod" size="30"> 		
		</div>
		<div class="content">
		  <div class="tabs-content">
		    <div class="tabs-menu clearfix">
		      <ul>
		        <li><a class="active-tab-menu" href="#" data-tab="tab1-<?php echo $_REQUEST['nitem']?>">Dados do Item</a></li>
		        <li><a href="#" data-tab="tab2-<?php echo $_REQUEST['nitem']?>" class="">Simples</a></li>
		        <li><a href="#" data-tab="tab3-<?php echo $_REQUEST['nitem']?>" class="">IPI</a></li>
		        <li><a href="#" data-tab="tab4-<?php echo $_REQUEST['nitem']?>" class="">PIS</a></li>
		        <li><a href="#" data-tab="tab5-<?php echo $_REQUEST['nitem']?>" class="">COFINS</a></li>		        
		      </ul>
		    </div>
			<div class="tab1-<?php echo $_REQUEST['nitem']?> tabs first-tab" style="">				
            	<label>CFOP</label>
            	<input type="text" name="prodCFOP-<?php echo $_REQUEST['nitem']?>" id="prodCFOP-<?php echo $_REQUEST['nitem']?>" size="30"> 
            	<label>NCM</label>
            	<input type="text" name="prodNCM-<?php echo $_REQUEST['nitem']?>" id="prodNCM-<?php echo $_REQUEST['nitem']?>" size="30"> 
            	<label>Quantidade</label>
            	<input type="text" name="prodQtd-<?php echo $_REQUEST['nitem']?>" id="prodQtd-<?php echo $_REQUEST['nitem']?>" size="10"> 
            	<label>Unidade</label>
            	<input type="text" name="prodUnidade-<?php echo $_REQUEST['nitem']?>" id="prodUnidade-<?php echo $_REQUEST['nitem']?>" size="10"> 
            	<label>Valor Unitário</label>
            	<input type="text" name="prodValoruni-<?php echo $_REQUEST['nitem']?>" id="prodValoruni-<?php echo $_REQUEST['nitem']?>" size="10"> 
            	<label>Valor Total</label>
            	<input type="text" name="prodValortotal-<?php echo $_REQUEST['nitem']?>" id="prodValortotal-<?php echo $_REQUEST['nitem']?>" size="10"> 
            	<label>GTIN/EAN</label>
            	<input type="text" name="prodEAN-<?php echo $_REQUEST['nitem']?>" id="prodEAN-<?php echo $_REQUEST['nitem']?>" size="30"> 
            	<label>GTIN/EAN embalagem</label>
            	<input type="text" name="prodEANemb-<?php echo $_REQUEST['nitem']?>" id="prodEANemb-<?php echo $_REQUEST['nitem']?>" size="30">            		
			</div>	
			<div class="tab2-<?php echo $_REQUEST['nitem']?> tabs" style="display: none;">
				<label>Código de Situação da Operação – Simples Nacional (CSOSN)</label>                
                <select name="prodCSOSN-<?php echo $_REQUEST['nitem']?>" id="prodSCOSN-<?php echo $_REQUEST['nitem']?>">
                    <option value="Selecione">Selecione</option>
					<option value="101" selected="">101 - Tributada com permissão de crédito</option>
					<option value="102">102 - Tributada sem permissão de crédito</option>
					<option value="103">103 - Isenção do ICMS para faixa de receita bruta</option>
					<option value="201">201 - Tributada com permissão de crédito e com cobrança do ICMS por ST</option>
					<option value="202">202 - Tributada sem permissão de crédito e com cobrança do ICMS por ST</option>
					<option value="203">203 - Isenção do ICMS para faixa de receita bruta e com cobrança do ICMS por ST</option>
					<option value="300">300 - Imune</option><option value="400">400 - Não tributada</option>
					<option value="500">500 - ICMS cobrado anteriormente por ST ou por antecipação</option>
					<option value="900">900 - Outros</option>
               </select>
               <label>Origem</label>                
               <select name="prodorig-<?php echo $_REQUEST['nitem']?>" id="prodorig-<?php echo $_REQUEST['nitem']?>">
               		<option value=""> </option>
					<option value="0">Nacional, exceto as indicadas nos códigos 3 a 5</option>
					<option value="1">Estrangeira - Importação direta, exceto a indicada no código 6</option>
					<option value="2">Estrangeira - Adquirida no mercado interno, exceto a indicada no código 7</option>
					<option value="3">Nacional, mercadoria ou bem com Conteúdo de Importação superior a 40%</option>
					<option value="4">Nacional, cuja produção tenha sido feita em conformidade com os processos produtivos básicos de que tratam as legislações citadas nos Ajustes</option>
					<option value="5">Nacional, mercadoria ou bem com Conteúdo de Importação inferior ou igual a 40%</option>
					<option value="6">Estrangeira - Importação direta, sem similar nacional, constante em lista da CAMEX</option>
					<option value="7">Estrangeira - Adquirida no mercado interno, sem similar nacional, constante em lista da CAMEX</option>
               </select>
               	<label>% Aplicável de Crédito</label>
            	<input type="text" name="prodpCredSNP-<?php echo $_REQUEST['nitem']?>" id="prodpCredSNP-<?php echo $_REQUEST['nitem']?>" size="10"> 
            	<label>Valor Aplicável de Crédito</label>
            	<input type="text" name="prodpCredSN-<?php echo $_REQUEST['nitem']?>" id="prodpCredSN-<?php echo $_REQUEST['nitem']?>" size="10"> 
			</div>	

			<div class="tab3-<?php echo $_REQUEST['nitem']?> tabs" style="display: none;">
				<label>Situação tributária do IPI</label>
				<select name="prodCST-<?php echo $_REQUEST['nitem']?>" id="prodCST-<?php echo $_REQUEST['nitem']?>">
					<option value="Selecione">Selecione</option><option value="50">50 - Saída tributada</option>
					<option value="51">51 - Saída tributada com alíquota zero</option>
					<option value="52">52 - Saída isenta</option>
					<option value="53">53 - Saída não-tributada</option>
					<option value="54">54 - Saída imune</option><option value="55">55 - Saída com suspensão</option>
					<option value="99" selected="">99 - Outras saídas</option>
				</select>
				<label>Alíq. IPI</label>
            	<input type="text" name="prodpIPI-<?php echo $_REQUEST['nitem']?>" id="prodpIPI-<?php echo $_REQUEST['nitem']?>" size="10"> 
            	<label>Valor IPI</label>
            	<input type="text" name="prodvIPI-<?php echo $_REQUEST['nitem']?>" id="prodvIPI-<?php echo $_REQUEST['nitem']?>" size="10">
			</div>	
			<div class="tab4-<?php echo $_REQUEST['nitem']?> tabs" style="display: none;">
				<label>Situação tributária do PIS</label>
				<select name="prodPISCST-<?php echo $_REQUEST['nitem']?>" id="prodPISCST-<?php echo $_REQUEST['nitem']?>">
					<option value="Selecione">Selecione</option><option value="49">49 - Outras Operações de Saída</option>
					<option value="50">50 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita Tributada no Mercado Interno</option>
					<option value="51">51 - Operação com Direito a Crédito – Vinculada Exclusivamente a Receita Não Tributada no Mercado Interno</option>
					<option value="52">52 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita de Exportação</option>
					<option value="53">53 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno</option>
					<option value="54">54 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas no Mercado Interno e de Exportação</option>
					<option value="55">55 - Operação com Direito a Crédito - Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação</option>
					<option value="56">56 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação</option>
					<option value="60">60 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Tributada no Mercado Interno</option>
					<option value="61">61 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Não-Tributada no Mercado Interno</option>
					<option value="62">62 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita de Exportação</option>
					<option value="63">63 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno</option>
					<option value="64">64 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas no Mercado Interno e de Exportação</option>
					<option value="65">65 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação</option>
					<option value="66">66 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação</option>
					<option value="67">67 - Crédito Presumido - Outras Operações</option><option value="70">70 - Operação de Aquisição sem Direito a Crédito</option>
					<option value="71">71 - Operação de Aquisição com Isenção</option><option value="72">72 - Operação de Aquisição com Suspensão</option>
					<option value="73">73 - Operação de Aquisição a Alíquota Zero</option><option value="74">74 - Operação de Aquisição sem Incidência da Contribuição</option>
					<option value="75">75 - Operação de Aquisição por Substituição Tributária</option><option value="98">98 - Outras Operações de Entrada</option>
					<option value="99" selected="">99 - Outras operações</option><option value="01">01 - Operação tributável (alíquota normal, cumulativo ou não)</option>
					<option value="02">02 - Operação tributável (alíquota diferenciada)</option>
					<option value="03">03 - Operação tributável (alíquota por unidade de produto)</option>
					<option value="04">04 - Operação tributável (tributação monofásica, alíquota zero)</option><option value="05">05 - Operação Tributável (substituição tributária)</option>
					<option value="06">06 - Operação tributável (alíquota zero)</option>
					<option value="07">07 - Operação isenta da contribuição</option>
					<option value="08">08 - Operação sem incidência da contribuição</option>
					<option value="09">09 - Operação com suspensão da contribuição</option>
				</select>
				<label>% Base PIS</label>
            	<input type="text" name="prodPISPvBC-<?php echo $_REQUEST['nitem']?>" id="prodPISPvBC-<?php echo $_REQUEST['nitem']?>" size="10">
            	<label>Valor Base PIS</label>
            	<input type="text" name="prodPISvBC-<?php echo $_REQUEST['nitem']?>" id="prodPISvBC-<?php echo $_REQUEST['nitem']?>" size="10">
            	<label>Alíq. PIS</label>
            	<input type="text" name="prodpPIS-<?php echo $_REQUEST['nitem']?>" id="prodpPIS-<?php echo $_REQUEST['nitem']?>" size="10">
            	<label>Valor PIS</label>
            	<input type="text" name="prodvPIS-<?php echo $_REQUEST['nitem']?>" id="prodvPIS-<?php echo $_REQUEST['nitem']?>" size="10">				
			</div>	
			<div class="tab5-<?php echo $_REQUEST['nitem']?> tabs" style="display: none;">
				<label>Situação tributária do COFINS</label>
				<select name="prodCOFINSCST-<?php echo $_REQUEST['nitem']?>" id="prodCOFINSCST-<?php echo $_REQUEST['nitem']?>">
					<option value="Selecione">Selecione</option><option value="49">49 - Outras Operações de Saída</option>
					<option value="50">50 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita Tributada no Mercado Interno</option>
					<option value="51">51 - Operação com Direito a Crédito – Vinculada Exclusivamente a Receita Não Tributada no Mercado Interno</option>
					<option value="52">52 - Operação com Direito a Crédito - Vinculada Exclusivamente a Receita de Exportação</option>
					<option value="53">53 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno</option>
					<option value="54">54 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas no Mercado Interno e de Exportação</option>
					<option value="55">55 - Operação com Direito a Crédito - Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação</option>
					<option value="56">56 - Operação com Direito a Crédito - Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação</option>
					<option value="60">60 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Tributada no Mercado Interno</option>
					<option value="61">61 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita Não-Tributada no Mercado Interno</option>
					<option value="62">62 - Crédito Presumido - Operação de Aquisição Vinculada Exclusivamente a Receita de Exportação</option>
					<option value="63">63 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno</option>
					<option value="64">64 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas no Mercado Interno e de Exportação</option>
					<option value="65">65 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Não-Tributadas no Mercado Interno e de Exportação</option>
					<option value="66">66 - Crédito Presumido - Operação de Aquisição Vinculada a Receitas Tributadas e Não-Tributadas no Mercado Interno, e de Exportação</option>
					<option value="67">67 - Crédito Presumido - Outras Operações</option><option value="70">70 - Operação de Aquisição sem Direito a Crédito</option>
					<option value="71">71 - Operação de Aquisição com Isenção</option><option value="72">72 - Operação de Aquisição com Suspensão</option>
					<option value="73">73 - Operação de Aquisição a Alíquota Zero</option><option value="74">74 - Operação de Aquisição sem Incidência da Contribuição</option>
					<option value="75">75 - Operação de Aquisição por Substituição Tributária</option><option value="98">98 - Outras Operações de Entrada</option>
					<option value="99" selected="">99 - Outras operações</option><option value="01">01 - Operação tributável (alíquota normal, cumulativo ou não)</option>
					<option value="02">02 - Operação tributável (alíquota diferenciada)</option>
					<option value="03">03 - Operação tributável (alíquota por unidade de produto)</option>
					<option value="04">04 - Operação tributável (tributação monofásica, alíquota zero)</option><option value="05">05 - Operação Tributável (substituição tributária)</option>
					<option value="06">06 - Operação tributável (alíquota zero)</option>
					<option value="07">07 - Operação isenta da contribuição</option>
					<option value="08">08 - Operação sem incidência da contribuição</option>
					<option value="09">09 - Operação com suspensão da contribuição</option>
				</select>
				<label>% Base COFINS</label>
            	<input type="text" name="prodCOFINSPvBC-<?php echo $_REQUEST['nitem']?>" id="prodCOFINSPvBC-<?php echo $_REQUEST['nitem']?>" size="10">
            	<label>Valor Base COFINS</label>
            	<input type="text" name="prodCOFINSvBC-<?php echo $_REQUEST['nitem']?>" id="prodCOFINSvBC-<?php echo $_REQUEST['nitem']?>" size="10">
            	<label>Alíq. COFINS</label>
            	<input type="text" name="prodpCOFINS-<?php echo $_REQUEST['nitem']?>" id="prodpCOFINS-<?php echo $_REQUEST['nitem']?>" size="10">
            	<label>Valor COFINS</label>
            	<input type="text" name="prodvCOFINS-<?php echo $_REQUEST['nitem']?>" id="prodvCOFINS-<?php echo $_REQUEST['nitem']?>" size="10">				
			</div>	
			
		</div> 
	</div>	
   </div>

   <script type="text/javascript">   
	jQuery('.nodepedidos-<?php echo $_REQUEST['nitem']?> .tabs-menu ul li a').click(function(){
		var a = jQuery(this);			   
		var active_tab_class = 'active-tab-menu';			   
			    var the_tab = '.' + a.attr('data-tab');			   
			    jQuery('.nodepedidos-<?php echo $_REQUEST['nitem']?> .tabs-menu ul li a').removeClass(active_tab_class);			   
			    a.addClass(active_tab_class);			   
			    jQuery('.nodepedidos-<?php echo $_REQUEST['nitem']?> .tabs-content .tabs').css({
			      'display' : 'none'
			    });			   
			    jQuery(the_tab).show();			   
			    return false;

		alert(<?php echo $_REQUEST['nitem']?>);
	});
   </script>