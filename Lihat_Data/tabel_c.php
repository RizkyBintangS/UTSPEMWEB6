<html>
    <head>
        <title>Data Seminar C</title>
        <link rel="stylesheet" href="tabel.css" />
    </head>
    <body>
        <?php
        $db = new mysqli("localhost","root","","uts");
        $result = $db->query("SELECT * FROM seminar_c");
        $db->close();
?>

    <div id="TabelDataPendaftaran">
        <table class="table">
            <tr class="tr">
                <th rowspan="2">Nama</th>
                <th colspan="2">Lahir</th>
                <th rowspan="2">No Hp</th>
                <th rowspan="2">Jenis Kelamin</th>
                <th rowspan="2">Email</th>
                <th rowspan="2">Foto</th>
            </tr>
            <tr class="tr">
                <th>Tempat</th>
                <th>Tanggal</th>
            </tr>

            <?php foreach($result as $row) { ?>
                <tr class="tr"> 
                    <td><?php echo $row["nama"]?></td>
                    <td><?php echo $row["tempatlahir"]?></td>
                    <td><?php echo $row["tanggallahir"]?></td>
                    <td><?php echo $row["nohp"]?></td>
                    <td><?php echo $row["jeniskelamin"]?></td>
                    <td><?php echo $row["email"]?></td>
                    <td><img src="/UTS/Registrasi/file/<?php echo $row["foto"];?>"width="192" height="108"></td>
                </tr>
            <?php } ?>

            <a href="/UTS/Dashboard/dashboard.php">Kembali</a>
        </table>
    </div>
    </body>
</html>
