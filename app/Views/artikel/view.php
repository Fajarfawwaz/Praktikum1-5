<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>
<article class="entry" style="background: #fff; padding: 25px; border-radius: 8px; border: 1px solid #eee; box-shadow: 0 2px 10px rgba(0,0,0,0.02);">
    
    <h2 style="color: #333; border-bottom: 3px solid #4285f4; padding-bottom: 15px; margin-bottom: 20px; font-size: 28px; line-height: 1.3;">
        <?= $artikel['judul']; ?>
    </h2>
    
    <?php if (!empty($artikel['gambar'])): ?>
        <div style="width: 100%; border-radius: 8px; overflow: hidden; margin-bottom: 25px; border: 1px solid #eee;">
            <img src="<?= base_url('uploads/' . $artikel['gambar']); ?>" 
                 alt="<?= $artikel['judul']; ?>" 
                 style="width: 100%; max-height: 450px; object-fit: cover; display: block;">
        </div>
    <?php endif; ?>

    <div class="meta" style="margin-bottom: 25px; font-size: 13px; color: #888; display: flex; gap: 15px; align-items: center;">
        <span style="background: #f1f3f4; padding: 4px 10px; border-radius: 4px;">
            Status: <b style="color: <?= $artikel['status'] == 1 ? '#0d6efd' : '#dc3545'; ?>;">
                <?= $artikel['status'] == 1 ? 'Published' : 'Draft'; ?>
            </b>
        </span>
        <span>📅 <?= date('d M Y', strtotime($artikel['created_at'] ?? 'now')); ?></span>
        <span>👤 Oleh: Admin</span>
    </div>

    <div class="content" style="line-height: 1.8; font-size: 16px; text-align: justify; color: #444; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        <?= nl2br($artikel['isi']); ?>
    </div>

    <div style="margin-top: 50px; border-top: 1px solid #eee; padding-top: 25px;">
        <a href="<?= base_url('/artikel'); ?>" style="text-decoration: none; color: #4285f4; font-weight: bold; display: inline-flex; align-items: center; gap: 5px; transition: 0.3s;">
            &larr; Kembali ke Daftar Artikel
        </a>
    </div>
</article>
<?= $this->endSection(); ?>