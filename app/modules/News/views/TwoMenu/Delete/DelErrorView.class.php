<?php

class News_TwoMenu_Delete_DelErrorView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'TwoMenu.Delete.Del');
	}
}

?>