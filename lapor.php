<?php
// Form Pelaporan Penemuan Barang Tercecer di Kampus
$pesan = "";
if (isset($_POST['simpan'])) {
    $nama_barang = htmlspecialchars($_POST['nama_barang']);
    $lokasi = htmlspecialchars($_POST['lokasi']);
    $pesan = "Laporan berhasil! Barang '$nama_barang' di lokasi '$lokasi' telah tercatat di sistem.";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Lapor Penemuan Barang</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f4f6f9; }
        .card { background: white; padding: 25px; border-radius: 8px; max-width: 500px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        input { width: 100%; padding: 8px; margin: 8px 0; box-sizing: border-box; }
        button { background: #007bff; color: white; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="card">
        <h3>📝 Form Lapor Penemuan Barang</h3>
        <p><a href="index.php">← Kembali ke Halaman Utama</a></p>
        <hr>
        <?php if ($pesan): ?>
            <p style="color: green; font-weight: bold;"><?= $pesan; ?></p>
        <?php endif; ?>
        <form method="POST">
            <label>Nama / Jenis Barang:</label>
            <input type="text" name="nama_barang" placeholder="Contoh: Flashdisk Sandisk 32GB" required>
            
            <label>Lokasi Ditemukan:</label>
            <input type="text" name="lokasi" placeholder="Contoh: Meja Lab Komputer 2" required>
            
            <button type="submit" name="simpan">Kirim Laporan</button>
        </form>
    </div>
</body>
</html>
