<?php
$teks_awal = "";
$hasil_teks = "";

if (isset($_POST['convert'])) {
    $teks_awal = $_POST['teks'];
    $aksi = $_POST['aksi'];

    switch ($aksi) {
        case 'upper':
            $hasil_teks = strtoupper($teks_awal); // Jadi HURUF BESAR
            break;
        case 'lower':
            $hasil_teks = strtolower($teks_awal); // Jadi huruf kecil
            break;
        case 'reverse':
            $hasil_teks = strrev($teks_awal); // Jadi cilabret (terbalik)
            break;
        case 'count':
            $jumlah = str_word_count($teks_awal);
            $hasil_teks = "Jumlah kata: " . $jumlah;
            break;
        case 'shuffle':
            $hasil_teks = str_shuffle($teks_awal); // Huruf diacak
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Magic Text PHP</title>
    <style>
        body { font-family: monospace; padding: 50px; background: #222; color: #fff; text-align: center; }
        .container { border: 2px solid #0f0; padding: 20px; max-width: 500px; margin: 0 auto; box-shadow: 0 0 20px #0f0; }
        textarea { width: 100%; height: 80px; padding: 10px; margin-bottom: 10px; background: #000; color: #0f0; border: 1px solid #0f0; }
        select, button { padding: 10px; background: #000; color: #0f0; border: 1px solid #0f0; cursor: pointer; }
        button:hover { background: #0f0; color: #000; }
        .output { margin-top: 20px; font-size: 1.5em; word-wrap: break-word; }
    </style>
</head>
<body>

<div class="container">
    <h1>KETERAMPILAN TEKS</h1>
    <form method="post" action="">
        <textarea name="teks" required placeholder="Ketik sesuatu di sini..."><?php echo $teks_awal; ?></textarea>
        <br>
        <select name="aksi">
            <option value="upper">Huruf Kapital (UPPERCASE)</option>
            <option value="lower">Huruf Kecil (lowercase)</option>
            <option value="reverse">Balik Kata (esrever)</option>
            <option value="count">Hitung Jumlah Kata</option>
            <option value="shuffle">Acak Karakter</option>
        </select>
        <button type="submit" name="convert">PROSES >></button>
    </form>

    <?php if ($hasil_teks): ?>
        <div class="output">
            <hr color="#0f0">
            <p>Hasil:</p>
            <strong><?php echo $hasil_teks; ?></strong>
        </div>
    <?php endif; ?>
</div>

</body>
</html>