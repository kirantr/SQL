<?php

define("DBHOST", "localhost");    // адрес сервера
        define("DBNAME", "user7");       // имя базы данных
        define("DBUSER", "user7");   // имя пользователя
        define("DBPASS", "tuser7");   // пароль доступа к базе данных

$db_server = mysql_connect(DBHOST, DBUSER, DBPASS) or die(mysql_error());
mysql_select_db(DBNAME) or die(mysql_error());

    for($i=0; $i<5; $i++)
    {
//        $query = "INSERT INTO task2(ID, name, description) VALUE('$i', 'name$i','description$i')" ;
  //      mysql_query($query);
    }

$query2 = "SELECT * FROM task2";
$result=mysql_query($query2);

while ($row = mysql_fetch_row($result, MYSQL_ASSOC)) 
    {
         echo $row['ID']. ' ';
        echo $row['name']. ' ';
         echo $row['description'] . '<br>';

     }


?>

