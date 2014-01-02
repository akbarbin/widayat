<div class="container">
  <div class="content" role="main">
    <article class="post-item post-detail">
      <h1>Tentang Ir. H. Widayat</h1>
      <div class="entry">
        <a href="<?php echo base_url("index.php/admin/galleries/create"); ?>">Tambah Gallery</a>
        <div class="styled_table table_red">
          <table>
            <thead>
              <tr>
                <th style="width:25%">Nama</th>
                <th style="width:25%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($galleries->num_rows > 0): ?>
                <?php foreach ($galleries->result_array() as $galleries_item): ?>
                  <tr>
                    <td><?php echo $galleries_item['title'] ?></td>
                    <td>
                      <a href="<?php echo base_url("index.php/admin/galleries/edit/" . $galleries_item['id']); ?>">Ubah</a>
                      <a>Detail</a>
                      <p><a href="<?php echo base_url("index.php/admin/galleries/destroy/" . $galleries_item['id']); ?>" onclick="return confirm('Apakah yakin akan menghapus?')">Hapus</a><p>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php else : ?>
                <tr>
                  <td colspan="2">Belum ada foto saat ini.</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </article>
  </div>
  <!--/ content -->
  <div class="clear"></div>
  <!--/ middle --> 
</div>