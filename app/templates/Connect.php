<!DOCTYPE html>
<html lang="fa" dir="rtl">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="ROBOTS" content="noindex,nofollow"  />
		<base href="<?php echo $ro->getBaseHref(); ?>" />
		<link rel="shortcut icon" href="images/124.gif" type="image/x-icon"/>
		<title><?php if(isset($t['_title'])) echo htmlspecialchars($t['_title']); ?></title>
        <meta name="description" content="<?php if(isset($t['_title'])) echo htmlspecialchars($t['_title']); ?>" />
		<meta name="keywords" content="<?php if(isset($t['_title'])) echo htmlspecialchars($t['_title']); ?>"/>
		<link type="text/css" rel="stylesheet" href="style.css"  />
		<link type="text/css" rel="stylesheet" href="tabmenu.css"  />
	</head>
	<body class="homepage">
		<?php echo $slots['header'];?>
		<div id="content-wrapper">
		<div id="content" class="clearfix">
					<?php echo $inner; ?>
					<?php echo $slots['sidebar'];?>
					</div>
					</div>
		<?php echo $slots['footer'];?>
		
	</body>
</html>
