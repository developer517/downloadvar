<div id="content">
<div class="breadcrumb">
<span class="active">مدیریت خبرها</span>
</div>
<div id="inner">
<div class="nav_tabs">
<div class="tab_description">
.:: در این بخش شما میتوانید خبرها را مدیریت کنید ::.
</div>
</div>
<div class="border_wrapper">
	<div class="title">مدیریت خبرها</div>
<table cellspacing="0" class="general">
	<thead>
		<tr>
			<th width="5%" style="" class=" first">شماره</th>
			<th  width="60%" style="" class=" first">عنوان</th>
			<th  style="" class="align_center">تاریخ</th>
			<th  colspan="2" style="" class="align_center last">گزینه ها</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($t['news'] as $news):?>
		<tr class="first">
			<td  style="" class="align_center last alt_col"><?php echo $news['Id'];?></td>
			<td style="" class="first"><?php echo $news['Subject'];?></td>
			<td style="" class="align_center alt_col"><?php echo $news['Date'];?></td>
			<td  style="" class="align_center">
			<a href="<?php echo $ro->gen('news.site.edite.edit',array('id' => $news['Id'])); ?>">ویرایش</a>
			</td>
			<td  style="" class="align_center last alt_col">
			<a href="<?php echo $ro->gen('news.site.delete.del',array('id' => $news['Id'])); ?>">حذف</a>
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