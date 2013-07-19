<div id="content">
<div class="breadcrumb">
<span class="active">ایجاد کاربر جدید </span>
</div>
<div id="inner">
<form method="post" action="<?php echo $ro->gen('news.user.create.index'); ?>">
<div class="border_wrapper">
<div class="title">ایجاد کاربر جدید </div>
<table cellspacing="0" class="general form_container ">
	<tbody>
		<tr class="alt_row">
			<td style="" class="first">
				<label for="name">نام:  <em>*</em></label>
					<div class="form_row">
						<input  type="text" id="name" class="text_input_r" name="name">
					</div>
						<label for="username">نام کاربری:  <em>*</em></label>
					<div class="form_row">
						<input  type="text" id="username" class="text_input_l" name="username">
					</div>
						<label for="password">کلمه عبور:  <em>*</em></label>
					<div class="form_row">
						<input type="text" id="password" class="text_input_l" name="password">
					</div>
						<label for="email">پست الکترونیک:  </label>
					<div class="form_row">
						<input  type="text" id="email" class="text_input_l" name="email">
					</div>
						<label for="mobile">موبایل:  </label>
					<div class="form_row">
						<input type="text" id="mobile" class="text_input_l" name="mobile">
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