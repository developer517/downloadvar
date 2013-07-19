<div id="content">
<div class="breadcrumb">
<span class="active">مدیریت مطالب</span>
</div>
<div id="inner">
<div class="nav_tabs">
<div class="tab_description">
.:: در این بخش شما میتوانید مطالب را مدیریت کنید ::.
</div>
<div class="tab_description">
.:: در صورت کلیک به روی یک مطلب منتشر نشده میتوانید آن را منتشر کنید ::.
</div>
</div>
<div class="border_wrapper">
	<div class="title">مدیریت مطالب</div>
<table cellspacing="0" class="general">
	<thead>
		<tr>
			<th width="5%" style="" class=" first">شماره</th>
			<th width="40%" style="" class=" first">عنوان</th>
			<th width="10%" style="" class="align_center">وضعیت انتشار</th>
			<th  width="5%" style="" class="align_center">بازدید</th>
			<th  width="20%" colspan="2" style="" class="align_center last">گزینه ها</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($t['matter'] as $news):?>
		<tr class="first">
			<td  style="" class="align_center last alt_col"><?php echo $news['Id'];?></td>
			<td style="" class="first"><?php echo $news['MainSubject'];?></td>
			<td style="" class="align_center alt_col">
			<a href="<?php echo $ro->gen('news.matter.publish.pub',array('id' => $news['Id']));?>"><?php if ($news['Publisher'] == '1') echo 'منتشر شده'; else echo 'منتشر نشده'; ?></a></td>
			<td style="" class="align_center alt_col"><?php echo $news['ViewCount'];?></td>
			<td  style="" class="align_center">
			<a href="<?php echo $ro->gen('news.matter.edite.edit',array('id' => $news['Id'])); ?>">ویرایش</a>
			</td>
			<td  style="" class="align_center last alt_col">
			<a href="<?php echo $ro->gen('news.matter.delete.del',array('id' => $news['Id'])); ?>">حذف</a>
			</td>
		</tr>
		<?php endforeach;?>
	</tbody>
</table>
</div>	
<div class="pagination clearfix" >
            <?php foreach ($t['p'] as $p):?>
           <a href="<?php echo $ro->gen('news.matter.admin.paginate',array('id'=> $p)); ?>"><?php echo $p;?></a>
            <?php endforeach;?>
		</div>
		</div>
		</div>
		<br style="clear: both;">
<br style="clear: both;">