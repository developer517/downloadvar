<?php

class News_Comment_Main_PageErrorView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'Comment.Main.Page');
	}
}

?>