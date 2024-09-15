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
    <!-- Formulario -->
    <div class="formulario"><center><h3>Nuevo registro</h3></center><br>
    <form action="crud/create.php" method="post">

        <div class="mb-3" hidden>
            <label for="exampleFormControlInput1" class="form-label" >Id</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Id" name="id">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" >Nombre</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre" name="nombre">
        </div>
        
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" >Nota 1</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nota 1" name="nota1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" >Nota 2</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nota 2" name="nota2">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" >Nota 3</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nota 3" name="nota3">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" >Nota 4</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nota 4" name="nota4">
        </div>

        <div class="col-auto">
            <button type="text" class="btn btn-success mb-3">Guardar</button>
            <button type="reset" class="btn btn-danger mb-3">Cancelar</button>
        </div> 

    </form>
    </div>

    <!-- Datos -->
       <div class="datos"><center><h3>Notas de alumnos</h3></center><br>
          <?php include ("crud/read.php") ?>
       </div>
    
    </div>



 <!-- Bootstrap -->    
<script src="bootstrap/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>   
</body>
</html>