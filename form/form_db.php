<?php
	include("path.php");
$server = "mysql024.phy.lolipop.lan";
$user ="LAA0627537";
$pass = "aogaku2015";
$database = "LAA0627537-agu2015";
$server = "localhost";
$user ="root";
$pass = "";
$database = "test";

//データベース接続	
function db_connect(){
	extract($GLOBALS);
	$link =mysql_connect($server,$user,$pass);
	if(!$link){
  	die('接続失敗です。'.mysql_error());
	}
	echo "接続しました。";

	$db_selected = mysql_select_db($database,$link);
	mysql_query('SET NAMES utf8',$link);
	if(!$db_selected){
  	die('データベース選択失敗です。'.mysql_error());
	}
	echo "データベースに接続しました。";
	return $link;
}
function db_quit($link){
	mysql_close($link);	
}

?>