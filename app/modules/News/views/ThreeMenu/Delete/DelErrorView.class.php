<?php

class News_ThreeMenu_Delete_DelErrorView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'ThreeMenu.Delete.Del');
	}
}

?>