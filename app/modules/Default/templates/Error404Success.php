<section id="main-content">
<div class="blogroll">
	<h2>آخرین مطالب سایت</h2>
	<div class="blogroll-outer-wrapper">
		<div class="blogroll-inner-wrapper">
			<div class="blogroll-link-wrapper">
					<ul>
					<?php foreach ($t['last'] as $last):?>
					<li>
					<a target="_blank" title="<?php echo $last['MainSubject'];?>" href="<?php echo $ro->gen('download.continue',array('id' => $last['Id']));?>">:: <?php echo $last['MainSubject'] ;?></a>
					</li>
					<?php endforeach;?>
					</ul>
					</div>
			</div>
		</div>
	</div>
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
<center>
<div class="download-links" style="font-size:12px;">
              <span>با سلام : مطلب مورد نظر شما در سایت موجود است اما به دلیل برخی تغییرات ناگذیر باید آن را با اندکی جستجو بیابید.</span>
            </div>
            </center>
            </section>
            