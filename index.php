<?php
ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);

$bd = mysqli_connect('localhost', 'user', '1', 'my_bd');


echo '<!DOCTYPE html>
<html>
<head>
	<title>Test task on PHP</title>

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="css/font-styles.css">

</head>

<body>
<header class="text-center md-35">
	<h1 class="">Форма для вывода простых чисел</h1>
</header>

<div class="container">
	<div class="row">
<form action="index.php" method="POST">
	<label>Ведите любое целое число:</label>	
	<input type="text" name="num" style="border-radius: 5px">
	<button name="submit" type="submit" class="btn bg-primary"><b>Отправить</b><b></button> </br>
</form>
</div>
</div>

</body>
</html>';

echo "<br />";

$num = $_POST['num'];

echo "<div class='container'><div class='col-md-3'><b>Вывод чисел до $num : </b></div><br />";

 for ($i=0; $i < $num; $i++) { 
	
	echo "<span>$i</span> ";
};

$result = mysqli_query("INSERT INTO result (numb, resultcount) VALUES ($num, $i)");

if ($result) {
    echo "<p>Данные успешно сохранены!</p>";
}
else {
    echo "<p>Произошла ошибка, пожалуйста повторите попытку.</p>";
} 

?>
