<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas Kasus Baru</title>
</head>
<body>
  <h1>10 Kasus Seleksi dan Perulangan</h1>

  <div style="font-family: Arial, sans-serif; line-height: 1.5;">
    <?php
    // Kasus 1: Menentukan bilangan ganjil yang lebih besar dari 105
    echo "<h3>Kasus 1: Ganjil > 105</h3>";
    for ($i = 106; $i <= 120; $i++) {
        if ($i % 2 !== 0) {
            echo "$i adalah bilangan ganjil yang lebih besar dari 105<br>";
        }
    }

    echo "<hr>";

    // Kasus 2: Menampilkan tabel perkalian angka 11-15
    echo "<h3>Kasus 2: Tabel Perkalian (11-15)</h3>";
    for ($i = 11; $i <= 15; $i++) {
        for ($j = 3; $j <= 7; $j++) {
            echo "$i x $j = " . ($i * $j) . "<br>";
        }
        echo "<br>";
    }

    echo "<hr>";

    // Kasus 3: Menentukan bilangan genap dari angka 23-40 yang merupakan kelipatan 4
    echo "<h3>Kasus 3: Menentukan Bilangan Genap dari angka 23-40 dan Kelipatan 4</h3>";
    for ($i = 23; $i <= 40; $i++) {
        if ($i % 2 === 0 && $i % 4 === 0) {
            echo "$i adalah bilangan genap dan kelipatan 4<br>";
        }
    }

    echo "<hr>";

    // Kasus 4: Menentukan huruf vokal dalam string
    echo "<h3>Kasus 4: Mencari Huruf Vokal pada kalimat Sistem Informasi itu Jurusan Ajaib di LPKIA</h3>";
    $kalimat = "Sistem Informasi itu Jurusan Ajaib di LPKIA";
    $vokal = "aiueoAIUEO";
    for ($i = 0; $i < strlen($kalimat); $i++) {
        if (strpos($vokal, $kalimat[$i]) !== false) {
            echo "$kalimat[$i] adalah huruf vokal<br>";
        }
    }

    echo "<hr>";

    // Kasus 5: Menampilkan angka yang merupakan kuadrat sempurna
    echo "<h3>Kasus 5: Kuadrat Sempurna</h3>";
    for ($i = 33; $i <= 99; $i++) {
        $akar = sqrt($i);
        if ($akar == floor($akar)) {
            echo "$i adalah kuadrat sempurna (" . floor($akar) . "^2)<br>";
        }
    }

    echo "<hr>";

    // Kasus 6: Menampilkan deret angka mundur dari 777 ke 713
    echo "<h3>Kasus 6: Deret Mundur dari 777 ke 713</h3>";
    for ($i = 777; $i >= 713; $i--) {
        echo "$i ";
    }
    echo "<br>";

    echo "<hr>";

    // Kasus 7: Menentukan angka ganjil dalam array
    echo "<h3>Kasus 7: Angka Ganjil dalam Array</h3>";
    $angkaList = [112, 5, 88, 7, 77, 3, 35, 20, 15, 113, 97];
    foreach ($angkaList as $angka) {
        if ($angka % 2 !== 0) {
            echo "$angka adalah bilangan ganjil<br>";
        }
    }

    echo "<hr>";

    // Kasus 8: Menghitung jumlah kata dalam string
    echo "<h3>Kasus 8: Menghitung Jumlah Kata</h3>";
    $teks = "Semua Mahasiswa Informatika dan Sistem Informasi di LPKIA harus bisa menjadi content creator terutama untuk personal branding, selain mempromosikan diri mereka juga harus bisa membranding kampus tercinta ";
    $jumlahKata = str_word_count($teks);
    echo "Jumlah kata dalam kalimat: \"$teks\" adalah $jumlahKata<br>";

    echo "<hr>";

    // Kasus 9: Menentukan angka terbesar dari array
    echo "<h3>Kasus 9: Angka Terbesar dari 12-515</h3>";
    $angkaList2 = [23, 34, 67, 89, 12, 302, 501, 515, 35, 56, 43, 81, 88, 93, 111];
    $terbesar = $angkaList2[0];
    foreach ($angkaList2 as $angka) {
        if ($angka > $terbesar) {
            $terbesar = $angka;
        }
    }
    echo "Angka terbesar dari angka 12-515 adalah $terbesar<br>";

    echo "<hr>";

    // Kasus 10: Menampilkan daftar nama siswa dan nilai mereka
    echo "<h3>Kasus 10: Daftar Nama Siswa dan Nilai</h3>";
    $siswa = [
        "Adnan" => 85,
        "Upin" => 90,
        "Ipin" => 78,
        "Peni" => 88,
        "Julia" => 92
    ];

    foreach ($siswa as $nama => $nilai) {
        echo "Nama: $nama, Nilai: $nilai<br>";
    }

    echo "<br>Jumlah siswa: " . count($siswa);
    ?>
  </div>
</body>
</html>