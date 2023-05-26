<?php
echo "hola";
class Token4 {
    public function Ano() {
        return date("Y");
    }
    
    public function Mes() {
        return date("m");
    }
    
    public function Dia() {
        return date("d");
    }
    
    public function Hora24() {
        return date("H");
    }
    
    public function Minutos() {
        return date("i");
    }
    
    public function Descifrar($validar) {
        if ($validar === "A")  return 1 ;
        if ($validar === "B")  return 9 ;
        if ($validar === "C")  return 8 ;
        if ($validar === "D")  return 7 ;
        if ($validar === "E")  return 6 ;
        if ($validar === "F")  return 5 ;
        if ($validar === "G")  return 4 ;
        if ($validar === "H")  return 3 ;
        if ($validar === "I")  return 2 ;
        if ($validar === "J")  return 1 ;
        if ($validar === "K")  return 9 ;
        if ($validar === "L")  return 8 ;
        if ($validar === "M") return 7 ;
        if ($validar === "N") return 6 ;
        if ($validar === "Ñ") return 5 ;
        if ($validar === "O") return 4 ;
        if ($validar === "P") return 3 ;
        if ($validar === "Q") return 2 ;
        if ($validar === "R") return 1 ;
        if ($validar === "S") return 9 ;
        if ($validar === "T") return 8 ;
        if ($validar === "U") return 7 ;
        if ($validar === "V") return 6 ;
        if ($validar === "W") return 5 ;
        if ($validar === "X") return 4 ;
        if ($validar === "Y") return 3 ;
        if ($validar === "Z") return 2 ;
        if ($validar === "1") return 1 ;
        if ($validar === "2") return 9 ;
        if ($validar === "3") return 8 ;
        if ($validar === "4") return 7 ;
        if ($validar === "5") return 6 ;
        if ($validar === "6") return 5 ;
        if ($validar === "7") return 4 ;
        if ($validar === "8") return 3 ;
        if ($validar === "9") return 2 ;
        if ($validar === "0") return 1 ;
        if ($validar === "a") return 9 ;
        if ($validar === "b") return 8 ;
        if ($validar === "c") return 7 ;
        if ($validar === "d") return 6 ;
        if ($validar === "e") return 5 ;
        if ($validar === "f") return 4 ;
        if ($validar === "g") return 3 ;
        if ($validar === "h") return 2 ;
        if ($validar === "i") return 1 ;
        if ($validar === "j") return 9 ;
        if ($validar === "k") return 8 ;
        if ($validar === "l") return 7 ;
        if ($validar === "m") return 6 ;
        if ($validar === "n") return 5 ;
        if ($validar === "ñ") return 4 ;
        if ($validar === "o") return 3 ;
        if ($validar === "p") return 2 ;
        if ($validar === "q") return 1 ;
        if ($validar === "r") return 9 ;
        if ($validar === "s") return 8 ;
        if ($validar === "t") return 7 ;
        if ($validar === "u") return 6 ;
        if ($validar === "v") return 5 ;
        if ($validar === "w") return 4 ;
        if ($validar === "x") return 3 ;
        if ($validar === "y") return 2 ;
        if ($validar === "z") return 1 ;

        
        return 0; // Valor por defecto si no coincide ninguna condición
    }
    
