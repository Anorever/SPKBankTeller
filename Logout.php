<?php
	session_start();
	session_destroy();
	
	echo'
	
		<script>
			alert("Anda telah Log Out");
			window.location="index.php";
		
		</script>
	
	';
?>