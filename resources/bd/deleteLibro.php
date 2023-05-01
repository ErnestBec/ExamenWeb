<?php
include './conection.php';
$con = conectar();

$id =$_GET['id'];



$sqlDeleteLibro = "DELETE FROM corredor  WHERE  id_corredor ='$id'";

    if($consultDeleteLibro = mysqli_query($con, $sqlDeleteLibro)){
        header('location:../../listLibros.php');
    }else{
        echo "Error".$consultDeleteLibro."<br>".mysqli_error($con);
    }

mysqli_close($con);

?>