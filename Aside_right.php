<?php
$host='localhost'; // имя хоста (уточняется у провайдера)
$Name_database = 'my_site'; // имя базы данных, которую вы должны создать
$user='root'; // заданное вами имя пользователя, либо определенное провайдером
$pswd='Usimov5031661'; // заданный вами пароль
$link = mysql_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL.");
mysql_select_db($Name_database, $link); 

$table ='Clients';
$select = "SELECT * FROM $Name_database.$table";
$res = mysql_query($select);

$j = 1;
while($row = mysql_fetch_array($res))
{
    $clientName[$j] = $row['Name'];
	$postDate[$j] = $row['Date'];
	$clientComment[$j++] = $row['Comment'];
}
$finalCounter = $j - 1;


mysql_close($link); ///dfdfdf

$number_comment[1] = Rand(2, $finalCounter - 1);
$number_comment[2] = Rand(1, $number_comment[1] - 1);
$number_comment[3] = Rand($number_comment[1] + 1, $finalCounter);
?>
            <aside id="s_right">
			    <h2>Комментарии:</h2>
<?php

for ($i = 1; $i < 4; $i++){
?> 

				<div class="comment_right">
				    <p>
					    <?php
						    echo $clientComment[$number_comment[$i]];
						?>
					</p>
					<p class="comment_aside_left">
					    <?php
						    echo $clientName[$number_comment[$i]];
						?>
                    <span class="right_float">
					    <?php
						    echo $postDate[$number_comment[$i]];
						?>
					</span>
					</p>					
				</div>
<?php
}
?>			
				<div class="comment_right">
				    <?php
				        require "RegForm.php";
					?>	
				</div>
            </aside>
			
			
			
<?php			
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


$table ='clients';
$select = "SELECT * FROM $Name_database.$table";
$res = mysqli_query($link, $select);

$j = 1;
while($row = mysqli_fetch_array($res))
{
    $clientName[$j] = $row['Name'];
	$postDate[$j] = $row['Date'];
	$clientComment[$j++] = $row['Comment'];
}
$finalCounter = $j - 1;


mysqli_close($link);

$number_comment[1] = Rand(2, $finalCounter - 1);
$number_comment[2] = Rand(1, $number_comment[1] - 1);
$number_comment[3] = Rand($number_comment[1] + 1, $finalCounter);
?>
            <aside id="s_right">
			    <h2>ÐšÐ¾Ð¼Ð¼ÐµÐ½Ñ‚Ð°Ñ€Ð¸Ð¸:</h2>
<?php

for ($i = 1; $i < 4; $i++){
?> 

				<div class="comment_right">
				    <p>
					    <?php
						    echo $clientComment[$number_comment[$i]];
						?>
					</p>
					<p class="comment_aside_left">
					    <?php
						    echo $clientName[$number_comment[$i]];
						?>
                    <span class="right_float">
					    <?php
						    echo $postDate[$number_comment[$i]];
						?>
					</span>
					</p>					
				</div>
<?php
}
?>			
				<div class="comment_right">
				    <?php
				        require "RegForm.php";
					?>	
				</div>
            </aside>			