<?php
$host='localhost'; // имя хоста (уточняется у провайдера)
$Name_database = 'my_site'; // имя базы данных, которую вы должны создать
$user='root'; // заданное вами имя пользователя, либо определенное провайдером
$pswd='Usimov5031661'; // заданный вами пароль
$link = mysql_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL.");
mysql_select_db($Name_database, $link); 

$comment = $_POST['comment'];
$name_client = $_POST['name_client'];
$date = date('Y-m-d');

$table ='Clients';
$insert = "INSERT INTO $Name_database.$table  (`Name`, `Date`, `Comment`) 
    VALUES ('$name_client', '$date', '$comment');";
mysql_query($insert);
mysql_close($link);
header("Location:Index.php");

/*

$link = mysqli_connect( 
            'localhost', 
            'u956127722_root',   
            '111111',   
            'u956127722_site');     
if (!$link) { 
   printf("&#1053;&#1077;&#1074;&#1086;&#1079;&#1084;&#1086;&#1078;&#1085;&#1086; &#1087;&#1086;&#1076;&#1082;&#1083;&#1102;&#1095;&#1080;&#1090;&#1100;&#1089;&#1103; &#1082; &#1073;&#1072;&#1079;&#1077; &#1076;&#1072;&#1085;&#1085;&#1099;&#1093;. &#1050;&#1086;&#1076; &#1086;&#1096;&#1080;&#1073;&#1082;&#1080;: %s\n", mysqli_connect_error()); 
   exit; 
} 

$comment = $_POST['comment'];
$name_client = $_POST['name_client'];
$date = date('Y-m-d');

$table ='clients';
$insert = "INSERT INTO $Name_database.$table  (`Name`, `Date`, `Comment`) 
    VALUES ('$name_client', '$date', '$comment');";
mysqli_query($link, $insert);
mysqli_close($link);
header("Location:Index.php");
*/

