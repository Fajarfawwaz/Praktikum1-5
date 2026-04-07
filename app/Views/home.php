<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<div style="background: linear-gradient(rgba(66, 133, 244, 0.8), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1504711434969-e33886168f5c?auto=format&fit=crop&w=1000&q=80'); 
            background-size: cover; background-position: center; padding: 60px 20px; color: white; border-radius: 10px; margin-bottom: 30px; text-align: center;">
    <h1 style="font-size: 38px; margin-bottom: 10px; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Selamat Datang di Portal Berita Fajar</h1>
    <p style="font-size: 18px; max-width: 800px; margin: 0 auto 20px; line-height: 1.6;">
        Menyajikan informasi paling hangat, akurat, dan terpercaya seputar dunia Teknologi, Pemrograman, dan Berita Kampus setiap harinya.
    </p>
    <a href="<?= base_url('/artikel'); ?>" style="display: inline-block; background-color: #ffffff; color: #4285f4; padding: 12px 25px; text-decoration: none; border-radius: 5px; font-weight: bold; transition: 0.3s;">
        Jelajahi Artikel &rarr;
    </a>
</div>

<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-bottom: 30px;">
    <div style="background: #fff; padding: 20px; border-top: 4px solid #4285f4; box-shadow: 0 4px 6px rgba(0,0,0,0.1); border-radius: 5px;">
        <h3 style="margin-top: 0;">📰 Berita Terkini</h3>
        <p style="color: #666; font-size: 14px; line-height: 1.5;">Dapatkan update harian mengenai perkembangan teknologi web dan framework terbaru langsung dari sumbernya.</p>
    </div>
    <div style="background: #fff; padding: 20px; border-top: 4px solid #333; box-shadow: 0 4px 6px rgba(0,0,0,0.1); border-radius: 5px;">
        <h3 style="margin-top: 0;">💻 Tips & Tutorial</h3>
        <p style="color: #666; font-size: 14px; line-height: 1.5;">Tersedia berbagai panduan pemrograman PHP, JavaScript, hingga manajemen database untuk mengasah skill Anda.</p>
    </div>
    <div style="background: #fff; padding: 20px; border-top: 4px solid #fbbc05; box-shadow: 0 4px 6px rgba(0,0,0,0.1); border-radius: 5px;">
        <h3 style="margin-top: 0;">🎓 Seputar Kampus</h3>
        <p style="color: #666; font-size: 14px; line-height: 1.5;">Informasi kegiatan akademik dan proyek mahasiswa Informatika Engineering untuk inspirasi belajar bersama.</p>
    </div>
</div>

<div style="padding: 20px; border-left: 5px solid #4285f4; background-color: #f0f7ff; margin-bottom: 30px;">
    <h2 style="margin-top: 0; color: #333;"><?= esc($title) ?></h2>
    <p style="line-height: 1.8; color: #444; font-size: 16px;">
        Halo rekan-rekan pembaca! **Portal Berita Fajar** hadir sebagai media informasi yang berfokus pada kualitas konten dan kemudahan akses. Kami percaya bahwa informasi yang tepat adalah kunci kesuksesan di era digital ini.
    </p>
    <p style="line-height: 1.8; color: #444; font-size: 16px;">
        Silakan jelajahi daftar artikel kami atau gunakan menu navigasi untuk melihat fitur-fitur lainnya. Jangan lupa untuk mengecek kolom **Artikel Terkini** di bagian samping untuk melihat berita terbaru yang baru saja diterbitkan.
    </p>
</div>

<?= $this->endSection() ?>