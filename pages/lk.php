<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css">
  <title>Document</title>
</head>
<body>
  <div class="content">
    <div class="lk">
      <h1>Personal Area</h1>
      <?php
        session_start();
        require 'db.php';
        $str_out = "SELECT * FROM `users` WHERE `id` = '".$_SESSION['user']['id']."';";
        $run_out = mysqli_query($connect,$str_out);
        $user = mysqli_fetch_array($run_out);
      ?>
      <p><span>Name:</span> <?php echo $user['name'] ?></p><br>
      <p><span>Email:</span> <?php echo $user['email'] ?></p><br>
      <form action="test.php" class="game">
        <button class="start">Start</button>
      </form>
    </div>
    <div class="state">
      <h1>Statistics</h1>
    </div>
  </div>
</body>
</html>