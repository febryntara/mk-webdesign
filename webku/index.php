<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>::Welcome to my Website::</title>
<style>
	table,tr,td {
		padding: 0;
	}
	* {
		/*border:1px solid salmon;*/
	}
	/*marquee {border:1px solid salmon;}*/
</style>
</head>
<body>
	<br>
	<table width="920" border="1" cellpadding="0" cellspacing="0" align="center">
			<tr>
				<td><table width="900" border="0" cellpadding="0" cellspacing="0" align="center">
					<tr>
						<td><?php include "header.php"; ?></td>
					</tr>
					<tr>
						<td align="center" style="font-size: 1.3em;padding-top: 5px;">
							<marquee direction="right" width="430" height="20">
								<?php include "marquee1.txt";?>
							</marquee>
							<marquee direction="left" width="430" height="20">
								<?php include "marquee2.txt";?>
							</marquee>
						</td>
					</tr>
					<tr>
						<td><?php include "content.php"; ?></td>
					</tr>
					<tr>
						<td><?php include "footer.php"; ?></td>
					</tr>
				</table></td>
			</tr>
	</table>
</body>
</html>