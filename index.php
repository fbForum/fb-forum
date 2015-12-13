<html>
<title>吹水台 - 香港熄燈討論區</title>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<body>
<div id="fb-root"></div>

<table align="center" border="1" cellpadding="0" cellspacing="0" style="border-collapse:collapse; width: 100%;">
	<thead>
		<tr>
			<th bgcolor="#275187" scope="col">
			<h2><font color="white">吹水台</font></h2>
			<table border="0" cellpadding="0" cellspacing="0" height="35px" style="" width="60%">
		<tbody>
			<tr>
				<td>
					<form align="center" action="newpost.php">
		    <input type="submit" value="發表">
				</form>
				<p style="text-align: center;">&nbsp;</p>
				</td>
				<td style="text-align: center;"><a href="index.php">吹水台</a></td>
				<td style="text-align: center;"><a href="index.php?type=CA">時事台</a></td>
				<td style="text-align: center;"><a href="index.php?type=MU">音樂台</a></td>
				<td style="text-align: center;"><a href="index.php?type=EP">創意台</a></td>
				<td style="text-align: center;"><a href="index.php?type=ED">飲食台</a></td>
				<td style="text-align: center;"><a href="index.php?type=ET">娛樂台</a></td>
				<td style="text-align: center;"><a href="index.php?type=DC">攝影台</a></td>
			</tr>
		</tbody>
	</table>
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				<table align="center" border="0" cellpadding="0" cellspacing="0" style="width:85%">
					<tbody>
						<tr>
							<td>
							<div style="font-family: HelveticaNeue; font-size: 12px;"><strong>香港熄燈討論區</strong>&nbsp;-&nbsp;<em>自由的二次創作討論區</em></div>

							<div style="font-family: HelveticaNeue; font-size: 12px;">&nbsp;</div>

							<div style="font-family: HelveticaNeue; font-size: 12px;"><u><strong>點玩？</strong></u></div>

							<div style="font-family: HelveticaNeue; font-size: 12px;">發表文章：<strong>唔駛登記</strong>，打個膠名、起個標題同內文就得。我們<strong>並無儲存</strong>任何個人資料和IP，並以SSL加密連線&thorn;，以保護二次創作者可以更自由發揮。</div>

							<div style="font-family: HelveticaNeue; font-size: 12px;">&nbsp;</div>

							<div style="font-family: HelveticaNeue; font-size: 12px;">回覆一樣簡單：只要你用緊facebook可即刻在底回覆，預設是<strong>不會</strong>貼到你的wall（除非你特登tick），注意回覆的文章是存在facebook的sever內。</div>

							<div style="font-family: HelveticaNeue; font-size: 12px;">&nbsp;</div>

							<div style="font-family: HelveticaNeue; font-size: 12px;">有問題？都係唔明？開post問啦。</div>
							</td>
						</tr>
					</tbody>
				</table>

			</td>
	</tr>
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
			//Get Posts by type:
			if ($_GET['type'] == BW ) {

				$sql = "SELECT id,author,subject,datetime FROM topic ORDER BY id DESC";

			} elseif ($_GET['type'] == CA) {

					$sql = "SELECT id,author,subject,datetime FROM topic WHERE type = 'CA' ORDER BY id DESC";

			} elseif ($_GET['type'] == ED) {

					$sql = "SELECT id,author,subject,datetime FROM topic WHERE type = 'ED' ORDER BY id DESC";

			} elseif ($_GET['type'] == MU) {

					$sql = "SELECT id,author,subject,datetime FROM topic WHERE type = 'MU' ORDER BY id DESC";

			} elseif ($_GET['type'] == EP) {

					$sql = "SELECT id,author,subject,datetime FROM topic WHERE type = 'EP' ORDER BY id DESC";

			} elseif ($_GET['type'] == ET) {

					$sql = "SELECT id,author,subject,datetime FROM topic WHERE type = 'ED' ORDER BY id DESC";

			} elseif ($_GET['type'] == DC) {

					$sql = "SELECT id,author,subject,datetime FROM topic WHERE type = 'DC' ORDER BY id DESC";

			} else {

					$sql = "SELECT id,author,subject,datetime FROM topic ORDER BY id DESC";

			}


			//Getting Posts from database by row
      //$sql = "SELECT id,author,subject FROM topic ORDER BY id DESC";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
					//Generate table and headers
          echo "<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse:collapse; width: 100%;\" ><tr align=\"left\"><th bgcolor=\"#fcb416\">題目</th><th bgcolor=\"#fcb416\">發起人</th><th bgcolor=\"#fcb416\">發表時間</th></tr>";
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "<tr><td><a href=view.php?id=".$row["id"].">".$row["subject"]."</a></td><td>".$row["author"]." </td><td>".$row["datetime"]."</td></tr>";
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
