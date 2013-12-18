<div class="content" id="about">
  <div class="container">
    <div class="row">
      <div class="page-space">
        <div class="span12">
          <h1 class="heading"><span>Create a news item</span></h1>
          <h2 class="subheading"><span>Subheading Goes Here</span></h2>
          <div class="short-intro">
            <?php echo validation_errors(); ?>

            <?php echo form_open('news/create') ?>
            <label for="title">Title</label>
            <input type="input" name="title" /><br />

            <label for="text">Text</label>
            <textarea name="text"></textarea><br />

            <input type="submit" name="submit" value="Create news item" /> 
            <?php echo form_close() ?>
          </div>
        </div>
      </div>                
    </div>
  </div>
</div>