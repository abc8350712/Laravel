<?php 
	#echo $_POST['q'];
	$output = shell_exec('python python_script/src.py --query_dir ./python_script/query.jpg');
	echo $output;
	echo $_FILES['q']["name"];
 ?>