<nav>
	<ul>
		
<?php 

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}
	while($row = $result->fetch_assoc()){
		    echo '<li><a href="' . $row['link_url'] . '">' . $row['title'] . '</a></li>';
		}
	
?>
</ul>
	
</nav>
