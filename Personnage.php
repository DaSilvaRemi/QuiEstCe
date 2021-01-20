<?php
class Personnage
{

    private $_code;

    public function __construct($code)
    {
        $this->_code = $code;
    }

    public function get_code()
    {
        return $this->_code;
    }

    public function remplacement($nb)
    {
        echo("nb = $nb");
        if ($nb == 7) {
            return $this;
        } 
        elseif (substr($this->_code, $nb, 1) == "1") {
            if ($nb == 0) {
                $char1 = "";
                $char2 = substr($this->_code, $nb + 1, 6);
            } elseif ($nb == 6) {
                $char1 = substr($this->_code, 0, 6);
                $char2 = "";
            } else {
                $char1 = substr($this->_code, 0, $nb);
                $char2 = substr($this->_code, $nb+1, 6-$nb);
            }
            echo("char1 = $char1 char2 = $char2");
            $this->_code = $char1 . "0" . $char2;
        } else {
            if ($nb == 0) {
                $char1 = "";
                $char2 = substr($this->_code, $nb + 1, 6);
            } elseif ($nb == 6) {
                $char1 = substr($this->_code, 0, 6);
                $char2 = "";
            } else {
                $char1 = substr($this->_code, 0, $nb);
                $char2 = substr($this->_code, $nb+1, 6-$nb);
            }
            echo("char1 = $char1 char2 = $char2");
            $this->_code = $char1 . "1" . $char2;
        }
    }
    public function erreur()
    {
        $s1 = $this->transfert("1010101"); //retour en booléan
        $s2 = $this->transfert("0110110");
        $s3 = $this->transfert("0001111");

        if ($s1 == 0 && $s2 == 0 && $s3 == 0) {
            return 7;
        } elseif ($s1 == 1 && $s2 == 0 && $s3 == 0) {
            return 0;
        } elseif ($s1 == 0 && $s2 == 1 && $s3 == 0) {
            return 1;
        } elseif ($s1 == 1 && $s2 == 1 && $s3 == 0) {
            return 2;
        } elseif ($s1 == 0 && $s2 == 0 && $s3 == 1) {
            return 3;
        } elseif ($s1 == 1 && $s2 == 1 && $s3 == 1) {
            return 4;
        } elseif ($s1 == 0 && $s2 == 1 && $s3 == 1) {
            return 5;
        } else {
            return 6;
        }
    }

    public function transfert($chaine)
    {
        $a = 0;
        $b = 0;
        $compteur = 0;
        $temp = "";

        for ($j = 0; $j < 7; $j++) {
            $a = intval(substr($this->_code, $j, 1));
            $b = intval(substr($chaine, $j, 1));
            $temp = $temp . strval($a * $b);

            if (substr($temp, $j) == "1") {
                $compteur++;
            }
        }
        return $compteur % 2;
    }
}
?>