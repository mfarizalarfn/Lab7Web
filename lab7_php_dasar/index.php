<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Soal</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1><i class="fa fa-list"></i> Form Input</h1>
            </div>
        </div>
        <hr>

        <form method="POST" action="">

        <div class="row">
            <div class="col-sm-3">
                <label><i class="fa fa-user"></i> Nama</label>
            </div>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                <label><i class="fa fa-calendar"></i> Tanggal Lahir</label>
            </div>
            <div class="col-sm-5">
                <input type="date" class="form-control" name="tgllahir">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                <label><i class="fa fa-briefcase"></i> Pekerjaan</label>
            </div>
            <div class="col-sm-5">
                <select class="form-select form-control" name="pekerjaan">
                    <option value="kosong" selected>Pilih Pekerjaan</option>
                    <option value="frontend">Front End</option>
                    <option value="backend">Back End</option>
                    <option value="uiux">UI/UX</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i> SIMPAN</button>
            </div>
        </div>
        </form>

<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $tgllahir = $_POST['tgllahir'];
    $pekerjaan = $_POST['pekerjaan'];

    $pisahtgl = explode('-',$tgllahir);
        $tahunlahir = $pisahtgl[0];
        $bulan = $pisahtgl[1];
        $tgl = $pisahtgl[2];
    
    $tahunini = date('Y');
    $hitungumur = $tahunini - $tahunlahir;

    if($pekerjaan == 'kosong'){
        $kerja = "Anda tidak memilih pekerjaan";
        $gaji = 0;
    }else if($pekerjaan == 'frontend'){
        $kerja = "Front End";
        $gaji = "10.000.000";
    }else if($pekerjaan == 'backend'){
        $kerja = "Back End";
        $gaji = "9.000.000";
    }else if($pekerjaan == 'uiux'){
        $kerja = "UI/UX";
        $gaji = "10.000.000";
    }else{
        $kerja = "Anda tidak memilih pekerjaan / sedang tidak bekerja";
        $gaji = 0;
    }

    echo "<br><hr><br>";
    echo "<h2>Hasil : </h2>\n";
    echo '<table class="table table-hover table-bordered">
                <thead style="background-color: #c3c6c9">
                    <tr class="text-center">
                        <th>#</th>
                        <th>Nama Lengkap</th>
                        <th>Tanggal Lahir</th>
                        <th>Umur</th>
                        <th>Pekerjaan</th>
                        <th>Gaji</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>'.$nama.'</td>
                        <td>'.$tgllahir.'</td>
                        <td>'.$hitungumur.' Tahun</td>
                        <td>'.$kerja.'</td>
                        <td>Rp. '.$gaji.'</td>
                    </tr>
                </tbody>
            </table>';

}
?>
</div>
</body>
</html>