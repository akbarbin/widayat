<div class="container">
  <div class="content" role="main">
    <article class="post-item post-detail">
      <h1>Tentang Ir. H. Widayat</h1>
      <div class="entry">
        <a href="<?php echo base_url("index.php/admin/news/create"); ?>">Tambah Berita</a>
        <div class="styled_table table_red">
          <table>
            <thead>
              <tr>
                <th style="width:25%">Judul</th>
                <th style="width:25%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($news->result_array() as $news_item): ?>
                <tr>
                  <td><?php echo $news_item['title'] ?></td>
                  <td>
                    <a href="<?php echo base_url("index.php/admin/news/edit/" . $news_item['slug']); ?>">Ubah</a>
                    <a>Detail</a>
                    <p><a href="<?php echo base_url("index.php/admin/news/destroy/" . $news_item['slug']); ?>" onclick="return confirm('Apakah yakin akan menghapus?')">Hapus</a><p>
                  </td>
                </tr>
              <?php endforeach; ?>
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