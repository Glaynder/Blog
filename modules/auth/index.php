<?php
require("form.php");

if ($auth->maybe()) {
    echo "Привет, " . $auth->give_login() ;
    echo "<br/><br/><a href=\"?exit=1\">Выход</a>";
}
else {
?>
<form action="index.php" method="post">
    <input type="text" name="l" placeholder="Введите логин" style="color: rgb(51,255,51)"/><br/>
    <br/>
    <input type="password" name="p" placeholder="Введите пароль" style="color: rgb(51,255,51)"/><br/>
    <br/>
    <input type="submit" value="Авторизация" />
</form>
<?php

} ?>

