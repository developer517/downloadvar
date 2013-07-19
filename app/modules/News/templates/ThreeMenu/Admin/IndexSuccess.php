<div id="content">
<div class="breadcrumb">
<span class="active">مدیریت عناوین</span>
</div>
<div id="inner">
<div class="nav_tabs">
<div class="tab_description">
.:: در این بخش شما میتوانید عناوین ایجاد شده را مدیریت کنید ::.
</div>
</div>
<div class="border_wrapper">
	<div class="title">مدیریت عناوین</div>
<table cellspacing="0" class="general">
	<thead>
		<tr>
			<th width="8" style="" class=" first">شماره</th>
			<th width="220" style="" class=" first"> عنوان</th>
			<th width="220" style="" class="align_center">زیر مجموعه</th>
			<th width="220" style="" class="align_center">مجموعه</th>
			<th  colspan="2" style="" class="align_center last">گزینه ها</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($t['third_category'] as $third_category):?>
		<tr class="first">
			<td  style="" class="align_center last alt_col"><?php echo $third_category['Id'];?></td>
			<td style="" class="first"><strong><?php echo $third_category['PersianName'];?></strong></td>
			<td style="" class="align_center alt_col">
			<?php
			 $item = SecondCategoryQuery::create()->findPk($third_category['SecondCategoryId']);
			 echo $item->getPersianName();
			   ?>
			</td>
			<td style="" class="align_center alt_col">
			<?php
			 $item = OneCategoryQuery::create()->findPk($item->getOneCategoryId());
			 echo $item->getPersianName();
			   ?>
			</td>
			<td  style="" class="align_center">
			<a href="<?php echo $ro->gen('news.threemenu.edite.edit',array('id' => $third_category['Id'])); ?>">ویرایش</a>
			</td>
			<td  style="" class="align_center last alt_col">
			<a href="<?php echo $ro->gen('news.threemenu.delete.del',array('id' => $third_category['Id'])); ?>">حذف</a>
			</td>
		</tr>
		<?php endforeach;?>
	</tbody>
</table>
</div>	
		</div>
		</div>
		<br style="clear: both;">
<br style="clear: both;">