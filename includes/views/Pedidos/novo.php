<style type="text/css">
.span {
	padding: 10px 0px 0px 0px;
}
.nota-fiscal .span label{
	float: none;
	padding: 0px 10px 0px 0px;
}

</style>
<div id="div-cadpedido-id" class="div-cadpedido-class">
	<form id="form-cadpedido-id"  class="form-cadpedido-class" action="javascript:void(0)" >  
		<!--NOTA FISCAL -->
		<div class="nota-fiscal">                         
            <div class="span">
                    <label>Forma de Emissão</label>                
                    <select name="tpEmis" id="tpEmis">                    
                        <option value="1">Emissão Própria</option>                    
                   </select>
            </div>
            <div class="span">
                    <label>Série</label>             
                    <input type="text" name="serie" id="serie" size="3">                     
            </div>
            <div class="span">
                <label>Número da Nota</label>
                <input type="text" name="nNF" id="nNF" size="6">                
            </div>
            <div class="span">
                    <label>Natureza da Operação</label>                
                    <select name="natOp" id="natOp" class="natOp">
                        <option value=""> Selecione </option>
                        <option value="Venda de mercadorias">Venda de mercadorias</option>
                        <option value="Venda de mercadorias com ST">Venda de mercadorias com ST</option>
                        <option value="Devolução de Venda de Mercadorias">Devolução de Venda de Mercadorias</option>
                   </select>
            </div>  
            <div class="span">
                <label>Data de emissão</label>
                <input type="text" name="dhEmi" id="dEmi" size="10" value=<?php echo date('Y-m-d');?>>                
            </div>
            <div class="span">
                <label>Data de saída</label>
                <input type="text" name="dEmi" id="dhSaiEnt" size="10" value=<?php echo date('Y-m-d');?>>                
            </div>
            <div class="span">
                <label>Hora saída</label>
                <input type="text" name="dEmi" id="hour" size="10" value=<?php echo date('H:i:s');?>>                
            </div>            
        </div>
        <!--FIM NOTA FISCAL -->

        <!-- DADOS DO DESTINATARIO -->

        <div class="dados-destinatario">                        
        	<div class="span">
                <label>Nome / Razão Social</label>
                <input type="text" name="xNome" id="xNome" size="50">                
            </div> 
            <div class="span">
                <label>CPF / CNPJ</label>
                <input type="text" name="DocDest" id="DocDest" size="14">                
            </div>  
                                     
            <div class="span">
                <label>Inscrição Estadual</label>
                <input type="text" name="dIE" id="dIE" size="14">
            </div>  
            <div class="span">
                <label>Inscrição Municipal</label>
                <input type="text" name="dIM" id="dIM" size="9">
            </div>  
            <div class="span">
                <label>Inscrição na SUFRAMA</label>
                <input type="text" name="ISUF" id="ISUF" size="9">
            </div>              
        </div>      
            
        <!-- FIM DADOS DO DESTINATARIO -->

        <!-- ENDERECO DO DESTINATARIO -->
        <div class="endereco-destinatario"> 
        	<div class="span">
                <label>CEP</label>
                <input type="text" name="dCEP" id="dCEP" size="10">
            </div>

            <div class="span">
                <label>Logradouro</label>
                <input type="text" name="dxLgr" id="dxLgr" size="50">
            </div>
            
            <div class="span">
                <label>Número</label>
                <input type="text" name="dnro" id="dnro" size="10">
            </div>
            <div class="span">
                <label>Complemento</label>
                <input type="text" name="dxCpl" id="dxCpl" size="30">
            </div>
            <div class="span">
                <label>Bairro</label>
                <input type="text" name="dxBairro" id="dxBairro" size="50">
            </div>

            <div class="span">
                <label>Código do Município</label>
                <input type="text" name="dcMun" id="dcMun" size="50">
            </div>

            <div class="span">
                <label>Município</label>
                <input type="text" name="dxMun" id="dxMun" size="50">
            </div>

            <div class="span" id="uf">
                <label>UF</label>                
                <select name="dcUF" id="dcUF" class="UF">
                    <option value=""> Selecione </option>
                    <option value="12">AC</option>
                    <option value="27">AL</option>
                    <option value="13">AM</option>
                    <option value="16">AP</option>
                    <option value="29">BA</option>
                    <option value="23">CE</option>
                    <option value="53">DF</option>
                    <option value="32">ES</option>                  
                    <option value="52">GO</option>
                    <option value="21">MA</option>
                    <option value="31">MG</option>
                    <option value="50">MS</option>
                    <option value="51">MT</option>
                    <option value="15">PA</option>
                    <option value="25">PB</option>
                    <option value="26">PE</option>
                    <option value="22">PI</option>
                    <option value="41">PR</option>
                    <option value="33">RJ</option>
                    <option value="24">RN</option>
                    <option value="14">RO</option>
                    <option value="11">RR</option>
                    <option value="43">RS</option>
                    <option value="42">SC</option>
                    <option value="29">SE</option>
                    <option value="35">SP</option>
                    <option value="17">TO</option>
               </select>
            </div>             
            <div class="span">
                <label>País</label>                
                <select name="dxPais" id="dxPais" class="UF">                    
                    <option value="Brasil">Brasil</option>                    
                </select>
            </div> 
            <div class="span">
                <label>Código do País</label>                
                <select name="dcPais" id="dcPais" class="UF">                    
                    <option value="1058">1058</option>                    
               </select>
            </div>
            <div class="span">
                <label>E-mail</label>
                <input type="text" name="demail" id="demail" size="50">
            </div>  
            <div class="span">
                <label>Telefone</label>
                <input type="text" name="dfone" id="dfone" size="11">
            </div>
        </div>
        <!-- ENDERECO DO DESTINATARIO -->

    </form>
</div>