<?php

require_once("../model/Data.php");
require_once("../model/Usuario.php");
require_once("../model/Perfil.php");

$data = new Data();


$id_usuario = isset($_REQUEST['id_usuario'])?$_REQUEST['id_usuario']:"";

$u =  $data->getUsuarioAAlterar($id_usuario);

        $usuarioParaJSON = array();
        
          $estado = "Activo";
            if ($u->getEstado() == 0) {
                $estado = "Inactivo";
            }
            
            $usuarioParaArray = array("id_usuario" => $u->getId_usuario(), "Perfil Usuario" => $u->getPerfil()->getPerfil(), "Usuario" => $u->getUsuario(), "Nombres" => $u->getNombres(), "APaterno" => $u->getAp_paterno(), "AMaterno" => $u->getAp_materno(), "Email" => $u->getEmail(), "Estado" => $estado);
            array_push($usuarioParaJSON, $usuarioParaArray);
        


echo json_encode($usuarioParaJSON);


?>