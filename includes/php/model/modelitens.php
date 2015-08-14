<?php 
class modelItens { 
private $id;
private $pedido;
private $nItem;
private $cProd;
private $cEAN;
private $xProd;
private $NCM;
private $CFOP;
private $uCom;
private $qCom;
private $vUnCom;
private $vProd;
private $cEANTrib;
private $uTrib;
private $qTrib;
private $vUnTrib;
private $indTot;
private $nItemPed;
private $vTotTrib;
private $orig;
private $CSOSN;
private $pCredSN;
private $vCredICMSSN;
private $cEnq;
private $IPI_CST;
private $IPI_vBC;
private $pIPI;
private $vIPI;
private $PIS_CST;
private $PIS_vBC;
private $pPIS;
private $vPIS;
private $COFINS_CST;
private $COFINS_vBC;
private $pCOFINS;
private $vCOFINS;
private $vFrete;
private $vSeg;
private $vDesc;
private $vOutro;
private $DI;
private $nDI;
private $dDI;
private $xLocDesemb;
private $UFDesemb;
private $tpViaTransp;
private $vAFRMM;
private $tpIntermedio;
private $importacao_CNPJ;
private $UFTerceiro;
private $cExportador;
private $adi;
private $nAdicao;
private $nSeqAdic;
private $cFabricante;
private $vDescDI;
private $nDraw;
private $detExport;
private $detExport_nDraw;
private $exportInd;
private $nRE;
private $chNFe;
private $qExport;


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

 public function getNItem(){
  return $this->nItem;
 }

 public function setNItem($nItem){
  $this->nItem = $nItem;
 }

 public function getCProd(){
  return $this->cProd;
 }

 public function setCProd($cProd){
  $this->cProd = $cProd;
 }

 public function getCEAN(){
  return $this->cEAN;
 }

 public function setCEAN($cEAN){
  $this->cEAN = $cEAN;
 }

 public function getXProd(){
  return $this->xProd;
 }

 public function setXProd($xProd){
  $this->xProd = $xProd;
 }

 public function getNCM(){
  return $this->NCM;
 }

 public function setNCM($NCM){
  $this->NCM = $NCM;
 }

 public function getCFOP(){
  return $this->CFOP;
 }

 public function setCFOP($CFOP){
  $this->CFOP = $CFOP;
 }

 public function getUCom(){
  return $this->uCom;
 }

 public function setUCom($uCom){
  $this->uCom = $uCom;
 }

 public function getQCom(){
  return $this->qCom;
 }

 public function setQCom($qCom){
  $this->qCom = $qCom;
 }

 public function getVUnCom(){
  return $this->vUnCom;
 }

 public function setVUnCom($vUnCom){
  $this->vUnCom = $vUnCom;
 }

 public function getVProd(){
  return $this->vProd;
 }

 public function setVProd($vProd){
  $this->vProd = $vProd;
 }

 public function getCEANTrib(){
  return $this->cEANTrib;
 }

 public function setCEANTrib($cEANTrib){
  $this->cEANTrib = $cEANTrib;
 }

 public function getUTrib(){
  return $this->uTrib;
 }

 public function setUTrib($uTrib){
  $this->uTrib = $uTrib;
 }

 public function getQTrib(){
  return $this->qTrib;
 }

 public function setQTrib($qTrib){
  $this->qTrib = $qTrib;
 }

 public function getVUnTrib(){
  return $this->vUnTrib;
 }

 public function setVUnTrib($vUnTrib){
  $this->vUnTrib = $vUnTrib;
 }

 public function getIndTot(){
  return $this->indTot;
 }

 public function setIndTot($indTot){
  $this->indTot = $indTot;
 }

 public function getNItemPed(){
  return $this->nItemPed;
 }

 public function setNItemPed($nItemPed){
  $this->nItemPed = $nItemPed;
 }

 public function getVTotTrib(){
  return $this->vTotTrib;
 }

 public function setVTotTrib($vTotTrib){
  $this->vTotTrib = $vTotTrib;
 }

 public function getOrig(){
  return $this->orig;
 }

 public function setOrig($orig){
  $this->orig = $orig;
 }

 public function getCSOSN(){
  return $this->CSOSN;
 }

 public function setCSOSN($CSOSN){
  $this->CSOSN = $CSOSN;
 }

 public function getPCredSN(){
  return $this->pCredSN;
 }

 public function setPCredSN($pCredSN){
  $this->pCredSN = $pCredSN;
 }

 public function getVCredICMSSN(){
  return $this->vCredICMSSN;
 }

 public function setVCredICMSSN($vCredICMSSN){
  $this->vCredICMSSN = $vCredICMSSN;
 }

 public function getCEnq(){
  return $this->cEnq;
 }

 public function setCEnq($cEnq){
  $this->cEnq = $cEnq;
 }

 public function getIPI_CST(){
  return $this->IPI_CST;
 }

 public function setIPI_CST($IPI_CST){
  $this->IPI_CST = $IPI_CST;
 }

 public function getIPI_vBC(){
  return $this->IPI_vBC;
 }

 public function setIPI_vBC($IPI_vBC){
  $this->IPI_vBC = $IPI_vBC;
 }

 public function getPIPI(){
  return $this->pIPI;
 }

 public function setPIPI($pIPI){
  $this->pIPI = $pIPI;
 }

 public function getVIPI(){
  return $this->vIPI;
 }

 public function setVIPI($vIPI){
  $this->vIPI = $vIPI;
 }

 public function getPIS_CST(){
  return $this->PIS_CST;
 }

 public function setPIS_CST($PIS_CST){
  $this->PIS_CST = $PIS_CST;
 }

