<script type="text/javascript" >
jQuery('#submit-form-id').click(function(){
  jQuery('#form-cadpedido-id').attr('action','salvar_pedido');
  jQuery('#form-cadpedido-id').submit();
});


jQuery('#addProduto').click(function(){
        nodeProduct(jQuery('.qtdnodes').length +1);
        jQuery('#qtditens').val(jQuery('.qtdnodes').length+1);        
      });         
jQuery('#dCEP').change(function() {           
       loadCepDestinatario(jQuery(this).val());       
    });

function nodeProduct(nitem){        
          var xmlhttp;     
          if (window.XMLHttpRequest){
            xmlhttp=new XMLHttpRequest();
            }      
          else{
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
          xmlhttp.onreadystatechange=function(){
            if (xmlhttp.readyState==4 && xmlhttp.status==200){        
              var node = xmlhttp.responseText; 
              jQuery(".pedidos").append(node);              
              //document.getElementById("pedidos").appendChild(node);
              
          }
        }
          xmlhttp.open("GET","../../include/php/nodeproduto.php?nitem="+nitem,true);
          xmlhttp.send();    
      }     

function loadCepDestinatario(cep){
    var xmlhttp;     
    if (window.XMLHttpRequest){
      xmlhttp=new XMLHttpRequest();
      }      
    else{
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    xmlhttp.onreadystatechange=function(){
      if (xmlhttp.readyState==4 && xmlhttp.status==200){        
        var json = JSON.parse(xmlhttp.responseText);        
        document.getElementById("dxLgr").value = json.logradouro;        
        document.getElementById("dxBairro").value = json.bairro;
        document.getElementById("dxMun").value = json.localidade;        
        document.getElementById("dcMun").value = json.ibge;
        var index = 0;
        for(var i=0; i<document.getElementById("dcUF").length; i++){
            if(document.getElementById("dcUF")[i].text == json.uf){                
                //document.getElementById("dcUF").value = document.getElementById("cUF")[i].value;                
                document.getElementById("cUF").selectedIndex = i;
                break;                
            }

        }
    }
  }
    xmlhttp.open("GET","http://viacep.com.br/ws/"+cep+"/json/",true);
    xmlhttp.send();    
}

</script>