<!-- widget_recent_entries -->
<div class="widget-container widget_recent_entries">
  <img src="<?php echo base_url(); ?>application/assets/images/icons/widget_icon_01.png" alt="" class="widget_icon">            
  <h3 class="widget-title">Artikel Popular</h3>
  <ul>
    <?php if ($popular_news->num_rows > 0) : ?>
      <?php foreach ($popular_news->result() as $popular_news): ?>
        <li><a href="news/<?php echo $popular_news->slug ?>"><?php echo $popular_news->title ?></a></li>
      <?php endforeach; ?>
    <?php else : ?>
      <li>Tidak ada berita untuk saat ini.</li>
    <?php endif; ?>
  </ul>
</div>   
<!--/ widget_recent_entries -->