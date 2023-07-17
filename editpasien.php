<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-
scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">


    <title>Edit Data Pasien</title>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Edit Data Pasien</h3>
                <?php
include 'koneksi.php';
$panggil = $koneksi->query("SELECT * FROM pasien where idPasien='$_GET[edit]'");
?>
                <?php
while ($row = $panggil->fetch_assoc()) {
?>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="idPasien">ID Pasien</label>

                        <input type="text" class="form-control mb-
3" name="idPasien" value="<?= $row['idPasien'] ?>" readonly>

                    </div>

                    <div class="form-group">
                        <label for="nmPasien">Nama Pasien</label>

                        <input type="text" class="form-control mb-
3" name="nmPasien" value="<?= $row['nmPasien'] ?>">

                    </div>

                    <div class="form-group">

                        <label for="jk">Jenis Kelamin</label>
                        <div class="form-check">

                            <input type="radio" class="form-check-
input" name="jk" value="perempuan" <?php if (($row['jk']) === "perempuan") {
echo "checked";
} ?>> Perempuan
                        </div>

                        <div class="form-check">

                            <input type="radio" class="form-check-
input" name="jk" value="laki-laki" <?php if (($row['jk']) === "laki-
laki") {echo "checked";} ?>> Laki-laki
                        </div>
                        <div class="form-group mt-3">
                            <label form="alamat">Alamat</label>

                            <textarea class="form-control" name="alamat" id="alamat" cols="5" rows="3"
                                placeholder="Alamat"><?= $row['alamat'] ?></textarea>
                        </div>

                        <div class="form-group mt-3">

                            <input type="submit" name="edit" value="Edit" class="form-control btn btn-primary">
                        </div>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>