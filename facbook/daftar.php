<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Facebook</title>
    <style>
        html {
            border: 10px solid gray;
            border-radius: 50px;
            background-color: whitesmoke;
            justify-content: center;
            text-align: center;
            display: flex;
            margin: 100px 400px 100px 400px;
        }

        p {
            color: black;
            text-align: center;
            margin: 0 auto;
        }

        input {
            text-align: center;
            display: flex;
            justify-content: center;
            margin: auto;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row" class="mx-auto">
            <form action="" method="POST">
                <h1>Daftar</h1>
                <p>Ini Cepat Dan Mudah</p>
                <div class="row">
                    <div class="col">
                        <input type="text" name="nama_depan" placeholder="Nama Dapan">
                    </div>
                    <div class="col">
                        <input type="text" name="nama_belakang" placeholder="Nama Belakang">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <input type="text" name="no_hp" placeholder="No Hp atau Email">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <input type="password" name="sandi" placeholder="Password">
                    </div>
                </div>
                <div class="row kontrol">
                    <div class="col">
                        <select name="tanggal" class="from-select">
                            <option selected>Tanggal</option>
                            <?php for ($i = 1; $i <= 31; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col">
                        <select name="bulan" class="from-select">
                            <option selected>Bulan</option>
                            <?php for ($i = 1; $i <= 12; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col">
                        <select name="tahun" class="from-select">
                            <option selected>Tahun</option>
                            <?php for ($i = 1905; $i <= 2022; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                First radio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">
                                Second radio
                            </label>
                        </div>
                    </div>
                </fieldset>
                <input type="submit" name="daftar" value="Daftar">
            </form>
        </div>
    </div>
</body>

</html>

<?php
var_dump($_POST);

?>