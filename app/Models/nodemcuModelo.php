<?php
namespace App\Models;

use CodeIgniter\Model;

class NodemcuModelo extends Model
{
    protected $table = 'nodemcu';
    protected $primaryKey = 'IdNodemcu';
    protected $allowedFields = ['IdUsuario', 'IdNodemcu', 'TiempoDucha', 'TiempoEspera', 'TiempoTolerancia', 'Nombre'];

    public function insertarMAC($MAC)
    {
        $sql = $this->db->query("SELECT IdNodemcu FROM nodemcu WHERE IdNodemcu = '{$MAC}'");
        $resultado = $sql->getRowArray();
        var_dump($resultado);
        if ($resultado == null) {
            $registrar = $this->db->table('nodemcu');
            $registrar->insert(['IdNodemcu' => $MAC]);
        }
    }

    public function compararMAC($mac)
    {
        // Ejecuta la consulta para obtener el resultado de la base de datos.
        $consulta = $this->db->query("SELECT IdUsuario FROM nodemcu WHERE IdNodemcu = '{$mac}'");
        $resultado = $consulta->getRow();
        if ($resultado == null || $resultado->IdUsuario > 0) {
            return false;
        } else {
            return true;
        }
    }

    public function registrarMac($idUsuario, $nombre, $mac)
    {
        $sql = "UPDATE nodemcu SET IdUsuario = ?, Nombre = ? WHERE IdNodemcu = ?";
        $this->db->query($sql, [$idUsuario, $nombre, $mac]);
    }

    public function agregarDatos($datos)
    {
        $consulta = $this->db->query("UPDATE nodemcu SET TiempoDucha = ?, TiempoEspera = ?, TiempoTolerancia = ? WHERE IdNodemcu = ?", [$datos['TiempoDucha'], $datos['TiempoEspera'], $datos['TiempoTolerancia'], $datos['IdNodemcu']]);
        if ($consulta) {
            // La consulta de actualización fue exitosa, ahora obtén los datos actualizados.
            $datosActualizados = $this->db->query("SELECT TiempoDucha, TiempoEspera, TiempoTolerancia FROM nodemcu WHERE IdNodemcu = ?", [$datos['IdNodemcu']])->getRowArray();
            return $datosActualizados;
        } else {
            // Si la consulta de actualización falla, puedes manejar el error aquí.
            return false;
        }
    }
    public function selectPlacas($idUser)
    {
        $sql = $this->db->query("SELECT * FROM nodemcu WHERE IdUsuario = '{$idUser}'");
        $resultado = $sql->getResult();
        return $resultado;
    }

    public function selectDatos($idNodemcu)
    {
        $sql = $this->db->query("SELECT TiempoDucha, TiempoEspera, TiempoTolerancia FROM nodemcu WHERE IdNodemcu = '{$idNodemcu}'");
        $resultado = $sql->getRowArray();
        return $resultado;
    }

    public function agregarDispositivo($datos)
    {
        $sql = "UPDATE nodemcu SET IdUsuario = ?, TiempoDucha = ?, TiempoEspera = ?, TiempoTolerancia = ?, Nombre = ? WHERE IdNodemcu = ?";
        $this->db->query($sql, [$datos['IdUsuario'], $datos['TiempoDucha'], $datos['TiempoEspera'], $datos['TiempoTolerancia'], $datos['Nombre'], $datos['IdNodemcu']]);
    }

    public function eliminarDispositivo($datos)
    {
        $sql =  $this->db->query("DELETE FROM nodemcu WHERE IdUsuario = '{$datos['IdUsuario']}' AND IdNodemcu = '{$datos['IdNodemcu']}'");
    }
}