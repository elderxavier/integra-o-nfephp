<?php 
class modelEmissor { 
	/*private function __construct() { 
	
	}*/

	private $id;
	private $CNPJ;
	private $xNome;
	private $xFant;
	private $xLgr;
	private $nro;
	private $xCpl;
	private $xBairro;
	private $cMun;
	private $xMun;
	private $UF;
	private $CEP;
	private $cPais;
	private $xPais;
	private $fone;
	private $IE;
	private $IEST;
	private $IM;
	private $CNAE;
	private $CRT;
	


	public function getId() { 
		return $this->id; 
	} 
	public function setId($id) {
	 $this->id = $id; 
	}

	public function getCNPJ() { 
		return $this->CNPJ; 
	} 
	public function setCNPJ($CNPJ) {
	 $this->CNPJ = $CNPJ; 
	}

	public function getxNome() { 
		return $this->xNome; 
	} 
	public function setxNome($xNome) {
	 $this->xNome = $xNome; 
	}

	public function getxFant() { 
		return $this->xFant; 
	} 
	public function setxFant($xFant) {
	 $this->xFant = $xFant; 
	}
	
	public function getxLgr() { 
		return $this->xLgr; 
	} 
	public function setxLgr($xLgr) {
	 $this->xLgr = $xLgr; 
	}

	public function getnro() { 
		return $this->nro; 
	} 
	public function setnro($nro) {
	 $this->nro = $nro; 
	}

	public function getxCpl() { 
		return $this->xCpl; 
	} 
	public function setxCpl($xCpl) {
	 $this->xCpl = $xCpl; 
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

	public function getIE() { 
		return $this->IE; 
	} 
	public function setIE($IE) {
	 $this->IE = $IE; 
	}

	public function getIEST() { 
		return $this->IEST; 
	} 
	public function setIEST($IEST) {
	 $this->IEST = $IEST; 
	}

	public function getIM() { 
		return $this->IM; 
	} 
	public function setIM($IM) {
	 $this->IM = $IM; 
	}

	public function getCNAE() { 
		return $this->CNAE; 
	} 
	public function setCNAE($CNAE) {
	 $this->CNAE = $CNAE; 
	}

	public function getCRT() { 
		return $this->CRT; 
	} 
	public function setCRT($CRT) {
	 $this->CRT = $CRT; 
	}	

}

?>