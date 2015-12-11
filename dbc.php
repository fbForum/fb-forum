<?php

		$dbhost = 'localhost';
		$dbuser = 'username';
		$dbpass = 'password';
		$conn = mysql_connect($dbhost, $dbuser, $dbpass);

		if(! $conn )
			{
				die('MariaDB 連線失敗' . mysql_error());
			 }

		$author = $_POST['author'];
		$subject = $_POST['topic'];
		$content = $_POST['content'];

		$sql = "INSERT INTO topic ". "(author,subject,content) ". "VALUES('$author','$subject','$content')";

		mysql_select_db('project');
		$retval = mysql_query( $sql, $conn );

	  if(! $retval )
			{
				die('發貼失敗...Sorry... ' . mysql_error());
		   }

		echo "發貼成功！<a herf=http://reddithk.com >上一頁</a> ";

		mysql_close($conn);


 ?>
