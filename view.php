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
