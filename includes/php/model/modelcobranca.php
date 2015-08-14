<?php

class modelCobranca{
        private $id;
	private $pedido;
	private $cobr;
	private $fat;
	private $nFat;
	private $vOrig;
	private $vDesc;
	private $vLiq;
	private $dup;
	private $nDup;
	private $dVenc;
	private $vDup;    
        
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

	public function getCobr(){
		return $this->cobr;
	}

	public function setCobr($cobr){
		$this->cobr = $cobr;
	}

	public function getFat(){
		return $this->fat;
	}

	public function setFat($fat){
		$this->fat = $fat;
	}

	public function getNFat(){
		return $this->nFat;
	}

	public function setNFat($nFat){
		$this->nFat = $nFat;
	}

	public function getVOrig(){
		return $this->vOrig;
	}

	public function setVOrig($vOrig){
		$this->vOrig = $vOrig;
	}

	public function getVDesc(){
		return $this->vDesc;
	}

	public function setVDesc($vDesc){
		$this->vDesc = $vDesc;
	}

	public function getVLiq(){
		return $this->vLiq;
	}

	public function setVLiq($vLiq){
		$this->vLiq = $vLiq;
	}

	public function getDup(){
		return $this->dup;
	}

	public function setDup($dup){
		$this->dup = $dup;
	}

	public function getNDup(){
		return $this->nDup;
	}

	public function setNDup($nDup){
		$this->nDup = $nDup;
	}

	public function getDVenc(){
		return $this->dVenc;
	}

	public function setDVenc($dVenc){
		$this->dVenc = $dVenc;
	}

	public function getVDup(){
		return $this->vDup;
	}

	public function setVDup($vDup){
		$this->vDup = $vDup;
	}
}