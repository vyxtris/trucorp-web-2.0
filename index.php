<?php
    $username = "root";
    $password = "";
    $host = "localhost";
    $db = "Trucorp";
    $con = mysqli_connect($host, $username, $password, $db);

    if (!$link){
        echo "failed to connect to mysql";
        die("database connection error");
    }
    $res = $con->query("SELECT * FROM users");
    $rows = array();
    while($row = mysqli_fetch_assoc($res)){
        $rows [] = $row;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trucorp</title>
    <style>
        .box{
            display: flex; 
            justify-content: center; 
            padding-top: 5%;
        }
        table, th, td{
            border: 1px solid;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Trucorp Web 2.0</h2>
        <table>
            <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Jabatan</td>
            </tr>
            <?php
            foreach($rows as $r):
                ?>
        <tr>
            <td><?= $r['ID'] ?></td>
            <td><?= $r['Nama'] ?></td>
            <td><?= $r['Alamat'] ?></td>
            <td><?= $r['Jabatan'] ?></td>
        </tr>
        
        <?php
            endforeach;
        ?>
        </table>
    </div>
</body>
</html>