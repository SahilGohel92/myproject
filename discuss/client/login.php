<div class="container">
<h1 class="heading">Login</h1>
<form action="./server/requests.php" method="POST">

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="email" class="form-label">User Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Enter User Email">
  </div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
  </div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
     <button type="submit" name="login" class="btn btn-primary">Login</button>
  </div>

</form>
</div>