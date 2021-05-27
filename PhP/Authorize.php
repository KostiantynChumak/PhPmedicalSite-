<?php
session_start();
header('Content-type: text/html; charset=utf-8');


require_once('inc/conf.php');









$Login= $_POST['login'];
$Pass= $_POST['password'];







// если данные из форма не были отправлены, то выводим ошибку на экран

if (!isset($Login))
exit('Błąd podczas wysyłania danych z formularza, kliknij ponownie w przeglądarce');     // тест: это сообщение отобразится, если закрыть браузер и после в истории браузера нажать восстановить вкладки или запустить домен + Authorize.php





// проверка login

if (mb_strlen($Login) < 2  or  mb_strlen($Login) > 9)              // Логин должен быть не меньше 2 символов и не больше 9
exit('Login musi mieć co najmniej 2 znaki i nie więcej niż 9, kliknij ponownie w przeglądarce');

if (!preg_match("/^[a-zA-Z0-9]+$/",$Login) )                          // Логин должен содержать только цифры и английские буквы
exit('Login musi zawierać tylko cyfry i angielskie litery, kliknij ponownie w przeglądarce');

// конец   проверка login





// проверка пароля

if (mb_strlen($Pass) < 6  or  mb_strlen($Pass) > 9)                  // Пароль должен быть не меньше 6 символов и не больше 9
exit('Hasło musi mieć co najmniej 6 znaków i nie więcej niż 9, kliknij ponownie w przeglądarce');







// проверка login и password (аутентификация)

$Result= mysqli_query($Connect_db, "SELECT 1  FROM  `users`  WHERE  login = '{$Login}'  AND  pass = '{$Pass}'   LIMIT 1   ");

$Result2= mysqli_query($Connect_db, "SELECT  id, rol  FROM  `users`  WHERE  login = '{$Login}'  AND  pass = '{$Pass}'   LIMIT 1   ");
$Arr= mysqli_fetch_assoc($Result2);



if (mysqli_num_rows($Result) != 0)     // аутентификация пройдена
{
$_SESSION['login']= $Login;
$_SESSION['id']= $Arr['id'];
$_SESSION['rol']= $Arr['rol'];


if ($Arr['rol'] == "patient")
header('Location:  Client.php');

if ($Arr['rol'] == "doctor")
header('Location:  doctor.php');

if ($Arr['rol'] == "admin")
header('Location:  page_create_raspisanie.php');

exit();
}

else        // аутентификация не пройдена
exit('nazwa użytkownika lub hasło wprowadzone nieprawidłowo, kliknij ponownie w przeglądarce');







?>









