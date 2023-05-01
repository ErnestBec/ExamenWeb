<?php include 'Includes/header.php';
?>
<div class="bg-dark">

    <!-- Crousel -->
    <div>
        <div id="carouselExample" class="carousel slide ">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="resources/img/biblioteca-slider2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="resources/img/biblioteca-slider3.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="resources/img/biblioteca-slider3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Cards -->
    <h1>
        Contamos con los siguientes Libros
    </h1>
    <div class="container-fluid row d-flex justify-content-center">
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
</div>
<?php include 'Includes/footer.php';?>