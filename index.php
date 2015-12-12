<html>
<title>吹水台 - Reddithk討論區</title>
<body>
<div id="fb-root"></div>

<table align="center" border="1" cellpadding="0" cellspacing="0" style="border-collapse:collapse; width: 100%;">
	<thead>
		<tr>
			<th bgcolor="#275187" scope="col">
			<h2><font color="white">吹水台</font></h2>
			<form action="newpost.php">
    <input type="submit" value="發表">
		<select name="cate" size="1"><option value="BW">吹水台</option><option value="CA">時事台</option><option value="ET">娛樂台</option><option value="EP">創意台</option><option value="AU">成人台</option></select>
</form>
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				<?php

			//Database Connection Settings
      $servername = "localhost";
      $username = "username";
      $password = "password";
      $dbname = "dbanme";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
			//Getting Posts from database by row
      $sql = "SELECT id,author,subject FROM topic";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
					//Generate table and headers
          echo "<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse:collapse; width: 100%;\" ><tr align=\"left\"><th bgcolor=\"#fcb416\">題目</th><th bgcolor=\"#fcb416\">發起人</th></tr>";
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "<tr><td><a href=view.php?id=".$row["id"].">".$row["subject"]."</a></td><td>".$row["author"]." </td></tr>";
          }
          echo "</table>";
      } else {
          echo "0 results";
      }
      $conn->close();
      ?>
</td>
		</tr>
		<tr>
			<td><table border="1" bordercolor="#ccc" cellpadding="5" cellspacing="0" style="border-collapse:collapse;">
	<tbody>
		<tr>
			<td><a href="https://github.com/fbForum/fb-forum.git"><span style="color:#808080;"><span style="font-family:trebuchet ms,helvetica,sans-serif;"><small>源始碼(GitHub)</small></span></span></a></td>
			<td><span style="color:#808080;"><span style="font-family:trebuchet ms,helvetica,sans-serif;"><small>現線上用戶數量</small></span></span></td>
			<td><span style="color:#808080;"><span style="font-family:trebuchet ms,helvetica,sans-serif;"><small>是日瀏覽量</small></span></span></td>
			<td><span style="color:#808080;"><span style="font-family:trebuchet ms,helvetica,sans-serif;"><small>本網站</small></span></span><span style="color:#FFA07A;"><span style="font-family:trebuchet ms,helvetica,sans-serif;"><small>並非</small></span></span><span style="color:#808080;"><span style="font-family:trebuchet ms,helvetica,sans-serif;"><small>寄存在香港</small></span></span></td>
			<td><small><span style="color:#808080;"><span style="font-family:trebuchet ms,helvetica,sans-serif;">&copy;&nbsp;Opensource under Apache License 2.0</span></span></small></td>
		</tr>
	</tbody>
</table></td>
		</tr>
	</tbody>
</table>


</body>
</html>
