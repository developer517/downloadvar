<div id="footer-wrapper">
<footer>
<section>
<center>
<ul class="main-repeated-links clearfix">
<li class="homepage"><a href="<?php echo $ro->gen('index'); ?>">خانه</a></li>
<?php foreach ($t['cat'] as $category): ?>
<li class="software">
<a href="<?php echo $ro->gen('category',array('id' => 1,'category' => $category['EnglishName']));?>"><?php echo $category['PersianName'];?></a></li>
<?php endforeach;?>
</ul>
</center>
</section>
</footer>

<div class="copyright-wrapper">
<div id="copyright">
<p>Copyright © 2012-2013 | کلیه حقوق این سایت برای سایت دانلود وار محفوظ است</p>
 </div>
 </div>
<script type="text/javascript" language="javascript" src="http://www.webgozar.ir/c.aspx?Code=2971276&amp;t=counter" ></script>
<noscript><a href="http://www.webgozar.com/counter/stats.aspx?code=2971276" target="_blank">&#1570;&#1605;&#1575;&#1585;</a></noscript>

 </div>