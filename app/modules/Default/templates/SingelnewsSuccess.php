<section id="main-content">
<div class="blogroll">
	<h2>اخبار سایت</h2>
    </div>
<?php foreach ($t['matter'] as $post):?>
<div class="article-wrapper">
<article class="post">
<header>
<h1 style="font-family:BKoodak;">
<a title="<?php echo $post['Subject'];?>" href="<?php echo  $ro->gen('newssite',array('id' => $post['Id']));?>">
<?php echo $post['Subject'];?>
 </a>
  </h1>
<ul>
<li class="cat">دسته:
<a title="<?php echo $post['Subject'];?>" href="<?php echo $ro->gen('sitenews',array('id' => 1));?>">
دانلود وار » اخبار سایت
</a>

</li>
</ul>
</header>
<div class="post-content">
<div class="post-graphical-image">
<img alt="<?php echo $post['Subject'];?>" src="http://dl.downloadvar.ir/downloadvar/images/news/<?php echo $post['Id'].'.jpg'?>">
</div>
<p>
<?php echo $post['Desc'];?>
</p>
</div>
<footer class="clearfix">
</footer>
</article>
</div>
<?php endforeach;?>
<?php if (count($t['ne']) > 1){?>
<div id="related-topics">
<div class="related-topics-wrapper">
<header><h2>آخرین اخبار</h2></header>
<section>
<ul>
<?php foreach ($t['ne'] as $r):?>
<?php if ($r['Id'] != $post['Id'] ){?>
<li>
<a target="_blank" title="<?php echo $r['Subject'];?>">:: <?php echo $r['Subject']; ?></a>
</li>
<?php }?>
<?php endforeach;?>
</ul>
</section>
</div>
</div>
<?php }?>
</section>