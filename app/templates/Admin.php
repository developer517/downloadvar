<!DOCTYPE html>
<html  lang="fa"  dir="rtl">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<base href="<?php echo $ro->getBaseHref(); ?>" />
		<meta name="ROBOTS" content="noindex,nofollow"  />
		<link rel="shortcut icon" href="images/124.gif" type="image/x-icon"/>
		<title>دانلود وار :: مدیریت</title>
		<link type="text/css" href="admin/css/main.css" rel="stylesheet">
		</head>
	<body>
	<div id="container">
	<?php echo $slots['nav'];?>
	<div id="page">
	<?php echo $slots['sidebar'];?>	
	<?php echo $inner;?>
	</div>
	<?php echo $slots['footer'];?>	
	</div>			
	</body>
</html>
