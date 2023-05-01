<?php include 'Includes/header.php';
?>
<h1 class="text-light">Lista libros User </h1>
<div class="container-coards">
    <?php

include_once './resources/bd/conection.php';
$con = conectar();
           
$sqlExistLibros = "SELECT  Nombre, Edad, Peso FROM corredor";
$consultExistLibros = mysqli_query($con, $sqlExistLibros);
//$responseExistLibros= mysqli_fetch_array($consultExistLibros);
//if($responseExistLibros){
//return $responseExistLibros;
while($responseExistLibros= mysqli_fetch_array($consultExistLibros)){
?>

    <div class="container-fluid row d-flex justify-content-center">
        <div class="card m-4" style="width: 18rem;">
            <p class="text-light mt-3">Informacion de Corredor</p>

            <div class="card-body text-light">
                <span>Corredor:</span>
                <h5 class="card-title d-flex justify-content-center">
                    <?php echo $responseExistLibros['Nombre']?>
                </h5>
                <span>Edad:</span>
                <p class="card-text d-flex justify-content-center">
                    <?php echo $responseExistLibros['Edad']?>
                </p>
                <span>Peso:</span>
                <p class="card-text d-flex justify-content-center">
                    <?php echo $responseExistLibros['Peso']?>
                </p>
                <a href="#" class="btn btn-warning">Estadisticas</a>

            </div>
        </div>

    </div>
    <?php
//   }else{
//     return $errExistLibros = "No existen libros Registrados";
// }
// mysql_close($con);
}
?>
</div>

<?php include 'Includes/footer.php';?>