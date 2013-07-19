<div id="content">
<div class="breadcrumb">
<span class="active">مطلب موررد بررسی برای ارسال پاسخ</span>
</div>
           <div id="inner">
          
<div class="border_wrapper">
	<?php foreach ($t['comment'] as $cm):?>
<table cellspacing="0" class="general">
	<thead>
		<tr>
			<th width="20%" style="" class="first"> شماره  : <?php echo $cm['Id'];?> </th>
			<th width="20%" style="" class="align_center">تاریخ : <?php echo $cm['Date'];?></th>
		
		</tr>
	</thead>
	<tbody>
		<tr class="first">
			<td colspan="5" style="font-family:BKoodak" class="first">
			<span>نام :</span> <?php echo $cm['Name'];?> <br>
			<span>آدرس وبسایت :</span> <?php if ($cm['Website'] == null) echo 'ندارد';?> <a href="<?php echo $cm['Website'];?>"><?php echo $cm['Website'];?></a><br>
			<span>پست الکترونیک :</span> <?php if ($cm['Email'] == null) echo 'ندارد';?><?php echo $cm['Email'];?><br>
			<?php $mat = MatterQuery::create()->useCommentQuery()->filterByMatterId($cm['MatterId'])->endUse()->find(); ?>
			<?php foreach ($mat as $m)?>
			<?php $th = ThirdCategoryQuery::create()->useMatterQuery()->filterByThirdCategoryId($m->getThirdCategoryId())->endUse()->find();?>
			<?php foreach ($th as $h)?>
			<span>مطلب مورد نظر  :</span> <?php echo $m->getMainSubject();?> | <span>دسته :</span> <?php echo  $h->getPersianName();?> | <span>شماره مطلب :</span> <?php echo $cm['MatterId']?><br>
			<span>دیدگاه :</span> <?php echo $cm['Desc'];?> <br><p></p>
			</td>
		</tr>
	</tbody>
</table>
<?php endforeach;?>
</div>
<center>
<form method="post" action="<?php echo $ro->gen('news.comment.answer.add',array('id' => $cm['Id'])); ?>">
<div class="border_wrapper">
<div class="title">ارسال پاسخ</div>
<table cellspacing="0" class="general form_container ">
	<tbody>
		<tr>
			<td style="" class="first">
				<div class="form_row">
				<textarea cols="45" rows="5" id="desc" name="desc"></textarea>
				</div>
			</td>
		</tr>

	</tbody>
</table>

<div class="form_button_wrapper">
<input type="submit" class="submit_button" value="ارسال"> 
</div>
</div>
</form>
</center>
</div>
</div>