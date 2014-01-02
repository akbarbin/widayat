<div class="container">
  <!-- middle -->
  <div id="middle" class="noimage">
    <div class="content" role="main">
      <article class="post-item post-detail">
        <div class="entry">
          <h2>Gallery <span>Ir. H. Widayat</span></h2>
          <div class="minigallery-list minigallery boxed">
            <ul id="mycarouse3" class="jcarousel-skin-tango">
              <?php if ($galleries->num_rows() > 0): ?>
                <?php foreach ($galleries->result_array() as $galleries_item): ?>
                  <li>
                    <a href="<?php echo base_url() . $galleries_item['gallery_image'] ?>" data-rel="prettyPhoto[mg_2]" title="<?php echo $galleries_item['title'] ?>"><img src="<?php echo base_url() . $galleries_item['gallery_image'] ?>" width="200" height="200" alt=""><span></span>
                    </a>
                  </li>
                <?php endforeach; ?>
              <?php else : ?>
                <li>Tidak ada Gallery foto </li>
              <?php endif; ?>
            </ul>
          </div>
          <script type="text/javascript">
            jQuery(document).ready(function($) {
              $('a[data-rel]').each(function() {
                $(this).attr('rel', $(this).data('rel'));
              });
              $("a[rel^='prettyPhoto']").prettyPhoto({social_tools: false});
            });
          </script>	
          <div class="clear"></div>
        </div>               
        <!--/ post details -->
      </article>
    </div>
    <!--/ content -->    
    <div class="clear"></div>	    
  </div>
  <!--/ middle --> 
</div>
<!--/ container -->