    public function Descifrar2($validar) {
        if ($validar === "A") return 6 ;
        if ($validar === "B") return 1 ;
        if ($validar === "C") return 5 ;
        if ($validar === "D") return 7 ;
        if ($validar === "E") return 1 ;
        if ($validar === "F") return 4 ;
        if ($validar === "G") return 7 ;
        if ($validar === "H") return 9 ;
        if ($validar === "I") return 3 ;
        if ($validar === "J") return 6 ;
        if ($validar === "K") return 2 ;
        if ($validar === "L") return 5 ;
        if ($validar === "M") return 7 ;
        if ($validar === "N") return 1 ;
        if ($validar === "Ñ") return 4 ;
        if ($validar === "O") return 7 ;
        if ($validar === "P") return 9 ;
        if ($validar === "Q") return 3 ;
        if ($validar === "R") return 6 ;
        if ($validar === "S") return 2 ;
        if ($validar === "T") return 5 ;
        if ($validar === "U") return 7 ;
        if ($validar === "V") return 1 ;
        if ($validar === "W") return 4 ;
        if ($validar === "X") return 7 ;
        if ($validar === "Y") return 9 ;
        if ($validar === "Z") return 3 ;
        if ($validar === "1") return 6 ;
        if ($validar === "2") return 1 ;
        if ($validar === "3") return 5 ;
        if ($validar === "4") return 7 ;
        if ($validar === "5") return 1 ;
        if ($validar === "6") return 4 ;
        if ($validar === "7") return 7 ;
        if ($validar === "8") return 9 ;
        if ($validar === "9") return 3 ;
        if ($validar === "0") return 6 ;
        if ($validar === "a") return 2 ;
        if ($validar === "b") return 5 ;
        if ($validar === "c") return 7 ;
        if ($validar === "d") return 1 ;
        if ($validar === "e") return 4 ;
        if ($validar === "f") return 7 ;
        if ($validar === "g") return 9 ;
        if ($validar === "h") return 3 ;
        if ($validar === "i") return 6 ;
        if ($validar === "j") return 2 ;
        if ($validar === "k") return 5 ;
        if ($validar === "l") return 7 ;
        if ($validar === "m") return 1 ;
        if ($validar === "n") return 4 ;
        if ($validar === "ñ") return 7 ;
        if ($validar === "o") return 9 ;
        if ($validar === "p") return 3 ;
        if ($validar === "q") return 6 ;
        if ($validar === "r") return 2 ;
        if ($validar === "s") return 5 ;
        if ($validar === "t") return 7 ;
        if ($validar === "u") return 1 ;
        if ($validar === "v") return 4 ;
        if ($validar === "w") return 7 ;
        if ($validar === "x") return 9 ;
        if ($validar === "y") return 3 ;
        if ($validar === "z") return 6 ;

        
        return 0; // Valor por defecto si no coincide ninguna condición
    }
    
