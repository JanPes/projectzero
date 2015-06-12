<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mini_site";
	$db = new mysqli($servername, $username, $password, $dbname);
	if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');}
	
$sql = "SELECT dyn_menu.id, dyn_menu.label, dyn_menu.link_url, page_content.title, page_content.page_no, page_content.heading, page_content.content FROM dyn_menu INNER JOIN page_content ON dyn_menu.id=page_content.page_no";
$result = $db->query($sql);
$sql2 = "SELECT dyn_menu.id, dyn_menu.label, dyn_menu.link_url, page_content.title, page_content.page_no, page_content.heading, page_content.content FROM dyn_menu INNER JOIN page_content ON dyn_menu.id=page_content.page_no limit 1";
$result2 = $db->query($sql2);
?>