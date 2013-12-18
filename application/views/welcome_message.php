<!-- top Slider/Image -->
<div class="header_slider">

  <div class="header_quote">
    <p>Kami akan berusaha untuk menjadi yang terbaik bagi rakyat Lumajang tercinta. <br> Berjuang bersama rakyat untuk mewujudkan visi dan misi kami adalah motivasi terbesar kami untuk memajukan Lumajang ini.</p>
  </div>

  <!-- header slider -->
  <div class="top_slider">        	
    <div class="slides_container">

      <div class="slide">
        <a href="#"><img src="<?php echo base_url(); ?>application/assets/images/temp/flex_slide_1.jpg" alt=""></a>
        <div class="caption">
          <p><span>Kami memiliki pengalaman yang selama 36 tahun di PTPN XII.</span> <a href="#" class="link-more">FIND OUT MORE</a></p>
        </div>
      </div>

      <div class="slide">
        <a href="#"><img src="<?php echo base_url(); ?>application/assets/images/temp/flex_slide_2.jpg" alt=""></a>
        <div class="caption">
          <p><span>Our history speaks for itself - we've never lost a case!</span> <a href="#" class="link-more">FIND OUT MORE</a></p>
        </div>
      </div>

      <div class="slide">
        <a href="#"><img src="<?php echo base_url(); ?>application/assets/images/temp/flex_slide_3.jpg" alt=""></a>
        <div class="caption">
          <p><span>We've got a wide range of legal services.</span> <a href="#" class="link-more">FIND OUT MORE</a></p>
        </div>
      </div>

    </div>              
  </div>

  <script>
    jQuery(document).ready(function($) {
      $('.top_slider').slides({
        play: 7000,
        pause: 7000,
        hoverPause: true,
        generateNextPrev: true,
        effect: 'slide',
        fadeSpeed: 250,
        slideSpeed: 700,
        slideEasing: 'easeInOutExpo',
        preloadImage: 'images/loading.gif'
      });
      // Pagination item width
      var pageItem = $('.top_slider .pagination li');
      var pageItemWidth = 100 / pageItem.length;
      pageItem.css("width", "" + pageItemWidth + "%");
    });
  </script>        

</div>
<!--/ top Slider/Image -->
</div>

<div class="container">
  <!-- middle -->
  <div id="middle" class="full_width">

    <div class="content">
      <div class="post-detail">            
        <div class="entry">
          <div class="newsline">
            <h2>Kabar Terbaru.</h2>
          </div>
          <!--/ latest news line -->
          <div class="divider_space"></div>
          <!--  postlist / 1 article -->
          <div class="postlist">
            <?php foreach ($news as $news_item): ?>
              <article>
                <figure class="image_frame">
                  <a href="#"><img src="<?php echo base_url(); ?>application/assets/images/temp/case_1.jpg" alt=""></a>
                  <figcaption>Title for Case Study</figcaption>
                </figure>
                <section class="summary">
                  <h1><a href="news/<?php echo $news_item['slug'] ?>"><?php echo $news_item['title']; ?></a></h1>
                  <p><?php echo $news_item['text'] ?></p>
                  <div class="post-meta"><a href="index.php/news/<?php echo $news_item['slug'] ?>" class="link-more alignleft">Lihat detailnya</a> <a href="#" class="link-more">Kabar lain</a></div>
                </section>
                <div class="clear"></div>
              </article>
            <?php endforeach; ?>
          </div>
          <!--/  postlist / 1 article -->
          <!-- 2 Cols: 3/5 + 2/5 -->
          <div class="row">
            <div class="col col_3_5">
              <div class="inner">
                <h3>Testimoni Rakyat:</h3>

                <div class="quoteBox">
                  <div class="inner">
                    <div class="quote-text">Beliau merupakan sesosok ayah yang sangat baik. Kejujuran yang selalu menjadi yang pertama, kesederhaan yang tinggi yang selalu ditunjukkan, keimanan dan ketaqwaan selalu dia tanamkan. Sehingga saya sangat mendukung sebagai anak agar Abah menjadi orang yang bermanfaat bagi orang banyak. Amin.</div>
                    <div class="quote-author"><span>Muhamad Akbar Bin Widayat</span>, PUTRA KETIGA</div>
                  </div>
                </div>
              </div>
            </div>
<!--            <div class="col col_2_5">
              <div class="inner">
                <div class="widget-container newsletterBox">

                  <div class="quoteBox">
                    <div class="inner">
                      <div class="quote-text">Donec congue lacinia dui, a porttitor lectus condimentum oreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus e vestibulum faucibus et in metus. In pellentesque faucibus vestibulum. Nulla nulla justo, eget luctus tortor dolor sit amet lipsum odio lectus congue. </div>               
                      <div class="quote-author"><span>MARCIA HERNANDEZ</span>, CLIENT</div>
                    </div>
                  </div> 
                </div>

              </div>
            </div>-->
          </div>
          <!--/ 2 Cols: 3/5 + 2/5 -->

          <div class="clear"></div>
        </div>
      </div>
    </div>
    <!--/ content -->
  </div>
  <!--/ middle --> 
</div>
<!--/ container -->