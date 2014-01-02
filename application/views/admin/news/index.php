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
                <th style="width:25%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($news->result_array() as $news_item): ?>
                <tr>
                  <td><?php echo $news_item['title'] ?></td>
                  <td>
                    <a href="<?php echo base_url("index.php/admin/news/edit/" . $news_item['slug']); ?>">Edit</a>
                    <a>Show</a>
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