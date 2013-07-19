<div id="content">
<div class="breadcrumb">
<span class="active">ویرایش مشخصات </span>
</div>
<div id="inner">
<?php foreach ($t['user'] as $user):?>
<form method="post" action="<?php echo $ro->gen('news.user.edit.index',array('id' => $user['Id'])); ?>">
<div class="border_wrapper">
<div class="title">ویرایش مشخصات </div>
<table cellspacing="0" class="general form_container ">
	<tbody>
		<tr class="alt_row">
			<td style="" class="first">
				<label for="name">نام:  <em>*</em></label>
					<div class="form_row">
						<input value="<?php echo $user['Name'];?>" type="text" id="name" class="text_input_r" name="name">
					</div>
						<label for="username">نام کاربری:  <em>*</em></label>
					<div class="form_row">
						<input value="<?php echo $user['Username'];?>" type="text" id="username" class="text_input_l" name="username">
					</div>
						<label for="password">کلمه عبور:  <em>*</em></label>
					<div class="form_row">
						<input value="<?php echo $user['Password'];?>" type="text" id="password" class="text_input_l" name="password">
					</div>
						<label for="email">پست الکترونیک:  <em>*</em></label>
					<div class="form_row">
						<input value="<?php echo $user['Email'];?>" type="text" id="email" class="text_input_l" name="email">
					</div>
						<label for="mobile">موبایل:  <em>*</em></label>
					<div class="form_row">
						<input value="<?php echo $user['Mobile'];?>" type="text" id="mobile" class="text_input_l" name="mobile">
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