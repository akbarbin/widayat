<div class="container">
  <!-- middle -->
  <div id="middle" class="cols2 sidebar_left">
    <div class="content" role="main">
      <article class="post-item post-detail">
        <h1>Kirim Pesan:</h1>
        <div class="entry">
          <p>Kontak ini merupakan sarana untuk mengenal dan tanya jawab kepada IR. H. M. Widayat karena beliau saat ini sedang melakukan proses pencalonan Legislatif DPRD Kabupaten Lumajang yang akan dilaksankan pada 9 April 2014.</p>
          <!-- contact form -->
          <?php echo validation_errors(); ?>
          <div class="add-comment" id="addcomments">
            <div class="comment-form">
              <?php echo form_open_multipart('contacts', array('class' => 'ajax_form', 'id' => 'contactForm')) ?>
              <div class="row alignleft">
                <label for="name">Isikan nama lengkap Anda*</label>
                <input type="text" id="name" name="name" value="<?php echo set_value('name'); ?>" class="inputtext required">
              </div>
              <div class="space"></div>
              <div class="row alignleft">
                <label for="email">Isikan alamat email Anda*</label>
                <input type="text" id="email" name="email" value="<?php echo set_value('email'); ?>" class="inputtext required">
              </div>
              <div class="row alignleft">
                <label for="email">Isikan nomor telephone Anda*</label>
                <input type="text" id="phone_number" name="phone_number" value="<?php echo set_value('phone_number'); ?>" class="inputtext required">
              </div>
              <div class="space"></div>                          
              <div class="clear"></div>   
              <div class="rowl">
                <label for="message">Isikan pesan Anda*</label>
                <textarea id="content" cols="30" rows="10" name="content" class="textarea textarea_middle required"><?php echo set_value('content'); ?></textarea>
              </div>
              <div class="row rowSubmit">
                <input type="submit" id="send" value="SEND YOUR MESSAGE" class="btn-submit">
              </div>
              <?php echo form_close() ?>
            </div>
          </div>
          <!--/ contact form -->
          <div class="clear"></div>
        </div>
      </article>            

    </div>

    <!--/ content -->

    <!-- sidebar -->
    <div class="sidebar">

      <!-- widget_contact -->
      <div class="widget-container widget_contact">   
        <h3 class="widget-title">Temui kami di:</h3>
        <div class="inner">
          <div class="contact-address">
            <div class="name"><strong>Ir. H. M. Widayat</strong></div>
            <div class="address">Jalan Buk Serang No. 107 Kedung Pakis Kec. Pasirian, Lumajang</div>
            <div class="phone"><em>Phone:</em> <span>0852 5874 9056</span></div>
            <div class="mail"><em>Email:</em> <a href="mailto:irhmwidayat@gmail.com">irhmwidayat@gmail.com</a></div>
          </div>

          <!--          <div class="contact-social">
                      <div><strong>Join us:</strong> <br> <a href="#"><img src="<?php echo base_url(); ?>application/assets/images/icons/btn_facebook.png" alt=""></a></div>
                      <div class="clear"></div>
                    </div>-->
        </div>
      </div>
      <!--/ widget_contact -->
    </div>
    <!--/ sidebar -->

    <div class="clear"></div>	    
  </div>
  <!--/ middle --> 
</div>
<!--/ container -->