<?php

class News_Site_Delete_DelErrorView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'Site.Delete.Del');
	}
}

?>