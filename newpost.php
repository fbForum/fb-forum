
<html>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>
	<title>發表新文章</title>
	<style type="text/css">
	</style>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<link rel="stylesheet" href="minified/themes/default.min.css" type="text/css" media="all" />
	<script type="text/javascript" src="minified/jquery.sceditor.bbcode.min.js"></script>
</head>
<body>



<table align="center" border="1" bordercolor="#ccc" cellpadding="5" cellspacing="0" style="border-collapse:collapse;" width=100%>
	<thead>
		<tr>
			<th bgcolor="#275187" scope="col"><span style="color:#FFFFE0;"><span style="font-family:verdana,geneva,sans-serif;">發表貼文</span></span></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				<form  method="POST" action="dbc.php">
					<p><input maxlength="12" name="author" size="100" type="text" value="作者" /></p>
	<select name="type"><option value="BW">吹水台</option><option value="CA">時事台</option><option value="ET">娛樂台</option><option value="EP">創意台</option><option value="MU">音樂台</option><option value="DC">攝影台</option><option value="ED">飲食台</option></select>
	        <p><input maxlength="255" name="topic" size="100" type="text" value="輸入標題" /></p>
					<p><textarea width="100%" cols="100" name="content" rows="20"></textarea></p>
					<script>
					$(function() {
					    // Replace all textarea's
					    // with SCEditor
					    $("textarea").sceditor({
					        plugins: "bbcode",
									toolbar: "color|bold,italic,underline|quote|link,unlink|image|cut,copy,paste",
						style: "/minified/jquery.sceditor.default.min.css"
					    });
					});
					</script>
				<p><input name="submit" type="submit" value="發表" /><input name="reset" type="reset" value="Reset" /></p>

				<p>&nbsp;</p>
				</form>
			</td>
		</tr>
		<tr>

		</tr>
	</tbody>
</table>



<p>&nbsp;</p>
</body>
</html>
