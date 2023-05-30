
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Kegiatan Seminar</title>
    <link rel="stylesheet" href="dashboard.css"/>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>

<body>
    <nav>
        <div class="logo">
            <span class="logo-name">Daftar Kegiatan</span>
        </div>
        <div class="logo-log">
            <a href="/UTS/index.php" data-toggle="tooltip">Log Out<i class="bx bx-exit"></i></a>
        </div>
    </nav>
    <section class="overlay"></section>

    <table class="tabel">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kegiatan <i></i></th>
                        <th>Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Seminar A</td>
                        <td>
                            <a href="/UTS/Lihat_Data/tabel_a.php" data-toggle="tooltip"><i class="material-icons">&#xE417;</i>Lihat Daftar</a>
                            <a href="/UTS/Registrasi/regis_a.php" data-toggle="tooltip"><i class="material-icons">&#xE254;</i>Registrasi</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Seminar B</td>
                        <td>
                            <a href="/UTS/Lihat_Data/tabel_b.php" data-toggle="tooltip"><i class="material-icons">&#xE417;</i>Lihat Daftar</a>
                            <a href="/UTS/Registrasi/regis_b.php" data-toggle="tooltip"><i class="material-icons">&#xE254;</i>Registrasi</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Seminar C</td>
                        <td>
                            <a href="/UTS/Lihat_Data/tabel_c.php" data-toggle="tooltip"><i class="material-icons">&#xE417;</i>Lihat Daftar</a>
                            <a href="/UTS/Registrasi/regis_c.php" data-toggle="tooltip"><i class="material-icons">&#xE254;</i>Registrasi</a>
                        </td>
                    </tr>
                </tbody>
            </table>
    </div>
</body>

</html>