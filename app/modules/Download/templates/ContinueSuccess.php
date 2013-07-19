<section id="main-content">
<div class="blogroll">
<?php foreach ($t['_sec'] as $l):?>
<?php foreach (  $t['_cat'] as $_c):?>
	<h2><?php echo $_c['PersianName']; ?> و <?php echo $l['PersianName']; ?></h2>
	<?php endforeach;?>
	<?php endforeach;?>
	<div class="blogroll-outer-wrapper">
		<div class="blogroll-inner-wrapper">
			<div class="blogroll-link-wrapper">
					<ul>
					<?php foreach ($t['_sec'] as $second):?>
					<?php 
					$_rele = MatterQuery::create()->limit(6)->useThirdCategoryQuery()->useSecondCategoryQuery()->filterById($second['Id'])->endUse()->endUse()->find();
					$_rele = $_rele->toArray();
					?>
					<?php endforeach;?>
					<?php foreach ($_rele as $last):?>
					<?php foreach ($t['matter'] as $p)?>
					<?php if ($last['Publisher'] == 1 && $p['Id'] != $last['Id']){?>
					<li>
					<a target="_blank" title="<?php echo $last['MainSubject'];?>" href="<?php echo $ro->gen('download.continue',array('id' => $last['Id']));?>">:: <?php echo $last['MainSubject'] ;?></a>
					</li>
					<?php }?>
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
<li class="cat">دسته:
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
<?php foreach ($t['matter'] as $post):?>
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
<li class="cat">دسته:
<?php foreach ($t['_cat'] as $on): ?>
<a title="<?php echo $on['PersianName']?>" href="<?php echo $ro->gen('category',array('id'=> 1,'category' => $on['EnglishName']))?>"><?php echo $on['PersianName']?></a> »
<?php endforeach;?>
<?php foreach ($t['_sec'] as $second):?>
<a title="<?php echo $second['PersianName']; ?>" href="<?php echo $ro->gen('second',array('id'=> 1,'cat' => $on['EnglishName'],'sec' => $second['EnglishName']))?>"><?php echo $second['PersianName']; ?></a> »
<?php endforeach;?>
<?php foreach ($t['_th'] as $_th):?>
<a title="<?php echo $_th['PersianName'];?>" href="<?php echo $ro->gen('third',array('id'=> 1,'cat' => $on['EnglishName'],'th' => $_th['EnglishName']))?>"><?php echo $_th['PersianName'];?></a>
<?php endforeach;?>
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
<p>
<?php echo $post['ShortDesc'];?>
</p>
</div>
<footer class="clearfix">
</footer>
</article>
</div>
<center>
<div id="tabco4" id="Tabs-one">
    <ul class="nav">
        <li><a href="javascript:vd()">مشخصات</a></li>
        <li><a href="javascript:vd()">لینک دانلود</a></li>
        <li><a href="javascript:vd()">راهنمای نصب</a></li>
        <li><a href="javascript:vd()">برچسب</a></li>
		<li><a href="javascript:vd()">متن انگلیسی</a></li>
	</ul>
	<div class="tab_content">
    <h2>مشخصات</h2>
    <span> دسته بندی :</span> <?php echo $on['PersianName']?> » <?php echo $second['PersianName']?> » <?php echo $_th['PersianName']?><br>
    <span>نویسنده :</span> <?php $user = UserQuery::create()->findPk($post['UserId']); echo $user->getName();?><br>
    <span>تاریخ انتشار :</span> <?php echo $post['Date'];?><br>
    <span> بازدیدها :</span> <?php echo $post['ViewCount'];?> بار<br>
    <span> کل نظرات  :</span> <?php echo count($t['comment']);?> نظر<br>
    </div>
    <div class="tab_content">
    <h2>لینک های دانلود</h2>
    <?php echo $post['DownloadLink'];?>
    </div>
    <div  class="tab_content">
    <h2>راهنمای نصب</h2>
    <?php echo $post['HelpDesc'];?>
    </div>
    <div  class="tab_content">
    <h2>برچسب ها</h2>
    <?php echo $post['TagKeywords'];?>
    </div>
	<div  class="tab_content">
	<h2>متن انگلیسی</h2>
	<div class="text-ltr">
	<p>
	    <?php echo $post['EnglishDesc'];?>
	</p>
	</div>	
	</div>
	</div>
