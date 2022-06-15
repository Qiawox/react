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
<div class="check"><span style="color: green" id="correct">0</span> <span id="space">|</span> <span style="color: red" id="incorrect">0</span></div><br>
<div class="round">
<div class="task"><span id="task"></span></div>
<input type="text" id="answer">
<input type="button" value="Answer" onclick="check()">
<button class="sv">Save</button>
<button class="ex">Exit</button>
<button class="ab">Abort</button>
</div>
<div class="mant">

</div>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous">
</script>
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
$('button.ex').on('click', function(){
  location.href = 'lk.php';
})
$('button.ab').on('click', function(){
  document.getElementById('correct').innerHTML = '0';
  document.getElementById('incorrect').innerHTML = '0';
})
$('button.sv').on('click', function(){
  localStorage.setItem('result', document.querySelector('.check').innerHTML);
  const body = document.querySelector('body');
  const div = document.createElement('div');
  const check = document.querySelector('.check').innerHTML;
  const mant = document.querySelector('.mant')
  div.classList.add('gou');
  const get = localStorage.getItem('result');
  div.innerHTML = get;
  mant.appendChild(div);
  localStorage.setItem('gou', document.querySelector('.mant').innerHTML);
})
function Saved(){
  const gou = localStorage.getItem('gou');
  if (gou) {
    document.querySelector('.mant').innerHTML = gou;
  }
}
Saved();
</script>

</body>
</html>