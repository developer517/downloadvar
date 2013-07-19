<div id="content">
<div class="breadcrumb">
<span class="active">لیست مطالب منتشر نشده</span>
</div>
<div id="inner">
<div class="nav_tabs">
<div class="tab_description">
.:: در این بخش شما میتوانید مطالب منتشر نشده را مدیریت کنید مدیریت کنید ::.
</div>
<div class="tab_description">
.:: در صورت کلیک به روی یک مطلب منتشر نشده میتوانید آن را منتشر کنید ::.
</div>
</div>
<div class="border_wrapper">
	<div class="title">مدیریت مطالب منتشر نشده</div>
<table cellspacing="0" class="general">
	<thead>
		<tr>
			<th width="8" style="" class=" first">شماره</th>
			<th  style="" class=" first">عنوان</th>
			<th  style="" class="align_center">نویسنده</th>
			<th  style="" class="align_center">وضعیت انتشار</th>
			<th  style="" class="align_center">بازدید</th>
			<th  style="" class="align_center">دانلود</th>
			<th  style="" class="align_center">تاریخ</th>
			<th  colspan="2" style="" class="align_center last">گزینه ها</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($t['matter'] as $news):?>
		<tr class="first">
			<td  style="" class="align_center last alt_col"><?php echo $news['Id'];?></td>
			<td style="" class="first"><strong><?php echo $news['MainSubject'];?></strong></td>
			<td style="" class="align_center alt_col"><?php $auter = UserQuery::create()->findPk($news['UserId']); echo $auter->getName();?></td>
			<td style="" class="align_center alt_col">
			<a href="<?php echo $ro->gen('news.matter.publish.pub',array('id' => $news['Id']));?>"><?php if ($news['Publisher'] == '1') echo 'منتشر شده'; else echo 'منتشر نشده'; ?></a></td>
			<td style="" class="align_center alt_col"><?php echo $news['ViewCount'];?></td>
			<td style="" class="align_center alt_col"><?php echo $news['DownloadCount'];?></td>
			<td style="" class="align_center alt_col"><?php echo $news['Date'];?></td>
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
		</div>
		</div>
		<br style="clear: both;">
<br style="clear: both;">