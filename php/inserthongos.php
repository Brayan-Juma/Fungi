<?php 
include('./headerhongos.php');
if(isset($_POST['submit']) && !empty($_POST['submit'])){
    $ret_val = $obj->createEspecie();
    if($ret_val == 1){
        echo '<script type="text/javascript">'; 
        echo 'alert("Record Saved Successfully");'; 
        echo 'window.location.href = "index.php";';
        echo '</script>';
    }
}
?>
<div class="container-fluid bg-3 text-center">    
  <h3>Fungi Explorer</h3>
  <a href="index.php" class="btn btn-primary pull-right" style="margin-top: -30px"><span class="glyphicon glyphicon-eye-open"></span> View Records</a>
  <br>
  
  <div class="panel panel-primary">
        <div class="panel-heading">Fungi Explorer</div>
        <form class="form-horizontal" method="post">
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label col-sm-2">Nombre Científico:<span style="color:red">*</span></label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" name="nombre_cientifico" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">ID Genero:<span style="color:red">*</span></label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" name="id_genero" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Habitat:<span style="color:red">*</span></label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" name="habitat" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Cantidad:<span style="color:red">*</span></label>
                    <div class="col-sm-5">
                        <input class="form-control" type="number" name="cantidad" required>
                    </div>
                </div>
                <div class="form-group">

                    <label class="control-label col-sm-2">Imagen:<span style="color:red">*</span></label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" name="imagen" required>
                    </div>

                </div>


                <div class="form-group">
                    <label class="control-label col-sm-2">Descripción:</label>
                    <div class="col-sm-5">
                        <textarea class="form-control" name="descripcion" rows="5"></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2"></label>
                    <div class="col-sm-5">
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </div>
                </div> 
            </div>      
        </form>
    </div>
</div>  
<?php include('./footerhongos.php');?>
