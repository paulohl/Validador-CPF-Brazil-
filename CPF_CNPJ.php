<?php
/** 
 * CPF_CNPJ
 * 
 * The CPF_CNPJ class provides methods 
 * to define and validate
 * Cadastro de Pessoas FÃ­sicas (CPF)
 * and Cadastro de Pessoas JurÃ­dicas (CNPJ)
 * brazilian numbers.
 * 
 * 
 * @author Samuel Prates <samuelprates@yahoo.com.br> 
 * @license GNU General Public Licence (GPL)
 * @version Release: 1.0
 */

class CPF_CNPJ{

    protected $CPF_CNPJ,$numeral,$tipo;

    public function verificaDigitos($digito1, $digito2, $ver, $ver2){
        $num = $digito1 % 11;
        $digito1 = ($num<2)?0:11-$num;
        $num2 = $digito2 % 11;
        $digito2 = ($num2<2)?0:11-$num2;
        if($digito1 === (int)$this->numeral[$ver] && $digito2 === (int)$this->numeral[$ver2]){
            return true;
        } else {
            return false;
        }
    }
    private function verificaCPF(){
        $num1 = ($this->numeral[0]*10) + ($this->numeral[1]*9) + ($this->numeral[2]*8) + ($this->numeral[3]*7) + ($this->numeral[4]*6)
                + ($this->numeral[5]*5)+ ($this->numeral[6]*4) + ($this->numeral[7]*3) + ($this->numeral[8]*2);
        $num2 = ($this->numeral[0]*11) + ($this->numeral[1]*10) + ($this->numeral[2]*9) + ($this->numeral[3]*8) + ($this->numeral[4]*7)
                + ($this->numeral[5]*6)+ ($this->numeral[6]*5) + ($this->numeral[7]*4) + ($this->numeral[8]*3) + ($this->numeral[9]*2);
        return $this->verificaDigitos($num1, $num2,9,10);
    }
    private function verificaCNPJ(){
        $num1 = ($this->numeral[0]*5) + ($this->numeral[1]*4) + ($this->numeral[2]*3) + ($this->numeral[3]*2) + ($this->numeral[4]*9) + ($this->numeral[5]*8)
                + ($this->numeral[6]*7) + ($this->numeral[7]*6) + ($this->numeral[8]*5) + ($this->numeral[9]*4) + ($this->numeral[10]*3) + ($this->numeral[11]*2);
        $num2 = ($this->numeral[0]*6) + ($this->numeral[1]*5) + ($this->numeral[2]*4) + ($this->numeral[3]*3) + ($this->numeral[4]*2) + ($this->numeral[5]*9)
                + ($this->numeral[6]*8) + ($this->numeral[7]*7) + ($this->numeral[8]*6) + ($this->numeral[9]*5) + ($this->numeral[10]*4) + ($this->numeral[11]*3) + ($this->numeral[12]*2);
        return $this->verificaDigitos($num1, $num2,12,13);
    }
    private function getNumeral(){
        $this->numeral = preg_replace("/[^0-9]/","",$this->CPF_CNPJ);
        $strLen = strlen($this->numeral);
        $ret = false;
        switch ($strLen){
            case 11:
                if($this->verificaCPF()){ $this->tipo = 'CPF'; $ret = true; }
            break;
            case 14:
                if($this->verificaCNPJ()){ $this->tipo = 'CNPJ'; $ret = true; }
            break;
            default: $ret = false; break;
        }
        return $ret;
    }
    public function __construct($CPF_CNPJ) {
        $this->CPF_CNPJ = $CPF_CNPJ;
        if(!$this->getNumeral()){
            throw new Exception('CPF ou CNPJ nÃ£o confere.');
        }
    }
    public function __toString() {
        return $this->CPF_CNPJ;
    }
    public function getTipo(){
        return $this->tipo;
    }
}

//try{
//    $cpfOrCnpj = new CPF_CNPJ('081.138.814-09');
//    echo $cpfOrCnpj;
//    echo $cpfOrCnpj->getTipo();
//} catch (Exception $e){
//    echo "Exceção: ".$e->getMessage();
//}
//

//try{
//    $cpfOrCnpj = new CPF_CNPJ('51.753.656/0001-16');
//    echo $cpfOrCnpj;
//    echo $cpfOrCnpj->getTipo();
//} catch (Exception $e){
//    echo "Exceção: ".$e->getMessage();
//}
//