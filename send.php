<meta>
<?php
if(isset($_POST['submit'])) {

$name_field = $_POST['name'];
$email_field = $_POST['email'];
$phone_field = $_POST['phone'];
$message = $_POST['message'];
$to = "los_amigos@bk.ru";
$subject = "Отправлено с сайта Woodcraft";
$body = "From: $name_field\n E-Mail: $email_field\n Phone: $phone_field\n Message: $message\n ";
mail($to, $subject, $body);
echo "<h4>Сообщение успешно отправлено, мы с вами свяжемся в кратчайшие сроки. А пока можете посмотреть что-нибудь еще на нашем <a href='index.php'>сайте</a> </h4>";
} else {
echo "<h4>Сообщение не удалось отправить....</h4>";
}
?>