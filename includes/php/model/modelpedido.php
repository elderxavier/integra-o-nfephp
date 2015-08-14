<?php 
class modelPedido { 
	private $id;
	private $pedido; 
	private $emitente_cnpj; 
	private $CNPJ; 
	private $CPF; 
	private $idEstrangeiro; 
	private $xNome; 
	private $xLgr;
	private $xCpl;
	private $nro; 
	private $xBairro;
	private $cMun;
	private $xMun; 
	private $UF; 
	private $CEP; 
	private $cPais; 
	private $xPais;
	private $fone; 
	private $indIEDest; 
	private $IE; 
	private $ISUF; 
	private $IM;
	private $email;
	private $retirada;
	private $retirada_CNPJ;
	private $retirada_CPF;
	private $retirada_xLgr; 
	private $retirada_nro;
	private $retirada_xCpl; 
	private $retirada_xBairro;
	private $retirada_cMun;
	private $retirada_xMun; 
	private $retirada_UF; 
	private $entrega; 
	private $entrega_CNPJ; 
	private $entrega_CPF; 
	private $entrega_xLgr; 
	private $entrega_nro;
	private $entrega_xCpl; 
	private $entrega_xBairro;
	private $entrega_cMun;
	private $entrega_xMun;
	private $entrega_UF;
	private $total_itens; 

	public function getId() { 
		return $this->id; 
	} 
	public function setId($id) {
	 $this->id = $id; 
	}

	public function getpedido() { 
		return $this->pedido; 
	} 
	public function setpedido($pedido) {
	 $this->pedido = $pedido; 
	}

	public function getemitente_cnpj() { 
		return $this->emitente_cnpj; 
	} 
	public function setemitente_cnpj($emitente_cnpj) {
	 $this->emitente_cnpj = $emitente_cnpj; 
	}


	public function getCNPJ() { 
		return $this->CNPJ; 
	} 
	public function setCNPJ($CNPJ) {
	 $this->CNPJ = $CNPJ; 
	}
	public function getCPF() { 
		return $this->CPF; 
	} 
	public function setCPF($CPF) {
	 $this->CPF = $CPF; 
	}

	public function getidEstrangeiro() { 
		return $this->idEstrangeiro; 
	} 
	public function setidEstrangeiro($idEstrangeiro) {
	 $this->idEstrangeiro = $idEstrangeiro; 
	}

	public function getxNome() { 
		return $this->xNome; 
	} 
	public function setxNome($xNome) {
	 $this->xNome = $xNome; 
	}

	public function getxLgr() { 
		return $this->xLgr; 
	} 
	public function setxLgr($xLgr) {
	 $this->xLgr = $xLgr; 
	}

	public function getxCpl() { 
		return $this->xCpl; 
	} 
	public function setxCpl($xCpl) {
	 $this->xCpl = $xCpl; 
	}

	public function getnro() { 
		return $this->nro; 
	} 
	public function setnro($nro) {
	 $this->nro = $nro; 
	}

	public function getxBairro() { 
		return $this->xBairro; 
	} 
	public function setxBairro($xBairro) {
	 $this->xBairro = $xBairro; 
	}

	public function getcMun() { 
		return $this->cMun; 
	} 
	public function setcMun($cMun) {
	 $this->cMun = $cMun; 
	}

	public function getxMun() { 
		return $this->xMun; 
	} 
	public function setxMun($xMun) {
	 $this->xMun = $xMun; 
	}
	
	public function getUF() { 
		return $this->UF; 
	} 
	public function setUF($UF) {
	 $this->UF = $UF; 
	}

	public function getCEP() { 
		return $this->CEP; 
	} 
	public function setCEP($CEP) {
	 $this->CEP = $CEP; 
	}

	public function getcPais() { 
		return $this->cPais; 
	} 
	public function setcPais($cPais) {
	 $this->cPais = $cPais; 
	}

	public function getxPais() { 
		return $this->xPais; 
	} 
	public function setxPais($xPais) {
	 $this->xPais = $xPais; 
	}
	
	public function getfone() { 
		return $this->fone; 
	} 
	public function setfone($fone) {
	 $this->fone = $fone; 
	}

	public function getindIEDest() { 
		return $this->indIEDest; 
	} 
	public function setindIEDest($indIEDest) {
	 $this->indIEDest = $indIEDest; 
	}

	public function getIE() { 
		return $this->IE; 
	} 
	public function setIE($IE) {
	 $this->IE = $IE; 
	}
	
	public function getISIE() { 
		return $this->ISIE; 
	} 
	public function setISIE($ISIE) {
	 $this->ISIE = $ISIE; 
	}

