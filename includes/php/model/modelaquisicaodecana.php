<?php

class modelAquisicaodeCana{
    	private $id;
	private $pedido;
	private $safra;
	private $ref;
	private $forDia;
	private $dia;
	private $qtde;
	private $qTotMes;
	private $qTotAnt;
	private $qTotGer;
	private $deduc;
	private $xDed;
	private $vDed;
	private $vFor;
	private $vTotDed;
	private $vLiqFor;
        
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

	public function getSafra(){
		return $this->safra;
	}

	public function setSafra($safra){
		$this->safra = $safra;
	}

	public function getRef(){
		return $this->ref;
	}

	public function setRef($ref){
		$this->ref = $ref;
	}

	public function getForDia(){
		return $this->forDia;
	}

	public function setForDia($forDia){
		$this->forDia = $forDia;
	}

	public function getDia(){
		return $this->dia;
	}

	public function setDia($dia){
		$this->dia = $dia;
	}

	public function getQtde(){
		return $this->qtde;
	}

	public function setQtde($qtde){
		$this->qtde = $qtde;
	}

	public function getQTotMes(){
		return $this->qTotMes;
	}

	public function setQTotMes($qTotMes){
		$this->qTotMes = $qTotMes;
	}

	public function getQTotAnt(){
		return $this->qTotAnt;
	}

	public function setQTotAnt($qTotAnt){
		$this->qTotAnt = $qTotAnt;
	}

	public function getQTotGer(){
		return $this->qTotGer;
	}

	public function setQTotGer($qTotGer){
		$this->qTotGer = $qTotGer;
	}

	public function getDeduc(){
		return $this->deduc;
	}

	public function setDeduc($deduc){
		$this->deduc = $deduc;
	}

	public function getXDed(){
		return $this->xDed;
	}

	public function setXDed($xDed){
		$this->xDed = $xDed;
	}

	public function getVDed(){
		return $this->vDed;
	}

	public function setVDed($vDed){
		$this->vDed = $vDed;
	}

	public function getVFor(){
		return $this->vFor;
	}

	public function setVFor($vFor){
		$this->vFor = $vFor;
	}

	public function getVTotDed(){
		return $this->vTotDed;
	}

	public function setVTotDed($vTotDed){
		$this->vTotDed = $vTotDed;
	}

	public function getVLiqFor(){
		return $this->vLiqFor;
	}

	public function setVLiqFor($vLiqFor){
		$this->vLiqFor = $vLiqFor;
	}
}