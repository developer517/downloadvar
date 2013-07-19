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
              <span>دیدگاه شما با موفقیت ارسال شد و پس از تایید نمایش داده میشود.با تشکر!</span>
            </div>
            </center>
<?php $cm = $t['comment']; ?>
<?php if(count($t['comment']) != 0){?>
<aside id="comments">
<div class="divider"></div>
<h2 class="comments-title" style="color: #0A5D68;">لیست نظرات</h2>
<div class="clear"></div>
<?php foreach ($t['comment'] as $comment):?>
<?php if ($comment['Action'] == 1){?>
<article id="comment-282256" class="alt">


 	      <div class="article-wrap">

		<header>

 

		     <h4><?php echo $comment['Name'];?> در <time> <?php echo $comment['Date'];?></time>

 		        </h4>	

		</header>

		<p class="comment-text"></p><p style="font-family: b koodak;font-size:14px;margin:7px 40px 0 1px;">دیدگاه : <?php echo $comment['Desc'];?></p>
<p></p>
<?php $g = GapQuery::create()->findByCommentId($comment['Id']);?>
	<?php foreach ($g as $gap):?>
		<p class="comment-text"></p><p style="font-size:14px;font-family: b koodak;margin:7px 62px 0 1px;"><span style="color: #D82727;font-size:12px;">پاسخ : </span><?php echo $gap->getDesc();?></p>
	<?php endforeach;?>
<p></p>

 	       </div>

	  </article>
	  <?php }?>
	  	  <?php endforeach;?>
	  </aside>
	  	  <?php }?>
<div class="article-wrapper" style="background: url(images/bg-content.png);background-position: right top;
    background-repeat: no-repeat !important;">
<article class="post">
<header>
<h1 style="font-family:b koodak; color: #0A5D68;" >ارسال دیدگاه</h1>
</header>
<div class="post-content">
<center>
<div class="addcomment">
<form method="post" action="<?php echo $t['target_url'] ;?>">

	<div class="commentdata">
		<label for="name">نام * :</label>
		<input type="text" class="input-comment"  id="name" name="name">
		<div class="clear"></div>

		<label for="email">ایمیل :</label>
		<input type="text" class="input-comment" id="email" name="email">
		<div class="clear"></div>

		<label for="website">وب سایت :</label>
		<input type="text" class="input-comment"  name="website">
	</div>

	<div class="textarea-box">
		<label for="desc">نظر شما * :</label><div class="clear"></div>
		<textarea class="text-box"  id="desc" name="desc"></textarea>
	</div>

	<div class="clear"></div>

	<input type="submit" value="ارسال نظر "  id="submit" name="submit" class="comment-button">

	</form>
	</div>
	</center>
</div>
<footer class="clearfix">
- دیدگاه شما پش از تایید نمایش داده میشود. <br>
<br>
- پر کردن فیلد های ستاره دار برای ارسال نظر الزامی است.
</footer>
</article>
</div>
</section>