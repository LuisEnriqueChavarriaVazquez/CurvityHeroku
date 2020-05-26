<?php
include 'db.php';

class Emp extends DB{
    private $nombre;
    private $username;
    private $idEmpresa;


    public function empExists($user, $pass, $idEmpresa){
        $query = $this->connect()->prepare('SELECT * FROM Empresa WHERE DireccionWeb = :user AND Contra = :pass AND IDEmpresa = :idEmpresa');
        $query->execute(['user' => $user, 'pass' => $pass, 'idEmpresa' => $idEmpresa]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setEmp($user){
        $query = $this->connect()->prepare('SELECT * FROM Empresa WHERE DireccionWeb = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentEmp) {
            $this->nombre = $currentEmp['Nombre'];
            $this->username = $currentEmp['DireccionWeb'];
            $this->idEmpresa = $currentEmp['IDEmpresa'];
        }
    }

    public function getEmp(){
        return $this->nombre;
        return $this->username;
        return $this->idEmpresa;
    }
}

?>