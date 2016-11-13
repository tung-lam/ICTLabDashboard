<div class="container">
<h4><?php echo $this->session->flashdata('msg'); ?></h4>
<?php echo validation_errors(); ?>

<div class="form-horizontal">
  <?php echo form_open('staff/reset_password'); ?>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">New Password:</label>
      <div class="col-sm-8"> 
        <input type="password" class="form-control" name="npassword" placeholder="Enter password">
      </div>
      <div class="col-sm-2"></div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Confirm New Password:</label>
      <div class="col-sm-8"> 
        <input type="password" class="form-control" name="cnpassword" placeholder="Confirm password">
      </div>
      <div class="col-sm-2"></div>
    </div>

    <div class="form-group"> 
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-default" value="Reset password"></input>
      </div>
    </div>

  </form>
</div>
</div>