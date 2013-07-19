<div class="tnav">
<div class="links">
<div class="contact">Downloadvar &reg; version 1.4 &copy; 2013
</div>
<ul>
<li>
<a href="<?php echo $ro->gen('index');?>">صفحه اصلی</a></li>
<li><a href="<?php echo $ro->gen('connective.contact.us'); ?>">طراحی سایت</a></li>
<li><a>تبلیغات</a></li>
<li><a style="border-left:1px solid #444444" href="<?php echo $ro->gen('connective.contact.us'); ?>">تماس با ما</a></li>
</ul>
</div>
</div>
<div class="topline">
  <div class="header" style="margin: 0px auto 1px;">
    <div id="container" class="scroll-bg" style="background-position: 50% 739px;"></div>
    	<div class="line"></div>
    		<div class="logo_box" style="float:left;margin-top:14px;margin-left:170px;">
     		<img   src="images/logo2.png">
     		</div>
 		 </div>
</div>
<div class="nav">
  <div class="menu-home-icon">
  <a title="صفحه اصلی" href="<?php echo $ro->gen('index');?>">
  <img width="24" height="20" alt="صفحه اصلی" src="images/spacer.gif">
  </a>
  </div>
  <?php foreach ($t['one_cat'] as $on):?>
  <div class="tmenu_item round_cor_7px">
  <a title="<?php echo $on['PersianName'];?>" href="<?php echo $ro->gen('category',array('category' => $on['EnglishName'],'id'=> $on['Id']));?>">
  <?php echo $on['PersianName']; ?></a>
  </div>
  <?php endforeach;?>
  <div class="tmenu_item round_cor_7px"><a title="اخبار سایت" href="<?php echo $ro->gen('sitenews',array('id' => 1)); ?>">اخبار سایت</a></div>
  <div class="tmenu_item round_cor_7px"><a title="تماس با ما" href="<?php echo $ro->gen('connective.contact.us'); ?>">تماس با ما</a></div>
  <div class="tmenu_item round_cor_7px"><a title="درباره ما" href="<?php echo $ro->gen('connective.about.us');?>">درباره ما</a></div>
  
      <div class="tmenu_item round_cor_7px"><a>نقشه سایت</a></div>
    <div class="tmenu_item round_cor_7px"><a>تالار گفتمان</a></div>
    
</div>