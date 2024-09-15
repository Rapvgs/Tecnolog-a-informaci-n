<?php 
    include "../conexion.php";
    $id = $_POST['id'];
    $nombre = $_POST['nombre']; 
    $nota1 = $_POST['nota1'];  
    $nota2 = $_POST['nota2']; 
    $nota3 = $_POST['nota3']; 
    $nota4 = $_POST['nota4']; 

    //consulta 
    $query = "INSERT INTO notas (nombre, nota1, nota2, nota3, nota4) VALUES ( '$nombre', '$nota1', '$nota2', '$nota3', '$nota4' )";

    $result=mysqli_query($conn,$query);

    header ("Location: ../index.php");
 
?>