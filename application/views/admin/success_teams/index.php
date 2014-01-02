<div class="container">
  <div class="content" role="main">
    <article class="post-item post-detail">
      <h1>Tentang Ir. H. Widayat</h1>
      <div class="entry">
        <div class="styled_table table_red">
          <table>
            <thead>
              <tr>
                <th style="width:25%">Nama</th>
                <th style="width:25%">Kecamatan</th>
                <th style="width:25%">Jabatan</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($success_teams as $success_teams): ?>
                <tr>
                  <td><?php echo $success_teams['name'] ?></td>
                  <td><?php echo $success_teams['address'] ?></td>
                  <td><?php echo $success_teams['position'] ?></td>
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