<?php
include './conection.php';
$con = conectar();

$nombre = $_POST['Nombre'];
$edad = $_POST['Edad'];
$peso = $_POST['Peso'];



$sqlExistLibro = "SELECT Nombre FROM corredor WHERE Nombre='".$nombre."'";
$consultExistLibro = mysqli_query($con, $sqlExistLibro);
$responseExistLibro = mysqli_fetch_array($consultExistLibro);

if(!$responseExistLibro){
    
    // Generamos id aleatorio para libro
    $numero=rand(1,1000);
    $idLibro = date("d-m-Y").$numero;

    $consultCreateLibro ="INSERT INTO corredor VALUES('$numero','$nombre','$edad','$peso')";
    
    if(mysqli_query($con,$consultCreateLibro)){
        header('location:../../listLibros.php');
    }else{
        echo "Error".$consultCreateLibro."<br>".mysqli_error($con);
    }
}else{
    echo "El libro ya existe";
}
mysqli_close($con);

?>