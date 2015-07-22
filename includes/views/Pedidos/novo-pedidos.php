<style type="text/css">
			.tabs-content {
			  background: #eee;
			  font-family: sans-serif;
			}

				.tabs-menu {
				  background: #a6a6a6;
				}
				.tabs-menu ul {
				   list-style: none;
				}
				.tabs-menu ul li {
				  float: left;
				}
				.tabs-menu ul li a {
				  display: block;
				  padding: 10px 20px;
				  text-decoration: none;
				  font-weight: 700;
				  text-transform: uppercase;
				  letter-spacing: 0.08em;
				  color: #fff;
				}
				.tabs-menu ul li a.active-tab-menu {
				  background: #eee;
				  color: #000;
				}

				.tabs {
				  display: none;
				  padding: 30px;
				}
				.first-tab {
				  display: block;
				}
				.qtdnodes{
					border: 1px solid #a0a0a0;
  					padding: 10px;
  					margin: 10px 0px 10px 0px;
				}
		</style>

<div class="pedidos" id= "pedidos">
	<button id="addProduto"> adicionar itens</button>
</div>
		<script type="text/javascript">			
			jQuery('#addProduto').click(function(){
				nodeProduct(jQuery('.qtdnodes').length +1); 
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

		</script>