    public function Token($Clave, $Validacion) {
        $Horas = 0;
        $Minutos = 0;
        $Meses = $this->Mes();
        $Años = $this->Ano();
        $Var_MAS = intval(substr($Meses, 0, 1)) + intval(substr($Meses, 1, 1)) + intval(substr($Años, 0, 1)) + intval(substr($Años, 1, 1)) + intval(substr($Años, 2, 1)) + intval(substr($Años, 3, 1));
        
        if ($this->Minutos() >= 0 && $this->Minutos() < 5) {
            if ($this->Hora24() == 0 ) {
                $Horas = 91;
            }
            if ($this->Hora24() == 1 ) {
                $Horas = 49;
            }
            if ($this->Hora24() == 2 ) {
                $Horas = 59;
            }
            if ($this->Hora24() == 3 ) {
                $Horas = 77;
            }
            if ($this->Hora24() == 4 ) {
                $Horas = 10;
            }
            if ($this->Hora24() == 5 ) {
                $Horas = 94;
            }
            if ($this->Hora24() == 6 ) {
                $Horas = 15;
            }
            if ($this->Hora24() == 7 ) {
                $Horas = 43;
            }
            if ($this->Hora24() == 8 ) {
                $Horas = 41;
            }
            if ($this->Hora24() == 9 ) {
                $Horas = 66;
            }
            if ($this->Hora24() == 10) {
                $Horas = 89;
            }
            if ($this->Hora24() == 11) {
                $Horas = 68;
            }
            if ($this->Hora24() == 12) {
                $Horas = 21;
            }
            if ($this->Hora24() == 13) {
                $Horas = 33;
            }
            if ($this->Hora24() == 14) {
                $Horas = 23;
            }
            if ($this->Hora24() == 15) {
                $Horas = 60;
            }
            if ($this->Hora24() == 16) {
                $Horas = 55;
            }
            if ($this->Hora24() == 17) {
                $Horas = 54;
            }
            if ($this->Hora24() == 18) {
                $Horas = 63;
            }
            if ($this->Hora24() == 19) {
                $Horas = 56;
            }
            if ($this->Hora24() == 20) {
                $Horas = 65;
            }
            if ($this->Hora24() == 21) {
                $Horas = 87;
            }
            if ($this->Hora24() == 22) {
                $Horas = 22;
            }
            if ($this->Hora24() == 23) {
                $Horas = 45;
            }
            $Minutos =86;
        } elseif ($this->Minutos() >= 5 && $this->Minutos() < 1) {
            if ($this->Hora24() == 0 ) {
                $Horas = 67;
            }
            if ($this->Hora24() == 1 ) {
                $Horas = 26;
            }
            if ($this->Hora24() == 2 ) {
                $Horas = 85;
            }
            if ($this->Hora24() == 3 ) {
                $Horas = 43;
            }
            if ($this->Hora24() == 4 ) {
                $Horas = 45;
            }
            if ($this->Hora24() == 5 ) {
                $Horas = 20;
            }
            if ($this->Hora24() == 6 ) {
                $Horas = 23;
            }
            if ($this->Hora24() == 7 ) {
                $Horas = 12;
            }
            if ($this->Hora24() == 8 ) {
                $Horas = 95;
            }
            if ($this->Hora24() == 9 ) {
                $Horas = 31;
            }
            if ($this->Hora24() == 10) {
                $Horas = 60;
            }
            if ($this->Hora24() == 11) {
                $Horas = 28;
            }
            if ($this->Hora24() == 12) {
                $Horas = 92;
            }
            if ($this->Hora24() == 13) {
                $Horas = 71;
            }
            if ($this->Hora24() == 14) {
                $Horas = 72;
            }
            if ($this->Hora24() == 15) {
                $Horas = 52;
            }
            if ($this->Hora24() == 16) {
                $Horas = 55;
            }
            if ($this->Hora24() == 17) {
                $Horas = 30;
            }
            if ($this->Hora24() == 18) {
                $Horas = 82;
            }
            if ($this->Hora24() == 19) {
                $Horas = 24;
            }
            if ($this->Hora24() == 20) {
                $Horas = 58;
            }
            if ($this->Hora24() == 21) {
                $Horas = 53;
            }
            if ($this->Hora24() == 22) {
                $Horas = 27;
            }
            if ($this->Hora24() == 23) {
                $Horas = 16;
            }
            $Minutos =30;
        } elseif ($this->Minutos() >= 10 && $this->Minutos() < 15) {
            if ($this->Hora24() == 0 ) {
                $Horas = 96;
            }
            if ($this->Hora24() == 1 ) {
                $Horas = 36;
            }
            if ($this->Hora24() == 2 ) {
                $Horas = 50;
            }
            if ($this->Hora24() == 3 ) {
                $Horas = 54;
            }
            if ($this->Hora24() == 4 ) {
                $Horas = 53;
            }
            if ($this->Hora24() == 5 ) {
                $Horas = 30;
            }
            if ($this->Hora24() == 6 ) {
                $Horas = 67;
            }
            if ($this->Hora24() == 7 ) {
                $Horas = 41;
            }
            if ($this->Hora24() == 8 ) {
                $Horas = 16;
            }
            if ($this->Hora24() == 9 ) {
                $Horas = 55;
            }
            if ($this->Hora24() == 10) {
                $Horas = 62;
            }
            if ($this->Hora24() == 11) {
                $Horas = 66;
            }
            if ($this->Hora24() == 12) {
                $Horas = 75;
            }
            if ($this->Hora24() == 13) {
                $Horas = 35;
            }
            if ($this->Hora24() == 14) {
                $Horas = 63;
            }
            if ($this->Hora24() == 15) {
                $Horas = 78;
            }
            if ($this->Hora24() == 16) {
                $Horas = 42;
            }
            if ($this->Hora24() == 17) {
                $Horas = 45;
            }
            if ($this->Hora24() == 18) {
                $Horas = 57;
            }
            if ($this->Hora24() == 19) {
                $Horas = 65;
            }
            if ($this->Hora24() == 20) {
                $Horas = 55;
            }
            if ($this->Hora24() == 21) {
                $Horas = 66;
            }
            if ($this->Hora24() == 22) {
                $Horas = 10;
            }
            if ($this->Hora24() == 23) {
                $Horas = 36;
            }
            $Minutos =67;
        } elseif ($this->Minutos() >= 15 && $this->Minutos() < 20) {
            if ($this->Hora24() == 0 ) {
                $Horas = 25;
            }
            if ($this->Hora24() == 1 ) {
                $Horas = 76;
            }
            if ($this->Hora24() == 2 ) {
                $Horas = 64;
            }
            if ($this->Hora24() == 3 ) {
                $Horas = 59;
            }
            if ($this->Hora24() == 4 ) {
                $Horas = 19;
            }
            if ($this->Hora24() == 5 ) {
                $Horas = 57;
            }
            if ($this->Hora24() == 6 ) {
                $Horas = 89;
            }
            if ($this->Hora24() == 7 ) {
                $Horas = 70;
            }
            if ($this->Hora24() == 8 ) {
                $Horas = 45;
            }
            if ($this->Hora24() == 9 ) {
                $Horas = 89;
            }
            if ($this->Hora24() == 10) {
                $Horas = 56;
            }
            if ($this->Hora24() == 11) {
                $Horas = 61;
            }
            if ($this->Hora24() == 12) {
                $Horas = 36;
            }
            if ($this->Hora24() == 13) {
                $Horas = 67;
            }
            if ($this->Hora24() == 14) {
                $Horas = 94;
            }
            if ($this->Hora24() == 15) {
                $Horas = 48;
            }
            if ($this->Hora24() == 16) {
                $Horas = 68;
            }
            if ($this->Hora24() == 17) {
                $Horas = 20;
            }
            if ($this->Hora24() == 18) {
                $Horas = 13;
            }
            if ($this->Hora24() == 19) {
                $Horas = 87;
            }
            if ($this->Hora24() == 20) {
                $Horas = 71;
            }
            if ($this->Hora24() == 21) {
                $Horas = 81;
            }
            if ($this->Hora24() == 22) {
                $Horas = 22;
            }
            if ($this->Hora24() == 23) {
                $Horas = 39;
            }
            $Minutos =71;
        } elseif ($this->Minutos() >= 20 && $this->Minutos() < 25) {
            if ($this->Hora24() == 0 ) {
                $Horas = 64;
            }
            if ($this->Hora24() == 1 ) {
                $Horas = 89;
            }
            if ($this->Hora24() == 2 ) {
                $Horas = 86;
            }
            if ($this->Hora24() == 3 ) {
                $Horas = 11;
            }
            if ($this->Hora24() == 4 ) {
                $Horas = 66;
            }
            if ($this->Hora24() == 5 ) {
                $Horas = 16;
            }
            if ($this->Hora24() == 6 ) {
                $Horas = 25;
            }
            if ($this->Hora24() == 7 ) {
                $Horas = 52;
            }
            if ($this->Hora24() == 8 ) {
                $Horas = 44;
            }
            if ($this->Hora24() == 9 ) {
                $Horas = 18;
            }
            if ($this->Hora24() == 10) {
                $Horas = 27;
            }
            if ($this->Hora24() == 11) {
                $Horas = 81;
            }
            if ($this->Hora24() == 12) {
                $Horas = 96;
            }
            if ($this->Hora24() == 13) {
                $Horas = 94;
            }
            if ($this->Hora24() == 14) {
                $Horas = 69;
            }
            if ($this->Hora24() == 15) {
                $Horas = 29;
            }
            if ($this->Hora24() == 16) {
                $Horas = 27;
            }
            if ($this->Hora24() == 17) {
                $Horas = 24;
            }
            if ($this->Hora24() == 18) {
                $Horas = 16;
            }
            if ($this->Hora24() == 19) {
                $Horas = 52;
            }
            if ($this->Hora24() == 20) {
                $Horas = 93;
            }
            if ($this->Hora24() == 21) {
                $Horas = 82;
            }
            if ($this->Hora24() == 22) {
                $Horas = 71;
            }
            if ($this->Hora24() == 23) {
                $Horas = 57;
            }
            $Minutos =25;
        } elseif ($this->Minutos() >= 25 && $this->Minutos() < 30) {
            if ($this->Hora24() == 0 ) {
                $Horas = 23;
            }
            if ($this->Hora24() == 1 ) {
                $Horas = 45;
            }
            if ($this->Hora24() == 2 ) {
                $Horas = 75;
            }
            if ($this->Hora24() == 3 ) {
                $Horas = 43;
            }
            if ($this->Hora24() == 4 ) {
                $Horas = 38;
            }
            if ($this->Hora24() == 5 ) {
                $Horas = 97;
            }
            if ($this->Hora24() == 6 ) {
                $Horas = 33;
            }
            if ($this->Hora24() == 7 ) {
                $Horas = 90;
            }
            if ($this->Hora24() == 8 ) {
                $Horas = 56;
            }
            if ($this->Hora24() == 9 ) {
                $Horas = 64;
            }
            if ($this->Hora24() == 10) {
                $Horas = 78;
            }
            if ($this->Hora24() == 11) {
                $Horas = 17;
            }
            if ($this->Hora24() == 12) {
                $Horas = 57;
            }
            if ($this->Hora24() == 13) {
                $Horas = 82;
            }
            if ($this->Hora24() == 14) {
                $Horas = 38;
            }
            if ($this->Hora24() == 15) {
                $Horas = 84;
            }
            if ($this->Hora24() == 16) {
                $Horas = 41;
            }
            if ($this->Hora24() == 17) {
                $Horas = 17;
            }
            if ($this->Hora24() == 18) {
                $Horas = 60;
            }
            if ($this->Hora24() == 19) {
                $Horas = 38;
            }
            if ($this->Hora24() == 20) {
                $Horas = 52;
            }
            if ($this->Hora24() == 21) {
                $Horas = 62;
            }
            if ($this->Hora24() == 22) {
                $Horas = 91;
            }
            if ($this->Hora24() == 23) {
                $Horas = 35;
            }
            $Minutos =22;
        } elseif ($this->Minutos() >= 30 && $this->Minutos() < 35) {
            if ($this->Hora24() == 0 ) {
                $Horas = 93;
            }
            if ($this->Hora24() == 1 ) {
                $Horas = 84;
            }
            if ($this->Hora24() == 2 ) {
                $Horas = 18;
            }
            if ($this->Hora24() == 3 ) {
                $Horas = 72;
            }
            if ($this->Hora24() == 4 ) {
                $Horas = 16;
            }
            if ($this->Hora24() == 5 ) {
                $Horas = 28;
            }
            if ($this->Hora24() == 6 ) {
                $Horas = 18;
            }
            if ($this->Hora24() == 7 ) {
                $Horas = 33;
            }
            if ($this->Hora24() == 8 ) {
                $Horas = 84;
            }
            if ($this->Hora24() == 9 ) {
                $Horas = 81;
            }
            if ($this->Hora24() == 10) {
                $Horas = 62;
            }
            if ($this->Hora24() == 11) {
                $Horas = 93;
            }
            if ($this->Hora24() == 12) {
                $Horas = 51;
            }
            if ($this->Hora24() == 13) {
                $Horas = 12;
            }
            if ($this->Hora24() == 14) {
                $Horas = 86;
            }
            if ($this->Hora24() == 15) {
                $Horas = 33;
            }
            if ($this->Hora24() == 16) {
                $Horas = 16;
            }
            if ($this->Hora24() == 17) {
                $Horas = 41;
            }
            if ($this->Hora24() == 18) {
                $Horas = 42;
            }
            if ($this->Hora24() == 19) {
                $Horas = 60;
            }
            if ($this->Hora24() == 20) {
                $Horas = 92;
            }
            if ($this->Hora24() == 21) {
                $Horas = 11;
            }
            if ($this->Hora24() == 22) {
                $Horas = 29;
            }
            if ($this->Hora24() == 23) {
                $Horas = 74;
            }
            $Minutos =41;
        } elseif ($this->Minutos() >= 35 && $this->Minutos() < 40) {
            if ($this->Hora24() == 0 ) {
                $Horas = 64;
            }
            if ($this->Hora24() == 1 ) {
                $Horas = 74;
            }
            if ($this->Hora24() == 2 ) {
                $Horas = 23;
            }
            if ($this->Hora24() == 3 ) {
                $Horas = 47;
            }
            if ($this->Hora24() == 4 ) {
                $Horas = 94;
            }
            if ($this->Hora24() == 5 ) {
                $Horas = 16;
            }
            if ($this->Hora24() == 6 ) {
                $Horas = 97;
            }
            if ($this->Hora24() == 7 ) {
                $Horas = 94;
            }
            if ($this->Hora24() == 8 ) {
                $Horas = 84;
            }
            if ($this->Hora24() == 9 ) {
                $Horas = 60;
            }
            if ($this->Hora24() == 10) {
                $Horas = 62;
            }
            if ($this->Hora24() == 11) {
                $Horas = 83;
            }
            if ($this->Hora24() == 12) {
                $Horas = 36;
            }
            if ($this->Hora24() == 13) {
                $Horas = 12;
            }
            if ($this->Hora24() == 42) {
                $Horas = 86;
            }
            if ($this->Hora24() == 15) {
                $Horas = 33;
            }
            if ($this->Hora24() == 68) {
                $Horas = 16;
            }
            if ($this->Hora24() == 17) {
                $Horas = 41;
            }
            if ($this->Hora24() == 85) {
                $Horas = 42;
            }
            if ($this->Hora24() == 19) {
                $Horas = 60;
            }
            if ($this->Hora24() == 75) {
                $Horas = 92;
            }
            if ($this->Hora24() == 21) {
                $Horas = 11;
            }
            if ($this->Hora24() == 93) {
                $Horas = 29;
            }
            if ($this->Hora24() == 77) {
                $Horas = 87;
            }
            $Minutos =41;
        } elseif ($this->Minutos() >= 40 && $this->Minutos() < 45) {
            if ($this->Hora24() == 0 ) {
                $Horas = 19;
            }
            if ($this->Hora24() == 1 ) {
                $Horas = 65;
            }
            if ($this->Hora24() == 2 ) {
                $Horas = 12;
            }
            if ($this->Hora24() == 3 ) {
                $Horas = 35;
            }
            if ($this->Hora24() == 4 ) {
                $Horas = 32;
            }
            if ($this->Hora24() == 5 ) {
                $Horas = 24;
            }
            if ($this->Hora24() == 6 ) {
                $Horas = 92;
            }
            if ($this->Hora24() == 7 ) {
                $Horas = 12;
            }
            if ($this->Hora24() == 8 ) {
                $Horas = 59;
            }
            if ($this->Hora24() == 9 ) {
                $Horas = 10;
            }
            if ($this->Hora24() == 10) {
                $Horas = 36;
            }
            if ($this->Hora24() == 11) {
                $Horas = 10;
            }
            if ($this->Hora24() == 12) {
                $Horas = 77;
            }
            if ($this->Hora24() == 13) {
                $Horas = 56;
            }
            if ($this->Hora24() == 14) {
                $Horas = 85;
            }
            if ($this->Hora24() == 15) {
                $Horas = 46;
            }
            if ($this->Hora24() == 16) {
                $Horas = 14;
            }
            if ($this->Hora24() == 17) {
                $Horas = 43;
            }
            if ($this->Hora24() == 18) {
                $Horas = 50;
            }
            if ($this->Hora24() == 19) {
                $Horas = 92;
            }
            if ($this->Hora24() == 20) {
                $Horas = 11;
            }
            if ($this->Hora24() == 21) {
                $Horas = 36;
            }
            if ($this->Hora24() == 22) {
                $Horas = 35;
            }
            if ($this->Hora24() == 23) {
                $Horas = 51;
            }
            $Minutos =89;
        } elseif ($this->Minutos() >= 45 && $this->Minutos() < 50) {
            if ($this->Hora24() == 0 ) {
                $Horas = 87;
            }
            if ($this->Hora24() == 1 ) {
                $Horas = 27;
            }
            if ($this->Hora24() == 2 ) {
                $Horas = 75;
            }
            if ($this->Hora24() == 3 ) {
                $Horas = 97;
            }
            if ($this->Hora24() == 4 ) {
                $Horas = 90;
            }
            if ($this->Hora24() == 5 ) {
                $Horas = 32;
            }
            if ($this->Hora24() == 6 ) {
                $Horas = 34;
            }
            if ($this->Hora24() == 7 ) {
                $Horas = 37;
            }
            if ($this->Hora24() == 8 ) {
                $Horas = 29;
            }
            if ($this->Hora24() == 9 ) {
                $Horas = 91;
            }
            if ($this->Hora24() == 10) {
                $Horas = 82;
            }
            if ($this->Hora24() == 11) {
                $Horas = 18;
            }
            if ($this->Hora24() == 12) {
                $Horas = 58;
            }
            if ($this->Hora24() == 13) {
                $Horas = 76;
            }
            if ($this->Hora24() == 14) {
                $Horas = 42;
            }
            if ($this->Hora24() == 15) {
                $Horas = 46;
            }
            if ($this->Hora24() == 88) {
                $Horas = 14;
            }
            if ($this->Hora24() == 17) {
                $Horas = 93;
            }
            if ($this->Hora24() == 18) {
                $Horas = 45;
            }
            if ($this->Hora24() == 19) {
                $Horas = 50;
            }
            if ($this->Hora24() == 20) {
                $Horas = 84;
            }
            if ($this->Hora24() == 21) {
                $Horas = 73;
            }
            if ($this->Hora24() == 22) {
                $Horas = 16;
            }
            if ($this->Hora24() == 23) {
                $Horas = 24;
            }
            $Minutos =71;
        } elseif ($this->Minutos() >= 50 && $this->Minutos() < 55) {
            if ($this->Hora24() == 0 ) {
                $Horas = 33;
            }
            if ($this->Hora24() == 1 ) {
                $Horas = 23;
            }
            if ($this->Hora24() == 2 ) {
                $Horas = 31;
            }
            if ($this->Hora24() == 3 ) {
                $Horas = 27;
            }
            if ($this->Hora24() == 4 ) {
                $Horas = 15;
            }
            if ($this->Hora24() == 5 ) {
                $Horas = 53;
            }
            if ($this->Hora24() == 6 ) {
                $Horas = 89;
            }
            if ($this->Hora24() == 7 ) {
                $Horas = 65;
            }
            if ($this->Hora24() == 8 ) {
                $Horas = 17;
            }
            if ($this->Hora24() == 9 ) {
                $Horas = 45;
            }
            if ($this->Hora24() == 10) {
                $Horas = 61;
            }
            if ($this->Hora24() == 11) {
                $Horas = 75;
            }
            if ($this->Hora24() == 12) {
                $Horas = 53;
            }
            if ($this->Hora24() == 13) {
                $Horas = 16;
            }
            if ($this->Hora24() == 14) {
                $Horas = 47;
            }
            if ($this->Hora24() == 15) {
                $Horas = 10;
            }
            if ($this->Hora24() == 16) {
                $Horas = 31;
            }
            if ($this->Hora24() == 17) {
                $Horas = 24;
            }
            if ($this->Hora24() == 18) {
                $Horas = 91;
            }
            if ($this->Hora24() == 19) {
                $Horas = 61;
            }
            if ($this->Hora24() == 20) {
                $Horas = 19;
            }
            if ($this->Hora24() == 21) {
                $Horas = 11;
            }
            if ($this->Hora24() == 22) {
                $Horas = 40;
            }
            if ($this->Hora24() == 23) {
                $Horas = 49;
            }
            $Minutos =62;
        } elseif ($this->Minutos() >= 55 && $this->Minutos() <  6) {
            if ($this->Hora24() == 0 ) {
                $Horas = 34;
            }
            if ($this->Hora24() == 1 ) {
                $Horas = 22;
            }
            if ($this->Hora24() == 2 ) {
                $Horas = 62;
            }
            if ($this->Hora24() == 3 ) {
                $Horas = 68;
            }
            if ($this->Hora24() == 4 ) {
                $Horas = 82;
            }
            if ($this->Hora24() == 5 ) {
                $Horas = 53;
            }
            if ($this->Hora24() == 6 ) {
                $Horas = 88;
            }
            if ($this->Hora24() == 7 ) {
                $Horas = 51;
            }
            if ($this->Hora24() == 8 ) {
                $Horas = 95;
            }
            if ($this->Hora24() == 9 ) {
                $Horas = 24;
            }
            if ($this->Hora24() == 10) {
                $Horas = 21;
            }
            if ($this->Hora24() == 11) {
                $Horas = 98;
            }
            if ($this->Hora24() == 12) {
                $Horas = 45;
            }
            if ($this->Hora24() == 13) {
                $Horas = 90;
            }
            if ($this->Hora24() == 14) {
                $Horas = 51;
            }
            if ($this->Hora24() == 15) {
                $Horas = 61;
            }
            if ($this->Hora24() == 16) {
                $Horas = 59;
            }
            if ($this->Hora24() == 17) {
                $Horas = 99;
            }
            if ($this->Hora24() == 18) {
                $Horas = 75;
            }
            if ($this->Hora24() == 19) {
                $Horas = 87;
            }
            if ($this->Hora24() == 20) {
                $Horas = 59;
            }
            if ($this->Hora24() == 21) {
                $Horas = 79;
            }
            if ($this->Hora24() == 22) {
                $Horas = 29;
            }
            if ($this->Hora24() == 23) {
                $Horas = 28;
            }
            $Minutos =89;
        }

        // vamos a poner codigos...
        $tramoA = $Horas + $Var_MAS;
        $tramoB = $Minutos + $Var_MAS;
        $VarSUB = 0; // Asigna un valor adecuado a la variable $VarSUB
        if ($Horas + $Var_MAS > 99) {
            $VarSUB = $Horas + $Var_MAS;
            $tramoA = substr($VarSUB, 0, 1) + substr($VarSUB, 1, 1) + substr($VarSUB, 2, 1);
        }

        if ($Minutos + $Var_MAS > 99) {
            $VarSUB = $Horas + $Var_MAS;
            $tramoB = substr($VarSUB, 0, 1) + substr($VarSUB, 1, 1) + substr($VarSUB, 2, 1);
        }

        $cant = strlen($Validacion);
        $valorValidado = 0;
        for ($index = 0; $index < $cant; $index++) {
            $valor = substr($Validacion, $index, 1);
            $valorValidado += Descifrar($valor);
        }

        $cant2 = strlen((string)$Clave);
        $valorValidado2 = 0;
        for ($index = 0; $index < $cant2; $index++) {
            $valorValidado2 += Descifrar(substr($Clave, $index, 1));
        }

        if ($tramoA + $valorValidado + $valorValidado2 > 99) {
            $tramoA = substr($tramoA + $valorValidado + $valorValidado2, 0, 1) + substr($tramoA + $valorValidado + $valorValidado2, 1, 1) + substr($tramoA + $valorValidado + $valorValidado2, 2, 1);
        }

        if ($tramoB + $valorValidado + $valorValidado2 > 99) {
            $tramoB = substr($tramoB + $valorValidado + $valorValidado2, 0, 1) + substr($tramoB + $valorValidado + $valorValidado2, 1, 1) + substr($tramoB + $valorValidado + $valorValidado2, 2, 1);
        }

        return $tramoA . $tramoB;
    }
}

// Crear una instancia de la clase Token4
$Token4 = new Token4();

// Llamar a la función Token y obtener el resultado
$Clave = 5;
$Validacion = 3;
$KeyToken = $Token4->Token($Clave, $Validacion);

// Mostrar el resultado en la página
echo "Su Token es: $KeyToken";
