<?php require_once "class_bmi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Pasien</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <br>
    <h2 style="text-align : center;">Data Pasien</h2>
    <hr>
<form action="form_bmi.php" method="POST">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card-o"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Masukan Nama Lengkap" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="umur" class="col-4 col-form-label">Umur</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-birthday-cake"></i>
          </div>
        </div> 
        <input id="umur" name="umur" placeholder="Masukan Umur" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="radio_0" type="radio" class="custom-control-input" value="laki-laki" required="required"> 
        <label for="radio_0" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="radio_1" type="radio" class="custom-control-input" value="perempuan" required="required"> 
        <label for="radio_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="berat" class="col-4 col-form-label">Berat Badan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-balance-scale"></i>
          </div>
        </div> 
        <input id="berat" name="berat" placeholder="Masukan Berat Badan" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi" class="col-4 col-form-label">Tinggi Badan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-text-height"></i>
          </div>
        </div> 
        <input id="tinggi" name="tinggi" placeholder="Masukan Tinggi Badan" type="text" required="required" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  <form>
        <table class="table table-bordered">
            <tr class="table-primary text-uppercase">
                <th>nama</th>
                <th>umur</th>
                <th>jenis kelamin</th>
                <th>berat badan</th>
                <th>tinggi badan</th>
                <th>hasil bmi</th>
                <th>keterangan</th>
            </tr>
            <?php 
            if(isset($_POST['submit'])){
                $nama = $_POST['nama'];
                $umur = $_POST['umur'];
                $jk = $_POST['jk'];
                $berat = $_POST['berat'];
                $tinggi = $_POST['tinggi'];

                $bmi = new BMI($berat, $tinggi);
            ?>
            <tr>
                <td><?= $nama;?></td>
                <td><?= $umur;?></td>
                <td><?= $jk;?></td>
                <td><?= $berat;?></td>
                <td><?= $tinggi;?></td>
                <td><?= number_format($bmi->hasilBMI(), 1);?>
                <td><?= $bmi->statusBMI();
                ?></td>
            </tr>
            <?php } ?>
        </table>
  </form>
    </div>
</body>
</html>