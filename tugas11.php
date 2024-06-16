<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 11</title>
</head>
<body>
    <h1>Nilai Mahasiswa</h1>
    <form action="" method="post">
    <label for="nama">Nama :</label>
    <input type="text" id="nama" name="nama" required><br><br>

    <label for="nim">NIM :</label>
    <input type="text" id="nim" name="nim" required><br><br>

    <label> Kelas :</label>
    
    <?php
        for ($i = 'A'; $i <= 'J'; $i++) {
            echo "<input type='radio' id='kelas$i' name='kelas' value='Kelas $i' required>
                  <label for='kelas$i'>Kelas $i</label><br>";
        }
        ?><br>
    
    



<label for="prodi">Prodi :</label>
<select name="prodi" id="prodi" required>
<option value="Informatika">Informatika</option>
<option value="Teknik Industri">Teknik Industri</option>
<option value="Teknik Elektro">Teknik Elektro</option>
<option value="Teknik Pangan">Teknik Pangan</option>
<option value="Teknik Kimia">Teknik Kimia</option>
</select><br><br>

<label for="nilai">Nilai :</label>
<input type="number" id="nilai" name="nilai" required><br><br>

<input type="submit" value="submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kelas = $_POST ['kelas'];
    $prodi = $_POST['prodi'];
    $nilai = $_POST['nilai'];
    $predikat = '';

    if($nilai >=80){
        $predikat = 'A+';
    }elseif($nilai > 76){
        $predikat = 'A-';
    }elseif($nilai > 68){
        $predikat = 'B+';
    }elseif($nilai > 65){
        $predikat = 'B';
    }elseif($nilai > 62){
        $predikat = 'B-';
    }elseif($nilai > 57){
        $predikat = 'C+';
    }elseif($nilai > 55){
        $predikat = 'C';
    }elseif($nilai > 51){
        $predikat = 'C-';
    }elseif($nilai > 43){
        $predikat = 'D+';
    }elseif($nilai > 40){
        $predikat = 'D';
    }else {
        $predikat = 'E';
    }


echo "<h2>Informasi</h2>";
echo "Nama : $nama <br>";
echo "NIM : $nim <br>";
echo "Kelas : $kelas <br>";
echo "Prodi : $prodi <br>";
echo "Nilai : $nilai <br>";
echo "Predikat : $predikat";

if($nilai >= 60){
    echo "Nilai anda $nilai, anda lulus <br>";
}else{
    echo "Nilai anda $nilai, anda gagal <br>";
}
}

?>

</body>
</html>