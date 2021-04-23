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




        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

        <script type="text/javascript"  src="../JQuery/JQuery.js"></script>


<!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  este es el CDN de jquery-->



        <script>
            $(document).ready(function () {
                $("p").click(function () {
                    $(this).hide();
                });
            });


        </script>



    </head>
    <body>
        <?php
        // put your code here
        session_start();
        require_once("../model/Data.php");
        require_once("../model/Usuario.php");
        require_once("../model/Perfil.php");
        ?>

        <table id="tablaUsuarios">
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
                <td> </td>
                </tr>";
                }
                ?>
            </tr>
        </table>

        <table id="yolo" class="display">
            <thead>
                <tr>
                    <th>Column 1</th>
                    <th>Column 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                </tr>
                <tr>
                    <td>Row 2 Data 1</td>
                    <td>Row 2 Data 2</td>
                    <td><button id="boton">LOLZ</button></td>
                </tr>
            </tbody>
        </table>
        <br>

        <p>If you click on me, I will disappear.</p>
        <p>Click me away!</p>
        <p>Click me too!</p>



    </body>
</html>
