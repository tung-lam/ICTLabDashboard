<div class="container">
<h4><?php echo $this->session->flashdata('msg'); ?></h4>
<?php echo validation_errors(); ?>

<div class="form-horizontal">
  <?php echo form_open('staff/signup'); ?>
    <div class="form-group">
      <label class="control-label col-sm-2" for="username">User name:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="username" placeholder="Enter username">
      </div>
      <div class="col-sm-2"></div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-8">
        <input type="email" class="form-control" name="email" placeholder="Enter email">
      </div>
      <div class="col-sm-2"></div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-8"> 
        <input type="password" class="form-control" name="password" placeholder="Enter password">
      </div>
      <div class="col-sm-2"></div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
      <div class="col-sm-8"> 
        <input type="password" class="form-control" name="cpassword" placeholder="Confirm password">
      </div>
      <div class="col-sm-2"></div>
    </div>

    <div class="form-group"> 
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>

    <div class="form-group"> 
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-default" value="Sign up"></input>
      </div>
    </div>

  </form>
</div>
</div>