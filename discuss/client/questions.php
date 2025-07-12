<div class="container">
  <div class="row">
    <div class="col-8">
    <h1 class="heading">Questions</h1>  
  <?php
   include("./common/db.php");
   if(isset($_GET['c-id'])){
     $query = "SELECT * FROM questions WHERE category_id = $cid";
   } else if(isset($_GET['u-id'])){
     $query = "SELECT * FROM questions WHERE user_id = $uid";
   } else if(isset($_GET['latest'])){
     $query = "SELECT * FROM questions order by id desc";
   } else if(isset($_GET['search'])){
     $query = "SELECT * FROM questions WHERE title LIKE '%{$_GET['search']}%'";
   } 
   
   else {
      $query = "SELECT * FROM questions";    
   }
   $result = $conn->query($query);
   foreach ($result as $row){
     $title = $row['title'];
     $id = $row['id'];
     echo "<div style='border:1px solid #ddd; padding:15px; margin:10px;'>
        <h4 
        style='margin:0;
        padding:0;
        display:flex;
        justify-content:space-between;
        '>
        <a href='?q-id=$id' 
        style='font-size:18px; text-decoration:none; color:#1c7194;'
        >$title</a>";
        echo $uid?"<a href='./server/requests.php?delete=$id'>Delete</a>":NULL;
      echo "</h4></div>";
   }
  ?>
</div>
<div class="col-4">
  <?php
  include("categorylist.php");
  ?>
</div>
  </div>
</div>