</center>
<center>
<div class="download-links">
              <span>رمز فایل دانلود شده : www.downloadvar.ir</span>
            </div>
            </center>
<?php endforeach;?>
<?php if (count($t['_related']) == 1):?>
<div id="related-topics">
<div class="related-topics-wrapper">
<header><h2>مطالب مرتبط با <?php echo $_th['PersianName'];?></h2></header>
<section>
<ul>
<li><a>:: هیچ مطلب مشابهی وجود ندارد</a></li>
</ul>
</section>
</div>
</div>
<?php else :?>
<div id="related-topics">
<div class="related-topics-wrapper">
<header><h2>مطالب مرتبط با <?php echo $_th['PersianName'];?></h2></header>
<section>
<ul>
<?php foreach ($t['_related'] as $rel):?>
<?php if ($rel['Publisher'] == 1 && $post['Id'] != $rel['Id']){?>

<li>
<a target="_blank" title="<?php echo $rel['MainSubject'];?>" href="<?php echo $ro->gen('download.continue',array('id' => $rel['Id'],'subject' => $rel['ShortSubject'])); ?>">:: <?php echo $rel['MainSubject']; ?></a>
</li>
<?php }?>
<?php endforeach;?>
</ul>
</section>
</div>
</div>
<?php endif;?>
<?php $cm = $t['comment']; ?>
<?php if(count($t['comment']) != 0){?>
<aside id="comments">
<div class="divider"></div>
<h2 class="comments-title" style="color: #0A5D68;">لیست نظرات</h2>
<div class="clear"></div>
<?php foreach ($t['comment'] as $comment):?>
<article id="comment-282256" class="alt">


 	      <div class="article-wrap">

		<header>

 

		     <h4><?php echo $comment['Name'];?> در <time datetime="۱۳۹۲-۰۳-۲۴"> <?php echo $comment['Date'];?></time>

 		        </h4>	

		</header>

		<p class="comment-text"></p><p style="font-family:BKoodak;font-size:14px;margin:7px 40px 0 1px;">دیدگاه : <?php echo $comment['Desc'];?></p>
<p></p>
<?php $g = GapQuery::create()->findByCommentId($comment['Id']);?>
	<?php foreach ($g as $gap):?>
		<p class="comment-text"></p>
		<p style="font-size:14px;font-family:BKoodak;margin:7px 62px 0 1px;">
		<span style="color: #D82727;font-size:14px;">پاسخ : </span>
		<?php echo $gap->getDesc();?>
		</p>

	<?php endforeach;?>
<p></p>

 	       </div>

	  </article>
	  	  <?php endforeach;?>
	  </aside>
	  	  <?php }?>
<div class="article-wrapper" style="background: url(images/bg-content.png);background-position: right top;
    background-repeat: no-repeat !important;">
<article class="post">
<header>
<h1 style="font-family:BKoodak; color: #0A5D68;" >ارسال دیدگاه</h1>
</header>
<div class="post-content">
<center>
<div class="addcomment">
<form method="post" action="<?php echo $ro->gen('connective.comment.create',array('id' => $post['Id'])) ;?>">

	<div class="commentdata">
		<label for="name">نام <span style="color: #D82727;">*</span> :</label>
		<input type="text" class="input-comment"  id="name" name="name">
		<div class="clear"></div>

		<label for="email">ایمیل :</label>
		<input type="text" class="input-comment" id="email" name="email">
		<div class="clear"></div>

		<label for="website">وب سایت :</label>
		<input type="text" class="input-comment"  name="website">
	</div>

	<div class="textarea-box">
		<label for="desc">نظر شما <span style="color: #D82727;">*</span> :</label><div class="clear"></div>
		<textarea class="text-box"  id="desc" name="desc"></textarea>
	</div>

	<div class="clear"></div>

	<input type="submit" value="ارسال نظر "  id="submit" name="submit" class="comment-button">

	</form>
	</div>
	</center>
</div>
<footer class="clearfix">
</footer>
</article>
</div>
</section>