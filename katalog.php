   <?php
   // Modul Katalog Kategori Barang Hilang
   $kategori = [
       "Elektronik (Laptop, Flashdisk, Charger, HP)",
       "Dokumen Penting (KTM, KTP, STNK, Buku Modul)",
       "Aksesoris & Pakaian (Jaket, Helm, Kacamata, Jam)",
       "Barang Berharga Lainnya (Dompet, Kunci Kendaraan)"
   ];
   ?>
   <!DOCTYPE html>
   <html lang="id">
   <head>
       <meta charset="UTF-8">
       <title>Katalog Kategori Barang</title>
       <style>
           body { font-family: Arial, sans-serif; margin: 30px; background: #f8fafc; }
           .box { background: white; padding: 20px; border-radius: 8px; max-width: 500px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
           li { margin-bottom: 8px; }
       </style>
   </head>
   <body>
       <div class="box">
           <h3>📋 Kategori Barang Temuan / Hilang</h3>
           <a href="index.php">← Beranda</a>
           <hr>
           <ul>
               <?php foreach($kategori as $k): ?>
                   <li><?= $k; ?></li>
               <?php endforeach; ?>
           </ul>
       </div>
   </body>
   </html>
   
