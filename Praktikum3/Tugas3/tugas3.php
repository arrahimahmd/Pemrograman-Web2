<?php
$domisili = ["Jakarta", "Bogor", "Depok", "Bekasi", "Tangerang"];

$program_studi = [
    "SI"=>"Sistem Informasi",
    "TI"=>"Teknik Informatika",
    "BD"=>"Bisnis Digital"
];

$skills = [
    "HTML"=>10,
    "CSS"=>10,
    "JavaScript"=>20,
    "PHP"=>30,
    "Python"=>30,
];
?>
<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h2>Form Registrasi IT Club GDSC</h2>
        <form method="POST">
        <div class="form-group row">
            <label for="nim" class="col-4 col-form-label">NIM</label> 
            <div class="col-8">
            <input id="nim" name="nim" placeholder="Masukkan NIM" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
            <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label> 
            <div class="col-8">
            <input id="email" name="email" placeholder="Masukkan Email" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label> 
            <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="Pria" required="required"> 
                <label for="jenis_kelamin_0" class="custom-control-label">Pria</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="Wanita" required="required"> 
                <label for="jenis_kelamin_1" class="custom-control-label">Wanita</label>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="domisili" class="col-4 col-form-label">Domisili</label> 
            <div class="col-8">
            <select id="domisili" name="domisili" class="custom-select" required="required">
                <?php foreach($domisili as $dom){ ?>
                    <option value="<?= $dom; ?>"><?= $dom; ?></option>
                <?php } ?>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="program_studi" class="col-4 col-form-label">Program Studi</label> 
            <div class="col-8">
            <select id="program_studi" name="program_studi" class="custom-select" required="required">
            <?php foreach($program_studi as $key => $value){ ?>
                <option value="<?= $key; ?>"><?= $value; ?></option>
            <?php } ?>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Skill Programming</label> 
            <div class="col-8">
            <?php foreach($skills as $key=> $value){ ?>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skills[]" id="<?= $key; ?>" type="checkbox" class="custom-control-input" value="<?= $key; ?>"> 
                    <label for="<?= $key; ?>" class="custom-control-label"><?= $key; ?></label>
                </div>
            <?php } ?>
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
        <table class="table table-bordered">
            <tr class="table-primary text-uppercase">
                <th>nim</th>
                <th>nama</th>
                <th>email</th>
                <th>jenis kelamin</th>
                <th>domisili</th>
                <th>program studi</th>
                <th>skills</th>
                <th>skor</th>
                <th>predikat</th>
            </tr>
            <?php 
                if(isset($_POST['submit'])){
                    $nim = $_POST['nim'];
                    $nama = $_POST['nama'];
                    $email = $_POST['email'];
                    $jenis_kelamin = $_POST['jenis_kelamin'];
                    $domisili = $_POST['domisili'];
                    $program_studi = $_POST['program_studi'];
                    $skill_user = $_POST['skills'];
            ?>
            <tr>
                <td><?= $nim; ?></td>
                <td><?= $nama; ?></td>
                <td><?= $email; ?></td>
                <td><?= $jenis_kelamin; ?></td>
                <td><?= $domisili; ?></td>
                <td><?= $program_studi; ?></td>
                <td>
                    <?php foreach($skill_user as $skills){
                        echo $skills . " ";
                     } 
                     $skor = 0;
                    foreach($skill_user as $skills) {
                        if($skills == 'HTML') {
                            $skor = $skor + 10;
                        }elseif($skills == 'CSS') {
                            $skor = $skor + 10;
                        }elseif($skills == 'JavaScript') {
                            $skor = $skor + 20;
                        }elseif($skills == 'RWD Bootstrap') {
                            $skor = $skor + 20;
                        }elseif($skills == 'PHP') {
                            $skor = $skor + 30;
                        }elseif($skills == 'Python') {
                            $skor = $skor + 30;
                        }else{
                            $skor = $skor + 0;
                        }
                    }

                    if($skor >= 100){
                        $predikat = "Sangat Baik";
                    }elseif($skor >= 60){
                        $predikat = "Baik";
                    }elseif($skor >= 40){
                        $predikat = "Cukup";
                    }elseif($skor > 0){
                        $predikat = "Kurang";
                    }else{
                        $predikat = "Sangat Kurang";
                    }
                    ?>
                </td>
                <td><?= $skor; ?></td>
                <td><?= $predikat; ?></td>
                </tr>
                <?php } ?>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>