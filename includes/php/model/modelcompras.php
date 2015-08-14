<?php
class modelCompras{
        private $id;
        private $pedido;
        private $xNEmp;
        private $xCont;
    
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

	public function getXNEmp(){
		return $this->xNEmp;
	}

	public function setXNEmp($xNEmp){
		$this->xNEmp = $xNEmp;
	}

	public function getXCont(){
		return $this->xCont;
	}

	public function setXCont($xCont){
		$this->xCont = $xCont;
	}
}