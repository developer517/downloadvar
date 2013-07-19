<?php

class News_TwoMenu_Admin_IndexSuccessView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'TwoMenu.Admin.Index');
	}
}

?>