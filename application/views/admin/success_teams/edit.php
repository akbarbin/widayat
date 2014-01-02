<div class="container">
  <!-- middle -->
  <div class="content" role="main">
    <article class="post-item post-detail">
      <h1>Mengubah article baru.</h1>          
      <div class="entry">
        <!-- contact form -->
        <?php echo validation_errors(); ?>
        <div class="add-comment" id="addcomments">
          <div class="comment-form">
            <?php echo form_open_multipart('admin/success_teams/edit/' . $success_team['id'], array('class' => 'ajax_form', 'id' => 'contactForm')) ?>
            <div class="row alignleft">
              <label for="name">Nama*</label>
              <input type="text" id="name" name="name" value="<?php echo $success_team['name']; ?>" class="inputtext input_middle required">
            </div>
            <div class="clear"></div>
            <div class="row alignleft">
              <label for="address">Alamat*</label>
              <input type="text" id="address" name="address" value="<?php echo $success_team['address']; ?>" class="inputtext input_middle required">
            </div>
            <div class="clear"></div>
            <div class="row alignleft">
              <label for="position">Jabatan*</label>
              <input type="text" id="position" name="position" value="<?php echo $success_team['position']; ?>" class="inputtext input_middle required">
            </div>
            <div class="clear"></div>
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