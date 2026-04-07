# Dokumentasi Lengkap Praktikum Pemrograman Web 2
## Sistem Informasi Portal Berita - CodeIgniter 4

Dokumentasi ini disusun sebagai laporan komprehensif pengerjaan Modul 1 hingga Modul 5. Proyek ini mendemonstrasikan transisi dari website statis menuju aplikasi web dinamis berbasis **MVC (Model-View-Controller)**.

---

## 👤 IDENTITAS SAYA :
* **Nama:** Fajar Fawwaz Atallah
* **NIM:** 312410357
* **Kelas:** TI.24.A4/I241D
* **Matkul:** Pemrograman Website 2

---

## 🛠️ Analisis Struktur Modul Praktikum

### 🟢 Modul 1: Fondasi MVC & Routing
Pada tahap awal, fokus utama adalah memindahkan paradigma PHP Native ke Framework.
* **Logika:** User meminta URL -> `Routes.php` mengarahkan ke `Controller` -> Controller memanggil `View`.
* **Implementasi:** Membuat `Controller Page.php` untuk menangani halaman statis (Home, About, Contact).
* **Pelajaran Penting:** Memahami bahwa logika bisnis tidak boleh diletakkan di dalam View.

### 🔵 Modul 2: CRUD & Interaksi Database
Tahap ini mengubah website menjadi dinamis dengan kemampuan mengelola data di MySQL.
* **Logika:** Membuat `ArtikelModel.php` sebagai jembatan ke tabel `artikel`.
* **Fitur Admin:** * **Create:** Form untuk input berita baru.
    * **Read:** Menampilkan data dari database ke dalam tabel HTML.
    * **Update:** Mengambil data berdasarkan ID untuk diedit kembali.
    * **Delete:** Menghapus data permanen dari database.
* **Konfigurasi:** Mengatur koneksi database pada file `.env`.

### 🟡 Modul 3: Templating (View Layout & View Cell)
Menerapkan prinsip **DRY (Don't Repeat Yourself)** agar kode lebih bersih.
* **View Layout:** Menggunakan satu file induk `layout/main.php`. Halaman lain hanya perlu "mengisi" bagian konten menggunakan `$this->extend()`.
* **View Cell:** Membuat komponen modular `ArtikelTerkini`. Komponen ini bisa dipanggil di halaman mana pun tanpa harus menulis ulang query database di setiap Controller.
* **Manfaat:** Jika ada perubahan pada Header atau Footer, cukup edit satu file saja.

### 🔴 Modul 4: Autentikasi & Security Filter
Melindungi area sensitif (Dashboard Admin) dari akses tanpa izin.
* **Alur Login:** Validasi `userpassword` menggunakan Session.
* **Filters:** Implementasi `AuthFilter.php`. Jika user mencoba akses `/admin` tanpa login, sistem otomatis menendang balik ke halaman `/login`.
* **Database:** Pembuatan tabel `user` untuk menyimpan kredensial admin.

### 🟣 Modul 5: Optimasi UX (Pagination & Searching)
Menyempurnakan antarmuka saat data sudah berjumlah banyak.
* **Pagination:** Mengganti `findAll()` menjadi `paginate(10)`. Ini mencegah *lag* pada browser jika data mencapai ribuan.
* **Searching:** Menggunakan metode `like()` pada query SQL untuk memfilter judul artikel berdasarkan kata kunci dari user.
* **Persistence:** Menggunakan `pager->only(['q'])` agar saat user pindah ke halaman 2, hasil pencarian kata kunci 'q' tidak hilang.

---

## 💻 Cara Instalasi Proyek

1.  **Clone & Setup:**
    ```bash
    git clone [https://github.com/fajarfawwaz/Lab7Web.git](https://github.com/fajarfawwaz/Lab7Web.git)
    cd Lab7Web
    ```
2.  **Database:**
    * Buat database bernama `lab_ci4`.
    * Import file `.sql` yang ada di folder `database/`.
3.  **Environment:**
    * Rename `env` menjadi `.env`.
    * Atur `database.default.username` dan `database.default.password` sesuai XAMPP kamu.
4.  **Run:**
    ```bash
    php spark serve
    ```

---

## 📸 Bukti Hasil Praktikum

1. **Tampilan Home User:**
<img width="1917" height="931" alt="Screenshot 2026-04-07 123939" src="https://github.com/user-attachments/assets/fc549396-5e71-495e-b0a3-9369ee94efbe" />

2. **Dashboard Admin:**
<img width="1919" height="945" alt="image" src="https://github.com/user-attachments/assets/71db630f-e8b4-42f1-a981-96a9329a3a49" />

**TAMPILAN TAMBAH ARTIKEL:**
<img width="1919" height="945" alt="image" src="https://github.com/user-attachments/assets/d0ace816-4a7f-4f3e-9d0e-4baf15d96fc2" />
<img width="1918" height="948" alt="image" src="https://github.com/user-attachments/assets/83dcba3b-abc6-4007-b615-ada5ef95a8ab" />

**TAMPILAN UBAH ARTIKEL**
<img width="1914" height="940" alt="image" src="https://github.com/user-attachments/assets/c5e93eed-d859-445d-9669-7ce8ffe0e283" />


3. **Fitur Pencarian:**
<img width="1006" height="417" alt="image" src="https://github.com/user-attachments/assets/ac0b2ea5-d630-4e61-a481-74b4989762ef" />

4. **Halaman Login:**
<img width="1916" height="937" alt="image" src="https://github.com/user-attachments/assets/36187c0c-4809-4300-a265-2cad73951e4f" />


---
**Status Proyek:** Selesai (Modul 1-5) ✅
