<?php 
include('./headeruser.php');
$user = $_SESSION['user'];
if(isset($_POST['update']) && !empty($_POST['update'])){
    $ret_val = $obj->updateUser();
    if($ret_val == 1){
        echo '<script type="text/javascript">'; 
        echo 'alert("Record Updated Successfully");'; 
        echo 'window.location.href = "index.php";';
        echo '</script>';
    }
}
?>
<div class="container-fluid bg-3 text-center">    
  <h3>Fungi ExplorerL</h3>
  <a href="index.php" class="btn btn-primary pull-right" style="margin-top: -30px"><span class="glyphicon glyphicon-step-backward"></span>Back</a>
  <br>  
  <div class="panel panel-primary">
    <div class="panel-heading">Fungi Explerer</div>
    <form class="form-horizontal" method="post">
      <div class="panel-body">             
        <div class="form-group">
          <label class="control-label col-sm-2">Cédula Usuario:<span style="color:red">*</span></label>
          <div class="col-sm-5">
            <input class="form-control" value="<?=$user->cedulausuario?>" type="text" name="cedula" readonly>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Nombre de Usuario:<span style="color:red">*</span></label>
          <div class="col-sm-5">
            <input class="form-control" value="<?=$user->nombreuser?>" type="text" name="name" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Email:<span style="color:red">*</span></label>
          <div class="col-sm-5">
            <input class="form-control" value="<?=$user->emailuser?>" type="email" name="email" required>
          </div>
        </div>            
        <div class="form-group">
          
  
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
<?php include('./footeruser.php');?>
