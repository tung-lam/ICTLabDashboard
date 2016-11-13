<div class="container">
<?php echo validation_errors(); ?>

<div class="form-horizontal">
  <?php echo form_open('staff/update_profile'); ?>
    <div class="form-group">
      <label class="control-label col-sm-2" for="username">User name:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
      </div>
      <div class="col-sm-2"></div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-8">
        <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
      </div>
      <div class="col-sm-2"></div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Full name:</label>
      <div class="col-sm-8"> 
        <input type="text" class="form-control" name="fullname" value="<?php echo $fullname; ?>">
      </div>
      <div class="col-sm-2"></div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Title</label>
      <div class="col-sm-8"> 
        <input type="text" class="form-control" name="title" value="<?php echo $title; ?>">
      </div>
      <div class="col-sm-2"></div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Position</label>
      <div class="col-sm-8"> 
        <input type="text" class="form-control" name="position" value="<?php echo $position; ?>">
      </div>
      <div class="col-sm-2"></div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Affiliation</label>
      <div class="col-sm-8"> 
        <input type="text" class="form-control" name="affiliation" value="<?php echo $affiliation; ?>">
      </div>
      <div class="col-sm-2"></div>
    </div>

    <div class="form-group"> 
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-default" value="Update"></input>
      </div>
    </div>

  </form>
</div>
</div>