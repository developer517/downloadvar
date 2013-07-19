<div id="content">
<div class="breadcrumb">
<span class="active">مدیریت مجموعه ها</span>
</div>
<div id="inner">
<div class="nav_tabs">
<div class="tab_description">
.:: در این بخش شما میتوانید مجموعه های ایجاد شده را مدیریت کنید ::.
</div>
</div>
<div class="border_wrapper">
	<div class="title">مدیریت مجموعه ها</div>
<table cellspacing="0" class="general">
	<thead>
		<tr>
			<th width="8" style="" class=" first">شماره</th>
			<th  style="" class=" first">مجموعه</th>
			<th  style="" class="align_center">لاتین</th>
			<th  colspan="2" style="" class="align_center last">گزینه ها</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($t['one_category'] as $one_category):?>
		<tr class="first">
			<td  style="" class="align_center last alt_col"><?php echo $one_category['Id'];?></td>
			<td style="" class="first"><strong><?php echo $one_category['PersianName'];?></strong></td>
			<td style="" class="align_center alt_col"><?php echo $one_category['EnglishName'];?></td>
			<td  style="" class="align_center">
			<a href="<?php echo $ro->gen('news.menu.edite.edit',array('id' => $one_category['Id'])); ?>">ویرایش</a>
			</td>
			<td  style="" class="align_center last alt_col">
			<a href="<?php echo $ro->gen('news.menu.delete.del',array('id' => $one_category['Id'])); ?>">حذف</a>
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