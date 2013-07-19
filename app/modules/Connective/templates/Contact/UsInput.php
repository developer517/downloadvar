<section id="main-content" >
<div class="blogroll">
	<h2>تماس با ما</h2>
    </div>
<div class="article-wrapper" style="background: url(images/bg-content.png);background-position: right top;
    background-repeat: no-repeat !important;">
<article class="post">
<header>
<h1><a rel="bookmark" style="font-family:BKoodak">برقراری ارتباط مستقیم با مدیریت</a></h1>
</header>
<div class="post-content">
	<div class="title">.:: لصفا <strong style="color: #D82727;">همه فیلدها</strong> را پر کنید  ::.</div>
	<div class="title">.:: پاسخ از طریق ایمیل برای شما ارسال میشود ::.</div>
	
	<br>
	<form action="<?php echo $ro->gen('connective.contact.us');?>" method="post">
	<center>
<table cellspacing="0" class="general form_container ">
	<tbody>
		<tr class="first">
			<td style="" class="first">
			<label for="name">نام: </label>
			<div class="form_row">
			<input size="30" type="text" class="input-comment" id="name"  name="name">
			</div>
		</td>
		</tr>
		<tr class="first">
			<td style="" class="first">
			<br>
			<label for="email">پست الکترونیک:  </label>
			<div class="form_row">
			<input size="30" type="text" id="email" class="input-comment" class="text_input" value="" name="email">
			</div>
		</td>
		</tr>
			<tr class="first">
			<td style="" class="first">
			<br>
			<label for="category">موضوع: </label>
			<div class="form_row">
			<input size="30" type="text" id="category" class="input-comment" class="text_input" value="" name="category">
			</div>
		</td>
		</tr>
			<tr>
			<td style="" class="first">
			<br>
			<label for="order">اهمیت: </label>
			<div class="form_row">
			<select id="order" name="order">
			<option value="selected">انتخاب</option>
			<option value="1">ضروری</option>
			<option value="0">غیر ضروری</option>
			</select>
			</div>
			</td>
		</tr>
		<tr class="alt_row">
			<td style="" class="first">
			<br>
			<label for="desc">توضیحات:</label>
			<div class="form_row">
			<textarea cols="45" rows="5" class="text-box" style="width:400px;" id="desc" name="desc"></textarea>
			</div>
</td>
		</tr>

	</tbody>
</table>
<div class="form_button_wrapper">
<input type="submit" class="submit_button"  value="ارسال فرم"> 
</div>
</center>
</form>
<br>
</div>
</div>
<footer class="clearfix">
</footer>
</article>
</section>