<?
  $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";  //Getting the URI (not URL) for the facebook comments location

  $id = $_GET['id'];



  $dbhost = 'localhost';
  $dbuser = 'username';
  $dbpass = 'password';
  $conn = mysql_connect($dbhost, $dbuser, $dbpass);
  mysql_select_db('project');

  if(! $conn )
  		{
  			die('MariaDB 連線失敗' . mysql_error());
  	  }

    $subject = $mysqli->query("SELECT subject FROM topic WHERE id = '$id' ")->fetch_object()->subject;  
    $content = $mysqli->query("SELECT content FROM topic WHERE id = '$id' ")->fetch_object()->content;
    $author = $mysqli->query("SELECT author FROM topic WHERE id = '$id' ")->fetch_object()->author;

  mysql_close($conn);

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
			<h1><font color="white"><?php echo $subject ?></font></h1>
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
