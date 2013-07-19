<!DOCTYPE html>
<html lang="fa" dir="rtl">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name=revisit-after content="1 days" />
		<meta name="robots" content="all" />
		<meta name="googlebot" content="index, follow" />
		<meta http-equiv="imagetoolbar" content="no" />
		<base href="<?php echo $ro->getBaseHref(); ?>" />
		<link rel="shortcut icon" href="images/124.gif" type="image/x-icon"/>
		<title>دانلود وار</title>
		<meta name="description" content="با دانلود وار بروز باشید " />
		<meta name="keywords" content="دانلود, لینک مستقیم, نرم افزار, موبایل, بازی, کتاب, گرافیک, بازی, اموزش, مکینتاش, موزیک, فیلم, انتی ویروس, فتوشاپ, ویندوز, مستند, انیمیشن, فونت فارسی, دیکشنری"/>
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
