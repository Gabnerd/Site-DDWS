<html>

<head>
    <meta charset="utf-8">
    <title>GCS - Comentarios</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body bgcolor="black" style="color: green;">
    <table>
        <tr>
            <td><a href="javascript:history.back();"><img src="image/voltar.png" onmouseout="this.src='image/voltar.png'" onmouseover="this.src='image/voltar_hover.png'" width="100px" /></a></td>
            <td><a href="RegCom.html">Deixar um comentario</a></td>
        </tr>
        <tr>
            <td><p>Sessão de Comentarios</p></td>
        </tr>
    </table>
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
            <table border="1">
                <tr>
                    <td style="font-size: 13px; color: blueviolet;"><?php echo $row["name"] ?></td>
                </tr>
                <tr>
                    <td style="color: green;"><?php echo $row["comentario"] ?></td>
                </tr>
                <tr>
                    <td style="color: green; font-size: 10px"><?php echo $row["DH"] ?></td>
                </tr>
                <br />
            </table>
        <?php
    }
}
?>
</body>

</html>