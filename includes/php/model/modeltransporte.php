<?php

class modelTransporte {
        private $id;
	private $pedido;
	private $modFrete;
	private $transporta;
	private $CNPJ;
	private $CPF;
	private $xNome;
	private $IE;
	private $xEnder;
	private $xMun;
	private $UF;
	private $vServ;
	private $vBCRet;
	private $pICMSRet;
	private $vICMSRet;
	private $CFOP;
	private $cMunFG;
	private $veicTransp;
	private $veicTransp_placa;
	private $veicTransp_UF;
	private $veicTransp_RNTC;
	private $reboque;
	private $reboque_placa;
	private $reboque_UF;
	private $reboque_RNTC;
	private $reboque_vagao;
	private $reboque_balsa;
	private $vol;
	private $qVol;
	private $esp;
	private $marca;
	private $nVol;
	private $pesoL;
	private $pesoB;
	private $lacres;
	private $nLacre;
        
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

	public function getModFrete(){
		return $this->modFrete;
	}

	public function setModFrete($modFrete){
		$this->modFrete = $modFrete;
	}

	public function getTransporta(){
		return $this->transporta;
	}

	public function setTransporta($transporta){
		$this->transporta = $transporta;
	}

	public function getCNPJ(){
		return $this->CNPJ;
	}

	public function setCNPJ($CNPJ){
		$this->CNPJ = $CNPJ;
	}

	public function getCPF(){
		return $this->CPF;
	}

	public function setCPF($CPF){
		$this->CPF = $CPF;
	}

	public function getXNome(){
		return $this->xNome;
	}

	public function setXNome($xNome){
		$this->xNome = $xNome;
	}

	public function getIE(){
		return $this->IE;
	}

	public function setIE($IE){
		$this->IE = $IE;
	}

	public function getXEnder(){
		return $this->xEnder;
	}

	public function setXEnder($xEnder){
		$this->xEnder = $xEnder;
	}

	public function getXMun(){
		return $this->xMun;
	}

	public function setXMun($xMun){
		$this->xMun = $xMun;
	}

	public function getUF(){
		return $this->UF;
	}

	public function setUF($UF){
		$this->UF = $UF;
	}

	public function getVServ(){
		return $this->vServ;
	}

	public function setVServ($vServ){
		$this->vServ = $vServ;
	}

	public function getVBCRet(){
		return $this->vBCRet;
	}

	public function setVBCRet($vBCRet){
		$this->vBCRet = $vBCRet;
	}

	public function getPICMSRet(){
		return $this->pICMSRet;
	}

	public function setPICMSRet($pICMSRet){
		$this->pICMSRet = $pICMSRet;
	}

	public function getVICMSRet(){
		return $this->vICMSRet;
	}

	public function setVICMSRet($vICMSRet){
		$this->vICMSRet = $vICMSRet;
	}

	public function getCFOP(){
		return $this->CFOP;
	}

	public function setCFOP($CFOP){
		$this->CFOP = $CFOP;
	}

	public function getCMunFG(){
		return $this->cMunFG;
	}

	public function setCMunFG($cMunFG){
		$this->cMunFG = $cMunFG;
	}

	public function getVeicTransp(){
		return $this->veicTransp;
	}

	public function setVeicTransp($veicTransp){
		$this->veicTransp = $veicTransp;
	}

	public function getVeicTransp_placa(){
		return $this->veicTransp_placa;
	}

	public function setVeicTransp_placa($veicTransp_placa){
		$this->veicTransp_placa = $veicTransp_placa;
	}

	public function getVeicTransp_UF(){
		return $this->veicTransp_UF;
	}

	public function setVeicTransp_UF($veicTransp_UF){
		$this->veicTransp_UF = $veicTransp_UF;
	}

	public function getVeicTransp_RNTC(){
		return $this->veicTransp_RNTC;
	}

	public function setVeicTransp_RNTC($veicTransp_RNTC){
		$this->veicTransp_RNTC = $veicTransp_RNTC;
	}

	public function getReboque(){
		return $this->reboque;
	}

	public function setReboque($reboque){
		$this->reboque = $reboque;
	}

	public function getReboque_placa(){
		return $this->reboque_placa;
	}

	public function setReboque_placa($reboque_placa){
		$this->reboque_placa = $reboque_placa;
	}

	public function getReboque_UF(){
		return $this->reboque_UF;
	}

	public function setReboque_UF($reboque_UF){
		$this->reboque_UF = $reboque_UF;
	}

	public function getReboque_RNTC(){
		return $this->reboque_RNTC;
	}

	public function setReboque_RNTC($reboque_RNTC){
		$this->reboque_RNTC = $reboque_RNTC;
	}

	public function getReboque_vagao(){
		return $this->reboque_vagao;
	}

	public function setReboque_vagao($reboque_vagao){
		$this->reboque_vagao = $reboque_vagao;
	}

	public function getReboque_balsa(){
		return $this->reboque_balsa;
	}

	public function setReboque_balsa($reboque_balsa){
		$this->reboque_balsa = $reboque_balsa;
	}

	public function getVol(){
		return $this->vol;
	}

	public function setVol($vol){
		$this->vol = $vol;
	}

	public function getQVol(){
		return $this->qVol;
	}

	public function setQVol($qVol){
		$this->qVol = $qVol;
	}

	public function getEsp(){
		return $this->esp;
	}

	public function setEsp($esp){
		$this->esp = $esp;
	}

	public function getMarca(){
		return $this->marca;
	}

	public function setMarca($marca){
		$this->marca = $marca;
	}

	public function getNVol(){
		return $this->nVol;
	}

	public function setNVol($nVol){
		$this->nVol = $nVol;
	}

	public function getPesoL(){
		return $this->pesoL;
	}

	public function setPesoL($pesoL){
		$this->pesoL = $pesoL;
	}

	public function getPesoB(){
		return $this->pesoB;
	}

	public function setPesoB($pesoB){
		$this->pesoB = $pesoB;
	}

	public function getLacres(){
		return $this->lacres;
	}

	public function setLacres($lacres){
		$this->lacres = $lacres;
	}

	public function getNLacre(){
		return $this->nLacre;
	}

	public function setNLacre($nLacre){
		$this->nLacre = $nLacre;
	}
}