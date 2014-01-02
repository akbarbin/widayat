<div class="container">
  <div class="content" role="main">
    <article class="post-item post-detail">
      <h1>Tentang Ir. H. Widayat</h1>
      <div class="entry">
        <a href="<?php echo base_url("index.php/admin/success_teams/create"); ?>">Tambah Team Sukses</a>
        <div class="styled_table table_red">
          <table>
            <thead>
              <tr>
                <th style="width:25%">Nama</th>
                <th style="width:25%">Kecamatan</th>
                <th style="width:25%">Jabatan</th>
                <th style="width:25%">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($success_teams->result_array() as $success_teams): ?>
                <tr>
                  <td><?php echo $success_teams['name'] ?></td>
                  <td><?php echo $success_teams['address'] ?></td>
                  <td><?php echo $success_teams['position'] ?></td>
                  <td>
                    <a href="<?php echo base_url("index.php/admin/success_teams/edit/" . $success_teams['id']); ?>">Edit</a>
                    <a>Show</a>
                    <p><a href="<?php echo base_url("index.php/admin/success_teams/destroy/" . $success_teams['id']); ?>" onclick="return confirm('Apakah yakin akan menghapus?')">Hapus</a><p>
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
<!--/ container -->