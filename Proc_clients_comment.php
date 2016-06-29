<?php
$Name_database = 'u956127722_site';

$link = mysqli_connect(
    'localhost',
    'u956127722_root',
    '111111',
    '$Name_database');
if (!$link) {
    printf("&#1053;&#1077;&#1074;&#1086;&#1079;&#1084;&#1086;&#1078;&#1085;&#1086; &#1087;&#1086;&#1076;&#1082;&#1083;&#1102;&#1095;&#1080;&#1090;&#1100;&#1089;&#1103; &#1082; &#1073;&#1072;&#1079;&#1077; &#1076;&#1072;&#1085;&#1085;&#1099;&#1093;. &#1050;&#1086;&#1076; &#1086;&#1096;&#1080;&#1073;&#1082;&#1080;: %s\n", mysqli_connect_error());
    exit;
}

$comment = $_POST['comment'];
$name_client = $_POST['name_client'];
$date = date('Y-m-d');

$table ='Clients';
$insert = "INSERT INTO $Name_database.$table  (`Name`, `Date`, `Comment`) 
    VALUES ('$name_client', '$date', '$comment');";
mysqli_query($link, $insert);
mysqli_close($link);
header("Location:Index.php");

