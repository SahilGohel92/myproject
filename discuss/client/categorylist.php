<div>
  <h1 class="heading">Categories</h1>
  <?php
   include("./common/db.php");

    $query = "SELECT * FROM category";
   $result = $conn->query($query);
   foreach ($result as $row){
     $name = ucfirst($row['name']);
     $id = $row['id'];
     echo "<div style='border:1px solid #ddd; padding:15px; margin:10px;'>
        <h4 
        style='margin:0;
        padding:0;'>
        <a href='?c-id=$id' 
        style='font-size:18px; text-decoration:none; color:#1c7194;'
        >$name</a>
        </h4>
    </div>";

   }
  ?>
</div>