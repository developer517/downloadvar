<!DOCTYPE html>
<html lang="fa" dir="rtl">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="robots" content="all" />
		<meta name="googlebot" content="index, follow" />
		<meta http-equiv="imagetoolbar" content="no" />
		<base href="<?php echo $ro->getBaseHref(); ?>" />
		<link rel="shortcut icon" href="images/124.gif" type="image/x-icon"/>
		<title>دانلود  <?php if(isset($t['_title'])) echo htmlspecialchars($t['_title']);
		if(isset($t['_cat_sec'])) echo ' - '.htmlspecialchars($t['_cat_sec']);
		if(isset($t['_cat_th'])) echo ' - '.htmlspecialchars($t['_cat_th']);
		?></title>
		<meta name="description" content="<?php if(isset($t['_desc'])) echo htmlspecialchars($t['_desc']); ?>" />
		<meta name="keywords" content="<?php if(isset($t['_keywords'])) echo htmlspecialchars($t['_keywords']); ?> "/>
		<link type="text/css" rel="stylesheet" href="style.css"  />
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
