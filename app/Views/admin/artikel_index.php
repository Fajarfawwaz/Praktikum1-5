<?= $this->extend('layout/main'); ?>

<?= $this->section('content'); ?>
<div class="content-admin">
    <h2 style="margin-top: 0; border-bottom: 2px solid #4285f4; padding-bottom: 10px; color: #333;">Daftar Artikel</h2>
    
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; gap: 15px;">
        <form method="get" class="form-search" style="display: flex; gap: 5px;">
            <input type="text" name="q" value="<?= $q; ?>" placeholder="Cari judul artikel..." 
                   style="padding: 8px 12px; border: 1px solid #ddd; border-radius: 4px; width: 250px;">
            <button type="submit" style="background-color: #4285f4; color: white; border: none; padding: 8px 15px; border-radius: 4px; cursor: pointer; font-weight: bold;">
                Cari
            </button>
        </form>

        <a href="<?= base_url('/admin/artikel/add'); ?>" class="btn btn-primary" 
           style="background-color: #28a745; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px; font-weight: bold; font-size: 14px;">
           + Tambah Artikel
        </a>
    </div>

    <?php if(session()->getFlashdata('pesan')): ?>
        <div style="background-color: #d4edda; color: #155724; padding: 12px; border-radius: 4px; border: 1px solid #c3e6cb; margin-bottom: 20px; font-size: 14px;">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <table border="1" cellspacing="0" cellpadding="10" style="width: 100%; border-collapse: collapse; background-color: white; border: 1px solid #eee; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
        <thead>
            <tr style="background-color: #f8f9fa; color: #333; text-align: left;">
                <th width="50" style="text-align: center; padding: 15px;">ID</th>
                <th style="padding: 15px;">Judul Artikel</th>
                <th width="100" style="text-align: center; padding: 15px;">Status</th>
                <th width="150" style="text-align: center; padding: 15px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if($artikel): foreach($artikel as $row): ?>
            <tr style="border-bottom: 1px solid #eee;">
                <td style="text-align: center; color: #666;"><?= $row['id']; ?></td>
                <td style="padding: 12px;">
                    <div style="font-weight: bold; color: #333; margin-bottom: 4px;"><?= $row['judul']; ?></div>
                    <div style="font-size: 12px; color: #888; line-height: 1.4;">
                        <?= substr(strip_tags($row['isi']), 0, 100); ?>...
                    </div>
                </td>
                <td style="text-align: center;">
                    <span style="padding: 4px 10px; border-radius: 20px; font-size: 11px; font-weight: bold; text-transform: uppercase; 
                                 background-color: <?= $row['status'] == 1 ? '#e8f5e9' : '#fff3e0'; ?>; 
                                 color: <?= $row['status'] == 1 ? '#2e7d32' : '#ef6c00'; ?>; border: 1px solid currentColor;">
                        <?= $row['status'] == 1 ? 'Published' : 'Draft'; ?>
                    </span>
                </td>
                <td style="text-align: center;">
                    <div style="display: flex; justify-content: center; gap: 10px;">
                        <a href="<?= base_url('/admin/artikel/edit/' . $row['id']);?>" 
                           style="color: #4285f4; text-decoration: none; font-size: 14px; font-weight: bold;">Ubah</a>
                        <span style="color: #ddd;">|</span>
                        <a onclick="return confirm('Yakin hapus data?')" href="<?= base_url('/admin/artikel/delete/' . $row['id']);?>" 
                           style="color: #dc3545; text-decoration: none; font-size: 14px; font-weight: bold;">Hapus</a>
                    </div>
                </td>
            </tr>
            <?php endforeach; else: ?>
            <tr>
                <td colspan="4" style="text-align: center; padding: 40px; color: #999;">
                    <div style="font-size: 40px; margin-bottom: 10px;">📂</div>
                    Data artikel tidak ditemukan.
                </td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <?php if (isset($pager)): ?>
        <div style="margin-top: 30px; display: flex; justify-content: center;">
            <?= $pager->only(['q'])->links('artikel', 'default_full'); ?>
        </div>
    <?php endif; ?>
</div>

<style>
    /* Styling tambahan untuk pagination agar lebih rapi */
    .pagination { display: flex; list-style: none; padding: 0; gap: 5px; }
    .pagination li a { padding: 8px 14px; border: 1px solid #ddd; color: #4285f4; text-decoration: none; border-radius: 4px; }
    .pagination li.active a { background-color: #4285f4; color: white; border-color: #4285f4; }
    .pagination li a:hover:not(.active) { background-color: #f1f3f4; }
</style>

<?= $this->endSection(); ?>