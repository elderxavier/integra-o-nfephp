<?php
class modelTotalImpostos {
    private $id;
    private $pedido;
    private $ICMSTot;
    private $ICMSTot_vBC;
    private $ICMSTot_vICMS;
    private $ICMSTot_vICMSDeson;
    private $ICMSTot_vBCST;
    private $ICMSTot_vST;
    private $ICMSTot_vProd;
    private $ICMSTot_vFrete;
    private $ICMSTot_vSeg;
    private $ICMSTot_vDesc;
    private $ICMSTot_vII;
    private $ICMSTot_vIPI;
    private $ICMSTot_vPIS;
    private $ICMSTot_vCOFINS;
    private $ICMSTot_vOutro;
    private $ICMSTot_vNF;
    private $ICMSTot_vTotTrib;
    private $ISSQNtot;
    private $ISSQN_vServ;
    private $ISSQN_vBC;
    private $ISSQN_vISS;
    private $ISSQN_vPIS;
    private $ISSQN_vCOFINS;
    private $ISSQN_dCompet;
    private $ISSQN_vDeducao;
    private $ISSQN_vOutro;
    private $ISSQN_vDescIncond;
    private $ISSQN_vDescCond;
    private $ISSQN_vISSRet;
    private $ISSQN_cRegTrib;
    private $retTrib;
    private $retTrib_vRetPIS;
    private $retTrib_vRetCOFINS;
    private $retTrib_vRetCSLL;
    private $retTrib_vBCIRRF;
    private $retTrib_vBCRetPrev;
    private $retTrib_vRetPrev;
    
    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getPedido(){
		return $this->pedido;
	}

	public function setPedido($pedido){
		$this->pedido = $pedido;
	}

	public function getICMSTot(){
		return $this->ICMSTot;
	}

	public function setICMSTot($ICMSTot){
		$this->ICMSTot = $ICMSTot;
	}

	public function getICMSTot_vBC(){
		return $this->ICMSTot_vBC;
	}

	public function setICMSTot_vBC($ICMSTot_vBC){
		$this->ICMSTot_vBC = $ICMSTot_vBC;
	}

	public function getICMSTot_vICMS(){
		return $this->ICMSTot_vICMS;
	}

	public function setICMSTot_vICMS($ICMSTot_vICMS){
		$this->ICMSTot_vICMS = $ICMSTot_vICMS;
	}

	public function getICMSTot_vICMSDeson(){
		return $this->ICMSTot_vICMSDeson;
	}

	public function setICMSTot_vICMSDeson($ICMSTot_vICMSDeson){
		$this->ICMSTot_vICMSDeson = $ICMSTot_vICMSDeson;
	}

	public function getICMSTot_vBCST(){
		return $this->ICMSTot_vBCST;
	}

	public function setICMSTot_vBCST($ICMSTot_vBCST){
		$this->ICMSTot_vBCST = $ICMSTot_vBCST;
	}

	public function getICMSTot_vST(){
		return $this->ICMSTot_vST;
	}

	public function setICMSTot_vST($ICMSTot_vST){
		$this->ICMSTot_vST = $ICMSTot_vST;
	}

	public function getICMSTot_vProd(){
		return $this->ICMSTot_vProd;
	}

	public function setICMSTot_vProd($ICMSTot_vProd){
		$this->ICMSTot_vProd = $ICMSTot_vProd;
	}

	public function getICMSTot_vFrete(){
		return $this->ICMSTot_vFrete;
	}

	public function setICMSTot_vFrete($ICMSTot_vFrete){
		$this->ICMSTot_vFrete = $ICMSTot_vFrete;
	}

	public function getICMSTot_vSeg(){
		return $this->ICMSTot_vSeg;
	}

	public function setICMSTot_vSeg($ICMSTot_vSeg){
		$this->ICMSTot_vSeg = $ICMSTot_vSeg;
	}

	public function getICMSTot_vDesc(){
		return $this->ICMSTot_vDesc;
	}

	public function setICMSTot_vDesc($ICMSTot_vDesc){
		$this->ICMSTot_vDesc = $ICMSTot_vDesc;
	}

	public function getICMSTot_vII(){
		return $this->ICMSTot_vII;
	}

	public function setICMSTot_vII($ICMSTot_vII){
		$this->ICMSTot_vII = $ICMSTot_vII;
	}

	public function getICMSTot_vIPI(){
		return $this->ICMSTot_vIPI;
	}

	public function setICMSTot_vIPI($ICMSTot_vIPI){
		$this->ICMSTot_vIPI = $ICMSTot_vIPI;
	}

	public function getICMSTot_vPIS(){
		return $this->ICMSTot_vPIS;
	}

	public function setICMSTot_vPIS($ICMSTot_vPIS){
		$this->ICMSTot_vPIS = $ICMSTot_vPIS;
	}

	public function getICMSTot_vCOFINS(){
		return $this->ICMSTot_vCOFINS;
	}

	public function setICMSTot_vCOFINS($ICMSTot_vCOFINS){
		$this->ICMSTot_vCOFINS = $ICMSTot_vCOFINS;
	}

	public function getICMSTot_vOutro(){
		return $this->ICMSTot_vOutro;
	}

	public function setICMSTot_vOutro($ICMSTot_vOutro){
		$this->ICMSTot_vOutro = $ICMSTot_vOutro;
	}

