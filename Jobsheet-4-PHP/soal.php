<?php
//soal langkah 21
$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

$tertinggi = [];
$terendah = [];

foreach ($nilai as $n) {
    //cari 2 nilai tertinggi
    if (count($tertinggi) < 2) {
        $tertinggi[] = $n;
    } else {
        $minTinggi = min($tertinggi);
        if ($n > $minTinggi) {
            $key = array_search($minTinggi, $tertinggi);
            $tertinggi[$key] = $n;
        }
    }

    //cari 2 nilai terendah
    if (count($terendah) < 2) {
        $terendah[] = $n;
    } else {
        $maxRendah = max($terendah);
        if ($n < $maxRendah) {
            $key = array_search($maxRendah, $terendah);
            $terendah[$key] = $n;
        }
    }
}

$total = 0;
$abaikan = array_merge($tertinggi, $terendah);
$counter = array_count_values($abaikan);

foreach ($nilai as $n) {
    if (isset($counter[$n]) && $counter[$n] > 0) {
        $counter[$n]--;
        continue;
    }
    $total += $n;
}

echo "Total nilai setelah mengabaikan dua tertinggi dan dua terendah: $total";
echo "<br>";

//soal langkah 23
$hargaAwal = 120000;
$diskonPersen = 20;
$batasDiskon = 100000;

if ($hargaAwal > $batasDiskon) {
    $diskon = ($diskonPersen / 100) * $hargaAwal;
    $hargaAkhir = $hargaAwal - $diskon;
} else {
    $hargaAkhir = $hargaAwal;
}
echo "Harga yang harus dibayar: Rp " . number_format ($hargaAkhir, 0, ',', '.');

// soal langkah 25
echo "<br>";
$poin = 620; // Ubah sesuai poin yang dikumpulkan

echo "Total skor pemain adalah: {$poin} <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " .
($poin > 500 ? "YA" : "TIDAK");
?>
