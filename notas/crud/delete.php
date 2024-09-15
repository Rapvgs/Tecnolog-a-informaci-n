<?php
 include "../conexion.php";

  $id = $_GET['id'];  

    // consulta
    $query = "DELETE FROM notas WHERE id='$id' ";
    $result=mysqli_query($conn,$query);               
    header ("Location: ../index.php");

?>