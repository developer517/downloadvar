<?php

class News_Comment_Ellow_YesErrorView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'Comment.Ellow.Yes');
	}
}

?>