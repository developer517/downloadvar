<div id="menu">
<ul>
<li><a href="<?php echo $ro->gen('news.first.admin'); ?>">صفحه اصلی</a></li>
<li><a href="<?php echo $ro->gen('news.matter.waiting.index');?>">مطالب منتشر نشده  <span style="color: #FC0;">[<?php echo (count($t['matter']));?>]</span></a></li>
<li><a href="<?php echo $ro->gen('news.comment.admin.index');?>">نظرات تایید نشده <span style="color:#FC0">[<?php echo (count($t['comment']));?>]</span></a></li>
<li><a href="<?php echo $ro->gen('news.call.admin.create');?>">آخرین تماس ها <span style="color:#FC0">[<?php echo (count($t['tiket']));?>]</span></a></li>
<li><a target="_blank" href="<?php echo $ro->gen('index');?>">مشاهده سایت</a></li>
<li><a href="<?php echo $ro->gen('logout');?>">خروج</a></li>
</ul>
</div>