<?php 
include_once('UserModel.php');
if(!$pdo=User::connectToDb())
{
	echo "we cannot connect to database";
	return false;
} 
$Visitors='create table users(
Id            int not null  auto_increment primary key, 
UserName      varchar(25)not null unique,
Password      char(60)not null,
Email         varchar(25)not null unique)
default charset="utf8"';
$pdo->exec($Visitors); 
?>

