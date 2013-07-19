<div id="content">
<div class="breadcrumb">
<span class="active">مدیریت کاربران</span>
</div>
<div id="inner">
<div class="border_wrapper">
	<div class="title">مدیریت کاربران</div>
<table cellspacing="0" class="general">
	<thead>
		<tr>
			<th width="5%" style="" class=" align_center">شماره</th>
			<th width="20%" style="" class=" align_center">نام</th>
			<th width="15%" style="" class="align_center">کلمه عبور</th>
			<th  width="15%" style="" class="align_center">رمز عبور</th>
			<th  width="15%" style="" class="align_center">پست الکترونیک</th>
			<th  width="15%" style="" class="align_center">موبایل</th>
			<th  width="15%" colspan="2" style="" class="align_center">گزینه ها</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($t['user'] as $user):?>
		<tr class="first">
			<td  style="" class="align_center last alt_col"><?php echo $user['Id'];?></td>
			<td style="" class="align_center alt_col"><?php echo $user['Name'];?></td>
			<td style="" class="align_center alt_col"><?php echo $user['Username'];?></td>
			<td style="" class="align_center alt_col">***********</td>
			<td style="" class="align_center alt_col"><?php echo $user['Email'];?></td>
			<td style="" class="align_center alt_col"><?php echo $user['Mobile'];?></td>
			<td  style="" class="align_center">
			<a href="<?php echo $ro->gen('news.user.edit.index',array('id' => $user['Id'])); ?>">ویرایش</a>
			</td>
			<td  style="" class="align_center last alt_col">
			<a href="<?php echo $ro->gen('news.user.delete.index',array('id' => $user['Id'])); ?>">حذف</a>
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