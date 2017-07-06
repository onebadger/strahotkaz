<?php 

if(isset($_POST['phone3'])) {
  $message = 'Phone: ' .$_POST['phone3'] . "\n"
    .'Name: ' .$_POST['name3'];
  mail('strahotkaz@gmail.com, r.andreev1982@gmail.com', 'stkahotkaz call me', $message);
} else {
  header('Refresh: 3; URL=index.html');
  exit(0);
}
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Спасибо. Мы скоро свяжемся с вами.</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="15;url=../index.html" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body class="bg-faded">
    <div class="container">
      <h1 class="display-4 mt-5 mb-5">Спасибо. Мы скоро свяжемся с вами.</h1>
      <p class="lead mb-4">Мы работаем до 21:00 без выходных. Если вам не перезвонят в течении 20 минут, значит рабочий день уже закончился. Сожалеем! Мы позвоним вам на следующий день после 10:00 по будням либо после 12:00 в выходные.</p>
      <p class="lead mt-3"><a href="../index.html"><strong>Назад</strong></a></p>
    </div>
  </body>
</html>