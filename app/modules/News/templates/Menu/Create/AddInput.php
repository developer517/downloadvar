<div id="content">
<div class="breadcrumb">
<span class="active">افزودن یک مجموعه جدید</span>
</div>
<div id="inner">
<div class="nav_tabs">
<div class="tab_description">
.:: در این بخش شما میتوانید برای منوی سایت یک مجموعه جدید ایجاد کنید ::.
</div>
<div class="tab_description">
.:: در صورت ایجاد مجموعه شما به صفحه اصلی بخش مدیریت هدایت میشوید در غیر اینصورت به همین صفحه باز میگردید ::. 
</div>
<div class="tab_description">
.:: پر کردن فیلد های ستاره دار الزامی است ::.
</div>

</div>
<form method="post" action="<?php echo $ro->gen('news.menu.create.add'); ?>">
<div class="border_wrapper">
<div class="title">افزودن یک مجموعه</div>
<table cellspacing="0" class="general form_container ">
	<tbody>
		<tr class="alt_row">
			<td style="" class="first">
				<label for="pname">نام فارسی:  <em>*</em></label>
					<div class="form_row">
						<input type="text" id="pname" class="text_input" name="pname">
					</div>
			</td>
		</tr>
			<tr class="alt_row">
			<td style="" class="first">
				<label for="ename">نام انگلیسی:  <em>*</em></label>
					<div class="form_row">
						<input type="text" id="ename" class="text_input"  name="ename">
					</div>
			</td>
		</tr>
		<tr>
			<td style="" class="first">
			<label for="desc">متاتگ Description:<em>*</em></label>
				<div class="form_row">
				<textarea cols="45" rows="5" id="desc" name="desc" ></textarea>
				</div>
			</td>
		</tr>
		<tr>
			<td style="" class="first">
			<label for="tag">برچسب ها:<em>*</em></label>
				<div class="form_row">
				<textarea cols="45" rows="5" id="tag" name="tag"></textarea>
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
	</div>
		</div>
		<br style="clear: both;">
<br style="clear: both;">