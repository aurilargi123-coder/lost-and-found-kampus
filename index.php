<?php
// ==============================================================================
// Proyek UTS Rekayasa Perangkat Lunak - D3 Teknik Komputer
// Nama : Auriel Argi | NIM : 240104002
// Judul: Sistem Informasi Pelaporan dan Pencarian Barang Hilang di Kampus
// ==============================================================================

// Contoh Logika Sistem: Verifikasi Klaim Barang Hilang
function verifikasi_klaim($status_barang, $jawaban_ciri_khusus, $kunci_ciri_khusus) {
    if ($status_barang !== 'Ditemukan') {
        return "Barang belum tersedia atau sudah diserahkan.";
    }
    
    // Cek apakah deskripsi ciri khusus yang dimasukkan pemilik cocok
    if (strtolower(trim($jawaban_ciri_khusus)) === strtolower(trim($kunci_ciri_khusus))) {
        return "Klaim Terverifikasi! Silakan ambil barang di Pos Satpam / Ruang Kemahasiswaan.";
    } else {
        return "Ciri-ciri khusus tidak cocok. Klaim ditolak demi keamanan.";
    }
}

// Simulasi Data Barang yang Dilaporkan Ditemukan
$barang = [
    'nama' => 'Flashdisk Sandisk 32GB Hitam',
    'lokasi_ditemukan' => 'Laboratorium Komputer 2',
    'status' => 'Ditemukan',
    'ciri_khusus_asli' => 'gantungan kunci tali merah'
];

$pesan_verifikasi = '';
if (isset($_POST['klaim'])) {
    $input_ciri = $_POST['ciri_khusus'] ?? '';
    $pesan_verifikasi = verifikasi_klaim($barang['status'], $input_ciri, $barang['ciri_khusus_asli']);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Campus Lost & Found — Demo RPL</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f6f9; }
        .card { background: white; padding: 25px; border-radius: 8px; max-width: 600px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .badge { background: #007bff; color: white; padding: 4px 8px; border-radius: 4px; font-size: 12px; }
        .alert { margin-top: 15px; padding: 12px; border-radius: 4px; background: #e2e3e5; }
        input[type="text"] { width: 100%; padding: 8px; margin: 8px 0; box-sizing: border-box; }
        button { background: #28a745; color: white; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="card">
        <h2>🔍 Campus Lost & Found</h2>
        <p><strong>Nama:</strong> Auriel Argi | <strong>NIM:</strong> 240104002</p>
        <p><strong>Mata Kuliah:</strong> Rekayasa Perangkat Lunak (D3 Teknik Komputer)</p>
        <hr>
        
        <h3>Barang Ditemukan Baru:</h3>
        <p><strong>Barang:</strong> <?= $barang['nama']; ?> <span class="badge"><?= $barang['status']; ?></span></p>
        <p><strong>Lokasi:</strong> <?= $barang['lokasi_ditemukan']; ?></p>

        <h4>Uji Coba Klaim Kepemilikan Barang:</h4>
        <form method="POST">
            <label>Sebutkan Ciri Khusus Barang Anda (Contoh: warna gantungan):</label>
            <input type="text" name="ciri_khusus" placeholder="Ketik: gantungan kunci tali merah" required>
            <button type="submit" name="klaim">Ajukan Verifikasi Klaim</button>
        </form>

        <?php if ($pesan_verifikasi): ?>
            <div class="alert">
                <strong>Status Hasil:</strong> <?= $pesan_verifikasi; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
