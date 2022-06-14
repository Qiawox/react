<?php
require 'db.php';
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$c_password = $_POST['c_password'];
$str_sign_up = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
if ($name && $email && $password && $c_password) {
  $str_email = "SELECT `email` FROM `users` WHERE `email` = '$email'";
  $str_run_email = mysqli_query($connect,$str_email);
  while ($a=mysqli_fetch_array($str_run_email)) {
    $count = mysqli_num_rows($str_run_email);
    if ($count > 0) {
      echo '<p class="error">This email is already registered</p>';
    }
  }
  if ($password == $c_password) {
    $run_sign_up = mysqli_query($connect,$str_sign_up);
    if ($run_sign_up) {
      echo '<p class="success">Success!</p>';
    }
  }
  else
  {
    echo '<p class="error">Passwords are not the same!</p>';
  }
}
else
{
  echo '<p class="error">Fill in all the fields!</p>';
}
?>