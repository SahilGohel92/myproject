<div class="container">
  <div class="offset-sm-1">
  <h5>Answers : </h5>
  <?php
  $query = "SELECT * FROM answers WHERE question_id = $qid";
  $result = $conn->query($query);
  foreach ($result as $row){
    $answer = $row['answer']; 
    echo "<div class='row'>
    <p class='answer-wrapper' 
    style=
    'border-bottom: 1px solid #ddd;
    padding: 5px;
    margin-bottom: 10px;
    color: #1c7194;'>$answer</p>
    </div>";
  }
  ?>
</div>
</div>