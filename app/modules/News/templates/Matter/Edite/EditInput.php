<div id="content">
<div class="breadcrumb">
<span class="active">ویرایش یک مطلب </span>
</div>
<div id="inner">
<div class="nav_tabs">
<div class="tab_description">
.:: در این بخش شما میتوانید یک مطلب را ویرایش کنید ::.
</div>
<div class="tab_description">
.:: پر کردن فیلد های ستاره دار الزامی است ::.
</div>
<div class="tab_description">
.:: نویسنده و دسته بندی مطلب باید مجددا انتخاب شوند ::.
</div>
<div class="tab_description">
.:: در صورت ویرایش مطلب شما به صفحه اصلی بخش مدیریت هدایت میشوید در غیر اینصورت به همین صفحه باز میگردید ::. 
</div>
</div>
<?php foreach ($t['matter'] as $matter):?>
<form method="post" action="<?php echo $ro->gen('news.matter.edite.edit',array('id' => $matter['Id'])); ?>">
<div class="border_wrapper">
<div class="title">ویرایش یک مطلب </div>
<table cellspacing="0" class="general form_container ">
	<tbody>
		<tr class="alt_row">
			<td style="" class="first">
				<label for="main_subject">عنوان اصلی:  <em>*</em></label>
					<div class="form_row">
						<input value="<?php echo $matter['MainSubject'];?>" type="text" id="main_subject" class="text_input" name="main_subject">
					</div>
						<label for="short_subject">عنوان فرعی:  <em>*</em></label>
					<div class="form_row">
						<input value="<?php echo $matter['ShortSubject'];?>" type="text" id="short_subject" class="text_input" name="short_subject">
					</div>
						<label for="order">اولویت:  <em>*</em></label>
					<div class="form_row">
						<input value="<?php echo $matter['Order'];?>" type="text" id="order" class="text_input" name="order">
					</div>
			</td>
		</tr>
		<tr>
				<td style="" class="first">
				<label for="third_category">دسته بندی: <em>*</em></label>
				<select name="third_category">
				<option selected="selected">انتخاب</option>
				<?php foreach ($t['third'] as $third):?>
				<?php 
				 $item = SecondCategoryQuery::create()->findPk($third['SecondCategoryId']);
				$items = OneCategoryQuery::create()->findPk($item->getOneCategoryId());?>
				<option value="<?php echo  $third['Id']; ?>">
				<?php
				echo $items->getPersianName(). ' - ' ;echo  $item->getPersianName(). ' - '; echo $third['PersianName'];
				?>
				</option>
				<?php endforeach;?>
				</select>
				<label for="user_id">نام نویسنده: <em>*</em></label>
				<select name="user_id">
				<option selected="selected">انتخاب</option>
				<?php foreach ($t['user'] as $auter):?>
				<option value="<?php echo  $auter['Id']; ?>"><?php echo  $auter['Name']; ?></option>
				<?php endforeach;?>
				</select>
				</td>
				</tr>
				<tr class="alt_row">
			<td style="" class="first">
			<label for="publisher">وضعیت انتشار: <em>*</em></label>
				<select name="publisher">
				<option value="1">اکنون منتشر شود</option>
				<option value="0">اکنون منتشر نشود</option>
				</select>
				<label for="spicial">مطلب ویژه: <em>*</em></label>
				<select name="spicial">
				<option selected="selected" value="0">خیر</option>
				<option value="1">بله</option>
				<option value="0">خیر</option>
				</select>
				<label for="need">مطلب بند انگشتی: <em>*</em></label>
				<select name="need">
				<option selected="selected" value="0">خیر</option>
				<option value="1">بله</option>
				<option value="0">خیر</option>
				</select>
			</td>
		</tr>
				<tr>
			<td style="" class="first">
			<label for="long_desc">توضیح:<em>*</em></label>
				<div class="form_row">
				<textarea cols="45" rows="5" id="long_desc" name="long_desc" ><?php echo $matter['LongDesc']?></textarea>
				</div>
				<label for="short_desc">ادامه مطلب:</label>
				<div class="form_row">
				<textarea cols="45" rows="5" id="short_desc" name="short_desc" ><?php echo $matter['ShortDesc']?></textarea>
				</div>
				<label for="english_desc">متن انگلیسی:</label>
				<div class="form_row">
				<textarea cols="45" rows="5" id="english_desc" name="english_desc" ><?php echo $matter['EnglishDesc']?></textarea>
				</div>
				<label for="help_desc">راهنمای نصب:</label>
				<div class="form_row">
				<textarea cols="45" rows="5" id="help_desc" name="help_desc" ><?php echo $matter['HelpDesc']?></textarea>
				</div>
					<label for="download_link">لینک های دانلود:<em>*</em></label>
				<div class="form_row">
				<textarea cols="45" rows="5" id="download_link" name="download_link" ><?php echo $matter['DownloadLink']?></textarea>
				</div>
			</td>
		</tr>
		<tr>
			<td style="" class="first">
			<label for="tag_desc">متاتگ Description:<em>*</em></label>
				<div class="form_row">
				<textarea cols="45" rows="5" id="tag_desc" name="tag_desc" ><?php echo $matter['TagDesc']?></textarea>
				</div>
			</td>
		</tr>
		<tr>
			<td style="" class="first">
			<label for="tag_keywords">برچسب ها:<em>*</em></label>
				<div class="form_row">
				<textarea cols="45" rows="5" id="tag_keywords" name="tag_keywords"><?php echo $matter['TagKeywords']?></textarea>
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
<script type="text/javascript" src="admin/js/tinymce/jscripts/tiny_mce/tiny_mce.js"></script><script type="text/javascript">
tinyMCE.init({
        // General options
        mode : "textareas",
        theme : "advanced",
        plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

        // Theme options
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Skin options
        skin : "o2k7",
        skin_variant : "silver",

        // Example content CSS (should be your site CSS)
        content_css : "css/example.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "js/template_list.js",
        external_link_list_url : "js/link_list.js",
        external_image_list_url : "js/image_list.js",
        media_external_list_url : "js/media_list.js",

        // Replace values for the template plugin
        template_replace_values : {
                username : "Some User",
                staffid : "991234"
        }
});
      </script>