	public function getICMSTot_vNF(){
		return $this->ICMSTot_vNF;
	}

	public function setICMSTot_vNF($ICMSTot_vNF){
		$this->ICMSTot_vNF = $ICMSTot_vNF;
	}

	public function getICMSTot_vTotTrib(){
		return $this->ICMSTot_vTotTrib;
	}

	public function setICMSTot_vTotTrib($ICMSTot_vTotTrib){
		$this->ICMSTot_vTotTrib = $ICMSTot_vTotTrib;
	}

	public function getISSQNtot(){
		return $this->ISSQNtot;
	}

	public function setISSQNtot($ISSQNtot){
		$this->ISSQNtot = $ISSQNtot;
	}

	public function getISSQN_vServ(){
		return $this->ISSQN_vServ;
	}

	public function setISSQN_vServ($ISSQN_vServ){
		$this->ISSQN_vServ = $ISSQN_vServ;
	}

	public function getISSQN_vBC(){
		return $this->ISSQN_vBC;
	}

	public function setISSQN_vBC($ISSQN_vBC){
		$this->ISSQN_vBC = $ISSQN_vBC;
	}

	public function getISSQN_vISS(){
		return $this->ISSQN_vISS;
	}

	public function setISSQN_vISS($ISSQN_vISS){
		$this->ISSQN_vISS = $ISSQN_vISS;
	}

	public function getISSQN_vPIS(){
		return $this->ISSQN_vPIS;
	}

	public function setISSQN_vPIS($ISSQN_vPIS){
		$this->ISSQN_vPIS = $ISSQN_vPIS;
	}

	public function getISSQN_vCOFINS(){
		return $this->ISSQN_vCOFINS;
	}

	public function setISSQN_vCOFINS($ISSQN_vCOFINS){
		$this->ISSQN_vCOFINS = $ISSQN_vCOFINS;
	}

	public function getISSQN_dCompet(){
		return $this->ISSQN_dCompet;
	}

	public function setISSQN_dCompet($ISSQN_dCompet){
		$this->ISSQN_dCompet = $ISSQN_dCompet;
	}

	public function getISSQN_vDeducao(){
		return $this->ISSQN_vDeducao;
	}

	public function setISSQN_vDeducao($ISSQN_vDeducao){
		$this->ISSQN_vDeducao = $ISSQN_vDeducao;
	}

	public function getISSQN_vOutro(){
		return $this->ISSQN_vOutro;
	}

	public function setISSQN_vOutro($ISSQN_vOutro){
		$this->ISSQN_vOutro = $ISSQN_vOutro;
	}

	public function getISSQN_vDescIncond(){
		return $this->ISSQN_vDescIncond;
	}

	public function setISSQN_vDescIncond($ISSQN_vDescIncond){
		$this->ISSQN_vDescIncond = $ISSQN_vDescIncond;
	}

	public function getISSQN_vDescCond(){
		return $this->ISSQN_vDescCond;
	}

	public function setISSQN_vDescCond($ISSQN_vDescCond){
		$this->ISSQN_vDescCond = $ISSQN_vDescCond;
	}

	public function getISSQN_vISSRet(){
		return $this->ISSQN_vISSRet;
	}

	public function setISSQN_vISSRet($ISSQN_vISSRet){
		$this->ISSQN_vISSRet = $ISSQN_vISSRet;
	}

	public function getISSQN_cRegTrib(){
		return $this->ISSQN_cRegTrib;
	}

	public function setISSQN_cRegTrib($ISSQN_cRegTrib){
		$this->ISSQN_cRegTrib = $ISSQN_cRegTrib;
	}

	public function getRetTrib(){
		return $this->retTrib;
	}

	public function setRetTrib($retTrib){
		$this->retTrib = $retTrib;
	}

	public function getRetTrib_vRetPIS(){
		return $this->retTrib_vRetPIS;
	}

	public function setRetTrib_vRetPIS($retTrib_vRetPIS){
		$this->retTrib_vRetPIS = $retTrib_vRetPIS;
	}

	public function getRetTrib_vRetCOFINS(){
		return $this->retTrib_vRetCOFINS;
	}

	public function setRetTrib_vRetCOFINS($retTrib_vRetCOFINS){
		$this->retTrib_vRetCOFINS = $retTrib_vRetCOFINS;
	}

	public function getRetTrib_vRetCSLL(){
		return $this->retTrib_vRetCSLL;
	}

	public function setRetTrib_vRetCSLL($retTrib_vRetCSLL){
		$this->retTrib_vRetCSLL = $retTrib_vRetCSLL;
	}

	public function getRetTrib_vBCIRRF(){
		return $this->retTrib_vBCIRRF;
	}

	public function setRetTrib_vBCIRRF($retTrib_vBCIRRF){
		$this->retTrib_vBCIRRF = $retTrib_vBCIRRF;
	}

	public function getRetTrib_vBCRetPrev(){
		return $this->retTrib_vBCRetPrev;
	}

	public function setRetTrib_vBCRetPrev($retTrib_vBCRetPrev){
		$this->retTrib_vBCRetPrev = $retTrib_vBCRetPrev;
	}

	public function getRetTrib_vRetPrev(){
		return $this->retTrib_vRetPrev;
	}

	public function setRetTrib_vRetPrev($retTrib_vRetPrev){
		$this->retTrib_vRetPrev = $retTrib_vRetPrev;
	}
}
