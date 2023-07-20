<?php 
include('./headerhongos.php');
$especie = $_SESSION['especie'];
if(isset($_POST['update']) && !empty($_POST['update'])){
    $ret_val = $obj->updateEspecie();
    if($ret_val == 1){
        echo '<script type="text/javascript">'; 
        echo 'alert("Record Updated Successfully");'; 
        echo 'window.location.href = "index.php";';
        echo '</script>';
    }
}
?>
<div class="container-fluid bg-3 text-center">    
  <h3>Fungi Explorer</h3>
  <a href="index.php" class="btn btn-primary pull-right" style="margin-top: -30px"><span class="glyphicon glyphicon-step-backward"></span>Back</a>
  <br>  
  <div class="panel panel-primary">
    <div class="panel-heading">Administrar Hongos</div>
    <form class="form-horizontal" method="post">
      <div class="panel-body">             
        <div class="form-group">
          <label class="control-label col-sm-2">ID Especie:<span style="color:red">*</span></label>
          <div class="col-sm-5">
            <input class="form-control" value="<?=$especie->id_especie?>" type="text" name="id" readonly>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Nombre Científico:<span style="color:red">*</span></label>
          <div class="col-sm-5">
            <input class="form-control" value="<?=$especie->nombre_cientifico?>" type="text" name="nombre_cientifico" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">ID Genero:<span style="color:red">*</span></label>
          <div class="col-sm-5">
            <input class="form-control" value="<?=$especie->id_genero?>" type="text" name="id_genero" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Habitat:<span style="color:red">*</span></label>
          <div class="col-sm-5">
            <input class="form-control" value="<?=$especie->habitat?>" type="text" name="habitat" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Cantidad:<span style="color:red">*</span></label>
          <div class="col-sm-5">
            <input class="form-control" value="<?=$especie->cantidad?>" type="number" name="cantidad" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Imagen:<span style="color:red">*</span></label>
          <div class="col-sm-5">
            <input class="form-control" value="<?=$especie->imagen?>" type="text" name="imagen" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Descripción:</label>
          <div class="col-sm-5">
            <textarea class="form-control" name="descripcion" rows="5"><?=$especie->descripcion?></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2"></label>
          <div class="col-sm-5">
            <input type="submit" class="btn btn-success" name="update" value="Update">                    
          </div>
        </div> 
      </div>      
    </form>
  </div>
</div>  
<?php include('./footerhongos.php');?>
