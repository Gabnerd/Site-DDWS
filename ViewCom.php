<html>

<head>
    <meta charset="utf-8">
    <title>GCS - Comentarios</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
    <a href="RegCom.html">Deixar um comentario</a><br><br>
    <?php
    $con = mysqli_connect('localhost', 'root', '', 'comen');
    if ($con->connect_error) {
        die("Conection failed: " . $con->connect_error);
    }

    $sql = "SELECT * FROM comenta";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <table width="30%">
                <tr>
                    <td style="font-size: 13px; color: blueviolet"><?php echo $row["name"] ?></td>
                </tr>
                <tr>
                    <td><?php echo $row["comentario"] ?></td>
                </tr>
                <tr>
                    <td style="font-size: 10px"><?php echo $row["DH"] ?></td>
                </tr>
                    <br><br>
            </table>
        <?php
    }
}
?>
</body>

</html>