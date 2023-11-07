<?php

namespace App\Controllers;

use App\Models\nodemcuModelo;
use App\Models\caudalModelo;


class RecibirNodemcu extends BaseController
{
    public function recibirDatos()
    {
        $idNodemcu = $this->request->getVar('dato1');

        $nodemcuModelo = new nodemcuModelo();
        $resultado = $nodemcuModelo->selectDatos($idNodemcu);

        $response = [
            'tiempoDucha' => $resultado['TiempoDucha'],
            'tiempoEspera' => $resultado['TiempoEspera'],
            'tiempoTolerancia' => $resultado['TiempoTolerancia'],
        ];
        // Procesa los datos o realiza cualquier otra acción que necesites
        // Devolver una respuesta al Arduino como JSON

        return $this->response->setJSON($response);
    }

    public function recibirCaudalimetro()
    {
        $caudal = $this->request->getVar('dato1');
        $mac = $this->request->getVar('dato2');

        //$mac = "asbbdcs";
        //$caudal = "csdc";
    if($caudal == 0){
        return $this->response->setJSON($caudal);
    }

    $res = $caudal/100000;
        $datos = [
            'Caudal' => $res,
            'IdNodemcu' => $mac,
        ];

        $caudalModelo = new caudalModelo();
        $caudalModelo->insertarCaudal($datos);

        return $this->response->setJSON($caudal);
        //echo $caudal;
        //echo $mac;
    }

    public function recibirMAC()
    {
        $MAC = $this->request->getVar('dato1');

        $nodemcuModelo = new nodemcuModelo();

        $nodemcuModelo->insertarMAC($MAC);
    }
}

?>