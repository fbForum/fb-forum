<?
  $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";  //Getting the URI (not URL) for the facebook comments location

  $id = $_GET['id']; // Get the post id from URL attb "id"

  $con=mysqli_connect("localhost","username","password","dbname");
  // Check connection
  if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

  $sql="SELECT author,subject,content FROM topic WHERE id = '$id'";

  if ($result=mysqli_query($con,$sql))
    {
    // Fetch one and one row
    while ($row=mysqli_fetch_row($result))
      {
      //printf ("%s (%s)\n",$row[0],$row[1],$row[2]);
      $author = $row[0];
      $subject =  $row[1];
      $content = $row[2];

      }
    // Free result set
    mysqli_free_result($result);
  }

  mysqli_close($con);
?>

<html>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<table align="center" border="1" cellpadding="0" cellspacing="0" style="width: 100%; border-collapse:collapse;">
	<thead>
		<tr>
			<th bgcolor="#275187" scope="col">
			<h1><font color="white"><?php echo $subject ?></font></h1>
      <form action="newpost.php">
      <input type="submit" value="發表">
      </form>
      <form action="index.php">
      <input type="submit" value="主頁">
      </form>
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
<table width = "100%" >
<tr>
  <td><a href="https://github.com/fbForum/fb-forum.git"><span style="color:#808080;"><span style="font-family:trebuchet ms,helvetica,sans-serif;"><small>源始碼(GitHub)</small></span></span></a></td>
  <td><span style="color:#808080;"><span style="font-family:trebuchet ms,helvetica,sans-serif;"><small>現線上用戶數量</small></span></span></td>
  <td><span style="color:#808080;"><span style="font-family:trebuchet ms,helvetica,sans-serif;"><small>是日瀏覽量</small></span></span></td>
  <td><span style="color:#808080;"><span style="font-family:trebuchet ms,helvetica,sans-serif;"><small>本網站</small></span></span><span style="color:#FFA07A;"><span style="font-family:trebuchet ms,helvetica,sans-serif;"><small>並非</small></span></span><span style="color:#808080;"><span style="font-family:trebuchet ms,helvetica,sans-serif;"><small>寄存在香港</small></span></span></td>
  <td><small><span style="color:#808080;"><span style="font-family:trebuchet ms,helvetica,sans-serif;">&copy;&nbsp;Opensource under Apache License 2.0</span></span></small></td>
</tr>
</table>

</body>
</html>
