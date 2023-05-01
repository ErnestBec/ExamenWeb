<?php
include './conection.php';
$con = conectar();

$id =$_GET['id'];
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$peso = $_POST['peso'];



$sqlUpdateLibro = "UPDATE  corredor SET id_corredor =$id,Nombre='$nombre', Edad = '$edad', Peso='$peso' WHERE  id_corredor ='$id'";

    if($consulUpdateLibro = mysqli_query($con, $sqlUpdateLibro)){
        header('location:../../listLibros.php');
    }else{
        echo "Error".$consultUpdateLibro."<br>".mysqli_error($con);
    }

mysqli_close($con);

?>