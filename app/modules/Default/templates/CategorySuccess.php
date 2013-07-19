<section id="main-content">
<div class="blogroll">
	<h2>آخرین مطالب سایت</h2>
	<div class="blogroll-outer-wrapper">
		<div class="blogroll-inner-wrapper">
			<div class="blogroll-link-wrapper">
					<ul>
					<?php foreach ($t['last'] as $last):?>
					<li>
					<a target="_blank" title="<?php echo $last['MainSubject'];?>" href="<?php echo $ro->gen('download.continue',array('id' => $last['Id']));?>"><?php echo $last['MainSubject'] ;?></a>
					</li>
					<?php endforeach;?>
					</ul>
					</div>
			</div>
		</div>
	</div>
    <center>
<div class="download-links">
              <span>برای مشاهده بهتر سایت از آخرین نسخه مرورگر فایر فاکس استفاده کنید!</span>
            </div>
            </center>
<?php foreach ($t['lastnews'] as $ls):?>
<div class="article-wrapper">
<article class="post">
<header>
<h1 style="font-family:BKoodak;">
<a title="<?php echo $ls['Subject'];?>" href="<?php echo $ro->gen('singelnews',array('id' => $ls['Id']));?>">
<?php echo $ls['Subject'];?>
 </a>
  </h1>
<ul>
<li class="cat"> بندی دسته : 
<a title="<?php echo $ls['Subject'];?>" href="<?php echo $ro->gen('sitenews',array('id' => 1));?>">
دانلود وار » اخبار سایت
</a>

</li>
</ul>
</header>
<div class="post-content">
<div class="post-graphical-image">
<img alt="<?php echo $ls['Subject'];?>" src="http://dl.downloadvar.ir/downloadvar/images/news/<?php echo $ls['Id'].'.jpg'?>">
</div>
<p>
<?php echo $ls['Desc'];?>
</p>
</div>
<footer class="clearfix">
</footer>
</article>
</div>
<?php endforeach;?>
<div id="related-topics">
<div class="related-topics-wrapper">
<header><h2>مطالب تصادفی</h2></header>
<section>
<ul>
<?php foreach ($t['random'] as $r):?>
<?php if ($r['Publisher'] == 1){?>
<li>
<a target="_blank" title="<?php echo $r['MainSubject'];?>" href="<?php echo $ro->gen('download.continue',array('id' => $r['Id'],'subject' => $r['ShortSubject'])); ?>">:: <?php echo $r['MainSubject']; ?></a>
</li>
<?php }?>
<?php endforeach;?>
</ul>
</section>
</div>
</div>
<?php foreach ($t['matter'] as $post):?>
<?php if ($post['Publisher'] == 1){?>
<div class="article-wrapper">
<article class="post">
<header>
<h1>
<a rel="bookmark"
 href="<?php echo $ro->gen('download.continue',array('id' => $post['Id'],'subject' => $post['ShortSubject']));?>"
  title="<?php echo $post['MainSubject'];?>"><?php echo $post['MainSubject'];?>
  </a>
  </h1>
<ul>
<li class="hit">بازدید: <?php echo $post['ViewCount'];?></li>
<?php
$te =  ThirdCategoryQuery::create()->findPk($post['ThirdCategoryId']);
$se = SecondCategoryQuery::create()->findPk($te->getSecondCategoryId());
$on = OneCategoryQuery::create()->findPk($se->getOneCategoryId());
?>
<li class="cat">دسته:
<a title="<?php echo $on->getPersianName()?>" href="<?php echo $ro->gen('category',array('id' => 1,'category' => $on->getEnglishName()));?>"><?php echo $on->getPersianName()?></a> »
<a title="<?php echo $se->getPersianName()?>" href="<?php echo $ro->gen('second',array('id' => 1,'cat' => $on->getEnglishName(),'sec' => $se->getEnglishName()));?>"><?php echo $se->getPersianName()?></a> »
<a title="<?php echo $te->getPersianName()?>" href="<?php echo $ro->gen('third',array('id' => 1,'th' => $te->getEnglishName(),'cat' => $on->getEnglishName()));?>"><?php echo $te->getPersianName()?></a>
</li>
</ul>
</header>
<div class="post-content">
<div class="post-graphical-image">
<img alt="<?php echo $post['MainSubject'];?>" src="http://dl.downloadvar.ir/downloadvar/images/matter/<?php echo $post['ShortSubject'].'.jpg'?>">
</div>
<p>
<?php echo $post['LongDesc'];?>
</p>
</div>
<footer class="clearfix">
<a target="_blank"
href="
<?php
 echo $ro->gen('download.continue',
 array('id' => $post['Id'],'subject' => $post['ShortSubject']));?>
 " class="continue">ادامه مطلب</a>
</footer>
</article>
</div>
<?php }?>
<?php endforeach;?>
<div class="pagination clearfix">
			<ul>
			<?php foreach ($t['page'] as $p):?>
            <li>
            <a href="<?php echo $ro->gen('category',array('id' => $p));?>"><?php echo $p;?></a>
            </li>
            <?php endforeach;?>
			</ul>
		</div>
</section>