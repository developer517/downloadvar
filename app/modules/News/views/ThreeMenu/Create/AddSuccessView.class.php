<?php

class News_ThreeMenu_Create_AddSuccessView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('news.matter.create.add'));
		$this->setAttribute('_title', 'ThreeMenu.Create.Add');
	}
}

?>