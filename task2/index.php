<?php

define("DBHOST", "localhost");    // адрес сервера
        define("DBNAME", "user7");       // имя базы данных
        define("DBUSER", "user7");   // имя пользователя
        define("DBPASS", "tuser7");   // пароль доступа к базе данных

$db_server = mysql_connect(DBHOST, DBUSER, DBPASS) or die(mysql_error());
mysql_select_db(DBNAME) or die(mysql_error());

$query = "INSERT INTO task2('ID', 'name', 'description') VALUE('1', 'name1','description') ;
mysql_query($query);


?>
