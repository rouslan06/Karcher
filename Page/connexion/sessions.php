<?php



function login(string $email, string $password)
{

  session_start();
  if (!empty($_SESSION['users'])) {
    foreach ($_SESSION['users'] as $user) {
      if ($user['email'] == $email && $user['password'] == $password) {
        return true;
      }
    }
  }
  return false;
}

?>