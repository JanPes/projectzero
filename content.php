<!-- Content -->
   <section class="innerPart">
		
		<?php 
		if(!$result2 = $db->query($sql2)){
    		die('There was an error running the query [' . $db->error . ']');
			}
				while($row = $result2->fetch_assoc()){
				echo '<h2>' . $row['heading'] . '</h2>';
				echo '<img class="homePageImage" alt="this is a photo" src="images/photos-82.jpg"/>';		
		    	echo '<p class="homePageParagraph">' . $row['content'] . '</p>';
			}
	
		?>
				
	</section>
	
<!-- End Content -->
<?php 

