<div class="container">
  <!-- middle -->
  <div class="content" role="main">
    <article class="post-item post-detail">
      <h1>Membuat article baru.</h1>          
      <div class="entry">
        <!-- contact form -->
        <?php echo validation_errors(); ?>
        <div class="add-comment" id="addcomments">
          <div class="comment-form">
            <?php echo form_open_multipart('admin/news/edit/'. $news_item['slug'], array('class' => 'ajax_form', 'id' => 'contactForm')) ?>
            <div class="row alignleft">
              <label for="name">Judul*</label>
              <input type="text" id="name" name="title" value="<?php echo $news_item['title']; ?>" class="inputtext input_middle required">
            </div>
            <div class="space"></div>
            <div class="row alignleft upload"> 
              <label for="fakeupload">Upload Gambar*</label>
              <input type="file" name="news_image" size="20"/>
            </div>
            <div class="clear"></div>
            <div class="row">
              <label for="message">Masukkan Deskripsi*</label>
              <textarea id="message" cols="30" rows="10" name="text" class="textarea textarea_middle required"><?php echo $news_item['text']; ?></textarea>
            </div>
            <div class="row rowSubmit">
              <input type="submit" id="send" value="SIMPAN" class="btn-submit">
            </div>
            <?php echo form_close() ?>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </article>            
  </div>
  <!--/ content -->
  <div class="clear"></div>
  <!--/ middle --> 
</div>
<!--/ container -->