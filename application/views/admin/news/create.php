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
            <?php echo form_open_multipart('admin/news/create', array('class' => 'ajax_form', 'id' => 'contactForm')) ?>
            <div class="row alignleft">
              <label for="name">Judul*</label>
              <input type="text" id="name" name="title" value="" class="inputtext input_middle required">
            </div>
            <div class="space"></div>
            <div class="row alignleft upload"> 
              <label for="fakeupload">Upload Gambar*</label>
              <input type="file" name="news_image" size="20"/>
            </div>
            <div class="clear"></div>
            <div class="row">
              <label for="message">Masukkan Deskripsi*</label>
              <textarea id="message" cols="30" rows="10" name="text" class="textarea textarea_middle required"></textarea>
            </div>
            <div class="row rowSubmit">
              <input type="submit" id="send" value="SEND YOUR MESSAGE" class="btn-submit">                                
              <a onClick="document.getElementById('commentForm').reset();
                  return false" href="#" class="link-reset">reset all fields</a>
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