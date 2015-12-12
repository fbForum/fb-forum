<html>
<body>
<div id="fb-root"></div>


<table align="center" border="1" cellpadding="0" cellspacing="0" style="width: 800px;">
	<thead>
		<tr>
			<th bgcolor="#275187" scope="col">
			<h1><font color="white">Topic</font></h1>
      <button onclick="alert('Hello world!')" type="button">新主題</button>
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php

      $servername = "localhost";
      $username = "username";
      $password = "pasword";
      $dbname = "dbname";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT id,author,subject FROM topic";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          echo "<table style="border:1px solid SkyBlue" ><tr><th>題目</th><th>發起人</th></tr>";
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
			<td><div class="fb-comments" data-href="<?php echo $actual_link ?>" data-width="100%" data-numposts="50" data-order-by="time"></div></td>
		</tr>
	</tbody>
</table>


</body>
</html>