	public function getIM() { 
		return $this->IM; 
	} 
	public function setIM($IM) {
	 $this->IM = $IM; 
	}

	public function getemail() { 
		return $this->email; 
	} 
	public function setemail($email) {
	 $this->email = $email; 
	}

	public function getretirada() { 
		return $this->retirada; 
	} 
	public function setretirada($retirada) {
	 $this->retirada = $retirada; 
	}

	public function getretirada_CNPJ() { 
		return $this->retirada_CNPJ; 
	} 
	public function setretirada_CNPJ($retirada_CNPJ) {
	 $this->retirada_CNPJ = $retirada_CNPJ; 
	}

	public function getretirada_CPF() { 
		return $this->retirada_CPF; 
	} 
	public function setretirada_CPF($retirada_CPF) {
	 $this->retirada_CPF = $retirada_CPF; 
	}

	public function getretirada_xLgr() { 
		return $this->retirada_xLgr; 
	} 
	public function setretirada_xLgr($retirada_xLgr) {
	 $this->retirada_xLgr = $retirada_xLgr; 
	}

	public function getretirada_nro() { 
		return $this->retirada_nro; 
	} 
	public function setretirada_nro($retirada_nro) {
	 $this->retirada_nro = $retirada_nro; 
	}

	public function getretirada_xCpl() { 
		return $this->retirada_xCpl; 
	} 
	public function setretirada_xCpl($retirada_xCpl) {
	 $this->retirada_xCpl = $retirada_xCpl; 
	}


	public function getretirada_xBairro() { 
		return $this->retirada_xBairro; 
	} 
	public function setretirada_xBairro($retirada_xBairro) {
	 $this->retirada_xBairro = $retirada_xBairro; 
	}


	public function getretirada_cMun() { 
		return $this->retirada_cMun; 
	} 
	public function setretirada_cMun($retirada_cMun) {
	 $this->retirada_cMun = $retirada_cMun; 
	}

	public function getretirada_xMun() { 
		return $this->retirada_xMun; 
	} 
	public function setretirada_xMun($retirada_xMun) {
	 $this->retirada_xMun = $retirada_xMun; 
	}

	public function getretirada_UF() { 
		return $this->retirada_UF; 
	} 
	public function setretirada_UF($retirada_UF) {
	 $this->retirada_UF = $retirada_UF; 
	}

	public function getentrega() { 
		return $this->entrega; 
	} 
	public function setretirada_entrega($entrega) {
	 $this->entrega = $entrega; 
	}

	public function getentrega_CNPJ() { 
		return $this->entrega_CNPJ; 
	} 
	public function setentrega_CNPJ($entrega_CNPJ) {
	 $this->entrega_CNPJ = $entrega_CNPJ; 
	}

	public function getentrega_CPF() { 
		return $this->entrega_CPF; 
	} 
	public function setentrega_CPF($entrega_CPF) {
	 $this->entrega_CPF = $entrega_CPF; 
	}

	public function getentrega_xLgr() { 
		return $this->entrega_xLgr; 
	} 
	public function setentrega_xLgr($entrega_xLgr) {
	 $this->entrega_xLgr = $entrega_xLgr; 
	}

	public function getentrega_nro() { 
		return $this->entrega_nro; 
	} 
	public function setentrega_nro($entrega_nro) {
	 $this->entrega_nro = $entrega_nro; 
	}

	public function getentrega_xCpl() { 
		return $this->entrega_xCpl; 
	} 
	public function setentrega_xCpl($entrega_xCpl) {
	 $this->entrega_xCpl = $entrega_xCpl; 
	}

	public function getentrega_xBairro() { 
		return $this->entrega_xBairro; 
	} 
	public function setentrega_xBairro($entrega_xBairro) {
	 $this->entrega_xBairro = $entrega_xBairro; 
	}

	public function getentrega_cMun() { 
		return $this->entrega_cMun; 
	} 
	public function setentrega_cMun($entrega_cMun) {
	 $this->entrega_cMun = $entrega_cMun; 
	}

	public function getentrega_xMun() { 
		return $this->entrega_xMun; 
	} 
	public function setentrega_xMun($entrega_xMun) {
	 $this->entrega_xMun = $entrega_xMun; 
	}

	public function getentrega_UF() { 
		return $this->entrega_UF; 
	} 
	public function setentrega_UF($entrega_UF) {
	 $this->entrega_UF = $entrega_UF; 
	}

	public function getentrega_total_itens() { 
		return $this->entrega_total_itens; 
	} 
	public function setentrega_total_itens($entrega_total_itens) {
	 $this->entrega_total_itens = $entrega_total_itens; 
	}



}
?>