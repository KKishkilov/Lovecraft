<div class="container">
  <div class="row">
    <div class="col-lg-4">
    <?php echo validation_errors(); ?>


    </div>


  </div>
  <div class="row"> 
    <div class="col-lg-4 mx-auto" style="margin-top: 60px;">
    <form method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo set_value('email'); ?>">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
  </div> 
</div>