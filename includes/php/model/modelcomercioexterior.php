<?php

class modelComercioExterior{
        private $id;
	private $pedido;
	private $exporta;
	private $UFSaidaPais;
	private $xLocExporta;
	private $xLocDespacho;
        
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

	public function getExporta(){
		return $this->exporta;
	}

	public function setExporta($exporta){
		$this->exporta = $exporta;
	}

	public function getUFSaidaPais(){
		return $this->UFSaidaPais;
	}

	public function setUFSaidaPais($UFSaidaPais){
		$this->UFSaidaPais = $UFSaidaPais;
	}

	public function getXLocExporta(){
		return $this->xLocExporta;
	}

	public function setXLocExporta($xLocExporta){
		$this->xLocExporta = $xLocExporta;
	}

	public function getXLocDespacho(){
		return $this->xLocDespacho;
	}

	public function setXLocDespacho($xLocDespacho){
		$this->xLocDespacho = $xLocDespacho;
	}
}