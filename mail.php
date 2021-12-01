<?php 
$to = "<womanbelarusian@mail.ru.com>";
$name = $_POST["user_name"];
$phone = $_POST["user_phone"];
$email = $_POST['user_email'];
$message = '
<html>
<body>
<center>	
<table border=1 cellpadding=6 cellspacing=0 width=90% bordercolor="#DBDBDB">
 <tr><td colspan=2 align=center bgcolor="#E4E4E4"><b>Информация</b></td></tr>
 <tr>
  <td><b>Адресат</b></td>
  <td><a href="mailto:'.$user_name.'">'.$user_name.'</a></td>
 </tr>
 <tr>
  <td><b>Телефон</b></td>
  <td>'.$user_phone.'</td>
 </tr>
 <tr>
 <td><b>Почта</b></td>
 <td>'.$user_email.'</td>
</tr>
</table>
</center>	
</body>
</html>'; 
$headers  = "Content-type: text/html; charset=utf-8\r\n";
$result = mail($to, $name, $message, $headers);

?>