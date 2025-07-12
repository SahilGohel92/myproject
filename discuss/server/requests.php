<?php
session_start();

include('../common/db.php');

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $address  = $_POST['address'];

    $user = $conn->prepare(("Insert into `users`(`id`,`username`,`email`,`password`,`address`) VALUES (NULL,'$username','$email','$password','$address')"));


    $result = $user->execute();
    echo $user->insert_id;

    if ($result) {
        $_SESSION['user'] = [
            'username' => $username,
            'email'    => $email,
            'password' => $password,
            'address'  => $address,
            'user_id'  => $user->insert_id
        ];

        header('location: /discuss');
    } else {
        echo "New User Not Created";
    }
} else if (isset($_POST['login'])) {
//    print_r($_POST);
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $username = "";
    $user_id  = "";

    $query    = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
    $result   = $conn->query($query);

    if ($result->num_rows == 1) {
        foreach ($result as $row) {
            $username = $row['username'];
            $user_id  = $row['id'];
        }
        $_SESSION['user'] = [
            'username' => $username,
            'email'    => $email,
            'user_id'  => $user_id
        ];
        header('location: /discuss');
    } else {
        echo "User Not Found";
    }

}else if (isset($_POST['logout'])) {
    session_unset();
    header('location: /discuss');
}else if (isset($_POST['ask'])){
     $title = $_POST['title'];
     $description = $_POST['description'];
     $category_id = $_POST['category'];
     $user_id = $_SESSION['user']['user_id'];

     $question = $conn->prepare( "INSERT INTO `questions`(`id`, `title`, `description`, `category_id`, `user_id`) VALUES (NULL,'$title','$description','$category_id','$user_id')");

     $result = $question->execute();
     $question->insert_id;
     if ($result) {
         header('location: /discuss');
     }  else {
         echo "Question is Not Created";
     }
}else if(isset($_POST['answer'])){
    $answer = $_POST['answer'];
     $question_id = $_POST['question_id'];
     $user_id = $_SESSION['user']['user_id'];

     $answer = $conn->prepare( "INSERT INTO `answers`(`id`, `answer`, `question_id`, `user_id`) VALUES (NULL,'$answer','$question_id','$user_id')");

     $result = $answer->execute();
     if ($result) {
         header('location: /discuss?q-id='.$question_id);
     }  else {
         echo "Answer is Not Submitted";
     }
}else if (isset($_GET["delete"])) {
    echo $qid= $_GET["delete"];
     $query= $conn->prepare("delete from questions where id =$qid");
     $result = $query->execute();
     if($result){
        header("location: /discuss");
     }else {
        echo "Question not deleted";
     }
}
?>
