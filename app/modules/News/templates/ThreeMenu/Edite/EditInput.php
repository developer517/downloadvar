<div id="content">
<div class="breadcrumb">
<span class="active">ویرایش یک عنوان </span>
</div>
<div id="inner">
<div class="nav_tabs">
<div class="tab_description">
.:: در این بخش شما میتوانید آیتم مورد نظر را ویرایش کنید ::.
</div>
<div class="tab_description">
.:: در صورت برقرار نشدن ارتباط با پایگاه داده به همین صفحه منتقل میشوید و در صورت برقراری ارتباط به صفحه مدیریت مجموعه ها منتقل میشوید ::. 
</div>
<div class="tab_description">
.:: پر کردن فیلد های ستاره دار الزامی است ::.
</div>

</div>
<?php foreach ($t['third_category'] as $third_category):?>
<form method="post" action="<?php echo $ro->gen('news.threemenu.edite.edit',array('id' => $third_category['Id'])); ?>">
<div class="border_wrapper">
<div class="title">ویرایش یک عنوان</div>
<table cellspacing="0" class="general form_container ">
	<tbody>
		<tr class="alt_row">
			<td style="" class="first">
				<label for="pname">نام فارسی:  <em>*</em></label>
					<div class="form_row">
						<input value="<?php echo $third_category['PersianName'];?>" type="text" id="pname" class="text_input" name="pname">
					</div>
			</td>
		</tr>
			<tr class="alt_row">
			<td style="" class="first">
				<label for="ename">نام انگلیسی:  <em>*</em></label>
					<div class="form_row">
						<input value="<?php echo $third_category['EnglishName'];?>" type="text" id="ename" class="text_input"  name="ename">
					</div>
			</td>
		</tr>
		<tr>
		<td style="" class="first">
		<label for="seccat">نام والد: <em>*</em></label>
		<div class="description">در این قسمت توجه داشته باشید که مجموعه مورد نظر انتخاب شود.</div>
		<div class="form_row">
		<select name="seccat">
		<?php foreach ($t['second_category'] as $second_category):?>
		<?php $item = OneCategoryQuery::create()->findPk($second_category['OneCategoryId']);?>
		<option value="<?php echo  $second_category['Id']; ?>">
		<?php echo $item->getPersianName(). ' » '; echo $second_category['PersianName']; ?>
		</option>
		<?php endforeach;?>
		</select>
		</div>
		</td>
		</tr>
		<tr>
			<td style="" class="first">
			<label for="desc">متاتگ Description:<em>*</em></label>
				<div class="form_row">
				<textarea cols="45" rows="5" id="desc" name="desc" ><?php echo $third_category['Description'];?></textarea>
				</div>
			</td>
		</tr>
		<tr>
			<td style="" class="first">
			<label for="tag">برچسب ها:<em>*</em></label>
				<div class="form_row">
				<textarea cols="45" rows="5" id="tag" name="tag"><?php echo $third_category['Tag'];?></textarea>
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
<?php endforeach;?>
	</div>
		</div>
		<br style="clear: both;">
<br style="clear: both;">