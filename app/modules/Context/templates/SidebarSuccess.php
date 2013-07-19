<section id="sidebar"> 
<div class="widget socials">
<h2>جستجوی گوگل</h2>
<div class="block-content">
<ul>
<li class="clearfix">
<div class="subscribe-form" style="display: block;">
<p>مطلب مورد نظر خود را سایت با <span style="color: #D82727;">Google</span> بیابید.</p>
<form action="https://www.google.com/search" method="get" target="_blank">
<input id="query" name="q" onblur="if (this.value == '') {this.value = 'جستجو...';}" onfocus="if (this.value == 'جستجو...') {this.value = '';}" value="جستجو..." size="255" type="text" class="email-field">
<input type="hidden" name="domains" value="downloadvar.ir">
<input type="hidden" name="sitesearch" value="downloadvar.ir">
<input type="hidden" name="oe" value="UTF-8">
<input type="hidden" name="ie" value="UTF-8">
<input type="hidden" name="hl" value="fa">
<input type="submit" value="جستجو" class="email-submit">
</form>
</div>
</li>
</ul>
</div>
</div>
<div class="widget basic-list-linkdump">
<h2>بیشترین بازدید ها</h2>
<div class="block-content">
	 <ul>
	 <?php krsort($t['max_view']);?>
   		 <?php foreach ($t['max_view'] as $view):?>
   		 <?php if ($view['Publisher'] == 1){?>
			<li>
			<a target="_blank" title="<?php echo $view['MainSubject'];?>" href="<?php echo  $ro->gen('download.continue',array('id' => $view['Id'],'subject' => $view['ShortSubject']));?>">
			<?php echo $view['MainSubject'];?>
			<span>{<?php echo $view['ViewCount'];?>}</span>
			</a>
			</li>
			<?php }?>
			<?php endforeach;?>
		</ul>
</div>
</div>
<div class="widget big-icon-list">
<h2>نرم افزارهای مورد نیاز</h2>
<?php foreach ($t['need_software'] as $n):?>
<?php if ($n['Publisher'] == 1){?>
<div class="block-content">
<ul>
<li>
<div class="big-icon-wrapper">
<a target="_blank" href="<?php echo $ro->gen('download.continue',array('id' => $n['Id'],'subject' => $n['ShortSubject']));?>" title="<?php echo $n['MainSubject'];?>">
<img width="36" height="36" src="http://dl.downloadvar.ir/downloadvar/images/tumb/<?php echo $n['ShortSubject'].'.png'; ?>">
</a>
</div>
<a target="_blank" href="<?php echo $ro->gen('download.continue',array('id' => $n['Id'],'subject' => $n['ShortSubject']));?>" title="<?php echo $n['MainSubject'];?>">
<strong>دانلود آخرین نسخه  <?php echo $n['ShortSubject']?></strong>
<small>آپدیت : <?php echo $n['Date']?></small>
</a>
</li>
</ul>
</div>
<?php }?>
<?php endforeach;?>
</div>
<div class="widget basic-list-linkdump">
<h2>بیشترین دانلود ها</h2>
<div class="block-content">
	 <ul>
	 <?php krsort($t['max_dl']);?>
   		 <?php foreach ($t['max_dl'] as $dl):?>
   		 <?php if ($dl['Publisher'] == 1){?>
			<li>
			<a target="_blank" title="<?php echo $dl['MainSubject'];?>" href="<?php echo $ro->gen('download.continue',array('id' => $dl['Id'],'subject' => $dl['ShortSubject']));?>">
			<?php echo $dl['MainSubject'];?>
			<!--<span>{<?php echo $dl['DownloadCount'];?>}</span>-->
			</a>
			</li>
			<?php }?>
			<?php endforeach;?>
		</ul>
</div>
</div>
<?php foreach ($t['cat'] as $cat):?>
<div class="widget basic-list">
<h2> آخرین مطالب <?php echo $cat['PersianName'];?> </h2>
<?php $matter = MatterQuery::create()->filterByPublisher(1)->orderByOrder()->limit(14)->useThirdCategoryQuery()->useSecondCategoryQuery()->useOneCategoryQuery()->filterById($cat['Id'])->endUse()->endUse()->endUse()->find(); ?>
<div class="block-content">
<ul>
<?php foreach ($matter as $mat): ?>
<li><a target="_blank" title="<?php echo $mat->getMainSubject(); ?>" href="<?php echo  $ro->gen('download.continue',array('id' => $mat->getId(),'subject' => $mat->getShortSubject()));?>"><?php echo $mat->getMainSubject(); ?></a></li>
<?php endforeach;?>
</ul>
</div>
</div>
<?php endforeach;?>

<div class="widget linkroll">
<h2>اخبار سایت</h2>
<div class="block-content">
<ul class="clearfix">
<?php foreach ($t['news_site'] as $news):?>
<li><a href="<?php echo $ro->gen('singelnews',array('id' => $news['Id']));?>" target="_blank"><?php echo $news['Subject'];?></a></li>
<?php endforeach;?>
</ul>
</div>
</div>
</section>