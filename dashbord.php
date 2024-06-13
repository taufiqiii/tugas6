<?php
session_strart();
if ($_SESSION['status']=="Login"){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        .profile-image {
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-radius: 50%;
        }
        .bio {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<p><a herf="logout.php">keluar</a></p>

<div class="container">
                    <img src="img/profil.jpg" alt="Foto Profil" class="profile-image" height="200">
                    <div class="bio">
                        <h2>Nama: Muhammad Taufiqi Romadhon</h2>
                        <p>Umur: 21 tahun</p>
                        <p>Alamat: Jl. Demak</p>
                        <p>Pendidikan: S1 Sistem Informasi</p>
                    </div>
                    </div>

</body>
</html>
<?php
} else {
    echo " maaf anda belum login";
}
?>