 public function getPIS_vBC(){
  return $this->PIS_vBC;
 }

 public function setPIS_vBC($PIS_vBC){
  $this->PIS_vBC = $PIS_vBC;
 }

 public function getPPIS(){
  return $this->pPIS;
 }

 public function setPPIS($pPIS){
  $this->pPIS = $pPIS;
 }

 public function getVPIS(){
  return $this->vPIS;
 }

 public function setVPIS($vPIS){
  $this->vPIS = $vPIS;
 }

 public function getCOFINS_CST(){
  return $this->COFINS_CST;
 }

 public function setCOFINS_CST($COFINS_CST){
  $this->COFINS_CST = $COFINS_CST;
 }

 public function getCOFINS_vBC(){
  return $this->COFINS_vBC;
 }

 public function setCOFINS_vBC($COFINS_vBC){
  $this->COFINS_vBC = $COFINS_vBC;
 }

 public function getPCOFINS(){
  return $this->pCOFINS;
 }

 public function setPCOFINS($pCOFINS){
  $this->pCOFINS = $pCOFINS;
 }

 public function getVCOFINS(){
  return $this->vCOFINS;
 }

 public function setVCOFINS($vCOFINS){
  $this->vCOFINS = $vCOFINS;
 }

 public function getVFrete(){
  return $this->vFrete;
 }

 public function setVFrete($vFrete){
  $this->vFrete = $vFrete;
 }

 public function getVSeg(){
  return $this->vSeg;
 }

 public function setVSeg($vSeg){
  $this->vSeg = $vSeg;
 }

 public function getVDesc(){
  return $this->vDesc;
 }

 public function setVDesc($vDesc){
  $this->vDesc = $vDesc;
 }

 public function getVOutro(){
  return $this->vOutro;
 }

 public function setVOutro($vOutro){
  $this->vOutro = $vOutro;
 }

 public function getDI(){
  return $this->DI;
 }

 public function setDI($DI){
  $this->DI = $DI;
 }

 public function getNDI(){
  return $this->nDI;
 }

 public function setNDI($nDI){
  $this->nDI = $nDI;
 }

 public function getDDI(){
  return $this->dDI;
 }

 public function setDDI($dDI){
  $this->dDI = $dDI;
 }

 public function getXLocDesemb(){
  return $this->xLocDesemb;
 }

 public function setXLocDesemb($xLocDesemb){
  $this->xLocDesemb = $xLocDesemb;
 }

 public function getUFDesemb(){
  return $this->UFDesemb;
 }

 public function setUFDesemb($UFDesemb){
  $this->UFDesemb = $UFDesemb;
 }

 public function getTpViaTransp(){
  return $this->tpViaTransp;
 }

 public function setTpViaTransp($tpViaTransp){
  $this->tpViaTransp = $tpViaTransp;
 }

 public function getVAFRMM(){
  return $this->vAFRMM;
 }

 public function setVAFRMM($vAFRMM){
  $this->vAFRMM = $vAFRMM;
 }

 public function getTpIntermedio(){
  return $this->tpIntermedio;
 }

 public function setTpIntermedio($tpIntermedio){
  $this->tpIntermedio = $tpIntermedio;
 }

 public function getImportacao_CNPJ(){
  return $this->importacao_CNPJ;
 }

 public function setImportacao_CNPJ($importacao_CNPJ){
  $this->importacao_CNPJ = $importacao_CNPJ;
 }

 public function getUFTerceiro(){
  return $this->UFTerceiro;
 }

 public function setUFTerceiro($UFTerceiro){
  $this->UFTerceiro = $UFTerceiro;
 }

 public function getCExportador(){
  return $this->cExportador;
 }

 public function setCExportador($cExportador){
  $this->cExportador = $cExportador;
 }

 public function getAdi(){
  return $this->adi;
 }

 public function setAdi($adi){
  $this->adi = $adi;
 }

 public function getNAdicao(){
  return $this->nAdicao;
 }

 public function setNAdicao($nAdicao){
  $this->nAdicao = $nAdicao;
 }

 public function getNSeqAdic(){
  return $this->nSeqAdic;
 }

 public function setNSeqAdic($nSeqAdic){
  $this->nSeqAdic = $nSeqAdic;
 }

 public function getCFabricante(){
  return $this->cFabricante;
 }

 public function setCFabricante($cFabricante){
  $this->cFabricante = $cFabricante;
 }

 public function getVDescDI(){
  return $this->vDescDI;
 }

 public function setVDescDI($vDescDI){
  $this->vDescDI = $vDescDI;
 }

 public function getNDraw(){
  return $this->nDraw;
 }

 public function setNDraw($nDraw){
  $this->nDraw = $nDraw;
 }

 public function getDetExport(){
  return $this->detExport;
 }

 public function setDetExport($detExport){
  $this->detExport = $detExport;
 }

 public function getDetExport_nDraw(){
  return $this->detExport_nDraw;
 }

 public function setDetExport_nDraw($detExport_nDraw){
  $this->detExport_nDraw = $detExport_nDraw;
 }

 public function getExportInd(){
  return $this->exportInd;
 }

 public function setExportInd($exportInd){
  $this->exportInd = $exportInd;
 }

 public function getNRE(){
  return $this->nRE;
 }

 public function setNRE($nRE){
  $this->nRE = $nRE;
 }

 public function getChNFe(){
  return $this->chNFe;
 }

 public function setChNFe($chNFe){
  $this->chNFe = $chNFe;
 }

 public function getQExport(){
  return $this->qExport;
 }

 public function setQExport($qExport){
  $this->qExport = $qExport;
 }

}

?>