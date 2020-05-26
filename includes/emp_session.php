<?php
class EmpSession{

    public function __construct(){
        session_start();
    }

    public function setCurrentEmp($user,$idEmpresa){
        $_SESSION['user'] = $user;
        $_SESSION['idEmpresa'] = $idEmpresa;
    }

    public function getCurrentEmp(){
        return $_SESSION['user'];
    }

    public function getCurrentEmpID(){
        return $_SESSION['idEmpresa'];
    }


    public function closeSession(){
        session_unset();
        session_destroy();
    }
}

?>