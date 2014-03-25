		<?php
		session_start();

		$name = $_SESSION['name'];

		$date=date("d/m/Y");									// log start
		date_default_timezone_set('Asia/Kolkata');
		$time = date('h:i:s a', time())."  ".$date;

		$my_file = 'log369.txt';
		$handle = fopen($my_file, 'a+') or die('Cannot open file:  '.$my_file);

   
		$data="LOGOUT\r\nName : ".$name."\r\nDate : ".$time."\r\n\r\n";
		fwrite($handle, $data);
		fwrite($handle,"\n");									

		
		$_SESSION['error']=2;
		header("location:logreg.php");
                exit;
		?>




