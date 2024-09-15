<?php
 include "conection.php";

$id = $_GET['id'];  

        $query="SELECT *FROM notas WHERE id='$id' ";
                    $result=mysqli_query($conn,$query);
                    while($row = mysqli_fetch_array($result))
                        {  
                            $id = $row['id'];       
                            $foto = $row['foto'];
                        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap -->    
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet" >
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
    
    <title>Sistema de notas</title>
</head>
<body>
    <div class="contenedor">
    </div>
        <?php
         header ("Location: ../../views/admin.php");
        ?>
    </div>


 <!-- Bootstrap -->    
<script src="bootstrap/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>   
</body>
</html>