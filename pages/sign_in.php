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
<div class="sign_up">
    <h1>Sing In</h1>
    <form method="POST" action="auth.php">
      <label>Email</label><br>
      <input type="email" class="email" name="email"><br>
      <label>Password</label><br>
      <input type="password" class="password" name="password"><br>
      <button>Sign In</button>
    </form>
    <div id="result"></div>
  </div>
</body>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous">
</script>
<script>
$('button').on('click', function(){
  const email = $('input.email').val();
  localStorage.setItem('email', email);
  const password = $('input.password').val();
  localStorage.setItem('password', password);
});
function Auto() {
  const email = $('input.email').val();
  const password = $('input.password').val();
  const fromStorage = localStorage.getItem('email');
  const fromStorage1 = localStorage.getItem('password');
  if (fromStorage || fromStorage1) {
    $('input.email').val(fromStorage);
    $('input.password').val(fromStorage1);
  }
}
Auto();
</script>
</html>