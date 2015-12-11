<?
  $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";  //Getting the URI (not URL) for the facebook comments location
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
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td><div class="fb-comments" data-href="<?php echo $actual_link ?>" data-width="100%" data-numposts="50" data-order-by="time"></div></td>
		</tr>
	</tbody>
</table>

<p><cite><var>Facebook Forum Licensed Under GNU General Public License 3.0</var></cite></p>

</body>
</html>
