<style>
    #toastBox{
        width: 400px;
        height: 80px;
        background-color: lightgreen;
        font-weight: 500;
        margin: 15px 0;
        box-shadow: 0 0 20px rgba(0,0,0,0.3);
        margin-left: 75%;
    }
    #i{
        margin: 0 20px;
        font-size: 35px;
        color: green;
    }
</style>


<!DOCTYPE html>
<html lang="en">
<head>
<?php
include_once ("plantilla/head.php");
?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
<div style="margin-top: 20px; margin-left: 75%;" class="toast show">
    <div style="background-color: lightcyan;"  class="toast-header">
      <strong class="me-auto">Registro</strong>
      <a href="login.php">
        <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
      </a>
    </div>
    <div style="background-color: lightgreen;" class="toast-body">
    <p style="font-family:perpetua; font-size: 18px;"><i style="margin-top: 1%;" id="i" class="fa-solid fa-circle-check"></i>Cuenta creada exitosamente</p>
    </div>
  </div>
</div>

<?php
include_once ("plantilla/scripts.php");
?>
<script src="https://kit.fontawesome.com/c4254e24a8.js"
  crossorigin="anonymous"></script>
</body>
</html>

