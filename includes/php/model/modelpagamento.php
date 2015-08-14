<?php

class modelPagamento {
        private $id;
	private $pedido;
	private $pag;
	private $tPag;
	private $vPag;
	private $card;
	private $CNPJ;
	private $tBand;
	private $cAut; 
        
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

	public function getPag(){
		return $this->pag;
	}

	public function setPag($pag){
		$this->pag = $pag;
	}

	public function getTPag(){
		return $this->tPag;
	}

	public function setTPag($tPag){
		$this->tPag = $tPag;
	}

	public function getVPag(){
		return $this->vPag;
	}

	public function setVPag($vPag){
		$this->vPag = $vPag;
	}

	public function getCard(){
		return $this->card;
	}

	public function setCard($card){
		$this->card = $card;
	}

	public function getCNPJ(){
		return $this->CNPJ;
	}

	public function setCNPJ($CNPJ){
		$this->CNPJ = $CNPJ;
	}

	public function getTBand(){
		return $this->tBand;
	}

	public function setTBand($tBand){
		$this->tBand = $tBand;
	}

	public function getCAut(){
		return $this->cAut;
	}

	public function setCAut($cAut){
		$this->cAut = $cAut;
	}
}