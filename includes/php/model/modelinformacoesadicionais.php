<?php

class modelInformacoesAdicionais{
    	private $id;
	private $pedido;
	private $infAdic;
	private $infAdFisco;
	private $infCpl;
	private $obsCont;
	private $obsCont_xCampo;
	private $obsCont_xTexto;
	private $obsFisco;
	private $obsFisco_xCampo;
	private $obsFisco_xTexto;
	private $procRef;
	private $nProc;
	private $indProc;
        
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

	public function getInfAdic(){
		return $this->infAdic;
	}

	public function setInfAdic($infAdic){
		$this->infAdic = $infAdic;
	}

	public function getInfAdFisco(){
		return $this->infAdFisco;
	}

	public function setInfAdFisco($infAdFisco){
		$this->infAdFisco = $infAdFisco;
	}

	public function getInfCpl(){
		return $this->infCpl;
	}

	public function setInfCpl($infCpl){
		$this->infCpl = $infCpl;
	}

	public function getObsCont(){
		return $this->obsCont;
	}

	public function setObsCont($obsCont){
		$this->obsCont = $obsCont;
	}

	public function getObsCont_xCampo(){
		return $this->obsCont_xCampo;
	}

	public function setObsCont_xCampo($obsCont_xCampo){
		$this->obsCont_xCampo = $obsCont_xCampo;
	}

	public function getObsCont_xTexto(){
		return $this->obsCont_xTexto;
	}

	public function setObsCont_xTexto($obsCont_xTexto){
		$this->obsCont_xTexto = $obsCont_xTexto;
	}

	public function getObsFisco(){
		return $this->obsFisco;
	}

	public function setObsFisco($obsFisco){
		$this->obsFisco = $obsFisco;
	}

	public function getObsFisco_xCampo(){
		return $this->obsFisco_xCampo;
	}

	public function setObsFisco_xCampo($obsFisco_xCampo){
		$this->obsFisco_xCampo = $obsFisco_xCampo;
	}

	public function getObsFisco_xTexto(){
		return $this->obsFisco_xTexto;
	}

	public function setObsFisco_xTexto($obsFisco_xTexto){
		$this->obsFisco_xTexto = $obsFisco_xTexto;
	}

	public function getProcRef(){
		return $this->procRef;
	}

	public function setProcRef($procRef){
		$this->procRef = $procRef;
	}

	public function getNProc(){
		return $this->nProc;
	}

	public function setNProc($nProc){
		$this->nProc = $nProc;
	}

	public function getIndProc(){
		return $this->indProc;
	}

	public function setIndProc($indProc){
		$this->indProc = $indProc;
	}
}