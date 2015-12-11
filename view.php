<?
  $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";  //Getting the URI (not URL) for the facebook comments location

  $id = $_GET['id']; // Get the post id from URL attb "id"

  $servername = "localhost";
  $username = "username";
  $password = "password";
  $dbname = "dbname";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM 'topic' WHERE id = $id ";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          $author = $row["author"];
          $subject = $row["subject"];
          $content = $row["content"];
      }
  } else {
      echo "0 results";
  }

  mysqli_close($conn);
?>

<html>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


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
			<td> <p><?php echo $content ?></p>

            <blockquote><?php echo $author ?></blockquote>

            <p>Topic Id : <?php echo $id ?></p>
      </td>
		</tr>
		<tr>
			<td><div class="fb-comments" data-href="<?php echo $actual_link ?>" data-width="100%" data-numposts="50" data-order-by="time"></div></td>
		</tr>
	</tbody>
</table>

<p><cite><var>Facebook Forum Licensed Under GNU General Public License 3.0</var></cite></p>

</body>
</html>
