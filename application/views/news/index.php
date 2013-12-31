<div class="container">
  <!-- middle -->
  <div id="middle" class="cols2 sidebar_left noimage">
    <div class="content" role="main">
      <?php foreach ($news as $news_item): ?>
        <article class="post-item">
          <header>
            <div class="date-box"><?php echo date("d M Y", strtotime($news_item['created_at'])) ?></div>
            <h1><a href="news/<?php echo $news_item['slug'] ?>"><?php echo $news_item['title'] ?></a></h1>
          </header>
          <div class="entry">
            <p><img width="575" height="300" src="<?php echo base_url() . $news_item['news_image'] ?>" alt="" class="frame_box"></p>
            <p><?php echo $news_item['text'] ?></p>
            <div class="clear"></div>
          </div>
          <div class="post-meta">
            <div class="alignleft"><a href="news/<?php echo $news_item['slug'] ?>" class="link-more">Read more</a></div>
            <em>Posted by <span class="author">Admin</span>
  <!--            <span class="separator">|</span> <a href="#" class="link-comments">17 comments</a>-->
            </em>
          </div>
        </article>
      <?php endforeach ?>
      <!-- pagination -->
      <!--      <div class="tf_pagination">
              <div class="inner">
                <a class="page_prev" href="#"><span>OLDER</span></a> 
                <a class="page_next" href="#"><span>NEWER</span></a>
                <span class="page-numbers page_current">1</span> <a href="#" class="page-numbers">2</a>  <a href="#" class="page-numbers">3</a> &hellip; <a href="#" class="page-numbers">13</a> &hellip; <a href="#" class="page-numbers">47</a> <a href="#" class="page-numbers">48</a> <a href="#" class="page-numbers">49</a>
              </div>
            </div>-->
      <!--/ pagination -->
    </div>
    <!--/ content -->
    <!-- sidebar -->
    <div class="sidebar">
      <!-- widget_search -->
      <div class="widget-container widget_search">
        <form method="get" action="#">
          <div>
            <label class="screen-reader-text" for="s">Search for:</label>
            <input type="text" name="s" id="s" class="inputField" onblur="if (this.value == '') {
                  this.value = 'Search this blog';
                }" onfocus="if (this.value == 'Search this blog') {
                      this.value = '';
                    }" value="Search this blog">
            <input type="submit" id="searchsubmit" class="btn-submit" value="Search">				
            <div class="clear"></div>
          </div>
        </form>			
      </div>
      <!--/ widget_search -->
      <!-- widget_recent_entries -->
      <div class="widget-container widget_recent_entries">
        <img src="<?php echo base_url(); ?>application/assets/images/icons/widget_icon_01.png" alt="" class="widget_icon">            
        <h3 class="widget-title">Artikel Popular</h3>
        <ul>
          <?php foreach ($popular_news as $popular_news): ?>
            <li><a href="news/<?php echo $popular_news['slug'] ?>"><?php echo $popular_news['title'] ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>   
      <!--/ widget_recent_entries -->
    </div> 
    <!--/ sidebar -->           
    <div class="clear"></div>	    
  </div>
  <!--/ middle --> 
</div>
<!--/ container -->