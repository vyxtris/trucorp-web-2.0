<?php
    $username = "root";
    $password = "kunci";
    $host = "192.168.73.131";
    $db = "trucorp";
    $con = new mysqli($host, $username, $password, $db);

    if (!$con){
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
            width: fit-content;
            display: flex; 
            flex-direction: column;
            align-items: center;
            padding-top: 5%;
            margin: auto;
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