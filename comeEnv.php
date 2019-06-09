<?php
    $name = $_POST['name'];
    $com = $_POST['com'];
    date_default_timezone_set('America/Sao_Paulo');
    $date = date('d-m-Y');
    $date .= ' '.date('H:i:s');

    $con = mysqli_connect('localhost', 'root', '', 'comen');
    if($con->connect_error){
        die("Conection failed: " . $con->connect_error);
    }

    $sql = "INSERT INTO comenta(name, comentario, DH)
    VALUES ('$name', '$com', '$date')";

    if($con->query($sql) === TRUE){
        echo "Comentario enviado com sucesso!";
    }else{
        echo "Error: ". $sql . "<br>" .$con->error;
    }

    $con->close();
