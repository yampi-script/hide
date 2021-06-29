<?php

class Service {

    private $servicio;
    private $db;

    public function __construct() {
        $this->servicio = array();
        $this->db = new PDO('mysql:host=localhost;dbname=pixcodec_segob', "pixcodec_segob", "Segob2021");
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getServicios() {




        self::setNames();
        $sql = "SELECT id, operador, pcontacto, area, cargo, mail, telofi, ext, telextra,
        pcontacto2, area2, cargo2, mail2, telofi2, ext2, telextra2, personal_p1_invyanali_M,
        personal_p1_invyanali_H, personal_p1_invyanali_T, personal_p1_inte_M,personal_p1_inte_H,
        personal_p1_inte_T  FROM policias";
        foreach ($this->db->query($sql) as $res) {
            $this->servicio[] = $res;
        }
        return $this->servicio;
        $this->db = null;
    }

    public function setServicio($operador, $pcontacto, $area, $cargo, $mail, $telofi, $ext, $telextra,
  $pcontacto2, $area2, $cargo2, $mail2, $telofi2, $ext2, $telextra2,
  $personal_p1_invyanali_M, $personal_p1_invyanali_H,$personal_p1_invyanali_T,
  $personal_p1_inte_M, $personal_p1_inte_H, $personal_p1_inte_T
) {

        self::setNames();
        $sql = "INSERT INTO policias(operador, pcontacto, area, cargo, mail, telofi, ext, telextra,
        pcontacto2, area2, cargo2, mail2, telofi2, ext2, telextra2,
        personal_p1_invyanali_M, personal_p1_invyanali_H, personal_p1_invyanali_T,
        personal_p1_inte_M, personal_p1_inte_H, personal_p1_inte_T )
        VALUES
        ('" . $operador . "','" . $pcontacto . "', '" . $area . "', '" . $cargo . "', '" . $mail . "', '" . $telofi . "'
        , '" . $ext . "', '" . $telextra . "',
        '" . $pcontacto2 . "', '" . $area2 . "', '" . $cargo2 . "', '" . $mail2 . "',
        '" . $telofi2 . "', '" . $ext2 . "', '" . $telextra2 . "',
        '" . $personal_p1_invyanali_M . "', '" . $personal_p1_invyanali_H . "', '" . $personal_p1_invyanali_T . "',
        '" . $personal_p1_inte_M . "', '" . $personal_p1_inte_H . "', '" . $personal_p1_inte_T . "'
)";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
?>
