<div class="container">
<h1 class="heading">Signup</h1>
<form method="POST" action="./server/requests.php">
  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="username" class="form-label">User Name</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Enter User Name">
  </div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="email" class="form-label">User Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Enter User Email">
  </div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
  </div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
  </div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
     <button type="submit" name="signup" class="btn btn-primary">Signup</button>
  </div>

  
</form>
</div>