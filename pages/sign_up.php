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
    <h1>Sing Up</h1>
    <form>
      <label>Name</label><br>
      <input type="text" class="name"><br>
      <label>Email</label><br>
      <input type="email" class="email"><br>
      <label>Password</label><br>
      <input type="password" class="password"><br>
      <label>Confirm Password</label><br>
      <input type="password" class="confirm_password"><br>
      <button class="reg">Sign Up</button>
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
  $('button.reg').on('click', function(e){
    e.preventDefault();
    const name = $('input.name').val();
    const email = $('input.email').val();
    const password = $('input.password').val();
    const c_password = $('input.confirm_password').val();
    console.log(name, email, password, c_password);
    localStorage.setItem('email', email);
    localStorage.setItem('password', password);
    $.ajax({
      method: 'POST',
      url: 'reg.php',
      data: {
        name: name,
        email: email,
        password: password,
        c_password: c_password
      },
      success: function(great){
          if (name || email || password || c_password) {
            $('#result').html(great);
          }
          
        }
    });
    $('input.name').val('');
    $('input.email').val('');
    $('input.password').val('');
    $('input.confirm_password').val('');
  })
</script>
</html>