<div class="container">
  <!-- middle -->
  <div id="middle" class="cols2 sidebar_left noimage">
    <div class="content" role="main">
      <article class="post-item post-detail">
        <header>
          <div class="date-box">May 12</div>
          <h1><?php echo $news_item['title']; ?></h1>
        </header>
        <figure><img src="<?php echo base_url(); ?>application/assets/images/temp/entry_03.jpg" alt="" class="frame_box"></figure>
        <div class="post-meta">                	
          <em class="alignleft">Posted by <span class="author">Admin</span> <span class="separator"></em>
        </div>
        <div class="entry">                 	
          <p><?php
            echo $news_item['text'];
            ?></p>
          <div class="clear"></div>
        </div>
        <!--/ post details -->
      </article>    
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
        <h3 class="widget-title">Recent Articles</h3>
        <ul>
          <li><a href="blog-details.html">Being First and Last</a></li>
          <li><a href="blog-details.html">Identity or Presence?</a></li>
          <li><a href="blog-details.html">Delivering Results</a></li>
          <li><a href="blog-details.html">Looking to hire Junior Mar...</a></li>
          <li><a href="blog-details.html">Two new clients signed</a></li>
        </ul>
      </div>   
      <!--/ widget_recent_entries -->  

      <!-- widget_popular_posts --> 
      <div class="widget-container widget_popular_posts">
        <img src="<?php echo base_url(); ?>application/assets/images/icons/widget_icon_02.png" alt="" class="widget_icon">
        <h3 class="widget-title">Most  Discussed</h3>
        <ul>
          <li><a href="blog-details.html">New team members for. our...</a></li>
          <li><a href="blog-details.html">Lovely Blueberry Pie</a></li>
          <li><a href="blog-details.html">Clean Classy  Corporate</a></li>
          <li><a href="blog-details.html">Two new clients signed</a></li>
          <li><a href="blog-details.html">Looking to hire Junior Mar...</a></li>                           
        </ul>
      </div> 
      <!--/ widget_popular_posts -->        

    </div> 
    <!--/ sidebar -->           
    <div class="clear"></div>	    
  </div>
  <!--/ middle --> 
</div>
<!--/ container -->