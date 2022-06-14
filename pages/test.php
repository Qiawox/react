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
<span style="color: green" id="correct">0</span> / <span style="color: red" id="incorrect">0</span><br>
<span id="task"></span>
<input type="text" id="answer">
<input type="button" value="Reply" onclick="check()">
<script>
function gen() {
    var a = (Math.round(Math.random() * 7) + 2), b = (Math.round(Math.random() * 7) + 2);
    return [a + "x" + b + "=", a * b];
}
var current = gen();
document.getElementById("task").innerHTML = current[0];
function check() {
    ++document.getElementById( +document.getElementById("answer").value == current[1] ? "correct" : "incorrect" ).innerHTML;
    current = gen();
    document.getElementById("task").innerHTML = current[0];
    document.getElementById('answer').value = '';
}
</script>

</body>
</html>