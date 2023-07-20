<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/script1.js"></script>
    <script src="../js/script.js"></script>
    <link rel="stylesheet" href="../css/main.css">

    <title>Registro Fungí</title>
</head>

<body>

    <nav class="navbar">
        <div class="navbar-logo">
            <img src="../img/logo-fungi.png" alt="Logo">
        </div>
        <h1 class="navbar-title">FUNGI EXPLORER</h1>
    </nav>

    <aside class="sidebar">
        <div class="logo">
        </div>
        <ul class="menu">
            <li><a href="#" onclick="cambiarContenido(event, 'contenido-hongos')" class="nav-button">Hongos</a></li>
            <li><a href="#" onclick="cambiarContenido(event, 'contenido-usuarios')" class="nav-button">Usuarios</a></li>
        </ul>
    </aside>

    <main class="content-container">

        <section id="contenido-hongos">
            
        <?php
include('../php/headerhongos.php');
$db_classh = new Db_ClassHongo($conn);
$especies = $db_classh->getEspecies();
$sn = 1;

if(isset($_POST['update']))
{
    $especie = $db_classh->getEspecieById($_POST['id']);
    $_SESSION['especie'] = $especie;
    header('location:edituser.php');
}
if(isset($_POST['updatehongo']))
{
    $especie = $db_classh->getEspecieById($_POST['id']);
    $_SESSION['especie'] = $especie;
    header('location:edithongos.php');
}
if(isset($_POST['delete']))
{
    $ret_val = $db_classh->deleteEspecie($_POST['id']);
    if($ret_val == 1)
    {
        echo "<script language='javascript'>";
        echo "alert('Record Deleted Successfully')";
        echo "window.location.reload();";
        echo "</script>";
    }
}
?>
<div class="container-fluid bg-3 text-center">

    <h3>Gestionar Registro Hongos</h3>
    <a href="./inserthongos.php" class="btn btn-primary pull-right" style="margin-top: -30px"><span class="glyphicon glyphicon-plus-sign"></span>Añadir Registro</a>
    <br>
    <div class="panel panel-primary">
        <div class="panel-heading">Fungi Explorer</div>
        <div class="panel-body">
            <?php if(!empty($especies)): ?>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="active">
                        <th>ID Especie</th>  
                        <th>Nombre Científico</th>       
                        <th>ID Genero</th>
                        <th>Habitat</th>
                        <th>Cantidad</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($especies as $especie): ?>   
                    <tr align="left">
                        <td><?= $especie->id_especie ?></td>
                        <td><?= $especie->nombre_cientifico ?></td>
                        <td><?= $especie->id_genero ?></td>
                        <td><?= $especie->habitat ?></td>
                        <td><?= $especie->cantidad ?></td>
                        <td><?= $especie->descripcion ?></td>
                        <td>
                            <form method="post">
                                <input type="submit" class="btn btn-success" name="updatehongo" value="Actualizar">   
                                <input type="submit" onclick="return confirm('Please confirm deletion');" class="btn btn-danger" name="delete" value="Eliminar">
                                <input type="hidden" value="<?= $especie->id_especie ?>" name="id">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>   
                </tbody>
            </table>
            <?php else: ?>
            <p>No existen hongos registrados.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php include('../php/footerhongos.php');?>



        </section>
        
        <section id="contenido-usuarios" style="display: none;">
   
       <?php
include('../php/headeruser.php');
$db_class = new Db_ClassUser($conn);
$users = $db_class->getUsers();
$sn = 1;
if(isset($_POST['update']))
{
    $user = $db_class->getUserByCedula();
    $_SESSION['user'] = $user[0];
    header('location:edituser.php');
}
if(isset($_POST['delete']))
{
    $ret_val = $db_class->deleteUser();
    if($ret_val == 1)
    {
        echo "<script language='javascript'>";
        echo "alert('Record Deleted Successfully')";
        echo "window.location.reload();";
        echo "</script>";
    }
}
?>


<div class="container-fluid bg-3 text-center">
    <h3>Gestionar Usuarios</h3>
    <a href="./insertuser.php" class="btn btn-primary pull-right" style="margin-top: -30px"><span class="glyphicon glyphicon-plus-sign"></span>Add Record</a>
    <br>
    <div class="panel panel-primary">
        <div class="panel-heading">Gestionar Registro Usuarios</div>
        <div class="panel-body">
            <?php if(!empty($users)): ?>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="active">
                        <th>Cédula Usuario</th>  
                        <th>Nombre Usuario</th>       
                        <th>Email</th>
                        <th>Fecha de Registro</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
             
                <tbody>
                <?php foreach ($users as $user): ?>   
                    <tr align="left">
                        <td><?= $user->cedulausuario ?></td>
                        <td><?= $user->nombreuser ?></td>
                        <td><?= $user->emailuser ?></td>
                        <td><?= $user->fecha_registro ?></td>
                        <td>
                            <form method="post">
                                <input type="submit" class="btn btn-success" name="update" value="Actualizar">   
                                <input type="submit" onclick="return confirm('Please confirm deletion');" class="btn btn-danger" name="delete" value="Delete">
                                <input type="hidden" value="<?= $user->cedulausuario ?>" name="cedula">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>   
                </tbody>
            </table>
            <?php else: ?>
            <p>No se encontraron usuarios.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php include('../php/footeruser.php');?>

        </section>

    </main>



    
    <script src="https://kit.fontawesome.com/a8638e0a1d.js" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
</body>

</html>
