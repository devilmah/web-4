<?php

 
header('Content-Type: text/html; charset=UTF-8');

// В суперглобальном массиве $_SERVER PHP сохраняет некторые заголовки запроса HTTP
// и другие сведения о клиненте и сервере, например метод текущего запроса $_SERVER['REQUEST_METHOD'].
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  // Массив для временного хранения сообщений пользователю.
  $messages = array();

  // В суперглобальном массиве $_COOKIE PHP хранит все имена и значения куки текущего запроса.
  // Выдаем сообщение об успешном сохранении.
  if (!empty($_COOKIE['save'])) {
    // Удаляем куку, указывая время устаревания в прошлом.
    setcookie('save', '', 100000);
    // Если есть параметр save, то выводим сообщение пользователю.
    $messages[] = '<div class="h4 pb-2 mb-4 text-success border-bottom border-success">Спасибо, результаты сохранены.</div>';
  }

  // Складываем признак ошибок в массив.
  $errors = array();
  $errors['name1'] = !empty($_COOKIE['name1_error']);
  $errors['email1'] = !empty($_COOKIE['email1_error']);
  $errors['date1'] = !empty($_COOKIE['date1_error']);
  // TODO: аналогично все поля.

  // Выдаем сообщения об ошибках.
  //1
  if ($errors['name1']) {
    // Удаляем куку, указывая время устаревания в прошлом.
    setcookie('name1_error', '', 100000);
    // Выводим сообщение.
    $messages[] = '<div class="h4 pb-2 mb-4 text-danger border-bottom border-danger">Заполните имя.</div>';
  }
  //2
  if ($errors['email1']) {
    // Удаляем куку, указывая время устаревания в прошлом.
    setcookie('email1_error', '', 100000);
    // Выводим сообщение.
    $messages[] = '<div class="h4 pb-2 mb-4 text-danger border-bottom border-danger">Введеите email.</div>';
  }
  //3
  if ($errors['date1']) {
    // Удаляем куку, указывая время устаревания в прошлом.
    setcookie('date1_error', '', 100000);
    // Выводим сообщение.
    $messages[] = '<div class="h4 pb-2 mb-4 text-danger border-bottom border-danger">Укажите дату.</div>';
  }


  // Складываем предыдущие значения полей в массив, если есть.
  $values = array();
  $values['name1'] = empty($_COOKIE['name1_value']) ? '' : $_COOKIE['name1_value'];
  $values['email1'] = empty($_COOKIE['email1_value']) ? '' : $_COOKIE['email1_value'];
  $values['date1'] = empty($_COOKIE['date1_value']) ? '' : $_COOKIE['date1_value'];
  // TODO: аналогично все поля.

  // Включаем содержимое файла form.php.
  // В нем будут доступны переменные $messages, $errors и $values для вывода 
  // сообщений, полей с ранее заполненными данными и признаками ошибок.
  include('form.php');
}
// Иначе, если запрос был методом POST, т.е. нужно проверить данные и сохранить их в XML-файл.
else {
  // Проверяем ошибки.
  $errors = FALSE;
  //1
  if (empty($_POST['name1'])) {
    // Выдаем куку на день с флажком об ошибке в поле fio.
    setcookie('name1_error', '1', time() + 24 * 60 * 60);
    $errors = TRUE;
  }
  else {
    // Сохраняем ранее введенное в форму значение на месяц.
    setcookie('name1_value', $_POST['name1'], time() + 30 * 24 * 60 * 60);
  }
  //2
  if (empty($_POST['email1'])) {
    // Выдаем куку на день с флажком об ошибке в поле fio.
    setcookie('email1_error', '1', time() + 24 * 60 * 60);
    $errors = TRUE;
  }
  else {
    // Сохраняем ранее введенное в форму значение на месяц.
    setcookie('email1_value', $_POST['email1'], time() + 30 * 24 * 60 * 60);
  }
  //3
  if (empty($_POST['date1'])) {
    // Выдаем куку на день с флажком об ошибке в поле fio.
    setcookie('date1_error', '1', time() + 24 * 60 * 60);
    $errors = TRUE;
  }
  else {
    // Сохраняем ранее введенное в форму значение на месяц.
    setcookie('date1_value', $_POST['date1'], time() + 30 * 24 * 60 * 60);
  }

// *************
// TODO: тут необходимо проверить правильность заполнения всех остальных полей.
// Сохранить в Cookie признаки ошибок и значения полей.
// *************

  if ($errors) {
    // При наличии ошибок перезагружаем страницу и завершаем работу скрипта.
    header('Location: index.php');
    exit();
  }
  else {
    // Удаляем Cookies с признаками ошибок.
    setcookie('name1_error', '', 100000);
    setcookie('email1_error', '', 100000);
    setcookie('date1_error', '', 100000);
    // TODO: тут необходимо удалить остальные Cookies.
  
if (empty($_POST['chek1'])) {
echo"<div class=' container w-50' >
	<div class=' my-5 p-5 bg-light rounded' style='--bs-bg-opacity: .7;'>
		<h2 class='text-center'>Вы не ознакомились с контрактом</h2></div></div>";
  exit();
}


include('bd.php');

try {
  $stmt = $db->prepare("INSERT INTO users (firstname, email, bdate, sex, amount, immortality, god, fly, bio) VALUES (:firstname, :email, :bdate, :sex, :amount, :immortality, :god, :fly, :bio)");
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':bdate', $bdate);
$stmt->bindParam(':sex', $sex);
$stmt->bindParam(':amount', $amount);
$stmt->bindParam(':ability', $ability);
$stmt->bindParam(':bio', $bio);

$firstname = $_POST['name1'];
$email = $_POST['email1'];
$bdate = $_POST['date1'];
$sex = $_POST['radio1'];
$amount = $_POST['radio2'];
$immortality = $_POST['select1'];
$god = $_POST['select2'];
$fly = $_POST['select3'];
$bio = $_POST['bio1'];

$stmt->execute();
}
catch(PDOException $e){
  echo"<div class=' container w-50' >
	<div class=' my-5 p-5 bg-light rounded' style='--bs-bg-opacity: .7;'>
		<h2 class='text-center'> Ошибка : " . $e->getMessage() . "</h2></div></div>";
  exit();
}
  // Сохраняем куку с признаком успешного сохранения.
  setcookie('save', '1');

  // Делаем перенаправление.
  header('Location: index.php');
}}
