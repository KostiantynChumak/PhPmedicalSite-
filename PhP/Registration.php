<?php
session_start();
header('Content-type: text/html; charset=utf-8');


require_once('inc/conf.php');












$Login= $_POST['login'];
$Pass= $_POST['password'];
$Pass2= $_POST['password2'];

$Name= $_POST['name'];
$City= $_POST['city'];
$Street= $_POST['street'];






// если данные из форма не были отправлены, то выводим ошибку на экран

if (!isset($Login))
exit('Błąd podczas wysyłania danych z formularza, kliknij ponownie w przeglądarce');





// проверка login

if (!preg_match("/^[a-zA-Z0-9]+$/",$Login) )                                                                    // Логин должен содержать только цифры и английские буквы
exit('Login musi zawierać tylko cyfry i angielskie litery, kliknij ponownie w przeglądarce');

if (mb_strlen($Login) < 2  or  mb_strlen($Login) > 9)                                                           // Логин должен быть не меньше 2 символов и не больше 9
exit('Login musi mieć co najmniej 2 znaki i nie więcej niż 9, kliknij ponownie w przeglądarce');


$result= mysqli_query($Connect_db, "SELECT 1  FROM  `users`  WHERE  login = '{$Login}'   LIMIT 1   ");

if (mysqli_num_rows($result) != 0)
exit('Logowanie zajęte, kliknij ponownie w przeglądarce');

// конец   проверка login





// проверка пароля

if ($Pass != $Pass2)                                                                                            // Если пароли не равны.
exit('Niższe hasło różni się od górnego, kliknij ponownie w przeglądarce');

if (mb_strlen($Pass) < 6  or  mb_strlen($Pass) > 9)                                                             // Пароль должен быть не меньше 6 символов и не больше 9
exit('Hasło musi mieć co najmniej 6 znaków i nie więcej niż 9, kliknij ponownie w przeglądarce');

if (mb_strlen($Pass2) < 6  or  mb_strlen($Pass2) > 9)                                                           // Пароль должен быть не меньше 6 символов и не больше 9
exit('Hasło musi mieć co najmniej 6 znaków i nie więcej niż 9, kliknij ponownie w przeglądarce');






mysqli_query($Connect_db, "INSERT IGNORE INTO  users  (login, pass, rol, name, specialization, phone, zarplata, city, street)  VALUES ('$Login', '$Pass', 'patient', '$Name', '', '', '', '$City', '$Street' )    ");

$id= mysqli_insert_id($Connect_db);

$_SESSION['id']= $id;


$_SESSION['login']= $Login;



header('Location:  Client.php');
exit();


?>

















