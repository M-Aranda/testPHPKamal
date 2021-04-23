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

        <script type="text/javascript"  src="../JQuery/JQuery.js"></script>  <!--  este js funciona bien -->
  <!--<script language="JavaScript"  src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>  este es el CDN de jquery-->

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script> <!-- Sweet Alert -->






    </head>
    <body>
        <?php
        // put your code here
        session_start();
        require_once("../model/Data.php");
        require_once("../model/Usuario.php");
        require_once("../model/Perfil.php");
        ?>

        

        <table id="tablaUsuarios" class="display">
            <thead>
               <tr>
                <th>Usuario</th>
                <th>Nombres</th>
                <th>A.Paterno</th>
                <th>A.Materno</th>
                <th>Email</th>
                <th>Perfil Usuario</th>
                <th>Estado</th>
                <th>Opciones</th>
               </tr>
            </thead>
              <tbody>
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
                <td> <button id='BotonModificar' value=" . $u->getId_usuario() . ">Modificar</button></td>
                <td><button id='BotonEliminar' value=" . $u->getId_usuario() . ">Eliminar</button> </td>
                </tr>";
                }
                ?>
            </tbody> 
        </table>


       

        <br>


        
                <script>


            
            

        



function agregarUsuario() {
  Swal.fire('Any fool can use a computer')
}


            
            $(document).ready(function () {
            $('#tablaUsuarios').DataTable();
            });
            
       /*     Swal.fire({
            title: 'Agregar usuario',
                    html: `<input type="text" id="usuario" class="swal2-input" placeholder="ej: usuario31">
                    <input type="text" id="nombres" class="swal2-input" placeholder="ej: Feliper Andres">
                    <input type="text" id="a_paterno" class="swal2-input" placeholder="ej: Zaldivar">
                    <input type="text" id="a_materno" class="swal2-input" placeholder="ej: Norambuena">
                    <input type="text" id="email" class="swal2-input" placeholder="ej: nmbn@gmail.com">
                    <select id="cmbPerfil" name="cmbPerfil" >
                      <option value="1">Administrador</option>
                      <option value="2">Usuario normal</option>
                      <option value="3">Supervisor</option>
                    </select>
                    <select id="cmbEstado" name="cmbEstado" >
                      <option value="1">Activo</option>
                      <option value="2">Inactivo</option>
                    </select>`,
                    confirmButtonText: 'Guardar',
                    cancelButton: 'Volver'
                    )}


*/

        </script>


    </body>
</html>
