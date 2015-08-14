<?php

class modelAssinaturaDigital {
    	private $id;
	private $pedido;
	private $signature;
        
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

	public function getSignature(){
		return $this->signature;
	}

	public function setSignature($signature){
		$this->signature = $signature;
	}
}