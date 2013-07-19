<?php

class News_ThreeMenu_Create_AddErrorView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('news.threemenu.create.add'));
		$this->setAttribute('_title', 'ThreeMenu.Create.Add');
	}
}

?>