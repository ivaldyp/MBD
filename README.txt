This final project is created using HTML, CSS, and PHP.
The database is using Oracle Database

This project is implementing 5 topics of database management:
1. Trigger
   - Mencatat perubahan pada tabel transaksi
   - Memasukkan log “merusak fasilitas” kedalam table log_transaksi setiap ada tamu yang dikenai denda
   - Mengisi log_harga_kamar apabila ada petuguas yang melakukan perubahan harga kamar

2. View
   - Menampilkan info tentang kamar kosong pada suatu wisma dari tanggal checkin dan checkout yang dimasukkan
   - Mencari petugas mana saja yang telah melayani tamu pada bulan – bulan tertentu
   - Menampilkan kamar yang sedang disewa pada tanggal tertentu

3. Index
   - Mencari nomor kamar berdasarkan kode wisma
   - Melakukan pencarian nomor kamar yang berdasarkan jenis-jenis atau tipe-tipe kamar
   - Menampilkan kamar yang sedang disewa pada tanggal tertentu

4. Procedure
   - Mempermudah syntax INSERT INTO pada web
   - melakukan INSERT data kedalam table denda_transaksi setiap petugas memilih fasilitas mana saja yang dirusak oleh tamu
   - Merubah status kamar kepada transaksi yang akan dibayar untuk menandakan bahwa transaksi pada kamar tersebut sudah selesai

5. Function
   - Mencari lama inap dari tanggal check in dan tanggal check out yang sudah diinput ketika tamu memesan kamar
   - Menghitung total pembayaran untuk tamu dengan cara menghitung total denda tamu tersebut ditambah lama inap dikali harga kamarnya
   - Menghitung rata-rata jumlah pemesanan dari semua kamar yang nantinya akan di gunakan untuk mencari kamar yang jumlah pemesanannya diatas rata-rata (rekomendasi kamar)