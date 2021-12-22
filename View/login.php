<?php $layout = 'main'; ?>
<div>
  <div class="">
    <h1 class="text-center h-1">Log in</h1>
  </div>
  <form action="login" method="POST">
    <div class="row">
      <div class="col mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" name="username" id="username" />
      </div>
      <div class="col mb-3">
        <label for="password" class="form-label">password</label>
        <input type="text" class="form-control" name="password" id="password" />
      </div>
    </div>
    <div>
      <input class="btn btn-primary col-12 my-3" type="submit" />
    </div>
  </form>
</div>
