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
			 $type = $_POST['type'];



			$sql = "INSERT INTO topic ". "(author,subject,content,type,datetime) ". "VALUES('$author','$subject','$content','$type',NOW())";

		mysql_select_db('project');
		$retval = mysql_query( $sql, $conn );

	  if(! $retval )
			{
				die('發貼失敗...Sorry... ' . mysql_error());
		   }

//Echo HTML
			 echo "<html>
			 	<meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\">
						<body>
			 			<table align=\"centre\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"border-collapse:collapse; \" width=\"80%\">
			 				<tbody>
			 					<tr bgcolor=\"#275187\">
			 						<td style=\"text-align: center;\"><span style=\"color:#FFFFFF;\">發貼成功</span></td>
			 					</tr>
			 					<tr>
			 						<td>
			 							<form action=\"index.php\">
			 							<p style=\"text-align: center;\"><input name=\"back\" type=\"submit\" value=\"按此返回主頁\" />&nbsp;</p>
			 							</form>
			 							<p style=\"text-align: center;\">&nbsp;</p>
			 						</td>
			 					</tr>
			 				</tbody>
			 			</table>
			 		</body></html>";
			 mysql_close($conn);


 ?>
