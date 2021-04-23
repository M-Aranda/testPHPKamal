<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        session_start();
        require_once("../model/Data.php");
        require_once("../model/Usuario.php");
        require_once("../model/Perfil.php");
        ?>

        <table id=tablaUsuarios border=default>
            <tr>
                <th>Usuario</th>
                <th>Nombres</th>
                <th>A.Paterno</th>
                <th>A.Materno</th>
                <th>Email</th>
                <th>Perfil Usuario</th>
                <th>Estado</th>
                <th>Opciones</th>

                <?php
                $d = new Data();
                $listadoDeUsuarios = $d->listarUsuarios();

                foreach ($listadoDeUsuarios as $u) {

                    $estado = "Inactivo";
                    if ($u->getEstado() == 1) {
                        $estado = "Activo";
                    }

                echo "</tr>
                <td>" . $u->getUsuario() . "</td>
                <td>" . $u->getNombres() . "</td>
                <td>" . $u->getAp_paterno() . "</td>
                <td>" . $u->getAp_materno() . "</td>
                <td>" . $u->getEmail() . "</td>
                <td>" . $u->getPerfil()->getPerfil() . "</td>
                <td>" . $estado . "</td>
                <td></td>
                </tr>";
                }
                ?>
            </tr>
        </table>
        <br>



    </body>
</html>
