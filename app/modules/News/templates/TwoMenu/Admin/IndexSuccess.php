<div id="content">
<div class="breadcrumb">
<span class="active">مدیریت زیر مجموعه ها</span>
</div>
<div id="inner">
<div class="nav_tabs">
<div class="tab_description">
.:: در این بخش شما میتوانید زیر مجموعه های ایجاد شده را مدیریت کنید ::.
</div>
</div>
<div class="border_wrapper">
	<div class="title">مدیریت مجموعه ها</div>
<table cellspacing="0" class="general">
	<thead>
		<tr>
			<th width="8" style="" class=" first">شماره</th>
			<th width="220" style="" class=" first"> زیر مجموعه</th>
			<th width="220" style="" class="align_center">مجموعه</th>
			<th  colspan="2" style="" class="align_center last">گزینه ها</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($t['second_category'] as $second_category):?>
		<tr class="first">
			<td  style="" class="align_center last alt_col"><?php echo $second_category['Id'];?></td>
			<td style="" class="first"><strong><?php echo $second_category['PersianName'];?></strong></td>
			
			<td style="" class="align_center alt_col">
			<?php
			 $item = OneCategoryQuery::create()->findPk($second_category['OneCategoryId']);
			 echo $item->getPersianName();
			   ?>
			</td>
			<td  style="" class="align_center">
			<a href="<?php echo $ro->gen('news.twomenu.edite.edit',array('id' => $second_category['Id'])); ?>">ویرایش</a>
			</td>
			<td  style="" class="align_center last alt_col">
			<a href="<?php echo $ro->gen('news.twomenu.delete.del',array('id' => $second_category['Id'])); ?>">حذف</a>
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