<?php
$DATABASE_HOST    = "localhost";
$DATABASE_USER   = "root";
$DATABASE_PASS   = "";
$DATABASE_NAME  = "karcher";

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

 session_start();
 
if (isset($_POST['sub'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
 
  $query = "SELECT * from users WHERE email = '$email'";
  
  $users = mysqli_query($con, $query);
 
  if (!$users) {
    die('query Failed' . mysqli_error($con));
  }
 
  var_dump(password_verify($password, $user_password));
  while ($row = mysqli_fetch_array($users)) {
    var_dump($row);
    $user_id = $row['id'];
    $user_lastname = $row['lastname'];
    $user_firstname = $row['firstname'];
    $user_email = $row['email'];
    $user_password = $row['password'];
  }
  if (password_verify($password, $user_password)) {
    $_SESSION['id'] = $user_id;       // Storing the value in session
    $_SESSION['lastname'] = $user_lastname;   // Storing the value in session
    $_SESSION['firstname'] = $user_firstname;   // Storing the value in session
    $_SESSION['email'] = $user_email; // Storing the value in session
    header('location: ../../page/affichageListe/affichageListe.php');
  } else {
    echo "mot de passe incorrect !";
  }
}

?>