<div id="left_menu">
<div class="left_menu_box">
<div class="title">مطالب </div>
<ul class="menu">
<li><a href="<?php echo $ro->gen('news.matter.create.add');?>">ایجاد مطلب</a></li>
<li class=""><a href="<?php echo $ro->gen('news.matter.admin.index');?>">مدیریت مطالب</a></li>
</ul>
</div>
<div class="left_menu_box">
<div class="title">منو</div>
<ul class="menu">
<li class=""><a href="<?php echo $ro->gen('news.menu.create.add');?>">ایجاد مجموعه</a></li>
<li class=""><a href="<?php echo $ro->gen('news.twomenu.create.add');?>">ایجاد زیر مجموعه</a></li>
<li class=""><a href="<?php echo $ro->gen('news.threemenu.create.add');?>">ایجاد عناوین</a></li>
<li class=""><a href="<?php echo $ro->gen('news.menu.admin.index');?>">مدیریت مجموعه ها</a></li>
<li class=""><a href="<?php echo $ro->gen('news.twomenu.admin.index');?>">مدیریت زیر مجموعه ها</a></li>
<li class=""><a href="<?php echo $ro->gen('news.threemenu.admin.index');?>">مدیریت عناوین</a></li>
</ul>
</div>
<div class="left_menu_box">
<div class="title">اخبار</div>
<ul class="menu">
<li class=""><a href="<?php echo $ro->gen('news.site.create.add');?>">ایجاد خبر</a></li>
<li class=""><a href="<?php echo $ro->gen('news.site.admin.index');?>">مدیریت اخبار</a></li>
</ul>
</div>
<div class="left_menu_box">
<div class="title">تماس ها</div>
<ul class="menu">
<li class=""><a href="<?php echo $ro->gen('news.comment.main.page',array('id' => 1));?>">مدیریت دیدگاه ها</a></li>
<li class=""><a href="<?php echo $ro->gen('news.call.main.page',array('id' => 1));?>">مدیریت تماس ها</a></li>
</ul>
</div>
<div class="left_menu_box">
<div class="title">کاربران</div>
<ul class="menu">
<li class=""><a href="<?php echo $ro->gen('news.user.create.index');?>">افزودن کاربر</a></li>
<li class=""><a href="<?php echo $ro->gen('news.user.admin.index');?>">ویرایش پروفایل</a></li>
</ul>
</div>
<div class="left_menu_box">
<div class="title">امنیت</div>
<ul class="menu">
<li class=""><a href="<?php echo $ro->gen('logout');?>">خروج</a></li>
</ul>
</div>
</div>
		
